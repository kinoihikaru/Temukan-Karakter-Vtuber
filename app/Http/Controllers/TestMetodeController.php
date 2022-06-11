<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestMetodeController extends Controller
{

    public function array_transpose($array_one)
    {
        $array_two = [];
        foreach ($array_one as $key => $item) {
            foreach ($item as $subkey => $subitem) {
                $array_two[$subkey][$key] = $subitem;
            }
        }
        return $array_two;
    }

    public function testSAW()
    {
        $kriteria_saw = [2.5, 2.5, 2.5, 2.5, 2.5];
        $output_karakter = [
            [1,2,2,0,0],
            [1,3,1,1,0],
            [0,0,1,3,0],
            [1,1,1,1,1],
            [1,2,0,0,3],
        ];

        // Metode SAW
        foreach ($kriteria_saw as $krit_saw) {
            $kepentingan_saw[] = $krit_saw / array_sum($kriteria_saw);
        };

        $coloum_saw = $this->array_transpose($output_karakter);

         foreach ($coloum_saw as $p => $col_saw) {
            $maxcoloum_saw[$p] =  max($col_saw);
        }

        for($q=0; $q<count($coloum_saw); $q++)  {
            for($w=0; $w<count($coloum_saw[$q]); $w++){
                $normalisasi_saw[$q][] = $coloum_saw[$q][$w]/$maxcoloum_saw[$q];
            }
        }

        $role_saw = $this->array_transpose($normalisasi_saw);

        for ($t=0; $t < count($role_saw) ; $t++) {
            for ($y=0; $y < count($kepentingan_saw) ; $y++) {
                $sum_saw[$t][$y] = $kepentingan_saw[$y] * $role_saw[$t][$y] ;
            }
        }

        for ($u=0; $u < count($sum_saw); $u++) {
            $total_saw[] = array_sum($sum_saw[$u]) ;
        }
        dd($total_saw);

    }

    public function testTopsis()
    {
        $kriteria_topsis = [1,1,1,1,1];
        $data_genre =
        [
            [-0.076,	 0.014,	0.199,	0.137,	-0.047],
            [0.216,	    -0.081,	-0.139,	-0.085,	-0.179],
            [0.128,	    0.04,	-0.027,	-0.064,	-0.095],
            [-0.03,  	0.021,	0.000, 	-0.014,	0.13],
            [0.163, 	0.12,	0.113,	0.087,	-0.075],
            [0.111, 	0.198,	0.266,	0.278,	-0.109],
        ];
        $coloum_topsis = $this->array_transpose($data_genre);

        foreach ($coloum_topsis as $f => $col_topsis) {
            foreach ($col_topsis as $d => $col)  {
                $pangkat[$f][$d] =  pow($col,2);
            }
        }

        foreach ($pangkat as $bagi) {
            $pembagian [] = sqrt(array_sum($bagi));
        }

        for($g=0; $g<count($coloum_topsis); $g++)  {
            for($h=0; $h<count($coloum_topsis[$g]); $h++){
                $normalisasi_topsis[$g][$h] =  $coloum_topsis[$g][$h]/$pembagian[$g];
            }
        }

        $role_topsis = $this->array_transpose($normalisasi_topsis);

        foreach ($role_topsis as $k => $rol_topsis) {
           for ($ty=0; $ty < count($rol_topsis); $ty++) {
            $n_bobot[$k][$ty] = $role_topsis[$k][$ty]*$kriteria_topsis[$ty];
           }
        }

        $row = $this->array_transpose($n_bobot);

        foreach ($row as $l => $bobot) {
            $max[$l] =  max($bobot);
            $min[$l] = min($bobot);

            foreach ($bobot as $ey => $lue) {
                $d_positif [$l][$ey] = pow(($max[$l]- $lue),2);
                $d_negatif [$l][$ey] = pow(($lue - $min[$l]),2);
            }
        }

        for ($s=0; $s < count($data_genre); $s++) {
           $dnegatif [] = sqrt(array_sum(array_column($d_negatif, $s)));
           $dpositif [] = sqrt(array_sum(array_column($d_positif, $s)));
        }

        $data['genre_nilai'] = [0.5, 0,0, 1, 0.25, 0.75];
        for ($q=0; $q < count($dnegatif); $q++) {
            $total [$q] = $dnegatif[$q] /($dnegatif[$q]+$dpositif[$q]) * $data['genre_nilai'][$q];
        }

        dd($total);
    }
}

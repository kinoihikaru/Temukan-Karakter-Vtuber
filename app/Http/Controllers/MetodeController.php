<?php

namespace App\Http\Controllers;

use App\Models\Hasil;
use Illuminate\Http\Request;

class MetodeController extends Controller
{
    protected $kriteria;
    protected $karakter;
    protected $genre;
    protected $name;

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

    public function __construct(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'output_nilai' => 'required',
            'kriteria_nilai' => 'required',
            'genre_nilai' => 'required',
        ]);

        $this->name = $data['name'];

        $nm_kriteria = ['Openness', 'Conscientiousness', 'Extraversion', 'Agreeableness', 'Neuroticism'];
        $kriteria_link =
        [
            'https://kampuspsikologi.com/teori-big-five-personality/#Openness',
            'https://kampuspsikologi.com/teori-big-five-personality/#Conscientiousness',
            'https://kampuspsikologi.com/teori-big-five-personality/#Extraversion',
            'https://kampuspsikologi.com/teori-big-five-personality/#Agreeableness',
            'https://kampuspsikologi.com/teori-big-five-personality/#Neuroticism',
        ];

        $nm_karakter = ['Comedian', 'Masokis', 'Sadis', 'Pemarah', 'Bodoh'];
        $karakter_gambar =
        [
            "assets/karakter/comedy.png",
            "assets/karakter/Masokis.gif",
            "assets/karakter/Sadis.png",
            "assets/karakter/Pemarah.gif",
            "assets/karakter/Bodoh.jpg",
        ];

        $kriteria_saw = $data['kriteria_nilai'];
        $kriteria_topsis = $kriteria_saw;

        $output_karakter = $data['output_nilai'];

        $data_genre =
        [
            [-0.076,	 0.014,	0.199,	0.137,	-0.047],
            [0.216,	    -0.081,	-0.139,	-0.085,	-0.179],
            [0.128,	    0.04,	-0.027,	-0.064,	-0.095],
            [-0.03,  	0.021,	0.000, 	-0.014,	0.13],
            [0.163, 	0.12,	0.113,	0.087,	-0.075],
            [0.111, 	0.198,	0.266,	0.278,	-0.109],
        ];

        $nm_genre = ['Comedy ', 'Sci-Fi', 'Horror ', 'Action', 'Drama', 'Romance'];
        $genre_link =
            ['https://myanimelist.net/anime/genre/4/Comedy',
             'https://myanimelist.net/anime/genre/24/Sci-Fi',
             'https://myanimelist.net/anime/genre/14/Horror',
             'https://myanimelist.net/anime/genre/1/Action',
             'https://myanimelist.net/anime/genre/8/Drama',
             'https://myanimelist.net/anime/genre/22/Romance',
            ];

        // Metode SAW
        foreach ($kriteria_saw as $krit_saw) {
            $kepentingan_saw[] = $krit_saw / array_sum($kriteria_saw);
        };

        for ($i=0; $i < count($kepentingan_saw); $i++) {
            $t_kriteria [$i] = ['nm_kriteria' => $nm_kriteria[$i], 'hasil_kriteria' => $kepentingan_saw[$i], 'kriteria_link' => $kriteria_link[$i],];
        }

        $this->kriteria = $t_kriteria;

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

        for ($s=0; $s < count($total_saw) ; $s++) {
            $t_karakter [$s] = ['nm_karakter' =>$nm_karakter[$s], 'hasil_karakter' => $total_saw[$s], 'gambar_karakter'=> $karakter_gambar[$s]];
        }

        array_multisort($total_saw, SORT_DESC, $t_karakter);

        $this->karakter = $t_karakter;

        // Metode TOPSIS
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

        for ($q=0; $q < count($dnegatif); $q++) {
            $total [$q] = $dnegatif[$q] /($dnegatif[$q]+$dpositif[$q]) * $data['genre_nilai'][$q];
        }

        for ($i=0; $i < count($data_genre) ; $i++) {
            $t_genre [$i] = ['nm_genre' =>$nm_genre[$i], 'hasil_genre' => $total[$i], 'link_genre' =>$genre_link[$i],];
        }

        array_multisort($total, SORT_DESC, $t_genre);

        $this->genre = $t_genre;
    }

    public function viewKarakter(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'output_nilai' => 'required',
            'kriteria_nilai' => 'required',
            'genre_nilai' => 'required',
        ]);

        $name = $this->name;
        $t_karakter = $this->karakter;

        echo '<span>';
        echo '<img src="'.$t_karakter[0]['gambar_karakter'].'" width= "200"  height= "150" class="img-thumbnail rounded-circle">';
        echo '</span>';
        echo '<h4 class="my-3">'.$name.' hasil survey mengatakan kamu itu '.$t_karakter[0]['nm_karakter'].'</h4>';
    }

    public function viewTableKarakter(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'output_nilai' => 'required',
            'kriteria_nilai' => 'required',
            'genre_nilai' => 'required',
        ]);

        $t_metode = $this->karakter;
        $w=0;

        foreach ($t_metode as $met) {
            echo '<tr>';
            echo '<td>'  . $met['nm_karakter']. '</td>';
            echo '<td>'. round($met['hasil_karakter'] ,2)*100 . '%</td>';
            echo '<td>'. ' Rank : ' . ((int) $w + 1)  . '</td>';
            echo '</tr>';
            $w++;
        }
    }

    public function viewBigfive(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'output_nilai' => 'required',
            'kriteria_nilai' => 'required',
            'genre_nilai' => 'required',
        ]);

        $t_kriteria = $this->kriteria;
        $w = 0;

        foreach ($t_kriteria as $key => $value) {
            $kepentingan_bigfive[$key] = $value['hasil_kriteria'];
        }
        rsort($kepentingan_bigfive);

        foreach ($t_kriteria as $b => $v) {
            foreach ($kepentingan_bigfive as $kepentingan_key => $kepentingan_value) {
                if ($v['hasil_kriteria'] === $kepentingan_value) {
                    $b = $kepentingan_key;
                    break;
                }
            }
            echo '<tr>';
            echo '<td> <a href="'. $v['kriteria_link'] . '" target="_blank">'  . $v['nm_kriteria']. '</td>';
            echo '<td>'. round($v['hasil_kriteria'],2)*100 . '%</td>';
            echo '<td>'. ' Rank : ' . ((int) $b + 1)  . '</td>';
            echo '</tr>';
            $w++;
        }
    }

    public function viewGenre(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'output_nilai' => 'required',
            'kriteria_nilai' => 'required',
            'genre_nilai' => 'required',
        ]);

        $t_genre = $this->genre;

        foreach ($t_genre as $k => $gen) {
            if ($k == 3) {
                break;
            }
            echo '<tr>';
            echo '<td>'. round($gen['hasil_genre'], 2) *100 . '%</td>';
            echo '<td> <a href="'. $gen['link_genre'] . '" target="_blank">'. $gen['nm_genre']. '</a></td>';
            echo '</tr>';
        }
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'output_nilai' => 'required',
            'kriteria_nilai' => 'required',
            'genre_nilai' => 'required',
        ]);

        $name = $this->name;
        $t_karakter = $this->karakter;
        $t_kriteria = $this->kriteria;
        $t_genre = $this->genre;

        foreach ($t_kriteria as $key => $value) {
            $sort[$key] = $value['hasil_kriteria'];
        }
        array_multisort($sort, SORT_DESC, $t_kriteria);

        $hasil = new Hasil;

        $hasil->name = $name;
        $hasil->nm_kriteria = $t_kriteria[0]['nm_kriteria'];
        $hasil->nm_karakter = $t_karakter[0]['nm_karakter'];
        $hasil->nm_genre = $t_genre[0]['nm_genre'];
        $hasil->hasil_kriteria = $t_kriteria[0]['hasil_kriteria'];
        $hasil->hasil_karakter = $t_karakter[0]['hasil_karakter'];
        $hasil->hasil_genre = $t_genre[0]['hasil_genre'];

        $hasil->save();
    }

    public function viewUser(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'output_nilai' => 'required',
            'kriteria_nilai' => 'required',
            'genre_nilai' => 'required',
        ]);

        $users = Hasil::all();

        foreach ($users as $user) {
            echo '<tr>';
            echo '<td>'. $user['name'] . '</td>';
            echo '<td>'. $user['nm_kriteria']. ' = '. round($user['hasil_kriteria'],2) *100 .'%</td>';
            echo '<td>'. $user['nm_karakter']. ' = '. round($user['hasil_karakter'],2) *100 .'%</td>';
            echo '<td>'. $user['nm_genre']. ' = '. round($user['hasil_genre'],2) *100 .'%</td>';
            echo '</tr>';
        }
    }
}



<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CobaController extends Controller
{
    protected $coba ;

    public function __construct()
    {

    }

    // public function data()
    // {
    //     global $coba;
    //     $coba = array('name','nm_kriteria','nm_karakter','nm_genre','hasil_kriteria','hasil_karakter','hasil_genre');
    // }

    public function getDaCoba1()
    {
     $data = $this->coba;
     dd($data);
        // $inventory = array(

        //     array("type"=>"fruit", "price"=>3.50),
        //     array("type"=>"milk", "price"=>2.90),
        //     array("type"=>"pork", "price"=>5.43),

        //  );

        // //  dd($inventory);
        //  $price = array();
        // foreach ($inventory as $key => $row)
        // {
        //     $price = array_column($inventory, 'price');
        // }
        // array_multisort($price, SORT_DESC, $inventory);

        // dd($inventory);

        // $kriteria =[6,1,2];
        // $total = [];
        // $output =
        // [
        //     [
        //         1,4,7
        //     ],
        //     [
        //         2,5,8
        //     ],
        //     [
        //         3,6,9
        //     ]
        //     ];

        //     for ($i=0; $i <count($output) ; $i++) {
        //         $coloum [] = array_column($output, $i);

        //         foreach ($coloum as $ke => $value) {
        //             foreach ($value as $key => $val)  {
        //                 $pangkat[$ke][$key] =  pow($val,2);
        //             }
        //         }
        //     }
        //     foreach ($pangkat as $bagi) {
        //         $pembagian [] =array_sum($bagi);
        //     }

        //     for($s=0; $s<count($coloum); $s++)  {

        //         for($l=0; $l<count($pembagian); $l++){

        //             $normalisasi[$s][] = $coloum[$s][$l]/$pembagian[$l];

        //         }
        //     }

        //     for($o=0; $o<count($normalisasi); $o++)  {

        //         for($k=0; $k<count($kriteria); $k++){

        //             $n_bobot[$o][] = $normalisasi[$o][$k]*$kriteria[$k];

        //         }
        //     }

        //     foreach ($n_bobot as $k => $bobot) {
        //         $max[$k] =  max($bobot);
        //         $min[$k] = min($bobot);

        //         foreach ($bobot as $ey => $lue) {
        //             $d_positif [$k][$ey] = pow(($lue - $max[$k]),2);
        //             $d_negatif [$k][$ey] = pow(($lue - $min[$k]),2);
        //         }
        //     }

        //     for ($s=0; $s < count($d_negatif); $s++) {
        //        $dnegatif [] = array_sum(array_column($d_negatif, $s));
        //        $dpositif [] = array_sum(array_column($d_positif, $s));
        //     }

        //     for ($q=0; $q < count($dnegatif); $q++) {
        //         $total [$q] =round($dnegatif[$q] /($dnegatif[$q]+$dpositif[$q]), 2) ;
        //     }

        //     dd($total);

            // for ($g=0; $g < count($d_negatif); $g++) {
            //     for ($r=0; $r < count($d_negatif[$g]); $r++) {
            //         $total [] = $d_negatif;
            //     }
            // }
            // foreach ($kriteria as $krit) {
            //     $kepentingan[] = number_format($krit / array_sum($kriteria), 2);
            // };



            // for ($j=0; $j < count($normalisasi) ; $j++) {
            //     $role [] = array_column($normalisasi, $j);
            // }

            // for ($q=0; $q < count($role) ; $q++) {
            //     $sum [$q] = array_sum($role[$q]);
            // }

            // for ($o=0; $o < count($sum) ; $o++) {
            //     $total[] = $kepentingan[$o] * $sum[$o] ;
            // }
            // dd($kepentingan, $sum, $total, $role);

    }

// public function getcoba()
// {
//     $kriteria =[6,1,2];
//     $allrole = [0,1,2];
//     $allcoloum = [0,1,2];
//         $total = [];
//         $output =
//         [
//             [
//                 1,4,7
//             ],
//             [
//                 2,5,8
//             ],
//             [
//                 3,6,9
//             ]
//             ];


//     foreach ($kriteria as $krit) {
//         $kepentingan[] = number_format($krit / array_sum($kriteria), 2);
//     };

//     foreach ($allcoloum as $all) {

//         $coloum[$all] = [] ;

//         foreach ($output as $key => $out) {

//             for ($i=0; $i < count($coloum) ; $i++) {

//                 $coloum[$all][$key]= $out[$i] ;

//             }

//             for ($j=0; $j < count($coloum) ; $j++) {

//                 $maxcoloum[$j] = max($coloum[$j]);

//             }

//         }

//     }

//     $normalisasi=[];
//     for($s=0; $s<count($coloum); $s++)  {
//             for($l=0; $l<count($coloum[$s]); $l++){
//                 $normalisasi[$s][] = $coloum[$s][$l] / $maxcoloum[$s];
//             }
//         }

//     foreach ($allrole as $rol) {
//         $role[$rol] = [];

//         foreach ($normalisasi as $r => $norma) {
//             for ($t=0; $t < count($role); $t++) {
//                 $role[$rol][$r] = $norma[$t];
//             }
//         }
//     }

//     for ($q=0; $q < count($role) ; $q++) {
//         $sum [$q] = array_sum($role[$q]);
//     }

//     for ($o=0; $o < count($sum) ; $o++) {
//         $total[] = number_format($kepentingan[$o] * $sum[$o], 2) ;
//     }
// }
}

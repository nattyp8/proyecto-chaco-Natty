<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuerraController extends Controller
{
    public function year($year){
        $json =file_get_contents(resource_path('data/contenido.json'));
        $data=json_decode($json,true);

        $lang='es';

        $bgImage = "images/mapa_{$year}.svg";

        return view('guerra.year',[
            'yearData' =>$data[$lang]['years'][$year],
            'bgImage' => $bgImage
        ]);
    }
}

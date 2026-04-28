<?php

use App\Http\Middleware\EnsureTeamMembership;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;

Route::view('/', 'welcome', [
    'canRegister' => Features::enabled(Features::registration()),
])->name('welcome');

Route::prefix('{current_team}')
    ->middleware(['auth', 'verified', EnsureTeamMembership::class])
    ->group(function () {
        Route::view('dashboard', 'dashboard')->name('dashboard');
    });

Route::middleware(['auth'])->group(function () {
    Route::livewire('invitations/{invitation}/accept', 'pages::teams.accept-invitation')->name('invitations.accept');
});

Route::get('/home', function () {
    
    $section =request('section' , 'antecedentes');

    $images = [
        'antecedentes'=> 'images/antecedentes.svg',
        'fortines'=> 'images/fortines.svg',
        'fronteras'=>'/images/fronteras.svg',
    ];

    $data = [
        "title" => "BACKGROUND TO THE CHACO WAR AND RESOLUTION OF THE CONFLICT",
        "paragraphs" => [
        " Desde el siglo XIX, la definición de los límites fronterizos de Bolivia y Paraguay en la zona del Chaco Boreal había sido motivo de disputa. Ante esto, comisiones internacionales de carácter neutral plantearon distintas propuestas de reparto que nunca llegaron a concretarse./n

        En ausencia de acuerdos, a principios del siglo XX Bolivia y Paraguay iniciaron la ocupación del territorio mediante la fundación de fortines militares. Paraguay fomentó además el asentamiento de colonias menonitas en la zona a partir de los años 20.

        Tras el fin de la Guerra, después de tres años de negociaciones, el 21 de julio de 1938 finalmente se logró que las dos partes llegaran a un acuerdo sobre los límites del Chaco mediante el Tratado de Paz, Amistad y Límites. Paraguay obtuvo el 80% del territorio en litigio, mientras que Bolivia logró asegurar su soberanía petrolera y un puerto en el río Paraguay (Puerto Busch), logrando así su salida al Océano Atlántico.

        En abril de 2009, setenta y cuatro años después de la finalización del conflicto, los presidentes de Bolivia y Paraguay acordaron la demarcación definitiva -de los límites- entre ambos países mediante la firma de la Memoria Final de la demarcación del límite internacional entre ambos países."
         ]
    ];
    $bgImage = $images[$section] ?? $images['antecedentes'];

    return view('home', compact('data', 'bgImage', 'section'));
})->name('home');

    Route::get('/1932',function(){
        $data = [
        "title" => "1932",
        ];
        $bgImage= 'images/mapa_1932.svg';
        return view('guerra.1932', compact('bgImage', 'data'));
        
    })->name('guerra.1932');

    Route::get('/1933',function(){
        $bgImage= 'images/mapa_1933.svg';
        return view('guerra.1933', compact('bgImage'));
    })->name('guerra.1933');

    Route::get('/1934',function(){
        $bgImage= 'images/mapa_1934.svg';
        return view('guerra.1934', compact('bgImage'));
    })->name('guerra.1934');

    Route::get('/1935',function(){
        $bgImage= 'images/mapa_1935.svg';
        return view('guerra.1935', compact('bgImage'));
    })->name('guerra.1935');



require __DIR__.'/settings.php';


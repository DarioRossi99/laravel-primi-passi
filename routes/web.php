<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    $user = [
        'name' => 'Dario',
        'lastname' => 'Rossi',
    ];

    $list = ['momento di silenzio','pov: Nick bestemmia','cit Florian:che succede?'];
            
    return view('home',[
        "user" => $user,
        "list" => $list,
    ]);
});

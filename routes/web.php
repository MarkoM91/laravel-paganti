<?php

Route::get('/', function () {
    return view('layout.home-layout');
});

Route::get('paganti', function() {

  $paganti = DB::select('

    SELECT id, name, lastname, address
    FROM paganti

  ');

  return view('page.home', ["paganti" => $paganti]);

})->name('paganti');

Route::get('home', function() {

  return view('layout.home-layout');

})->name('home');

?>

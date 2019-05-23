<?php

Route::get('/', function () {
    return view('layout.home-layout');
});

Route::resource('paganti', 'PagantiController');

?>

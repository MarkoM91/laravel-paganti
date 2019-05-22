<?php

Route::get('/', function () {
    return view('layout.home-layout');
});

Route::get('paganti', 'PagantiController@getPaganti');

?>

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PagantiController extends Controller
{
    function getPaganti() {

      $paganti = DB::select('

        SELECT id, name, lastname, address
        FROM paganti

      ');

      return view('page.home', ["paganti" => $paganti]);  
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageContr extends Controller
{
    //
    function index(Request $r){
    	print_r("My name is: " . $r->input('name'));
    	echo "<br>";
    	print_r("My surname is: " . $r->input('surname'));
    }
}

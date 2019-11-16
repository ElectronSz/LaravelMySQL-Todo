<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   function home()
   {
    $names = [
         'Lunga Ndaba',
       'Musa Mabila',
       'James Carter'
    ];

   return view('welcome')->withNames($names);
 
   }

   function about()
   {
    return view('contact');
   }
}

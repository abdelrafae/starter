<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class FirstController extends Controller
{
   public function __construct()
   {
       $this->middleware('auth')->except('showString3');
   }

    public function showString1(){
       return 'hello from the show string1 function';
   }public function showString2(){
       return 'hello from the show string2 function';
   }public function showString3(){
       return 'hello from the show string3 function';
   }public function showString4(){
       return 'hello from the show string4 function';

   }
}


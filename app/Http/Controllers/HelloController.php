<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function helloAction() {
        return view('hello', [
            'name' => 'ahmed',
            'age' => 25,
            'books' => ['Laravel', 'PHP', 'JavaScript'],
            's'=> [ '','',''],
            'p'=> ['','',''],
        ]);
    }
        public function helloAhmed() {
        return ('ahhmed hesham');
    }
}
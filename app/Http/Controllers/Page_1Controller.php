<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Page_1Controller extends Controller
{
    public function index_1() {
        return 'this is my first page';
    }
    
    public function index_1_1() {
        return 'this is my second page';
    }
}
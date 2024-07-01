<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index() {
        //Hard Coded
        // $allCategories = ['Category 1','Category 2'];

        //Query Builder
        $allCategories = DB::table('categories')->get();

        //'categories' = Nome da variável que será acessível na view, ou seja, uma variável $categories

        return view('home', ['categories' => $allCategories]);
    }
}

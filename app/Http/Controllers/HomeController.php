<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Importação necessária utilizando Query Builder
use Illuminate\Support\Facades\DB;

//Importação necessária utilizando a Model Category
use App\Models\Category;
//Importação necessária utilizando a Model Post
use App\Models\Post;

class HomeController extends Controller
{
    public function index() {
        //Hard Coded
        // $allCategories = ['Category 1','Category 2'];

        //Query Builder
        //'categories' = Nome da variável que será acessível na view, ou seja, uma variável $categories
        //$allCategories = DB::table('categories')->get();


        //Utilizando a model e o Eloquent (A database layer of laravel)
        //$allCategories = Category::all();
        
        //Mudança de nome da variável para utilizar o compac()
        $categories = Category::all();

        //$posts = Post::ordeyBy('id','desc')->get();
        //Outra maneira
        //$posts = Post::latest()->get(); 

        //Mostrando os posts por categoria
        //$posts = Post::where('category_id', request('category_id'))->latest()->get();

        //Mostrando os posts por categoria, caso exista aguma setada, caso contrário , mostrar todas
        $posts = Post::when(request('category_id'), function ($query) { 
            $query->where('category_id', request('category_id'));
        })->latest()->get();

        // return view('home', [
        //     'categories' => $allCategories,
        //     'posts' => $posts
        // ]);

        //Para utilizar o compact(), a variável deve ter o mesmo nome da chave do array
        return view('home', compact('categories', 'posts'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('welcome');
    }

    // public function show($id){
    //     $posts = [
    //         1 => 'Mon titre n°1',
    //         2 => 'Mon titre n°2'
    //     ];

    //     $post = $posts[$id] ?? 'Pas de titre';
    //     //Est-ce que l'id est défini ? Sinon renvoie la chaîne de carac qui suit les ??
    //     //Grâce à PHP, n'a rien à voir avec Laravel

    //     return view('article', [
    //         'post' => $post
    //     ]);
    // }

    public function contact(){
        return view('contact');
    }
}
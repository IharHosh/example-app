<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return 'Страница список постов';
    }
    
    public function create(){
        return 'Страница создание поста';
    }
    
    public function store(Request $request){
       dd($request->all());
    }

    public function show($id_post){
        return "Страница просмотра поста {$id_post}";
    }

    public function edit($id_post){
        return "Страница изменения постов {$id_post}";
    }

    public function update(){
        return 'Запрос изменения поста';
    }

    public function destroy() {
        return "Запрос удаления постоа";
    }

    public function like(){
        return 'Страница добавления лайка к посту';
    }
    
}
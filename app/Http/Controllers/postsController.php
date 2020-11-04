<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postsController extends Controller
{
    public function create()
    {

      return view('posts.create');
    }

    public function store()
    {
      $data = request()->validate([
          'caption' => 'required',
          'image' => 'required|image'
      ]);

      auth()->user()->posts()->create($data);  //instead of creating a post model object and save data
                                            //using eloquent commands, we can use input via \App\post::create($data);
                                            //directly make it and store $data in 1 line instead of typing 3.
                                            //This can be furthured by using this command which stores $data by
                                            //accessing a model via a relationship(auth() accessing post()) then
                                            //using it to store data inside the post model and saving it

      dd(request()->all());
    }
}

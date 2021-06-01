<?php

namespace App\Http\Controllers;
use App\Models\Movie;

use Illuminate\Http\Request;

class MoviesController extends Controller
{

    public function index(){
        //  dd('Index method');

        return Movie::all();
}


public function store(Request $request)
    {
        $request->validate([
            'title' => ['required|string'],
            'director' => ['required|string'],
            'duration' => ['required|intger|max:500'],
            'imageUrl' => ['required|string|url|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/'],

        ]);

        // $movies = request()->validate();


        return Movie::create($request->all());





    }

    public function show(Movie $movie){


        return $movie;

    }

    public function update(Request $request, $id){

        $request->validate([
            'title' => ['required|string'],
            'director' => ['required|string'],
            'duration' => ['required|intger|max:500'],
            'imageUrl' => ['required|string|url|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/'],

        ]);

        Movie::where('id',$id)->update($request->all());


    }

    public function destroy($id){

        $movie = Movie::find($id);
        $movie->delete();

        return $movie;

    }

}

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



        return Movie::create($request->all());



    }

    public function show(Movie $movie){


        return $movie;

    }

    public function update(Request $request, $id){



        Movie::where('id',$id)->update($request->all());
    }

    public function destroy($id){

        $movie = Movie::find($id);
        $movie->delete();

        return $movie;

    }

}

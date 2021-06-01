<?php

namespace App\Http\Controllers;
use App\Models\Movie;

use Illuminate\Http\Request;

class Movies extends Controller
{
   public function index() {

    return Movie::all();
   }
}

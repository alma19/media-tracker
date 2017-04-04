<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class MovieController extends Controller
{
    public function index()
    {
      //GET /movies
      //list 
      $movies = Movie::all();
      return Response::json($movies);
    }
}

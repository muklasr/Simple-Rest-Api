<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    //
    public function index(){
        return Movie::all();
    }

    public function create(request $request){
        $movie = new Movie;
        $movie->title = $request->title;
        $movie->image = $request->image;
        $movie->save();

        return 200;
    }

    public function update(request $request, $id){
        $movie = Movie::find($id);
        $movie->title = $request->title;
        $movie->image = $request->image;
        $movie->save();

        return 200;
    }

    public function delete($id){
        $movie = Movie::find($id);
        $movie->delete();

        return 200;
    }
}

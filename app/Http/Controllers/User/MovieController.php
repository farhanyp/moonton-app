<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\User;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function show(Movie $movie)
    {
        return inertia('User/Dashboard/Movie/Show', ['movie' => $movie]);
    }
}

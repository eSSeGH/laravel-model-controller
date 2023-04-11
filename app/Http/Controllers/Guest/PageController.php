<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $movies = Movie::all();

        $data = [
            'movies' => $movies
        ];

        return view('Welcome', $data);
    }

    public function contacts() {
        return view('guest.contacts');
    }
}

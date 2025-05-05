<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Video;
use App\Models\Volunteer;
use Illuminate\Http\Request;

class DashbordController extends Controller
{
    public function index()
    {
        $articles = Post::all();
        $videos = Video::all();
        $membre = Volunteer::all();

        $nbrArticle = count($articles);
        $nbrVideo = count($videos);
        $nbrVolunteer = count($membre);
        return view('dashboard')->with([
            /* 'articles' => $articles,
            'videos' => $videos, */
            'nbrArticle' => $nbrArticle,
            'nbrVideo' => $nbrVideo,
            'nbrVolunteer' => $nbrVolunteer
        ]);
    }
}

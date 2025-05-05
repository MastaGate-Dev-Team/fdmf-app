<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        return view('partials.VideoListe')->with('videos', $videos);
    }

    public function indexPage()
    {
        $videos = Video::all();
        return view('siteView.video')->with('videos', $videos);
    }

    public function store(Request $request)
    {
    $videos = Video::create($request->validate([
        'titre' => 'required|string|max:255',
        'url' => 'required|string',
        'content' => 'nullable|string',
    ]));

    return redirect()->route('video.index')
        ->with('success', 'Vidéo ajouté avec succès !')
        ->with('videos', $videos);
    }


    public function addVideo()
    {
        return view('partials.AddVideo');
    }

    public function destroy($id)
    {
        $video = Video::find($id);
        $video->delete();

        return redirect()->back()->with('success', 'Vidéo supprimé avec succès');
    }

    public function updateVideo($id)
    {
        $video = Video::find($id);
        return view('partials.UpdateVideo')->with('video', $video);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'url' => 'required|string',
            'content' => 'nullable|string',
        ]);
    
        $video = Video::findOrFail($id);

        $video->titre = $request->input('titre');
        $video->url = $request->input('url');
        $video->content = $request->input('content');
        $video->save();

    // Redirection avec message de succès
    return redirect()->route('video.index')
                     ->with('success', 'Vidéo mis à jour avec succès !')
                     ->with('videos', $video);
    }
}

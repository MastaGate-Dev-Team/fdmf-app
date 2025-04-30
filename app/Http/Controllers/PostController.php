<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $articles = Post::all();
        return view('partials.ArticleListe')->with('articles', $articles);
    }

    public function store(Request $request)
    {
    $articles = Post::create($request->validate([
        'titre' => 'required|string|max:255',
        'contenu' => 'required|string',
    ]));

    return redirect()->route('article.index')  // Redirige vers la page de liste
        ->with('success', 'Article ajouté avec succès !')
        ->with('articles', $articles);
    }


    public function addPost()
    {
        return view('partials.AddArticle');
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect()->back()->with('success', 'Article supprimé avec succès');
    }

    public function updatePost($id)
    {
        $post = Post::find($id);
        return view('partials.UpdateArticle')->with('post', $post);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'contenu' => 'required|string',
        ]);
    
        $post = Post::findOrFail($id);

        $post->titre = $request->input('titre');
        $post->contenu = $request->input('contenu');
        $post->save();

    // Redirection avec message de succès
    return redirect()->route('article.index')
                     ->with('success', 'Article mis à jour avec succès !')
                     ->with('articles', $post);
    }
}

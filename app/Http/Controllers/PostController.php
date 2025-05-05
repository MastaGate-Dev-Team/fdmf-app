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
        // Validation avec l'image incluse
        $validatedData = $request->validate([
            'titre' => 'required|string|max:255',
            'contenu' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $articles = new Post();
        $articles->titre = $validatedData['titre'];
        $articles->contenu = $validatedData['contenu'];

        // Gestion de l'image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $articles->image = $imageName;
        }

        $articles->save();

        return redirect()->route('article.index')
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $post = Post::findOrFail($id);

        $post->titre = $request->input('titre');
        $post->contenu = $request->input('contenu');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $post->image = $imageName;
        }

        $post->save();

    // Redirection avec message de succès
    return redirect()->route('article.index')
                     ->with('success', 'Article mis à jour avec succès !')
                     ->with('articles', $post);
    }
}

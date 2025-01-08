<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Portofolio;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    // Method untuk halaman home
    public function home()
    {
        $portofolios = Portofolio::all();
        return view('frontend.home', compact('portofolios'));
    }

    public function portofolioDetail($portofolio_id)
    {
        $portofolios = Portofolio::findOrFail($portofolio_id);
        return view('frontend.konten.portofolio', compact('portofolios'));
    }

    public function blog()
    {
        $blogs = Blog::all();
        $blogs = Blog::paginate(10);
        return view('frontend.blog', compact('blogs'));
    }
    public function blogDetail($id)
    {
        $blog = Blog::findOrFail($id); 
        return view('frontend.konten.blog', compact('blog'));
    }
    public function index()
    {
        //
    }

    public function create()
    {
        return view('frontend.create'); // Halaman untuk membuat blog baru
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
        ]);

        auth()->user()->blogs()->create($request->all());

        return redirect()->route('blogs.index')->with('success', 'Blog created successfully.');
    }

    public function edit(Blog $blog)
    {
        $this->authorize('update', $blog);
        return view('frontend.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $this->authorize('update', $blog);

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
        ]);

        $blog->update($request->all());

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully.');
    }

    public function destroy(Blog $blog)
    {
        $this->authorize('delete', $blog);
        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully.');
    }

    // Profil
    public function editProfile()
    {
        return view('frontend.profile.edit');
    }

    public function updateProfile(Request $request)
    {
        $request->user()->update($request->only(['name', 'email']));
        return redirect()->route('profile.edit')->with('success', 'Profile updated.');
    }

    public function destroyProfile(Request $request)
    {
        $request->user()->delete();
        return redirect('/')->with('success', 'Account deleted.');
    }
    
}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller {
    public function __construct() {
        //
    }

    /**
     * Display a listing of the resource.
     */
    public function index() {
        $blogs = Blog::with('user')->latest()->take(5)->get();
        // print_r($blogs);
        return view('home', [
            'blogs' => $blogs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $validated = $request->validate([
            'message' => 'required|string|max:255'
        ]);

        Blog::create([
            'message' => $validated['message'],
            'user' => null
        ]);

        return redirect('/')->with('success', 'Blog created!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

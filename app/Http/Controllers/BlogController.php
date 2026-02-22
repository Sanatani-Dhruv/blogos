<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller {
    private $blogModel;
    public function __construct() {
        $this->blogModel = new Blog();
    }

    /**
     * Display a listing of the resource.
     */
    public function index() {
        $blogs = [
            [
                'author' => 'Shyam Prasad',
                'message' => 'This Time it is difficult to save Culture.',
                'time' => '9 minutes ago'
            ],
            [
                'author' => 'Ram Prasad',
                'message' => 'We did it before we can do it again this time!',
                'time' => '27 minutes ago',
            ],
            [
                'author' => 'Babu Rao Ganpat Rao Apte',
                'message' => 'We did it before we can do it again this time!',
                'time' => '30 minutes ago',
            ],
            [
                'author' => 'Devi Prasad',
                'message' => 'Why are we even here, to suffer',
                'time' => '45 minutes ago',
            ]
        ];

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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {
        //
    }

    /**
     * Fetch all blogs
     */
    public function getAll(string $id = "") {
        $blogs = Blog::with('user')->latest()->take(50)->get();
        return view('home', [
            'blogs' => $blogs
        ]);
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

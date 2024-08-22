<?php

namespace App\Http\Controllers;

use App\Models\Blogpost;
use Illuminate\Http\Request;

class BlogpostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $blogposts = Blogpost::all();
        return view('blogposts.index', compact('blogposts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('blogposts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $request->merge([
            'IsPublished' => $request->has('IsPublished'),
        ]);

        $validated = $request->validate([
            'Title' => 'required|min:0',
            'Subtitle' => 'nullable',
            'BriefContent' => 'nullable',
            'FullContent' => 'nullable',
            'IsPublished' => 'boolean',
        ]);
        Blogpost::create($validated);
        return redirect()->route('blogposts.index')->with('success', 'Blog post created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blogpost $blogpost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blogpost $blogpost)
    {
        //
        return view('blogposts.edit', compact('blogpost'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Blogpost $blogpost, Request $request)
    {
        // 

        $request->merge([
            'IsPublished' => $request->has('IsPublished'),
        ]);

        $validated = $request->validate([
            'Title' => 'required|min:0',
            'Subtitle' => 'nullable',
            'BriefContent' => 'nullable',
            'FullContent' => 'nullable',
            'IsPublished' => 'nullable',
        ]);
        $blogpost->update($validated);
        return redirect()->route('blogposts.index')->with('success', 'Blog post updated successfully.'); 
                 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blogpost $blogpost)
    {
        //
        $blogpost->delete();
        return redirect()->route('blogposts.index')->with('success', 'Blog post deleted successfully.');
    }
}

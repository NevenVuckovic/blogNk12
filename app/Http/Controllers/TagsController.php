<?php

namespace App\Http\Controllers;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    public function create()
    {
        return view('tags.create');
    }

    public function store(Request $request)
    {
        info($request);

        // Tag::create(['name' => $request->name]);

        Tag::create($request->all());
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Tag;

class TagController extends Controller
{
    public function __invoke(Tag $tag)
    {
        $jobs = $tag->jobs->load(['employer', 'tags']);
        return view('job.results', ['jobs' => $jobs, 'tag' => $tag]);
    }
}

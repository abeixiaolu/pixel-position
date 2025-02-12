<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke()
    {
        $attributes = request()->validate([
            'q' => ['required', 'string'],
        ]);

        $jobs = Job::query()
            ->with(['employer', 'tags'])
            ->where('title', 'like', '%' . $attributes['q'] . '%')
            ->get();
        return view('job.results', ['jobs' => $jobs]);
    }
}

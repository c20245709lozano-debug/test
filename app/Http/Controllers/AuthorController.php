<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Inertia\Inertia;
use Inertia\Response;

class AuthorController extends Controller
{
    public function index(): Response
    {
        $authors = Author::select(['id', 'publisher_id', 'name'])
            ->with([
                'publisher:id,publisher_name',
                'profile:id,author_id,bio',
                'books:id,author_id,publisher_id,title,slug',
            ])
            ->get();
        dd($authors);
        return Inertia::render('authors/index', [
            'authors' => $authors,
        ]);
    }
}

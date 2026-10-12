<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Inertia\Inertia;
use Inertia\Response;

class GenreController extends Controller
{
    public function index(): Response
    {
        $genres = Genre::select(['id', 'genre_name'])
            ->with(['books' => function ($query) {
                $query->select('books.id', 'author_id', 'publisher_id', 'title', 'slug', 'price');
            }])
            ->get();

        return Inertia::render('genre/index', [
            'genres' => $genres,
        ]);
    }
}
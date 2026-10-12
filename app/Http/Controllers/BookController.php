<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Inertia\Inertia;
use Inertia\Response;

class BookController extends Controller
{
    public function index(): Response
    {
        $books = Book::select(['id', 'author_id', 'publisher_id', 'title', 'slug', 'isbn', 'price', 'description', 'image'])
            ->with([
                'author:id,name',
                'publisher:id,publisher_name',
                'genres:id,genre_name',
            ])
            ->get();

        return Inertia::render('books/index', [
            'books' => $books,
        ]);
    }
}
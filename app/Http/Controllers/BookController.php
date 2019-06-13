<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function index() {
        $books = Book::all();

        return view('home', compact('books'));
    }

    public function add() {
        return view('add');
    }

    public function create(Request $request) {
        $name = $request->name;
        $author = $request->author;
        $description = $request->description;

        $book = new Book();

        $book->create([
            'name' => $name,
            'author' => $author,
            'description' => $description
        ]);

        return redirect()->route('home');
    }

    public function edit() {

    }

    public function update() {

    }

    public function delete() {

    }
}

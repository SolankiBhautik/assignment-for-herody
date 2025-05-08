<?php

use App\Livewire\Authors\Index as AuthorsIndex;
use App\Livewire\Authors\Show as AuthorsShow;
use App\Livewire\Books\Index as BooksIndex;
use App\Livewire\Books\Show as BooksShow;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('authors.index');
});

Route::get('/authors', AuthorsIndex::class)->name('authors.index');
Route::get('/authors/{author}', AuthorsShow::class)->name('authors.show');

Route::get('/books', BooksIndex::class)->name('books.index');
Route::get('/books/{book}', BooksShow::class)->name('books.show');

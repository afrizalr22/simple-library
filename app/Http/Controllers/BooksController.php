<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BooksController extends Controller
{
    public function index()
    {
        return response()->json(Book::all());
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:150',
            'author' => 'required|string|max:100',
            'year' => 'nullable|integer|max:' . date('Y'),
        ], [
            'title.required' => 'Title wajib diisi.',
            'author.required' => 'Author wajib diisi.',
            'year.integer' => 'Year harus berupa angka.',
            'year.max' => 'Year tidak boleh lebih besar dari tahun sekarang.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation errors',
                'errors' => $validator->errors(),
            ], 422);
        }

        $book = Book::create($validator->validated());
        return response()->json([
            'message' => 'success',
            'data' => $book
        ], 201);
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);
        return response()->json($book);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:150',
            'author' => 'required|string|max:100',
            'year' => 'nullable|integer|max:' . date('Y'),
        ], [
            'title.required' => 'Title wajib diisi.',
            'author.required' => 'Author wajib diisi.',
            'year.integer' => 'Year harus berupa angka.',
            'year.max' => 'Year tidak boleh lebih besar dari tahun sekarang.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation errors',
                'errors' => $validator->errors()
            ], 422);
        }

        $book = Book::findOrFail($id);
        $book->update($validator->validate());

        return response()->json([
            'message' => 'success update',
            'data' => $book,
        ]);
    }


    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return response()->json([
            'message' => 'success delete'
        ]);
    }
}

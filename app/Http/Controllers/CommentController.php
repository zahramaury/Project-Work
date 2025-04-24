<?php

namespace App\Http\Controllers;

use App\Models\comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = Comment::latest()->get();
        return view('welcome', compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comments.create'); // Pastikan kamu punya file resources/views/comments/create.blade.php
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validasi data input
    $validated = $request->validate([
        'nama' => 'required|string|max:255',
        'deksripsi' => 'required|string',
    ]);

    // Simpan data ke database
    Comment::create([
        'nama' => $validated['nama'],
        'deksripsi' => $validated['deksripsi'],
    ]);

    // Redirect kembali atau ke halaman lain dengan pesan sukses
    return redirect()->back()->with('success', 'Komentar berhasil disimpan!');
}


    /**
     * Display the specified resource.
     */
    public function show(comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(comment $comment)
    {
        //
    }
}

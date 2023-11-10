<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feedback;


class FeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::all();

        return view('admin.feedback.index', compact('feedbacks'));
    }

    public function submitFeedback(Request $request)
    {
        // Validasi formulir
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Simpan data ke dalam database menggunakan model
        Feedback::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ]);

        // Redirect kembali ke halaman formulir dengan pesan sukses
        return redirect()->back()->with('success', 'Terima kasih! Pesan Anda telah terkirim.');
    }
}

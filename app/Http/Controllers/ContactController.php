<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        // Xác thực dữ liệu
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'comment' => 'required|string',
        ]);

        // Lưu dữ liệu vào cơ sở dữ liệu
        Contact::create($validated);

        // Trả về phản hồi (có thể là thông báo hoặc chuyển hướng)
        return back()->with('success', 'Your message has been sent successfully!');
    }
}

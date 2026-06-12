<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PawiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pawis = [
            [
                'author' => 'Carlo Reyes',
                'message' => 'Today was exhausting. I tried my best but it still feels like it wasn\'t enough. Posting this just to let it out… hoping tomorrow feels lighter.',
                'time' => '2024-06-01 10:00:00'
            ],
            [
                'author' => 'Angela Santos',
                'message' => 'I\'ve been overthinking everything lately. Letting this go now — I don\'t need to have all the answers today.',
                'time' => '2024-06-01 11:00:00'
            ],
            [
                'author' => 'Miguel Cruz',
                'message' => 'Small win today: I finally finished something I\'ve been putting off for weeks. Proud of myself. Sharing this moment and keeping the good energy.',
                'time' => '2024-06-01 12:00:00'
            ]
        ];

        return view('home', ['pawis' => $pawis]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

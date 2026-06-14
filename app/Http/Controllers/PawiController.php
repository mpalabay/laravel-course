<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pawi;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class PawiController extends Controller
{
    use AuthorizesRequests;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pawis = Pawi::with('user')->latest()->take(50)->get();

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
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);

        auth()->user()->pawis()->create($validated);

        return redirect('/')->with('success', 'Your Pawi has been posted!');
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
    public function edit(Pawi $pawi)
    {
        $this->authorize('update', $pawi);

        return view('pawis.edit', compact('pawi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pawi $pawi)
    {
        $this->authorize('update', $pawi);

        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);

        $pawi->update($validated);

        return redirect('/')->with('success', 'Your Pawi has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pawi $pawi)
    {
        $this->authorize('delete', $pawi);

        $pawi->delete();

        return redirect('/')->with('success', 'Your Pawi has been deleted!');
    }
}

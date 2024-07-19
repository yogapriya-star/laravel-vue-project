<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return User::all();
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
        try {
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
            'photo' => 'nullable|image'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->age = $request->age;

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('photos', 'public');
            $user->photo = $path;
        }

        $user->save();

        return response()->json($user, 201);
        } catch (\Exception $e) {
            // Log the error
            \Log::error('Error creating user: ' . $e->getMessage());
            // Return a response with the error message
            return response()->json(['error' => 'Unable to create user'], 500);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return $user;
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
    
     public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
            'photo' => 'nullable|image'
        ]);

        $user = User::findOrFail($id);

        $user->name = $request->input('name');
        $user->age = $request->input('age');

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = $file->store('photos'); // Adjust storage path as needed
            $user->photo = $filename;
        }

        $user->save();

        return response()->json($user, 200);
    } 
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return response()->json(null, 204);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public $users = [
        [
            'id' => 1,
            'name' => 'Epamimondas',
            'email' => 'epmondas@mail.com',
            'age' => 34
        ],
        [
            'id' => 2,
            'name' => 'Zarslav',
            'email' => 'zars@outmail.com',
            'age' => 65
        ],
        [
            'id' => 3,
            'name' => 'Robert',
            'email' => 'bert@tmail.com',
            'age' => 19
        ]
    ]; 

    public function index()
    {
        //
        
        if(isset($_POST['users'])) {
            $users = $_POST['users'];
            return view("home", ['users' => $users]);
        }
        return view("home", ['users' => $this->users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("create");
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

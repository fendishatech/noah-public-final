<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Register client.
     */
    public function register(Request $req)
    {
        $validatedData = $req->validate([
            'first_name' => 'required|min:3|regex:/^[a-zA-Z]+$/',
            'father_name' => 'required|min:3|regex:/^[a-zA-Z]+$/',
            'phone_no' => 'required|min:10|max:15|regex:/^[0-9]+$/'
        ], [
            "first_name.required" => "ስም ባዶ ሊሆን አይችልም!",
            "first_name.min" => "ስም በትንሹ 3 ፊደላት ሊኖሩት ይገባል!",
            "first_name.regex" => "ስም ሊመሰረት የሚችለው በፊደል ብቻ ነው!",


            "father_name.required" => "የአባት ስም ባዶ ሊሆን አይችልም!",
            "father_name.min" => "የአባት ስም በትንሹ 3 ፊደላት ሊኖሩት ይገባል!",
            "father_name.regex" => "የአባት ስም ሊመሰረት የሚችለው በፊደል ብቻ ነው!",

            "phone_no.required" => "ስልክ ቁጥር ባዶ ሊሆን አይችልም!",
            "phone_no.min" => "ስልክ ቁጥር በትንሹ 10 ቁጥሮች ሊኖሩት ይገባል!",
            "phone_no.max" => "ስልክ ቁጥር ከ 15 ቁጥሮች በላይ ሊኖሩት አይችሉም!",
            "phone_no.regex" => "ስልክ ቁጥር ሊመሰረት የሚችለው በቁጥር ብቻ ነው!",
        ]);


        if ($validatedData) {

            $client = new Client();

            $client->first_name = $validatedData['first_name'];
            $client->father_name = $validatedData['father_name'];
            $client->phone_no = $validatedData['phone_no'];

            $client->save();

            return redirect('/auth/confirmation')->with('success', 'User added successfully.');
        } else {
            return redirect()->back()->withErrors($validatedData)->withInput();
        }
    }

    /**
     * Confirm clients registration.
     */
    public function confirmRegister()
    {
        return view('auth.confirm_register');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        //
    }
}

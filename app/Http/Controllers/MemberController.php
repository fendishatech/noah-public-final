<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class MemberController extends Controller
{
    /**
     * Login member.
     */
    public function login(Request $req)
    {
        $member = Member::where(['phone_no' => $req->phone_no])->first();
        $validatedData = $req->validate([
            'phone_no' => ['required'],
            'password' => ['required']
        ], [
            'phone_no.required' => 'ስልክ ቁጥር ባዶ ሊሆን አይችልም!',
            'password.required' => 'የይለፍ ቃል ባዶ ሊሆን አይችልም!'
        ]);

        if ($validatedData) {
            if ($member && Hash::check($req->password, $member->password)) {
                // success
                $req->session()->put('member', $member);
                return redirect("/");
            } else {
                return redirect()->back()->withErrors([
                    'custom_error' => 'ያስገቡት ስልክ ቁትር ወይም የይለፍ ቃል የተሳሳት ነው!',
                ])->withInput();
            }
        } else {
            return redirect()->back()->withErrors("Wrong password or username!")->withInput();
        }
    }

    /**
     * Logout member.
     */
    public function logout()
    {
        Session::forget('member');
        return redirect('/');
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
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member)
    {
        //
    }
}

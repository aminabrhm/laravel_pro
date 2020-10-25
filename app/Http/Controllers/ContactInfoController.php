<?php

namespace App\Http\Controllers;

use App\Models\contact_info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ContactInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('benefits.contact.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $user->contact()->create($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contact_info  $contact_info
     * @return \Illuminate\Http\Response
     */
    public function show(contact_info $contact_info)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contact_info  $contact_info
     * @return \Illuminate\Http\Response
     */
    public function edit(contact_info $contact_info, $id)
    {
        $contact_infos = DB::table('contact_infos')->where('user_id',$id)->first();
        $contact_info = json_decode( json_encode($contact_infos), true);
        // dd($personal_info);
        return view('benefits.contact.edit', compact('contact_info'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\contact_info  $contact_info
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contact_info $contact_info, $id)
    {
        $contact_info = DB::table('contact_infos')->where('user_id',$id)->update(
            ['email' => $request->input('email'),
            'mobile_number' => $request->input('mobile_number'),
            'phone_number' => $request->input('phone_number'),
            'whatsapp_number' => $request->input('whatsapp_number'),
            'other_number' => $request->input('other_number'),
            'relative' => $request->input('relative'),
            ]);
            return back();

    }
          
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contact_info  $contact_info
     * @return \Illuminate\Http\Response
     */
    public function destroy(contact_info $contact_info)
    {
        //
    }
}

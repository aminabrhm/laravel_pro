<?php

namespace App\Http\Controllers;

use App\Models\beneficiary_info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class personalController extends Controller
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
        return view('benefits.personal_information.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $user = Auth::user();
        $user->beneficiary_info()->create($request->all());
        return view('benefits.job.create');

        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\beneficiary_info  $beneficiary_info
     * @return \Illuminate\Http\Response
     */
    public function show(beneficiary_info $beneficiary_info)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\beneficiary_info  $beneficiary_info
     * @return \Illuminate\Http\Response
     */
    public function edit(beneficiary_info $beneficiary_info, $id)
    {

        $personal_infos = DB::table('beneficiary_infos')->where('user_id',$id)->first();
        $personal_info = json_decode( json_encode($personal_infos), true);
        // dd($personal_info);
        return view('benefits.personal_information.edit', compact('personal_info'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\beneficiary_info  $beneficiary_info
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, beneficiary_info $beneficiary_info, $id)
    {
        // dd($request->all());
       
        $beneficiary_info = DB::table('beneficiary_infos')->where('user_id',$id)->update(
            ['first_name' => $request->input('first_name'),
            'second_name' => $request->input('second_name'),
            'third_name' => $request->input('third_name'),
            'family_name' => $request->input('family_name'),
            'gender' => $request->input('gender'),
            'national_id' => $request->input('national_id'),
            'place_national' => $request->input('place_national'),
            'place_birth' => $request->input('place_birth'),
            'date_birth' => $request->input('date_birth'),
            'date_national' => $request->input('date_national'),
            'date_ex_national' => $request->input('date_ex_national'),
            'passport_number' => $request->input('passport_number'),
            'passport_place' => $request->input('passport_place'),
            'passport_date' => $request->input('passport_date'),
            'license_number' => $request->input('license_number'),
            'license_place' => $request->input('license_place'),
            'date_ex_license' => $request->input('date_ex_license'),
            'job' => $request->input('job'),
            ]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\beneficiary_info  $beneficiary_info
     * @return \Illuminate\Http\Response
     */
    public function destroy(beneficiary_info $beneficiary_info)
    {
        //
    }
}

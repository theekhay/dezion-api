<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Http\Resources\Member as MemberResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::paginate(20);
        return MemberResource::collection($members);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        //clean data here

        $member = new Member();

        $member->firstname     = $request->firstname;
        $member->surname       = $request->surname;
        $member->middlename       = $request->middlename;
        $member->email         = $request->email;
        $member->dob         = $request->dob;
        $member->address         = $request->address;
        //$member->phone_number = $request->phone_number;
        $member->occupation = $request->occupation;
        $member->gender = $request->gender;
        $member->marital_status = $request->marital_status;

        //throw an exception here 
        if( ! $member->save() )
        {
            return new MemberResource($member);

        }

        return new MemberResource($member);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        $member = member::findOrFail($member->id);
        return new MemberResource($member);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        //
    }
}

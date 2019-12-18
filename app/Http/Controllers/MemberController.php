<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;

class MemberController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return Member::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request ) {
        $attributes = request()->validate( [

            'first_name' => 'required|min:3|max:255',

            'last_name' => 'required|min:3|max:255',

            'email' => 'required|email',

            'password' => 'required|min:3|max:255',

        ] );

        return Member::create( $attributes );
    }


    public function show( Member $member ) {

        return $member;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Member $member
     *
     * @return \Illuminate\Http\Response
     */
    public function edit( Member $member ) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Member $member
     *
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, Member $member ) {

        //        return $request->all();

        return (string) $member->update( $request->all() );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Member $member
     *
     * @return \Illuminate\Http\Response
     */

    public function destroy( Member $member ) {
        return (string) $member->delete();
    }
}

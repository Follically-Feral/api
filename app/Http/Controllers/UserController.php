<?php

namespace Base\Http\Controllers;

use Illuminate\Http\Request;

use Base\Http\Requests;
use Base\Http\Controllers\Controller;
use Base\Models\User;
use Illuminate\Support\Facades\Response;
use PhpParser\Comment;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Response
     */
    public function index()
    {
        $users = User::all();
        return \Response::json([
            'data' => $users->toArray()
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return \Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return \Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Response
     */
    public function destroy($id)
    {
        //
    }
}

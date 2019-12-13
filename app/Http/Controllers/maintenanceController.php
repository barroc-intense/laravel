<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Error;

class maintenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leases = \App\Leases::All();
        $users = \App\User::All();
        $storings = \App\Error::All();

        return view('maintenance/index',['users' => $users ,'leases' => $leases ,'storings'=>$storings]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('maintenance/create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $id = Auth::id();
        //
        \DB::table('workorders')
            ->insert([
                'maintenance_id'          => $id,
                'description'       => $request->description
            ]);

        return view('welcome');

        Error::insert([
            'user_id'=>$request->user_id,
            'lease_id'=>$request->lease_id,
            'name'=>$request->name,
            'description'=>$request->description,
            'created_at'  =>now(),
            'updated_at'  =>now()
        ]);
        return redirect(route('home'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $storings = \App\Error::All();

        return view('maintenance/show',['storings'=>$storings]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

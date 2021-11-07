<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class VendorController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return User::all();
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return User::find($id);
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
        $vendor = User::find($id);
        $vendor->update($request->all());
        return $vendor;
    }


    /**
     * Search for a vendor name.
     *
     * @param  int  $vendorName
     * @return \Illuminate\Http\Response
     */
    public function search($vendorName)
    {
        return User::where('vendorName', 'like', '%' . $vendorName . '%')->get();
    }
}

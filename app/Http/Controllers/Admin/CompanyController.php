<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.company.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        $company = new Company();
        $company->name = $request->name;
        $company->email = $request->email;
        $company->phone = $request->phone;
        $company->tel = $request->tel;
        $company->facebook = $request->facebook;
        $company->instagram = $request->instagram;
        
        if($request->hasFile('logo')){
        $file=$request->file('logo');
        $fileName = time(). ".".$file-> getClientOriginalExtension();
        $file->move('images',$fileName);
        $company->logo='images/'.$fileName;
        }
        $company->save();
        return "Saved";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.company.edit');
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

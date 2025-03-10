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
        $company =Company::first();

        return view('admin.company.index',data: compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   $company = Company::first();
        if(!$company){
            return view('admin.company.create');
        }else{
            return redirect()->route('company.index');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name"=>"required|max:10",
            "email"=>"required|email",
            "phone"=>"required|digits:10",
            "tel"=>"required",
            "logo"=>"required|max:2048"
        ]);

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
        toast('Record Saved Successfully','success');

        // return "Saved";
        return redirect()->route('company.index');
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
        $company=Company::find($id);
        return view('admin.company.edit',compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "name"=>"required|max:10",
            "email"=>"required|email",
            "phone"=>"required|digits:10",
            "tel"=>"required",
            "logo"=>"max:2048"  //already stays there so we remove required
        ]);

        // return $request->all();
        $company = Company::find($id);
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
        // return "Saved";
        toast('Record Updated Successfully','success');
        return redirect()->route('company.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //return $id;
        $company = Company::find($id);
        $company->delete();
        toast('Record deleted Successfully','success');
        return redirect()->back();
    }
}

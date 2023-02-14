<?php

namespace App\Http\Controllers;

use App\Models\Seamoer;
use Illuminate\Http\Request;

class SeamoerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seamoers=Seamoer::all();
        return view('Employees.Seamoer.index-seamoer',compact('seamoers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Employees.Seamoer.create-seamoer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'shopname' => 'required|max:255',
            'recordnumber'=>'required|unique:seamoers|max:20',
            'facilitynumber'=>'required',
            'job_title'=>'required',
            'phone'=>'required|max:10',
            // 'email' => 'email:rfc,dns',
            'city'=>'required',
            'district'=>'required',
            'street'=>'required'
        ],[
           'name.required'=>'يرجى ادخال اسم القصاص',
           'shopname.required'=>'يرجى ادخال اسم المحل',
           'recordnumber.unique'=>'رقم السجل موجود مسبقأ',
           'facilitynumber.required'=>'يرجى ادخال رقم المنشاة',
           'recordnumber.required'=>'يرجى ادخال رقم السجل',
           'phone.required'=>'يرجى ادخال رقم الهاتف',
        //    'email.email'=>'يجب ان يكون الايميل صالحا',
           'phone.max'=>'يجب ان يكون رقم الهاتف 10 ارقام',
           'city.required'=>'يرجى ادخال  اسم المدينة',
           'street.required'=>'يرجى ادخال  اسم الشارع',
           'district'=>'يرجى ادخال  اسم الحي'


        ]);

        Seamoer::create([
            'name'=>$request->name,
            'shopname'=>$request->shopname,
            'recordnumber'=>$request->recordnumber,
            'phone'=>$request->phone,
            'facilitynumber'=>$request->facilitynumber,
            'email'=>$request->email,
            'city'=>$request->city,
            'district'=>$request->district,
            'street'=>$request->street,
            'accountnumber'=>$request->accountnumber,
            'bankname'=>$request->bankname,
            'statement'=>$request->statement
        ]);
        session()->flash('Add','تمت اضافة الخياط بنجاح');
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Seamoer  $seamoer
     * @return \Illuminate\Http\Response
     */
    public function show(Seamoer $seamoer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Seamoer  $seamoer
     * @return \Illuminate\Http\Response
     */
    public function edit(Seamoer $seamoer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Seamoer  $seamoer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seamoer $seamoer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Seamoer  $seamoer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seamoer $seamoer)
    {
        //
    }
}

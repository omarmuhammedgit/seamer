<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers =Supplier::all();
        return view('Suppliers.supplier',compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Suppliers.add-supplier');

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
            'contact_type' => 'required|max:255',
            'contactId'=>'required|unique:suppliers|max:20',
            'phone'=>'required|max:10',
            // 'email' => 'email:rfc,dns',
            'city'=>'required',
            'country'=>'required',
            'postal_code'=>'required'
        ],[
           'contact_type.required'=>'يرجى ادخال اسم القصاص',
           'contactId.unique'=>'معرف الاتصال موجود مسبقأ',
           'contactId.required'=>'يرجى ادخال معرف الاتصال',
           'phone.required'=>'يرجى ادخال رقم الهاتف',
        //    'email.email'=>'يجب ان يكون الايميل صالحا',
           'phone.max'=>'يجب ان يكون رقم الهاتف 10 ارقام',
           'city.required'=>'يرجى ادخال  اسم المدينة',
           'country.required'=>'يرجى ادخال  اسم البلد',
           'postal_code.required'=>'يرجى ادخال  الرمز البريدي'


        ]);
        Supplier::create([
            'contact_type'=>$request->contact_type,
            'contactId'=>$request->contactId,
            'sobriquet'=>$request->sobriquet,
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'datebirth'=>$request->datebirth,
            'allotted'=>$request->allotted,
            'activisms'=>$request->activisms,
            'phone'=>$request->phone,
            'facilitynumber'=>$request->facilitynumber,
            'email'=>$request->email,
            'tax_number'=>$request->tax_number,
            'initial_balance'=>$request->initial_balance,
            'payment_period'=>$request->payment_period,
            'city'=>$request->city,
            'country'=>$request->country,
            'postal_code'=>$request->postal_code
        ]);

        session()->flash('Add','تمت اضافة الموردين بنجاح');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        //
    }
}

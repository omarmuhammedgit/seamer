<?php

namespace App\Http\Controllers;

use App\Models\Fabrics;
use Illuminate\Http\Request;

class FabricsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fabrices=Fabrics::all();
        return view('Products.Fabrics.create-fabrice',compact('fabrices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'type_fabrice' => 'required|max:255',
            'number_fabrice'=>'required|unique:fabrics|max:20',
            'color_fabrice'=>'required'

        ],[
           'type_fabrice.required'=>'يرجى ادخال اسم القماش',
           'number_fabrice.unique'=>'رقم القماش موجود مسبقأ',
           'number_fabrice.required'=>'يرجى ادخال رقم القماش',
           'color_fabrice.required'=>'يرجى ادخال اللون القماش'


        ]);
        Fabrics::create([
            'type_fabrice'=>$request->type_fabrice,
            'number_fabrice'=>$request->number_fabrice,
            'color_fabrice'=>$request->color_fabrice
        ]);
        $fabrices=Fabrics::all();
         return view('Products.Fabrics.create-fabrice',compact('fabrices'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

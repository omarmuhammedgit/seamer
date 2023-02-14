<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Sale;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers=Customer::all();
        $sizes=Size::all();
        return view('Sales.SaleMenu.salmenu',compact('customers','sizes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Sales.SaleReference.salereference');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer_id=Customer::latest()->first()->id;
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'invoice_number'=>'required|unique:customers|max:20',
            'phone'=>'required|max:10',
            // 'email' => 'email:rfc,dns',
            'number_dresses'=>'required',
            'detail_duration'=>'required',
            'code'=>'required',
            'price_include_tax'=>'required',
            'discount'=>'required',
            'receivedamount'=>'required'
        ],[
           'name.required'=>'يرجى ادخال اسم العميل',
           'invoice_number.required'=>'يرجى ادخال رقم الفاتورة',
           'invoice_number.unique'=>'رقم الفاتورة موجود مسبقأ',
           'phone.required'=>'يرجى ادخال رقم الهاتف',
        //    'email.email'=>'يجب ان يكون الايميل صالحا',
           'phone.max'=>'يجب ان يكون رقم الهاتف 10 ارقام',
           'number_dresses.required'=>'يرجى ادخال  عدد  الثياب',
           'detail_duration.required'=>'يرجى ادخال  مدة التفصيل',
           'code.required'=>'يرجى ادخال  كود العميل',
           'price_include_tax.required'=>'يرجى ادخال  المبيلغ شامل الضريبة',
           'discount.required'=>'يرجى ادخال  قمية الخصم',
           'receivedamount.required'=>'يرجى ادخال  المبلغ المستلم'



        ]);

        Size::create([
            'height'=>$request->height,
            'shoulder'=>$request->shoulder,
            'shoulder_leight'=>$request->shoulder_leight,
            'brest'=>$request->brest,
            'expand_brest'=>$request->expand_brest,
            'neck'=>$request->neck,
            'expand_hand'=>$request->expand_hand,
            'down_hand'=>$request->down_hand,
            'cbk_leight'=>$request->cbk_leight,
            'cbk_width'=>$request->cbk_width,
            'pocket_leight'=>$request->pocket_leight,
            'pocket_expand'=>$request->pocket_expand,
            'down_expand'=>$request->down_expand,
            'down_desist'=>$request->down_desist,
            'size_neck'=>$request->size_neck,
            'size_cbk'=>$request->size_cbk,
            'size_brest_pocket'=>$request->size_brest_pocket,
            'size_pocket'=>$request->size_pocket,
            'size_algizour'=>$request->size_algizour,
            'customer_id'=>$customer_id,
            'seamoer_id'=>$request->seamoer,
            'retribution_id'=>$request->retribution,
            'design_id'=>$request->name_design,
            'fabric_id'=>$request->type_fabrice,
            'section_id'=>$request->name_section,
            // 'invoice_id'=>$request->invoice,
            'trade_mark_id'=>$request->name_trade_mark,
            'size_neck'=>$request->size_neck,
            'size_cbk'=>$request->size_cbk,
            'size_brest_pocket'=>$request->size_brest_pocket,
            'size_pocket'=>$request->size_pocket,
            'size_algizour'=>$request->size_algizour,
            'price_include_tax'=>$request->price_include_tax,
            'price_doesnot_include_tax'=>$request->price_doesnot_include_tax,
            'value_tax'=>$request->value_tax,
            'notes'=>$request->notes,
            'discount'=>$request->discount,
            'afterdiscount'=>$request->afterdiscount,
            'receivedamount'=>$request->receivedamount,
            'remainingamount'=>$request->remainingamount,
            'payment'=>$request->payment
        ]);
        session()->flash('Add','تمت اضافة البيانات بنجاح');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function show(Sale $sale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function edit(Sale $sale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sale $sale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sale $sale)
    {
        //
    }
    public function printInvoice($id){
        $info_size_customer=Size::where('id',$id)->first();
        $info_size_customer_id=Size::where('id',$id)->first()->customer_id;
        $info_size_customers=Size::where('customer_id',$info_size_customer_id)->get();
        $discount=Size::where('customer_id',$info_size_customer_id)->sum('discount');
        $price_include_tax=Size::where('customer_id',$info_size_customer_id)->sum('price_include_tax');
        $price_doesnot_include_tax=Size::where('customer_id',$info_size_customer_id)->sum('price_doesnot_include_tax');
        $value_tax=Size::where('customer_id',$info_size_customer_id)->sum('value_tax');
        $receivedamount=Size::where('customer_id',$info_size_customer_id)->sum('receivedamount');
        $remainingamount=Size::where('customer_id',$info_size_customer_id)->sum('remainingamount');
        $price=Size::where('customer_id',$info_size_customer_id)->sum('discount');
        // $info_size_customers= DB::table("sizes")->where('customer_id',$info_size_customer_id)->get();



        return view('Invoices.invoices',compact(
            'info_size_customer','info_size_customers','discount',
            'price_include_tax','price_doesnot_include_tax',
            'value_tax','receivedamount','remainingamount'
        ));
        // return $price;

    }
}

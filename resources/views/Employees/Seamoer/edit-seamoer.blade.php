@extends('layouts.master')
@section('css')
<style>
    .submit{
        direction: ltr;
        text-align: left;
        margin-bottom: 50px;
    }
</style>
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الخياطين</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">اضافة خياط</span>
            </div>
        </div>

    </div>
    <!-- breadcrumb -->
@endsection
@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session()->has('Add'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ session()->get('Add') }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
    <!-- row -->
    <div class="row">
        <!--div-->
        <form action="{{route('Seamoer-update')}}" method="POST">
            @csrf
            <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="main-content-label mg-b-5">
                            معلومات شحصية
                        </div>
                        <div class="row">
                            <input type="hidden" name="id" value="{{$seamoer->id}}">
                            <div class="col-lg-3">
                                <label><span>اسم الخياط</span></label>
                                <input type="text" name="name" placeholder="اسم الخياط" required value="{{$seamoer->name}}">
                            </div>
                            <div class="col-lg-3">
                                <label><span>اسم المحل / المشغل</span></label>
                                <input type="text" name="shopname" placeholder=" اسم المحل" value="{{$seamoer->shopname}}" required>
                            </div>
                            <div class="col-lg-3">
                                <label><span>رقم السجل التجاري</span></label>
                                <input type="text" name="recordnumber" placeholder="رقم السجل التجاري" value="{{$seamoer->recordnumber}}" required>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!--div-->
            <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="main-content-label mg-b-5">
                            معلومات التواصل
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <label><span>رقم الجوال</span></label>
                                <input type="text" name="phone" placeholder="رقم الجوال" value="{{$seamoer->phone}}" required>
                            </div>
                            <div class="col-lg-3">
                                <label><span>رقم الجوال المنشاة</span></label>
                                <input type="text" name="facilitynumber" placeholder="رقم الجوال المنشاة" value="{{$seamoer->facilitynumber}}">
                            </div>
                            <div class="col-lg-3">
                                <label><span>البريد الالكتروني</span></label>
                                <input type="email" name="email" placeholder="البريد الالكتروني" value="{{$seamoer->email}}" required>
                            </div>



                        </div>

                    </div>
                </div>
            </div>
            <!--div-->
            <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="main-content-label mg-b-5">
                            معلومات السكن
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <label><span>المدينة</span></label>
                                <input type="text" name="city" placeholder="المدينة" value="{{$seamoer->city}}">
                            </div>
                            <div class="col-lg-3">
                                <label><span>الحي</span></label>
                                <input type="text" name="district" placeholder="الحي" value="{{$seamoer->district}}">
                            </div>
                            <div class="col-lg-3">
                                <label><span>الشارع</span></label>
                                <input type="text" name="street" placeholder="الشارع" value="{{$seamoer->street}}">
                            </div>


                        </div>

                    </div>
                </div>
            </div>
            <!--div-->
            <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="main-content-label mg-b-5">
                            معلومات البنكية
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <label><span>رقم البنك</span></label>
                                <input type="text" name="accountnumber" placeholder="رقم البنك" value="{{$seamoer->accountnumber}}">
                            </div>
                            <div class="col-lg-3">
                                <label><span>اسم البنك</span></label>
                                <input type="text" name="bankname" placeholder="اسم البنك" value="{{$seamoer->bankname}}">
                            </div>
                            <div class="col-lg-3">
                                <label><span>الابيان</span></label>
                                <input type="text" name="statement" placeholder="الابيان" value="{{$seamoer->statement}}">
                            </div>

                            </div>

                            {{-- </form> --}}
                        </div>

                    </div>

                    <div class="submit">
                        <button type="submit" class="btn btn-primary mt-3 mb-0" >تعديل</button>

                    </div>
                </div>
            </div>
        </form>

    </div>
    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
@section('js')
@endsection

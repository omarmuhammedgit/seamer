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
                <h4 class="content-title mb-0 my-auto">القصاص</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ تعديل قصاص</span>
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
@if(session()->has('edit'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ session()->get('edit') }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
    <!-- row -->
    <div class="row">

        <form action="{{route('Retribution-update')}}" method="POST">
            @csrf
            <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="main-content-label mg-b-5">
                            معلومات شحصية
                        </div>
                        <div class="row">
                            <input type="hidden" name="id" value="{{$retribution->id}}">
                            <div class="col-lg-3">
                                <label><span>اسم القصاص</span></label>
                                <input type="text" name="name" value="{{$retribution->name}}" required>
                            </div>
                            <div class="col-lg-3">
                                <label><span>اسم المحل / المشغل</span></label>
                                <input type="text" name="shopname"  value="{{$retribution->shopname}}" placeholder=" اسم المحل" required>
                            </div>
                            <div class="col-lg-3">
                                <label><span>رقم السجل التجاري</span></label>
                                <input type="text" name="recordnumber"  value="{{$retribution->recordnumber}}" placeholder="رقم السجل التجاري" required>
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
                                <input type="text" name="phone" placeholder="رقم الجوال"  value="{{$retribution->phone}}" required>
                            </div>
                            <div class="col-lg-3">
                                <label><span>رقم الجوال المنشاة</span></label>
                                <input type="text" name="facilitynumber" placeholder="رقم الجوال المنشاة"  value="{{$retribution->facilitynumber}}">
                            </div>
                            <div class="col-lg-3">
                                <label><span>البريد الالكتروني</span></label>
                                <input type="email" name="email" placeholder="البريد الالكتروني" required  value="{{$retribution->email}}">
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
                                <input type="text" name="city" placeholder="المدينة"  value="{{$retribution->city}}">
                            </div>
                            <div class="col-lg-3">
                                <label><span>الحي</span></label>
                                <input type="text" name="district" placeholder="الحي"  value="{{$retribution->district}}">
                            </div>
                            <div class="col-lg-3">
                                <label><span>الشارع</span></label>
                                <input type="text" name="street" placeholder="الشارع"  value="{{$retribution->street}}">
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
                                <input type="text" name="accountnumber" placeholder="رقم البنك"  value="{{$retribution->accountnumber}}">
                            </div>
                            <div class="col-lg-3">
                                <label><span>اسم البنك</span></label>
                                <input type="text" name="bankname" placeholder="اسم البنك"  value="{{$retribution->bankname}}">
                            </div>
                            <div class="col-lg-3">
                                <label><span>الابيان</span></label>
                                <input type="text" name="statement" placeholder="الابيان"  value="{{$retribution->statement}}">
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

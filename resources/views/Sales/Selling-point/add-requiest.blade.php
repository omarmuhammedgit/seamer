@extends('layouts.master')
@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <style>
        .swiper {
            width: 200px;
            height: 200px;
            background-color: aqua;
            margin: auto;
        }

        .swiper-wrapper {
            width: 200px;
            height: 200px;
            margin: auto;
            text-align: center;
        }

        img {
            width: 120px;
            height: 120px;
            margin-top: 17%;


        }
    </style>
    <style>
        .showimg {
            display: inline-block;
            width: 200px;

        }

        #sin td input {
            width: 100px;
        }

        td {
            text-align: center
        }

        #idleft {
            display: inline-block;
            float: left;
            width: 20%;
            background-color: aliceblue;
        }

        #idhight {
            display: inline-block;
            text-align: center;
            float: right;
            width: 20%;
            padding: 20px;
            background-color: bisque;
        }

        #inp {
            width: 30px;
        }

        #tdin input {
            width: 50px;

        }

        #idcen {
            display: inline-block;
            direction: rtl;
            width: 60%;
            padding-top: 20px;
            background-color: azure;
        }

        #radio {
            /* display: block; */
            padding: 10px;
        }
    </style>
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Pages</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Empty</span>
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
@if (session()->has('Add'))
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

        <form action="{{ route('Sale-menu.store') }}" method="POST">
            @csrf
            <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="main-content-label mg-b-5">
                            ?????????? ????????????
                        </div>
                        <div class="row row-sm">

                            <div class="col-lg-2 mg-t-20 mg-lg-t-0">
                                <div class="input-group">
                                    ?????? ???????????? : <input type="text" value="{{$customer->name}}" name="name_customer" readonly>
                                </div>
                            </div>
                            <div class="col-lg-2 mg-t-20 mg-lg-t-0">
                                <div class="input-group">
                                    ?????? ???????????? <input type="text" name="phone" value="{{$customer->phone}}" readonly>
                                </div>
                            </div>
                            <div class="col-lg-2 mg-t-20 mg-lg-t-0">
                                <div class="input-group">
                                    ?????? ????????????<input type="text" name="code" value="{{$customer->code}}" readonly>
                                </div>
                            </div>
                            <div class="col-lg-2 mg-t-20 mg-lg-t-0">
                                <div class="input-group">
                                    ?????? ???????????? <input type="text" name="number_dresses" value="{{$customer->number_dresses}}">
                                </div>
                            </div>
                            <div class="col-lg-2 mg-t-20 mg-lg-t-0">
                                <div class="input-group">
                                    ?????? ?????????????? <input type="text" name="detail_duration" value="{{$customer->detail_duration}}" readonly>
                                </div>
                            </div>
                            <div class="col-lg-2 mg-t-20 mg-lg-t-0">
                                <div class="input-group">
                                    @php
                                     $time=date('h:i:s');
                                     $date=date('Y/m/d');
                                     @endphp
                                    ?????????????? ?? <input type="text" name="date" value="{{$customer->date}}" readonly>
                                </div>
                            </div>
                            <div class="col-lg-2 mg-t-20 mg-lg-t-0">
                                <div class="input-group">

                                    ??????????<input type="text" name="time" value="{{$customer->time}}" >
                                </div>
                            </div>
                            <div class="col-lg-2 mg-t-20 mg-lg-t-0">
                                <div class="input-group">
                                    ?????? ????????????????<input type="text" name="number_invoice" value="2" readonly>
                                </div>
                                {{-- <div class="input-group">
                                    ?????? ??????????????<input type="text" name="number_requiest" value="{{$customer->number_requiest}}">
                                </div> --}}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--/div-->

            <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="main-content-label mg-b-5">
                            ?????????????? ????????????????
                        </div>
                        <div class="row col-4">
                        </div>
                        <hr>
                        <table>
                            <tr id="sin">
                                <td>
                                    <label for="">??????????</label><br>
                                    <input type="text" name="height" placeholder="??????????">
                                </td>
                                <td>
                                    <label for="">??????????</label><br>
                                    <input type="text" name="shoulder" placeholder="??????????">
                                </td>
                                <td>
                                    <label for="">?????? ??????????</label><br>
                                    <input type="text" name="shoulder_leight" placeholder="?????? ??????????">
                                </td>
                                <td>
                                    <label for="">??????????</label><br>
                                    <input type="text" name="brest" placeholder="??????????">
                                </td>
                                <td>
                                    <label for="">?????? ?????????? </label><br>
                                    <input type="text" name="expand_brest" placeholder="?????? ??????????">
                                </td>
                                <td>
                                    <label for="">????????????</label><br>
                                    <input type="text" name="neck" placeholder="????????????">
                                </td>
                                <td>
                                    <label for="">?????? ????????</label><br>
                                    <input type="text" name="expand_hand" placeholder="?????? ????????">
                                </td>
                                <td>
                                    <label for="">???????? ????????</label><br>
                                    <input type="text" name="down_hand" placeholder="???????? ????????">
                                </td>
                                <td>
                                    <label for="">?????? ??????????</label><br>
                                    <input type="text" name="cbk_leight" placeholder="?????? ??????????">
                                </td>
                                <td>
                                    <label for="">?????? ??????????</label><br>
                                    <input type="text" name="cbk_width" placeholder="?????? ??????????">
                                </td>
                            </tr>
                            <tr id="sin">
                                <td>
                                    <label for="">?????? ??????????</label>
                                    <input type="text" name="pocket_leight" placeholder="?????? ??????????">
                                </td>
                                <td>
                                    <label for="">?????? ??????????</label>
                                    <input type="text" name="pocket_expand" placeholder="?????? ??????????">
                                </td>
                                <td>
                                    <label for="">?????? ????????</label>
                                    <input type="text" name="down_expand" placeholder="?????? ????????">
                                </td>
                                <td>
                                    <label for="">?????? ????????</label>
                                    <input type="text" name="down_desist" placeholder="?????? ????????">
                                </td>
                            </tr>
                        </table><br>
                    </div>

                </div>
            </div>
            <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
                <div class="card">
                    <div class="card-body">


                        <div id="idleft">
                            <div class="radio">
                                <button ><a href="{{ route('Sale-point.create') }}"> ??????????
                                        ??????</a></button><br>
                                {{-- <button onclick="myalert()"><a href="#"> ?????????? ??????????</a></button> --}}

                            </div>

                        </div>
                    </div>
                </div>


                <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div id="idhight">
                                <center>
                                    <table>
                                        <tr>
                                            <td>
                                                <label for="">?????? ??????????????</label><br>
                                                <select name="name_design" id="">
                                                    @foreach ($designs as $design)
                                                        <option value="{{ $design->id }}">{{ $design->name_design }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </td>
                                        </tr>
                                    </table>
                                    {{-- <input type="number" id="invalue"> --}}

                                    <label for="">??????????</label><br>
                                    <select name="name_section" id="name_section">
                                        @foreach ($sections as $section)
                                            <option value="{{ $section->id }}">{{ $section->name_section }}</option>
                                        @endforeach
                                    </select>
                                    <table>
                                        <tr>
                                            <td>
                                                <label for="">????????????</label><br>
                                                <select name="type_fabrice" id="">
                                                    @foreach ($fabrices as $fabrice)
                                                        <option value="{{ $fabrice->id }}">{{ $fabrice->type_fabrice }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                        <tr>
                                            <td>
                                                <label for="">?????????? ????????????</label><br>
                                                <select name="color_fabrice" id="">
                                                    @foreach ($fabrices as $fabrice)
                                                        <option value="{{ $fabrice->id }}">{{ $fabrice->color_fabrice }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                        <tr>
                                            <td>
                                                <label for="">?????????????? ????????????????</label><br>
                                                <select name="name_trade_mark" id="">
                                                    @foreach ($trademarks as $trademark)
                                                        <option value="{{ $trademark->id }}">
                                                            {{ $trademark->name_trade_mark }}</option>
                                                    @endforeach
                                                </select>

                                            </td>
                                        </tr>
                                        </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="">?????? ????????????</label><br>
                                                <select name="retribution" id="">
                                                    @foreach ($retributions as $retribution)
                                                        <option value="{{ $retribution->id }}">{{ $retribution->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="">?????? ????????????</label><br>
                                                <select name="seamoer" id="">
                                                    @foreach ($seamoers as $seamoer)
                                                        <option value="{{ $seamoer->id }}">{{ $seamoer->name }}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                        </tr>
                                    </table>
                                    <label for="">?????????? ???????? ??????????????</label>
                                    <input type="text" name="price_include_tax" id="price_tax"
                                        onchange="myfunction()">
                                    <label for="">?????????? ?????? ???????? ??????????????</label>
                                    <input type="text" name="price_doesnot_include_tax" id="tax" readonly>
                                    <label for="">???????? ??????????????</label>
                                    <input type="text" name="value_tax" id="value_tax" readonly>
                                    <label for="">??????????</label>
                                    <input type="text" name="discount" id="discount" onchange="myFunDiscount()">
                                    <label for="">?????????? ?????? ??????????</label>
                                    <input type="text" name="afterdiscount" id="afterdiscount">
                                    <label for="">???????????? ??????????????</label>
                                    <input type="text" name="receivedamount" id="receivedamount"
                                        onchange="myFunReceivedamount()">
                                    <label for="">???????????? ??????????????</label>
                                    <input type="text" name="remainingamount" id="remainingamount" readonly>
                                    <label for="">?????? ??????????</label>
                                    <select name="payment" id="">
                                        <option value="" label="????????"></option>
                                        <option value="">????????</option>
                                    </select><br>
                                    <label for="">??????????????????</label>
                                    <input type="textarea" name="notes" placeholder="??????????????">

                                    </table>
                                </center>
                            </div>
                            <div id="idcen">
                                <center>
                                    <section>
                                        <h1 style="text-align: center">?????????? ????????????</h1>

                                        <div class="showimg">
                                            <h4>????????????</h4>
                                            <div class="swiper">
                                                <!-- Additional required wrapper -->
                                                <div class="swiper-wrapper">
                                                    <!-- Slides -->
                                                    <div class="swiper-slide">

                                                        <img alt="img" class="d-block w-100"
                                                            src="{{ URL::asset('assets/img/seamoer-image/3/1.jpg') }}">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img alt="img" class="d-block w-100"
                                                            src="{{ URL::asset('assets/img/seamoer-image/3/2.jpg') }}">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img alt="img" class="d-block w-100"
                                                            src="{{ URL::asset('assets/img/seamoer-image/3/3.jpg') }}">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img alt="img" class="d-block w-100"
                                                            src="{{ URL::asset('assets/img/seamoer-image/3/4.jpg') }}">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img alt="img" class="d-block w-100"
                                                            src="{{ URL::asset('assets/img/seamoer-image/3/5.jpg') }}">
                                                    </div>

                                                </div>


                                                <!-- If we need navigation buttons -->
                                                <div class="swiper-button-prev"></div>
                                                <div class="swiper-button-next"></div>

                                                <!-- If we need scrollbar -->
                                                <!-- <div class="swiper-scrollbar"></div> -->
                                            </div>
                                            <input type="text" placeholder="????????" name="size_neck">

                                        </div>
                                        <div class="showimg">
                                            <h4>??????????</h4>
                                            <div class="swiper">
                                                <!-- Additional required wrapper -->
                                                <div class="swiper-wrapper">
                                                    <!-- Slides -->
                                                    <div class="swiper-slide">
                                                        <img alt="img" class="d-block w-100"
                                                            src="{{ URL::asset('assets/img/seamoer-image/5/1.jpg') }}">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img alt="img" class="d-block w-100"
                                                            src="{{ URL::asset('assets/img/seamoer-image/5/2.jpg') }}">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img alt="img" class="d-block w-100"
                                                            src="{{ URL::asset('assets/img/seamoer-image/5/3.jpg') }}">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img alt="img" class="d-block w-100"
                                                            src="{{ URL::asset('assets/img/seamoer-image/5/4.jpg') }}">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img alt="img" class="d-block w-100"
                                                            src="{{ URL::asset('assets/img/seamoer-image/5/5.jpg') }}">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img alt="img" class="d-block w-100"
                                                            src="{{ URL::asset('assets/img/seamoer-image/5/6.jpg') }}">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img alt="img" class="d-block w-100"
                                                            src="{{ URL::asset('assets/img/seamoer-image/5/7.jpg') }}">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img alt="img" class="d-block w-100"
                                                            src="{{ URL::asset('assets/img/seamoer-image/5/8.jpg') }}">
                                                    </div>

                                                </div>


                                                <!-- If we need navigation buttons -->
                                                <div class="swiper-button-prev"></div>
                                                <div class="swiper-button-next"></div>

                                                <!-- If we need scrollbar -->
                                                <!-- <div class="swiper-scrollbar"></div> -->
                                            </div>
                                            <input type="text" placeholder="????????" name="size_neck">

                                        </div>
                                        <div class="showimg">
                                            <h4>?????? ??????????</h4>
                                            <div class="swiper">
                                                <!-- Additional required wrapper -->
                                                <div class="swiper-wrapper">
                                                    <!-- Slides -->
                                                    <div class="swiper-slide">
                                                        <img alt="img" class="d-block w-100"
                                                            src="{{ URL::asset('assets/img/seamoer-image/2/1.jpg') }}">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img alt="img" class="d-block w-100"
                                                            src="{{ URL::asset('assets/img/seamoer-image/2/2.jpg') }}">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img alt="img" class="d-block w-100"
                                                            src="{{ URL::asset('assets/img/seamoer-image/2/3.jpg') }}">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img alt="img" class="d-block w-100"
                                                            src="{{ URL::asset('assets/img/seamoer-image/2/4.jpg') }}">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img alt="img" class="d-block w-100"
                                                            src="{{ URL::asset('assets/img/seamoer-image/2/5.jpg') }}">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img alt="img" class="d-block w-100"
                                                            src="{{ URL::asset('assets/img/seamoer-image/2/6.jpg') }}">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img alt="img" class="d-block w-100"
                                                            src="{{ URL::asset('assets/img/seamoer-image/2/7.jpg') }}">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img alt="img" class="d-block w-100"
                                                            src="{{ URL::asset('assets/img/seamoer-image/2/8.jpg') }}">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img alt="img" class="d-block w-100"
                                                            src="{{ URL::asset('assets/img/seamoer-image/2/9.jpg') }}">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img alt="img" class="d-block w-100"
                                                            src="{{ URL::asset('assets/img/seamoer-image/2/10.jpg') }}">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img alt="img" class="d-block w-100"
                                                            src="{{ URL::asset('assets/img/seamoer-image/2/11.jpg') }}">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img alt="img" class="d-block w-100"
                                                            src="{{ URL::asset('assets/img/seamoer-image/2/12.jpg') }}">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img alt="img" class="d-block w-100"
                                                            src="{{ URL::asset('assets/img/seamoer-image/2/13.jpg') }}">
                                                    </div>

                                                </div>


                                                <!-- If we need navigation buttons -->
                                                <div class="swiper-button-prev"></div>
                                                <div class="swiper-button-next"></div>

                                                <!-- If we need scrollbar -->
                                                <!-- <div class="swiper-scrollbar"></div> -->
                                            </div>
                                            <input type="text" placeholder="????????" name="size_neck">

                                        </div>
                                        <div class="showimg">
                                            <h4>??????????</h4>
                                            <div class="swiper">
                                                <!-- Additional required wrapper -->
                                                <div class="swiper-wrapper">
                                                    <!-- Slides -->
                                                    <div class="swiper-slide">

                                                        <img alt="img" class="d-block w-100"
                                                            src="{{ URL::asset('assets/img/seamoer-image/4/1.jpg') }}">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img alt="img" class="d-block w-100"
                                                            src="{{ URL::asset('assets/img/seamoer-image/4/2.jpg') }}">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img alt="img" class="d-block w-100"
                                                            src="{{ URL::asset('assets/img/seamoer-image/4/3.jpg') }}">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img alt="img" class="d-block w-100"
                                                            src="{{ URL::asset('assets/img/seamoer-image/4/4.jpg') }}">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img alt="img" class="d-block w-100"
                                                            src="{{ URL::asset('assets/img/seamoer-image/4/5.jpg') }}">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img alt="img" class="d-block w-100"
                                                            src="{{ URL::asset('assets/img/seamoer-image/4/6.jpg') }}">
                                                    </div>

                                                </div>


                                                <!-- If we need navigation buttons -->
                                                <div class="swiper-button-prev"></div>
                                                <div class="swiper-button-next"></div>

                                                <!-- If we need scrollbar -->
                                                <!-- <div class="swiper-scrollbar"></div> -->
                                            </div>
                                            <input type="text" placeholder="????????" name="size_neck">

                                        </div>
                                        <div class="showimg">
                                            <h4>??????????????</h4>
                                            <div class="swiper">
                                                <!-- Additional required wrapper -->
                                                <div class="swiper-wrapper">
                                                    <!-- Slides -->
                                                    <div class="swiper-slide">

                                                        <img alt="img" class="d-block w-100"
                                                            src="{{ URL::asset('assets/img/seamoer-image/1/1.jpg') }}">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img alt="img" class="d-block w-100"
                                                            src="{{ URL::asset('assets/img/seamoer-image/1/2.jpg') }}">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img alt="img" class="d-block w-100"
                                                            src="{{ URL::asset('assets/img/seamoer-image/1/3.jpg') }}">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img alt="img" class="d-block w-100"
                                                            src="{{ URL::asset('assets/img/seamoer-image/1/4.jpg') }}">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img alt="img" class="d-block w-100"
                                                            src="{{ URL::asset('assets/img/seamoer-image/1/5.jpg') }}">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img alt="img" class="d-block w-100"
                                                            src="{{ URL::asset('assets/img/seamoer-image/1/6.jpg') }}">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img alt="img" class="d-block w-100"
                                                            src="{{ URL::asset('assets/img/seamoer-image/1/7.jpg') }}">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img alt="img" class="d-block w-100"
                                                            src="{{ URL::asset('assets/img/seamoer-image/1/8.jpg') }}">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img alt="img" class="d-block w-100"
                                                            src="{{ URL::asset('assets/img/seamoer-image/1/9.jpg') }}">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img alt="img" class="d-block w-100"
                                                            src="{{ URL::asset('assets/img/seamoer-image/1/10.jpg') }}">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img alt="img" class="d-block w-100"
                                                            src="{{ URL::asset('assets/img/seamoer-image/1/11.jpg') }}">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img alt="img" class="d-block w-100"
                                                            src="{{ URL::asset('assets/img/seamoer-image/1/12.jpg') }}">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img alt="img" class="d-block w-100"
                                                            src="{{ URL::asset('assets/img/seamoer-image/1/13.jpg') }}">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img alt="img" class="d-block w-100"
                                                            src="{{ URL::asset('assets/img/seamoer-image/1/14.jpg') }}">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img alt="img" class="d-block w-100"
                                                            src="{{ URL::asset('assets/img/seamoer-image/1/15.jpg') }}">
                                                    </div>

                                                </div>


                                                <!-- If we need navigation buttons -->
                                                <div class="swiper-button-prev"></div>
                                                <div class="swiper-button-next"></div>

                                                <!-- If we need scrollbar -->
                                                <!-- <div class="swiper-scrollbar"></div> -->
                                            </div>
                                            <input type="text" placeholder="????????" name="size_neck">

                                        </div>

                                    </section>
                                </center>
                            </div>
                            <div id="idleft">
                                <div class="radio">
                                    {{-- <form action=""> --}}
                                    <label for="">?????? ??????????????</label><br>
                                    <datalist id="list">
                                        <option>??????????</option>
                                        <option>??????????</option>
                                        <option>????????</option>
                                        <option>????????</option>
                                        <option> ?? ????????</option>
                                        <option>??</option>

                                    </datalist>
                                    <input autocomplete="on" list="list" name="seamtress" placeholder="?????? ??????????????">
                                    {{-- </form> --}}
                                </div>
                                <br><br>
                                <h4>???????? ??????????</h4>
                                <figure>
                                    <img src="" alt="" width="100px" height="100px">
                                    <img src="" alt=""width="100px" height="100px">
                                    <img src="" alt="" width="100px" height="100px">
                                    <img src="" alt="" width="100px" height="100px">
                                    <img src="" alt="" width="100px" height="100px">
                                </figure>

                            </div>

                        </div>
                    </div>
                </div>


                <button class="btn ripple btn-primary" type="submit"
                    style="margin-right: 95%; margin-bottom:10%">??????</button>
                {{-- </div> --}}
        </form>
                {{-- //////////////////////////////////////////// --}}


            </div>
            <!-- row closed -->
            {{-- <div style="text-align: left;"> --}}

    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
@section('js')
<script>
    function myAddRequiest(){
        var number_dresses=document.getElementById('number_dresses').value;
        if (number_dresses >1) {
            alert('???? ???????? ???????? ???????? ??');

        } else {
            alert('???????? ???????????? ?????? ????????????');

        }
    }
    function myfunction(){
            var price_tax = parseFloat(document.getElementById("price_tax").value);
            var result = price_tax / 1.15;
            var value_tax=price_tax-result;
            var value_tax=parseFloat(value_tax).toFixed(2);
            var result = parseFloat(result).toFixed(2);
            document.getElementById('value_tax').value=value_tax;
            document.getElementById('tax').value = result;

    }
    function myFunDiscount(){
        var price_tax=parseFloat(document.getElementById("price_tax").value);
        var discount=parseFloat(document.getElementById("discount").value);
        var result=price_tax - discount;
        var result=parseFloat(result).toFixed(2);
        document.getElementById('afterdiscount').value=result;

    }
    function myFunReceivedamount(){
        var afterdiscount=parseFloat(document.getElementById("afterdiscount").value);
        var receivedamount=parseFloat(document.getElementById("receivedamount").value);
        var result=afterdiscount - receivedamount;
        var result=parseFloat(result).toFixed(2);
        document.getElementById('remainingamount').value=result;

    }
    function myalert() {
        alert('???????? ?????? ?????????? ?????? ??????????????');

    }
</script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <script>
        const swiper = new Swiper('.swiper', {
            loop: true,

            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },


        });
    </script>
@endsection

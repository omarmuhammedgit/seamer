@extends('layouts.master')
@section('css')
<!-- Internal Data table css -->
<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Tables</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Data Tables</span>
						</div>
					</div>
					{{-- <div class="d-flex my-xl-auto right-content">
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-info btn-icon ml-2"><i class="mdi mdi-filter-variant"></i></button>
						</div>
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-danger btn-icon ml-2"><i class="mdi mdi-star"></i></button>
						</div>
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-warning  btn-icon ml-2"><i class="mdi mdi-refresh"></i></button>
						</div>
						<div class="mb-3 mb-xl-0">
							<div class="btn-group dropdown">
								<button type="button" class="btn btn-primary">14 Aug 2019</button>
								<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuDate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="sr-only">Toggle Dropdown</span>
								</button>
								<div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuDate" data-x-placement="bottom-end">
									<a class="dropdown-item" href="#">2015</a>
									<a class="dropdown-item" href="#">2016</a>
									<a class="dropdown-item" href="#">2017</a>
									<a class="dropdown-item" href="#">2018</a>
								</div>
							</div>
						</div>
					</div> --}}
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row opened -->
				<div class="row row-sm">
                    <!--div-->
					<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="row row-sm mg-b-20">
									<div class="col-lg-4">
										<p class="mg-b-10">اسم العميل</p>
                                        <input type="text" name="namecline" id="namecline" placeholder="ادخل اسم العميل">
									</div><!-- col-4 -->
									<div class="col-lg-4 mg-t-20 mg-lg-t-0">
										<p class="mg-b-10">تاريخ المبيعات</p>
                                        <input type="date" name="saledate" id="saledate">
									</div><!-- col-4 -->
									<div class="col-lg-4 mg-t-20 mg-lg-t-0">
										<p class="mg-b-10">نوع التصميم</p><select class="form-control select2" >
											<option label="Choose one">
											</option>
											<option value="Firefox">
												Firefox
											</option>
											<option value="Chrome">
												Chrome
											</option>
											<option value="Safari">
												Safari
											</option>
											<option value="Opera">
												Opera
											</option>
											<option value="Internet Explorer">
												Internet Explorer
											</option>
										</select>
									</div><!-- col-4 -->
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-12">
						<div class="card">
							<div class="card-body">
								<div class="table-responsive">
									<table class="table text-md-nowrap" id="example1">
										<thead>
											<tr>
												<th class="wd-15p border-bottom-0">رقم الفاتورة</th>
												<th class="wd-15p border-bottom-0">اسم العميل</th>
                                                <th class="wd-10p border-bottom-0">عدد الثياب</th>
												<th class="wd-20p border-bottom-0">المبلغ المستلم</th>
												<th class="wd-15p border-bottom-0">المبلغ المتبقي</th>
												<th class="wd-25p border-bottom-0">نوع التصميم</th>
                                                <th class="wd-25p border-bottom-0">الاخيارات</th>

											</tr>
										</thead>
										<tbody>
                                            @php
                                             $collection=[];
                                            @endphp
                                            {{-- @foreach ($customers as $customer ) --}}
                                            <tr>
                                                {{-- @endforeach --}}
                                                @foreach ($sizes as $size )
												<td>{{$size->customer->invoice_number}}</td>
												<td>{{$size->customer->name}}</td>
                                                <td>{{$size->customer->number_dresses}}</td>
												<td>{{$size->receivedamount}}</td>
												<td>{{$size->remainingamount}}</td>
												<td>{{$size->design->name_design}}</td>
    											<td>
                                                    <div class="dropdown">
                                                        <button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-primary"
                                                        data-toggle="dropdown" type="button">خيارات<i class="fas fa-caret-down ml-1"></i></button>
                                                        <div class="dropdown-menu tx-13">
                                                           <button class="btn btn-primary btn-block" ><a class="dropdown-item" href="print-invoice/{{$size->id}}">طباعة</a></button>
                                                           <button class="btn btn-info btn-block" ><a class="dropdown-item " href="#">فحص</a></button>
                                                            <button class="btn btn-dark btn-block" > <a class="dropdown-item" href="#">مرتجع الفاتورة</a></button>
                                                            <button class="btn btn-warning btn-block"> <a class="dropdown-item" href="#">تعديل</a></button>
                                                            <button class="btn btn-danger btn-block"> <a class="dropdown-item" href="#">حذف</a></button>

                                                        </div>
                                                    </div>


                                                </td>
											</tr>

                                            @endforeach

										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!--/div-->

				</div>
				<!-- /row -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
<!-- Internal Data tables -->
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
<!--Internal  Datatable js -->
<script src="{{URL::asset('assets/js/table-data.js')}}"></script>
@endsection

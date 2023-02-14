@extends('layouts.master')
@section('css')
<!-- Internal Data table css -->
<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
<style>
    #table{
        margin-right: 5%;

    }
    td{
        padding-left: 70px;
        font-size: 20px;

    }


</style>
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">الموردين و العملاء</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ قائمة الموردين</span>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row opened -->
				<div class="row row-sm">
                        <table id="table">
                            <tr>
                                <td>
                                    <input type="checkbox">
                                    <label><p>مستحق دفع المشتريات</p></label>
                                </td>
                                <td>
                                    <input type="checkbox">
                                    <label><p>مرجع مشتريات</p></label>
                                </td>
                                <td>
                                    <input type="checkbox">
                                    <label><p>ارصدة مسابقة</p></label>
                                </td>
                                <td>
                                  <input type="checkbox">
                                  <label><p>رصيد افتتاحي</p></label>
                                </td>
                            </tr>
                        </table>
                        <div class="row" style="margin:10px">
                            <div class="col-lg-3">
                                <label><span>مخصص ل</span></label>
                                <select  >
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
                             </div>
                            <div class="col-lg-3">
                                {{-- <label><span>الحي</span></label>
                                <input type="text"> --}}
                            </div>
                            <div class="col-lg-3">
                                <label><span>الحالة</span></label>
                                <select  >
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
                            </div>


                        </div>

					<div class="col-xl-12">
						<div class="card">
							<div class="card-body">
								<div class="table-responsive">
									<table class="table text-md-nowrap" id="example1">
										<thead>
											<tr>

												<th class="wd-25p border-bottom-0">خيارات</th>
												<th class="wd-25p border-bottom-0">معرف الاتصال</th>
												<th class="wd-25p border-bottom-0">اسم النشاط</th>
												<th class="wd-25p border-bottom-0">الاسم</th>
												<th class="wd-25p border-bottom-0">الايميل</th>
												<th class="wd-25p border-bottom-0"> الرقم الضربي</th>
												<th class="wd-25p border-bottom-0">الحد الائتماني</th>
												<th class="wd-25p border-bottom-0">فترة الدفع</th>
												<th class="wd-25p border-bottom-0">الرصيد الافتتاحي</th>
												<th class="wd-25p border-bottom-0">ارصدة السابقة</th>
												<th class="wd-25p border-bottom-0">تاريخ الاضافة</th>
												{{-- <th class="wd-25p border-bottom-0">مجموعة العملاء</th> --}}
												<th class="wd-25p border-bottom-0">العنوان</th>
												<th class="wd-25p border-bottom-0">رقم الهاتف</th>
												<th class="wd-25p border-bottom-0">مجموعة المشتريات غير مدفوعة</th>
												<th class="wd-25p border-bottom-0">اجمالي مستحق مرجع المشتريات</th>
											</tr>
										</thead>
										<tbody>
                                            @foreach ($suppliers as $supplier)
                                            <tr>
												<td>
                                                    <div class="dropdown">
                                                        <button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-primary"
                                                        data-toggle="dropdown" type="button">خيارات<i class="fas fa-caret-down ml-1"></i></button>
                                                        <div class="dropdown-menu tx-13">
                                                          <button class="btn btn-warning btn-block"> <a class="dropdown-item" href="#">تعديل</a></button>
                                                           <button class="btn btn-info btn-block"> <a class="dropdown-item " href="#">فحص</a></button>
                                                           <button class="btn btn-danger btn-block"> <a class="dropdown-item" href="#">حذف</a></button>
                                                        </div>
                                                    </div>
                                                </td>
												<td>{{$supplier->contactId}}</td>
												<td>{{$supplier->activisms}} </td>
												<td>{{$supplier->firstname}}</td>
												<td>{{$supplier->email}}</td>
												<td>{{$supplier->tax_number}}</td>
                                                <td>Bella</td>
												<td>{{$supplier->payment_period}}</td>
												<td>{{$supplier->initial_balance}} </td>
                                                <td>Bella</td>
												<td>Chloe</td>
												<td>{{$supplier->city}},{{$supplier->country}},{{$supplier->postal_code}}</td>
												<td>{{$supplier->phone}}</td>
												<td>System Developer</td>
												<td>2018/03/12</td>
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

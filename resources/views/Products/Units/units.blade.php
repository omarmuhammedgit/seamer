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
							<h4 class="content-title mb-0 my-auto">الوحدات</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0"></span>
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
				<!-- row opened -->
				<div class="row row-sm">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-header pb-0" >
								<div class="d-flex justify-content-between" style="text-align: center;">
									<h4 class="card-title mg-b-0">قائمة الوحدات</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>
							</div>

                            {{-- <div class="col-sm-4 col-md-4" style="text-align: left;"> --}}
                                {{-- <div class="card custom-card"> --}}
                                    <div class="card-body" style="text-align: left;">

                                        <a class="btn ripple btn-info" data-target="#modaldemo3" data-toggle="modal" href="">اضافة</a>
                                    </div>
                                {{-- </div> --}}
                            </div>

							<div class="card-body">
								<div class="table-responsive">
									<table class="table text-md-nowrap" id="example1">
										<thead>
											<tr>
												<th class="wd-15p border-bottom-0">اسم الوحدة</th>
												<th class="wd-15p border-bottom-0">الوحدة الفرعية</th>
                                                <th class="wd-20p border-bottom-0">خيارات</th>
											</tr>
										</thead>
										<tbody>
                                            @foreach ($units as $unit)
											<tr>
												<td>{{$unit->name_unit}}</td>
												<td>{{$unit->sub_unit}}</td>
												<td>
                                                    <div class="dropdown">
                                                        <button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-primary"
                                                        data-toggle="dropdown" type="button">خيارات<i class="fas fa-caret-down ml-1"></i></button>
                                                        <div class="dropdown-menu tx-13">
                                                          <button class="btn btn-warning btn-block"> <a class="dropdown-item" href="#">تعديل</a></button>
                                                           <button class="btn btn-danger btn-block"> <a class="dropdown-item" href="#">حذف</a></button>
                                                        </div>
                                                    </div>                                                </td>
											</tr>
                                            @endforeach

										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
                    <div class="modal" id="modaldemo3">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content modal-content-demo">
                                <div class="modal-header">
                                    <h6 class="modal-title">اضافة وحدة</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{route('Products-unit.store')}}" method="POST">
                                        @csrf
                                    <div class="row col-4">
                                        <table>
                                            <tr>
                                                <td><label for="">اسم الوحدة</label><br>
                                                    <input type="text" name="name_unit" placeholder="اسم الوحدة">
                                                </td>
                                            </tr>
                                            <tr></tr>
                                            <tr>
                                                <td><input type="radio">
                                                    <label for="">هل لديه وحدة فرعية</label><br>
                                                    <input type="text" placeholder="الوحدة الفرعية" name="sub_unit">
                                                </td>

                                                <td><input type="text" placeholder="200"></td>

                                                <td><input type="text" placeholder="الوحدة الرئيسية"></td>
                                            </tr>
                                        </table>

                                    </div>
                                     <div class="modal-footer">
                                    <button class="btn ripple btn-primary" type="submit">حفظ</button>
                                    <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">الالغاء</button>
                                </div>
                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>
					<!--/div-->

				<!-- /row -->
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

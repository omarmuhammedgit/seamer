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
@if(session()->has('edit'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ session()->get('edit') }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if(session()->has('delete'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>{{ session()->get('delete') }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
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
                                                    <a class="modal-effect btn btn-sm btn-info" data-effect="effect-scale"
                                                       data-id="{{ $unit->id }}" data-name_unit="{{ $unit->name_unit }}"
                                                       data-sub_unit="{{ $unit->sub_unit }}" data-toggle="modal" href="#exampleModal2"
                                                       title="تعديل"><i class="las la-pen"></i></a>

                                                    <a class="modal-effect btn btn-sm btn-danger" data-effect="effect-scale"
                                                       data-id="{{ $unit->id }}" data-name_unit="{{ $unit->name_unit }}" data-toggle="modal"
                                                       href="#modaldemo9" title="حذف"><i class="las la-trash"></i></a>
                                                </td>
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
                      <!-- edit -->
             <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">تعديل الوحدة</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form action="{{route('unit-update')}}" method="post" autocomplete="off">
                            {{-- {{method_field('patch')}} --}}
                            {{csrf_field()}}
                            <div class="form-group">
                                <input type="hidden" name="id" id="id" value="">
                                <label for="recipient-name" class="col-form-label">اسم التصميم:</label>
                                <input class="form-control" name="name_unit" id="name_unit" type="text">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">رقم التصميم:</label>
                                <textarea class="form-control" id="sub_unit" name="sub_unit"></textarea>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">تاكيد</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- delete -->
        <div class="modal" id="modaldemo9">
         <div class="modal-dialog modal-dialog-centered" role="document">
             <div class="modal-content modal-content-demo">
                 <div class="modal-header">
                     <h6 class="modal-title">حذف الوحدة</h6><button aria-label="Close" class="close" data-dismiss="modal"
                                                                    type="button"><span aria-hidden="true">&times;</span></button>
                 </div>
                 <form action="{{route('unit-delete')}}" method="post">
                     {{-- {{method_field('delete')}} --}}
                     {{csrf_field()}}
                     <div class="modal-body">
                         <p>هل انت متاكد من عملية الحذف ؟</p><br>
                         <input type="hidden" name="id" id="id" value="">
                         <input class="form-control" name="name_unit" id="name_unit" type="text" readonly>
                     </div>
                     <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                         <button type="submit" class="btn btn-danger">تاكيد</button>
                     </div>
             </div>
             </form>
         </div>
     </div>

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
<script>
    $('#exampleModal2').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var name_unit = button.data('name_unit')
        var sub_unit = button.data('sub_unit')
        var modal = $(this)
        modal.find('.modal-body #id').val(id);
        modal.find('.modal-body #name_unit').val(name_unit);
        modal.find('.modal-body #sub_unit').val(sub_unit);
    })
</script>

<script>
    $('#modaldemo9').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var name_unit = button.data('name_unit')
        var modal = $(this)
        modal.find('.modal-body #id').val(id);
        modal.find('.modal-body #name_unit').val(name_unit);
    })
</script>
@endsection

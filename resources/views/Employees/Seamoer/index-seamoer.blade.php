@extends('layouts.master')
@section('css')
    <!-- Internal Data table css -->
    <link href="{{ URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الموظفين</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ عرض
                    الموظفين</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row opened -->
    <div class="row row-sm">
        {{-- <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="row row-sm mg-b-20">
                        <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                            <p class="mg-b-10">اسم الموظف</p><select class="form-control select2" id="search_name"
                                name="search_name">
                                <option label="الكل" value="الكل">
                                </option>
                                @foreach ($employees as $employee)
                                    <option value="{{ $employee->first_name }}">
                                        {{ $employee->first_name }}
                                    </option>
                                @endforeach

                            </select>
                        </div><!-- col-4 -->
                        <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                            <p class="mg-b-10">الصلاحية</p><select class="form-control select2" id="search_permission"
                                name="search_permission">
                                <option label="الكل">
                                </option>
                                @foreach ($employees as $employee)
                                    <option value="{{ $employee->id }}">
                                        {{ $employee->permission }}
                                    </option>
                                @endforeach
                            </select>
                        </div><!-- col-4 -->
                        <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                            <p class="mg-b-10">المسمى الوظيفي</p><select class="form-control select2" id="search_job_title"
                                name="search_job_title">
                                <option label="الكل">
                                </option>
                                @foreach ($employees as $employee)
                                    <option value="{{ $employee->job_title }}">
                                        {{ $employee->job_title }}
                                    </option>
                                @endforeach
                            </select>
                        </div><!-- col-4 -->
                        <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                            <p class="mg-b-10">تاريخ التعين</p>
                            <input type="date" name="saledate" id="saledate">
                        </div><!-- col-4 -->
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive" id="ajax_searchDiv">
                        <table class="table text-md-nowrap" id="example1">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">اسم الخياط</th>
                                    <th class="wd-20p border-bottom-0">اسم المحل</th>
                                    <th class="wd-15p border-bottom-0">رقم السجل التجاري</th>
                                    <th class="wd-10p border-bottom-0">رقم الهاتف</th>
                                    <th class="wd-25p border-bottom-0">البريد الالكتروني</th>
                                    <th class="wd-25p border-bottom-0">العنوان</th>
                                    <th class="wd-25p border-bottom-0">اخيارات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($seamoers as $seamoer)
                                    <tr>
                                        <td>{{ $seamoer->name }}</td>
                                        <td> {{ $seamoer->shopname }}</td>
                                        <td>{{ $seamoer->recordnumber }}</td>
                                        <td>{{ $seamoer->phone }}</td>
                                        <td>{{ $seamoer->email }}</td>
                                        <td>{{ $seamoer->city }},{{ $seamoer->district }},{{ $seamoer->street }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-primary"
                                                data-toggle="dropdown" type="button">خيارات<i class="fas fa-caret-down ml-1"></i></button>
                                                <div class="dropdown-menu tx-13">
                                                   <button class="btn ripple btn-primary" ><a class="dropdown-item" href="#">تعديل</a></button>
                                                   <button class="btn ripple btn-primary" ><a class="dropdown-item " href="#">فحص</a></button>
                                                    <button class="btn ripple btn-primary" > <a class="dropdown-item" href="#">حذف</a></button>
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
    <input type="hidden" id="token_search" value="{{ csrf_token() }}">
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
@section('js')
    <!-- Internal Data tables -->
    <script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/vfs_fonts.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js') }}"></script>
    <!--Internal  Datatable js -->
    <script src="{{ URL::asset('assets/js/table-data.js') }}"></script>
    @endsection

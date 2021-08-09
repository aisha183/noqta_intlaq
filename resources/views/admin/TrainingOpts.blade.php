@extends('layouts.layout')

@section('content')
    <!--begin::Content-->
    <div class="d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Card-->
                <div class="card card-custom card-custom gutter-t">
                    <div class="card-header py-3">
                        <div class="card-title">
                            <h2 class="card-label">
                                فرص التدريب
                            </h2>
                        </div>
                        <div class="card-toolbar">
                            <div class="dropdown dropdown-inline  mr-2">
                                <button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="svg-icon svg-icon-md">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path
                                                    d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z"
                                                    fill="#000000" opacity="0.3"/>
                                            <path
                                                    d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z"
                                                    fill="#000000"/>
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>تصدير
                                </button>
                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                    <ul class="navi flex-column navi-hover py-2">
                                        <li
                                                class="navi-header font-weight-bolder text-uppercase font-size-xs text-primary pb-2">
                                            Export Tools
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link" id="export_print">
                                            <span class="navi-icon">
                                                <i class="la la-print"></i>
                                            </span>
                                                <span class="navi-text">Print</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link" id="export_copy">
                                            <span class="navi-icon">
                                                <i class="la la-copy"></i>
                                            </span>
                                                <span class="navi-text">Copy</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link" id="export_excel">
                                            <span class="navi-icon">
                                                <i class="la la-file-excel-o"></i>
                                            </span>
                                                <span class="navi-text">Excel</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link" id="export_csv">
                                            <span class="navi-icon">
                                                <i class="la la-file-text-o"></i>
                                            </span>
                                                <span class="navi-text">CSV</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link" id="export_pdf">
                                            <span class="navi-icon">
                                                <i class="la la-file-pdf-o"></i>
                                            </span>
                                                <span class="navi-text">PDF</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <!--begin: Datatable-->

                        <table class="table table-checkable" id="kt_datatable2">
                            <thead>
                            <tr>
                                <th></th>
                                <th>#</th>
                                <th>اسم الشركة\المؤسسة</th>
                                <th>المجال</th>
                                <th>التاريخ</th>
                                <th>الحالة</th>
                                <th>الإجراءات</th>
                            </tr>
                            </thead>

                            <tbody>

                            <tr>
                                @foreach($Chances as $chanc )
                                    <td></td>
                                    <td>{{$chanc->id}}</td>
                                    @foreach($compqurys as $compqury)
                                        @if($compqury->id==$chanc->CompanyId )
                                            <td>{{$compqury->name}}</td>
                                        @endif
                                    @endforeach

                                    <td>{{$chanc->Field_training_need}}</td>
                                    <td>{{$compqury->created_at->format('Y-m-d')}}</td>
                                    {{--<td nowrap="nowrap">--}}
                                    {{--@if($chanc->status==0  )--}}
                                    {{--<span--}}
                                    {{--class="label label-lg label-inline mr-2 label-rounded label-dark"--}}
                                    {{--style="color:#fff;">--}}
                                    {{--{{'منتهي'}}--}}
                                    {{--</span>--}}
                                    {{--</td>--}}
                                    {{--<td nowrap="nowrap">--}}
                                    {{--<a href="#view" data-toggle="modal" data-target="#showAddModal_{{$chanc->id}}"--}}
                                    {{--class="btn btn-sm btn-icon btn-light btn-hover-info mr-2"--}}
                                    {{--title="عرض الإعلان">--}}
                                    {{--<i class="icon-x1 text-info text-primary-40 flaticon-eye icon-primary"></i>--}}
                                    {{--</a>--}}
                                    {{--<form method="POST" action="{{ URL('company/chance/delete/' .$chanc->id) }}"--}}
                                    {{--style="display: inline-block;">--}}
                                    {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}

                                    {{--<button type="sumbit" class="btn btn-hover-bg-danger">--}}
                                    {{--<span class="svg-icon svg-icon-md svg-icon-primary">--}}
                                    {{--<svg xmlns="http://www.w3.org/2000/svg"--}}
                                    {{--xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"--}}
                                    {{--viewBox="0 0 24 24" version="1.1">--}}
                                    {{--<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                                    {{--<rect x="0" y="0" width="24" height="24"/>--}}
                                    {{--<path--}}
                                    {{--d="M12,22 C6.4771525,22 2,17.5228475 2,12 C2,6.4771525 6.4771525,2 12,2 C17.5228475,2 22,6.4771525 22,12 C22,17.5228475 17.5228475,22 12,22 Z M12,20 C16.418278,20 20,16.418278 20,12 C20,7.581722 16.418278,4 12,4 C7.581722,4 4,7.581722 4,12 C4,16.418278 7.581722,20 12,20 Z M19.0710678,4.92893219 L19.0710678,4.92893219 C19.4615921,5.31945648 19.4615921,5.95262146 19.0710678,6.34314575 L6.34314575,19.0710678 C5.95262146,19.4615921 5.31945648,19.4615921 4.92893219,19.0710678 L4.92893219,19.0710678 C4.5384079,18.6805435 4.5384079,18.0473785 4.92893219,17.6568542 L17.6568542,4.92893219 C18.0473785,4.5384079 18.6805435,4.5384079 19.0710678,4.92893219 Z"--}}
                                    {{--fill="#000000" fill-rule="nonzero" opacity="0.3"/>--}}
                                    {{--</g>--}}
                                    {{--</svg>--}}
                                    {{--</span>--}}
                                    {{--</button>--}}
                                    {{--</form>--}}
                                    {{--</td>--}}

                                    {{--@elseif($chanc->status==1)--}}

                                    {{--<span--}}
                                    {{--class="label label-lg label-inline mr-2 label-rounded label-success"--}}
                                    {{--style="color:#fff;">--}}
                                    {{--منشور</span>--}}
                                    {{--</td>--}}
                                    {{--<td nowrap="nowrap">--}}
                                    {{--<a href="#view" data-toggle="modal"--}}
                                    {{--data-target="#showAddModal_{{$chanc->id}}"--}}
                                    {{--class="btn btn-sm btn-icon btn-light btn-hover-info mr-2"--}}
                                    {{--title="عرض الإعلان">--}}
                                    {{--<i class="icon-x1 text-info text-primary-40 flaticon-eye icon-primary"></i>--}}
                                    {{--</a>--}}

                                    {{--<form method="POST" action="{{ URL('company/chance/delete/' .$chanc->id) }}"--}}
                                    {{--style="display: inline-block;">--}}
                                    {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}

                                    {{--<button type="sumbit" class="btn btn-hover-bg-danger">--}}
                                    {{--<span class="svg-icon svg-icon-md svg-icon-primary">--}}
                                    {{--<svg xmlns="http://www.w3.org/2000/svg"--}}
                                    {{--xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"--}}
                                    {{--viewBox="0 0 24 24" version="1.1">--}}
                                    {{--<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                                    {{--<rect x="0" y="0" width="24" height="24"/>--}}
                                    {{--<path--}}
                                    {{--d="M12,22 C6.4771525,22 2,17.5228475 2,12 C2,6.4771525 6.4771525,2 12,2 C17.5228475,2 22,6.4771525 22,12 C22,17.5228475 17.5228475,22 12,22 Z M12,20 C16.418278,20 20,16.418278 20,12 C20,7.581722 16.418278,4 12,4 C7.581722,4 4,7.581722 4,12 C4,16.418278 7.581722,20 12,20 Z M19.0710678,4.92893219 L19.0710678,4.92893219 C19.4615921,5.31945648 19.4615921,5.95262146 19.0710678,6.34314575 L6.34314575,19.0710678 C5.95262146,19.4615921 5.31945648,19.4615921 4.92893219,19.0710678 L4.92893219,19.0710678 C4.5384079,18.6805435 4.5384079,18.0473785 4.92893219,17.6568542 L17.6568542,4.92893219 C18.0473785,4.5384079 18.6805435,4.5384079 19.0710678,4.92893219 Z"--}}
                                    {{--fill="#000000" fill-rule="nonzero" opacity="0.3"/>--}}
                                    {{--</g>--}}
                                    {{--</svg>--}}
                                    {{--</span>--}}
                                    {{--</button>--}}
                                    {{--</form>--}}
                                    {{--</td>--}}
                                    {{--@elseif($chanc->status==2)--}}

                                    {{--<span--}}
                                    {{--class="label label-lg label-inline mr-2 label-rounded label-warning"--}}
                                    {{--style="color:#fff;">--}}
                                    {{--بإنتظار الموافقة</span>--}}
                                    {{--</td>--}}
                                    {{--<td nowrap="nowrap">--}}
                                    {{--<a href="#view" data-toggle="modal"--}}
                                    {{--data-target="#showAddModal_{{$chanc->id}}"--}}
                                    {{--class="btn btn-sm btn-icon btn-light btn-hover-info mr-2"--}}
                                    {{--title="عرض الإعلان">--}}
                                    {{--<i class="icon-x1 text-info text-primary-40 flaticon-eye icon-primary"></i>--}}
                                    {{--</a>--}}
                                    {{--<a href="#accebt" data-toggle="modal"--}}
                                    {{--class="btn btn-sm btn-icon btn-light btn-hover-success mr-2"--}}
                                    {{--title="قبول">--}}

                                    {{--<i--}}
                                    {{--class="icon-x1 text-success text-success-40 flaticon2-check-mark icon-success"></i>--}}
                                    {{--</a>--}}

                                    {{--<form method="POST" action="{{ URL('company/chance/delete/' .$chanc->id) }}"--}}
                                    {{--style="display: inline-block;">--}}
                                    {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}

                                    {{--<button type="sumbit" class="btn btn-hover-bg-danger">--}}
                                    {{--<span class="svg-icon svg-icon-md svg-icon-primary">--}}
                                    {{--<svg xmlns="http://www.w3.org/2000/svg"--}}
                                    {{--xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"--}}
                                    {{--viewBox="0 0 24 24" version="1.1">--}}
                                    {{--<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                                    {{--<rect x="0" y="0" width="24" height="24"/>--}}
                                    {{--<path--}}
                                    {{--d="M12,22 C6.4771525,22 2,17.5228475 2,12 C2,6.4771525 6.4771525,2 12,2 C17.5228475,2 22,6.4771525 22,12 C22,17.5228475 17.5228475,22 12,22 Z M12,20 C16.418278,20 20,16.418278 20,12 C20,7.581722 16.418278,4 12,4 C7.581722,4 4,7.581722 4,12 C4,16.418278 7.581722,20 12,20 Z M19.0710678,4.92893219 L19.0710678,4.92893219 C19.4615921,5.31945648 19.4615921,5.95262146 19.0710678,6.34314575 L6.34314575,19.0710678 C5.95262146,19.4615921 5.31945648,19.4615921 4.92893219,19.0710678 L4.92893219,19.0710678 C4.5384079,18.6805435 4.5384079,18.0473785 4.92893219,17.6568542 L17.6568542,4.92893219 C18.0473785,4.5384079 18.6805435,4.5384079 19.0710678,4.92893219 Z"--}}
                                    {{--fill="#000000" fill-rule="nonzero" opacity="0.3"/>--}}
                                    {{--</g>--}}
                                    {{--</svg>--}}
                                    {{--</span>--}}
                                    {{--</button>--}}
                                    {{--</form>--}}

                                    {{--</td>--}}
                                    {{--@elseif($chanc->status==3)--}}
                                    {{--<span--}}
                                    {{--class="label label-lg label-inline mr-2 label-rounded label-danger"--}}
                                    {{--style="color:#fff;">--}}
                                    {{--مرفوض--}}
                                    {{--</span>--}}

                                    {{--</td>--}}






                                    <td nowrap="nowrap">
                                        <a href="#view" data-toggle="modal"
                                           data-target="#showAddModal_{{$chanc->id}}"
                                           class="btn btn-sm btn-icon btn-light btn-hover-info mr-2"
                                           title="عرض الإعلان">
                                            <i class="icon-x1 text-info text-primary-40 flaticon-eye icon-primary"></i>
                                        </a>

                                        {{--@if(\App\ChanceCompany::where('status', '1')->first())--}}
                                        {{--<button data-Unpublish="{{$chanc->id}}"--}}
                                        {{--data-url="{{route('company.chance.Unpublish', $chanc->id)}}"--}}
                                        {{--type="button"--}}
                                        {{--class="btn btn-success Unpublish"--}}
                                        {{--style="">--}}
                                        {{--إلغاء التفعيل--}}
                                        {{--نشر--}}
                                        {{--</button>--}}
                                        {{--@else--}}
                                        {{--<button data-url="{{route('company.chance.Publish', $chanc->id)}}"--}}
                                        {{--type="button"--}}
                                        {{--class="btn btn-outline-success Publish"--}}
                                        {{--style="">--}}
                                        {{--تفعيل الخدمة--}}
                                        {{--إنهاء النشر--}}
                                        {{--</button>--}}
                                        {{--@endif--}}

                                        {{--<input type="checkbox" data-id="{{$chanc->id}}" class="toggle-class"--}}
                                               {{--data-on="نشر" data-off="الغاء النشر"--}}
                                               {{--checked data-toggle="toggle" data-onstyle="success"--}}
                                               {{--data-offstyle="danger"--}}
                                                {{--{{$chanc->status ? 'checked':''}}--}}
                                        {{-->--}}

                                        @if($chanc->status ==0)

                                        <button data-deviceServiceAvID="{{$chanc->id}}"
                                        data-url="{{route('company.chance.Publish', $chanc->id)}}"
                                        type="button"
                                        class="btn btn-success deactivateِSeviceAV"
                                        style="" data-id="Publish">

                                        النشر
                                        </button>
                                        @elseif($chanc->status ==1)

                                        <button data-url="{{route('company.chance.Unpublish', $chanc->id)}}"
                                        type="button"
                                        class="btn btn-outline-success activateServiceAV"
                                        style="" data-id="Unpublish">
                                        الغاء نشر
                                        </button>
                                        @endif


                                        <form method="POST" action="{{ URL('company/chance/delete/' .$chanc->id) }}"
                                              style="display: inline-block;">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                            <button type="sumbit" class="btn btn-hover-bg-danger">
                                                <span class="svg-icon svg-icon-md svg-icon-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                 viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"/>
                                                    <path
                                                            d="M12,22 C6.4771525,22 2,17.5228475 2,12 C2,6.4771525 6.4771525,2 12,2 C17.5228475,2 22,6.4771525 22,12 C22,17.5228475 17.5228475,22 12,22 Z M12,20 C16.418278,20 20,16.418278 20,12 C20,7.581722 16.418278,4 12,4 C7.581722,4 4,7.581722 4,12 C4,16.418278 7.581722,20 12,20 Z M19.0710678,4.92893219 L19.0710678,4.92893219 C19.4615921,5.31945648 19.4615921,5.95262146 19.0710678,6.34314575 L6.34314575,19.0710678 C5.95262146,19.4615921 5.31945648,19.4615921 4.92893219,19.0710678 L4.92893219,19.0710678 C4.5384079,18.6805435 4.5384079,18.0473785 4.92893219,17.6568542 L17.6568542,4.92893219 C18.0473785,4.5384079 18.6805435,4.5384079 19.0710678,4.92893219 Z"
                                                            fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                </g>
                                            </svg>
                                        </span>
                                            </button>
                                        </form>
                                    </td>
                            </tr>

                            </tbody>
                            @endforeach
                        </table>

                        <!--end: Datatable-->
                    </div>
                </div>
                <!--end::Card-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->

        <!-- begin::view Info -->
        @foreach($Chances as $chanc )
            <div class="modal fade" id="showAddModal_{{$chanc->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"> عرض بيانات فرصة التدريب</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i aria-hidden="true" class="ki ki-close"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="form">
                                <div class="form-group row">
                                    <div class="col-lg-8">
                                        <label>نص الإعلان</label>
                                        <textarea name="" id="" cols="30" rows="5" class="form-control"
                                                  disabled="disabled">{{$chanc->AdText}}</textarea>
                                    </div>
                                </div>
                                <div class="separator separator-dashed my-5"></div>
                                <h5>فترة التدريب</h5>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>تبدأ من تاريخ</label>
                                        <input type="date" class="form-control" value="{{$chanc->from_date}}"
                                               disabled="disabled"/>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>تنتهي بتاريخ</label>
                                        <input type="date" class="form-control" value="{{$chanc->to_date}}"
                                               disabled="disabled"/>
                                    </div>
                                </div>
                                <div class="separator separator-dashed my-5"></div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>عدد المتدربين المطلوب</label>
                                        <input type="number" class="form-control" value="{{$chanc->NO_trainers}}"
                                               disabled="disabled"/>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>مجال التدريب المطلوب</label>
                                        <input type="text" class="form-control" value="{{$chanc->Field_training_need}}"
                                               disabled="disabled"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-primary font-weight-bold"
                                    data-dismiss="modal">اغلاق
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end::view Info -->
        @endforeach


    </div>

    <!--end::Content-->



@endsection


{{--@section("js")--}}

<script>

    $(function () {
        $('.toggle-class').change(function () {

            var status = $(this).prop('checked') === true ? 0: 1;
            var id=$(this).data('id');

            $.ajax({
                type:"get",
                dataType :"json",
                url:"/changeStatus",
                data:{'status':status ,'id':id},
                success:function (data) {
                    console.log(data.success)
                }

            })

        })
    });

    $(document).on('click', '.activateServiceAV', function (e) {
        //get data and setup url
        var url = $(this).data('url');


        //setup csrf token
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        e.preventDefault();
        swal({
                title: "تأكيد عملية التفعيل ؟",
                type: "info",
                cancelButtonColor: '#c54b42',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: true,
                confirmButtonText: "تأكيد!",
                cancelButtonText: 'إلغاء',
                showCancelButton: true
            }, function () {
                //send put request
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {'status': status = 1},

                    success: function (data) {
                        if (data.status === 0) {
                            swal({
                                type: 'warning',
                                title: data.message,
                                timer: 4000,
                            });
                            return console.log(data.success);
//
                        } else {
                            swal({
                                type: 'success',
                                title: data.message,
                                timer: 2000,
                            });
//                            $("#publish").show();
                            location.reload(2000);
                        }
                        console.log(data);

                    }

                    ,
                    error:
                        function (data) {
                            //alert(data.responseText);
                            swal({
                                type: 'warning',
                                title: 'عذراً، حدث خلل أنثاء عملية الإرسال',
                                timer: 4000
                            });
                        }
                })
                ;
            }
        );
    });

    $(document).on('click', '.deactivateِSeviceAV', function (e) {
        //get data and setup url
        var url = $(this).data('url');


        //setup csrf token
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        e.preventDefault();

//        var device_id=;
        swal({
                title: "تأكيد عملية إلغاء التفعيل ؟",
                type: "error",
                cancelButtonColor: '#c54b42',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: true,
                confirmButtonText: "تأكيد!",
                cancelButtonText: 'إلغاء',
                showCancelButton: true
            }, function () {
                //send put request
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {'status': status = 2},
                    success: function (data) {
                        if (data.status === 1) {
                            swal({
                                type: 'warning',
                                title: data.message,
                                timer: 4000
                            });
                            return console.log(data.success);
                        } else {
                            swal({
                                type: 'success',
                                title: data.message,
                                timer: 2000,
                            });
                            $("#unpublish").log(data)
                            location.reload(2000);
                        }
//                        console.log(data);

                    },
                    error:
                        function (data) {
                            //alert(data.responseText);
                            swal({
                                type: 'warning',
                                title: 'عذراً، حدث خلل أنثاء عملية الإرسال',
                                timer: 4000
                            });
                        }
                });
            }
        );
    });
</script>

{{--@endsection--}}
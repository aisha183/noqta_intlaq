@extends('layouts.layout')

@section('content')
    <!--begin::Content-->
    <div class="d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Card-->
                <div class="card card-custom card-custom gutter-t" style="
    right: 156px;
">
                    <div class="card-header py-3">
                        <div class="card-title">
                            <h2 class="card-label">
                                طلبات التدريب
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
                        @foreach ($requests as $request)
                            <table class="table table-checkable" id="kt_datatable2">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>#</th>
                                    <th>اسم المتدرب</th>
                                    <th>مكان التدريب</th>
                                    <th>تاريخ الطلب</th>
                                    <th>الإجراءات</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td></td>
                                    <td>{{ $request->id }}</td>
                                    <td>{{ $request->first_name }} {{ $request->secund_name }} {{ $request->last_name }}</td>
                                    @foreach($compqurys as $compqury)
                                        @if($compqury->id==$request->CompanyId )
                                            <td>{{$compqury->name}}</td>
                                        @endif
                                    @endforeach
                                    <td>{{ $request->created_at->format('Y-m-d') }}</td>
                                    <td nowrap="nowrap">
                                        <a href="#showReqModal" data-toggle="modal"
                                           data-target="#showReqModal_{{$request->id}}"
                                           class="btn btn-sm btn-icon btn-primary btn-hover-success mr-2"
                                           title=" عرض الطلبات">
                                            <i class="icon-x1 text-light text-primary-40 flaticon-clipboard icon-primary"></i>
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <!--end: Datatable-->
                    </div>
                </div>
                <!--end::Card-->

                @foreach ($requests as $request)
                    <div class="modal fade" id="showReqModal_{{$request->id}}" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog ">
                            <div class="modal-content" style="

    width: 852px;
    height: auto;
    left: 207px;
    top: 118px;
    ">
                                <div class="card-body">
                                    <form class="form">
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <div class="col-lg-4">
                                                    <label>الاسم</label>
                                                    <input type="text" class="form-control"
                                                           value="{{$request->first_name}} {{$request->secund_name}} {{$request->last_name}}"
                                                           disabled="disabled"/>
                                                </div>

                                                <div class="col-lg-4">
                                                    <label>البريد الإلكتروني</label>
                                                    <input type="email" class="form-control"
                                                           value="{{$request->email}}"
                                                           disabled="disabled"/>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label>رقم الجوال </label>
                                                    <input type="number" class="form-control"
                                                           value="{{$request->phhone_no}}"
                                                           disabled="disabled"/>
                                                </div>
                                            </div>


                                            <div class="separator separator-dashed my-5"></div>

                                            <div class="form-group row">

                                                <div class="col-lg-4">
                                                    <label>الجامعة</label>
                                                    <input type="text" class="form-control"
                                                           value="{{$request->University}}"
                                                           disabled="disabled"/>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label>المجال </label>
                                                    <input type="text" class="form-control"
                                                           value="{{$request->college}}" disabled="disabled"/>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label>التخصص</label>
                                                    <input type="text" class="form-control"
                                                           value="{{$request->Specialization}}"
                                                           disabled="disabled"/>
                                                </div>
                                            </div>
                                            <div class="separator separator-dashed my-5"></div>
                                            <div class="form-group row">
                                                <div class="col-lg-4">
                                                    <label>نوع التدريب</label>
                                                    @if($request->training_type== 1)
                                                        <input type="text" class="form-control"
                                                               value="{{'تدريب جامعي'}}"
                                                               disabled="disabled"/>
                                                    @elseif($request->training_type== 2)
                                                        <input type="text" class="form-control"
                                                               value="{{'تدريب خاص'}}"
                                                               disabled="disabled"/>
                                                    @elseif($request->training_type== 3)
                                                        <input type="text" class="form-control"
                                                               value="{{'تطوع'}}"
                                                               disabled="disabled"/>
                                                    @endif
                                                </div>
                                                <div class="col-lg-4">
                                                    <label>الخبرة </label>
                                                    <input type="text" class="form-control"
                                                           value="{{$request->Experience_level}}"
                                                           disabled="disabled"/>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <label>نص الطلب</label>
                                                <textarea type="" class="form-control"
                                                          value=""
                                                          disabled="disabled" style="
    height: 118.9px;
"> {{$request->request_Text}} </textarea>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
            </div>
        </div>
    <!--end::Container

            @endforeach
            >
                            <!--end::Entry-->

        <!-- begin::Edit Info -->

    </div>
    </div>

    <!-- end::Edit Info -->


    @endforeach
    <!--end::Content-->



@endsection

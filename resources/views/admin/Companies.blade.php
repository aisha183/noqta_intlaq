@extends('layouts.layout')

@section('content')
    <!--begin::Content-->
    <div class="d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container" style="
                     margin-right: 93px;
                     width: 1233px;
                     padding-right: 42px;
                     position: absolute;">
                <!--begin::Card-->
                <div class="card card-custom card-custom gutter-t">
                    <div class="card-header py-3">
                        <div class="card-title">
                            <h2 class="card-label">
                                الشركات
                            </h2>
                        </div>
                        <div class="card-toolbar">
                            <div class="dropdown dropdown-inline  mr-2">
                                <button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        style=" margin-right: 780px;margin-left: 5px;padding-left: 6px;">
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
                                    <ul class="navi flex-column-reverse navi-hover py-4">
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

                        </span>    <a href="#add" data-toggle="modal" data-target="#addCompanyModal"
                                      class="btn btn-sm btn-icon btn-light btn-hover-primary mr-2" title="إضافة" style="

                                      margin-top: 11px;
                                      width: 28px;
                                      margin-left: 29.5px;
                                      ">

                            <i class="icon-x1 text-success text-success-40 flaticon2-add icon-success"></i>
                        </a>
                        </button>

                    </div>

                    <div class="card-body">
                        <!--begin: Datatable-->
                        <table class="table table-checkable" id="kt_datatable2">
                            <thead>
                            <tr>
                                <th></th>
                                <th>#</th>
                                <th>الاسم</th>
                                <th>البريد الإلكتروني</th>
                                <th>المدينة</th>
                                <th>قطاع العمل</th>
                                <th>حالة التدريب</th>
                                <th>الإجراءات</th>
                            </tr>
                            </thead>
                            <tbody>
                         <?php
                                 $no=1;
                                 ?>
                            @foreach ($compqurys as $compqury)
                                <tr>
                                    <td></td>
                                    <td>{{ $no }}</td>
                                    <td>{{ $compqury->name }}</td>
                                    <td>{{ $compqury->email }}</td>
                                    <td>{{ $compqury->city }}</td>
                                    <td>{{ $compqury->sectoreWorks }}</td>

                                    <td nowrap="nowrap">
                                    <span class="label label-lg label-inline mr-2 label-rounded label-success"
                                          style="color:#fff;">
                                         {{ $compqury->stutusTrain }}
                                       </span>
                                    </td>

                                    <td nowrap="nowrap">
                                        <a href="#view" data-toggle="modal"
                                           data-target="#showCompanyModal_{{$compqury->id}}"
                                           class="btn btn-sm btn-icon btn-light btn-hover-info mr-2" title="عرض">
                                            <i class="icon-x1 text-primary text-primary-40 flaticon-eye icon-primary"></i>
                                        </a>
                                        <a href="#CompanyModal" data-toggle="modal"
                                           data-target="#CompanyModal_{{$compqury->id}}"
                                           class="btn btn-sm btn-icon btn-light btn-hover-primary mr-2" title="تعديل">

                                            <i class="icon-x1 text-success text-success-40 flaticon-edit icon-success"></i>
                                        </a>

                                        <form method="POST" action="{{ URL('company/delete/' .$compqury->id) }}"
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
                                <?php $no++;?>
                            @endforeach

                            </tbody>
                        </table>
                        <!--end: Datatable-->
                    </div>
                </div>
                <!--end::Card-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->


        <!--begin::Modal Insert-->
        <div class="modal fade" id="addCompanyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content" style="
    width: 900px;
    margin-left: 0px;
    left: 196px;
    top: 140px;
">
                    <h5 class="modal-title" id="exampleModalLabel">إضافة شركة جديدة</h5>
                    <div class="modal-header text-white">
                        <button class="close" data-dismiss="modal"><span>&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{route('company.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label>اسم الشركة</label>
                                    <input type="text" class="form-control"
                                           name="name"/>
                                </div>

                                <div class="col-lg-4">
                                    <label>البريد الإلكتروني</label>
                                    <input type="email" class="form-control"
                                           name="email"/>
                                </div>
                                <div class="col-lg-4">
                                    <label>رقم التواصل</label>
                                    <input type="number" class="form-control"
                                           name="phone"/>
                                </div>
                            </div>

                            <div class="separator separator-dashed my-5"></div>

                            <div class="form-group row">

                                <div class="col-lg-4">
                                    <label>المدينة</label>
                                    <input type="text" class="form-control"
                                           name="city"/>
                                </div>
                                <div class="col-lg-4">
                                    <label>العنوان</label>
                                    <input type="text" class="form-control"
                                           name="Addresse"/>
                                </div>
                                <div class="col-lg-4">
                                    <label>قطاع العمل</label>
                                    <input type="text" class="form-control"
                                           name="sectoreWorks"/>
                                </div>
                            </div>

                            <div class="separator separator-dashed my-5"></div>

                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label>تخصصات التدريب</label>
                                    <input type="text" class="form-control"
                                           name="TrainingSpecialty"/>
                                </div>
                                <div class="col-lg-4">
                                    <label>حالة التدريب</label>
                                    <input type="text" class="form-control"
                                           name="stutusTrain"/>
                                </div>
                                <div class="col-lg-4">
                                    <label>عدد الأفراد المتاح استقبالهم</label>
                                    <input type="number" class="form-control"
                                           name="noTrain"/>
                                </div>
                            </div>
                            <div class="separator separator-dashed my-5"></div>

                            <div class="form-group row">
                                <div class="col-lg-8">
                                    <label>نبذة مختصرة</label>

                                    <textarea name="about" id="" cols="30" rows="5"
                                              class="form-control">

                                                    </textarea>
                                </div>
                                <div class="col-4">
                                    <label for="exampleInputEmail1">أختر صوره العرض</label>
                                    <input type="file" id="file" class="form-control" name="UrlImg">
                                    <small id="photo_error" class="form-text text-danger"></small>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
                                <button type="submit" class="btn btn-primary">إضافة</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!--endModal-->

        <!--begin::Modal Edit-->
        @foreach($compqurys as $compqury)
            <div class="modal fade" id="CompanyModal_{{$compqury->id}}" tabindex="-1" role="dialog"
                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog ">
                    <div class="modal-content" style=" width: 900px;
    margin-left: 0px;
    left: 196px;
    top: 140px;">
                        <div class="modal-header text-white">
                            <h5 class="modal-title" id="exampleModalLabel">تعديل التصنيف</h5>
                            <button class="close" data-dismiss="modal"><span>&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{route('admin.company.update',$compqury->id)}}">
                                @csrf
                                {{--{{ method_field('PATCH') }}--}}

                                <div class="form-group row">
                                    <div class="col-lg-8">
                                        <label for="name" class="form-control-label">إسم الشركة</label>
                                        <input required type="title" name="name" class="form-control"
                                               value="{{$compqury->name}}">
                                    </div>

                                    <div class="col-lg-8">
                                        <label for="email" class="form-control-label">الإيميل</label>
                                        <input required type="email" name="email" class="form-control"
                                               value="{{$compqury->email}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label for="sectoreWorks" class="form-control-label">قطاع العمل</label>
                                        <input required type="title" name="sectoreWorks" class="form-control"
                                               value="{{$compqury->sectoreWorks}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="city" class="form-control-label">المدينة</label>
                                        <input required type="title" name="city" class="form-control"
                                               value="{{$compqury->city}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone" class="form-control-label">الجوال</label>
                                        <input required type="title" name="phone" class="form-control"
                                               value="{{$compqury->phone}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label for="stutusTrain" class="form-control-label">حالة التدريب</label>
                                        <input required type="title" name="stutusTrain" class="form-control"
                                               value="{{$compqury->stutusTrain}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="Addresse" class="form-control-label">العنوان</label>
                                        <input required type="title" name="Addresse" class="form-control"
                                               value="{{$compqury->Addresse}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="TrainingSpecialty" class="form-control-label">مجال التدريب</label>
                                        <input required type="title" name="TrainingSpecialty" class="form-control"
                                               value="{{$compqury->TrainingSpecialty}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label for="noTrain" class="form-control-label">عدد المتدربين</label>
                                        <input required type="number" name="noTrain" class="form-control"
                                               value="{{$compqury->noTrain}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="about" class="form-control-label">نبذة عن الشركة</label>
                                        <input required type="title" name="about" class="form-control"
                                               value="{{$compqury->about}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="UrlImg" class="form-control-label">الشعار</label>
                                        <p> <img src="{{asset('/images/'.$compqury->UrlImg)}}" alt="" width="100px"></p>

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
                                    <button type="submit" class="btn btn-primary">تعديل</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    <!--end::Modal-->
        <label>رقم التواصل</label>
        <!--Show::Modal-->
        @foreach ($compqurys as $compqury)
            <div class="modal fade" id="showCompanyModal_{{$compqury->id}}" tabindex="-1" role="dialog"
                 aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog ">
                    <div class="modal-content" style="
    width: 852px;
    left: 207px;">
                        <div class="card-body">
                            <form class="form">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <div class="col-lg-4">
                                            <label>اسم الشركة</label>
                                            <input type="text" class="form-control" value="{{$compqury->name}}"
                                                   disabled="disabled"/>
                                        </div>

                                        <div class="col-lg-4">
                                            <label>البريد الإلكتروني</label>
                                            <input type="email" class="form-control" value="{{$compqury->email}}"
                                                   disabled="disabled"/>
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="number" class="form-control" value="{{$compqury->phone}}"
                                                   disabled="disabled"/>
                                        </div>
                                    </div>


                                    <div class="separator separator-dashed my-5"></div>

                                    <div class="form-group row">

                                        <div class="col-lg-4">
                                            <label>المدينة</label>
                                            <input type="text" class="form-control" value="{{$compqury->city}}"
                                                   disabled="disabled"/>
                                        </div>
                                        <div class="col-lg-4">
                                            <label>الموقع</label>
                                            <input type="text" class="form-control"
                                                   value="{{$compqury->Addresse}}" disabled="disabled"/>
                                        </div>
                                        <div class="col-lg-4">
                                            <label>قطاع العمل</label>
                                            <input type="text" class="form-control" value="{{$compqury->sectoreWorks}}"
                                                   disabled="disabled"/>
                                        </div>
                                    </div>
                                    <div class="separator separator-dashed my-5"></div>
                                    <div class="form-group row">
                                        <div class="col-lg-4">
                                            <label>تخصصات التدريب</label>
                                            <input type="text" class="form-control"
                                                   value="{{$compqury->TrainingSpecialty}}"
                                                   disabled="disabled"/>
                                        </div>
                                        <div class="col-lg-4">
                                            <label>حالة التدريب</label>
                                            <input type="text" class="form-control" value="{{$compqury->stutusTrain}}"
                                                   disabled="disabled"/>
                                        </div>
                                        <div class="col-lg-4">
                                            <label>عدد الأفراد المتاح استقبالهم</label>
                                            <input type="number" class="form-control" value="{{$compqury->noTrain}}"
                                                   disabled="disabled"/>
                                        </div>
                                    </div>
                                    <div class="separator separator-dashed my-5"></div>
                                    <div class="form-group row">
                                        <div class="col-lg-8">
                                            <label>نبذة مختصرة</label>

                                            <textarea name="" id="" cols="30" rows="5" class="form-control"
                                                      disabled="disabled">{{$compqury->about}}</textarea>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="col">شعار الشركة</label>
                                            <p> <img src="{{asset('/images/'.$compqury->UrlImg)}}" alt="" width="100px"></p>


                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    @endforeach
    <!--End::Modal-->
    </div>
    <!--end::Content-->
<script>


</script>


@endsection

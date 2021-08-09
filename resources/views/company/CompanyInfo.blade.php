@extends('layouts.layout_Company')

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
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
                            البيانات الأساسية
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
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z"
                                                fill="#000000" opacity="0.3" />
                                            <path
                                                d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z"
                                                fill="#000000" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>تصدير</button>
                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                <ul class="navi flex-column navi-hover py-2">
                                    <li
                                        class="navi-header font-weight-bolder text-uppercase font-size-xs text-primary pb-2">
                                        Export Tools</li>
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
                        <!--begin::Button-->
                        <a href="#editInfo" class="btn btn-primary font-weight-bolder" data-toggle="modal"
                            data-target="#editInfo">
                            <i class="la la-edit"></i>تعديل البيانات</a>
                        <!--end::Button-->
                    </div>
                </div>
                <div class="card-body">
                    <form class="form">
                        <div class="card-body">
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label>اسم الشركة</label>
                                    <input type="text" class="form-control" value="شركة بوصلة لتكنولوجيا المعلومات"
                                        disabled="disabled" />
                                </div>

                                <div class="col-lg-4">
                                    <label>البريد الإلكتروني</label>
                                    <input type="email" class="form-control" value="info@bosala.tech"
                                        disabled="disabled" />
                                </div>
                                <div class="col-lg-4">
                                    <label>رقم التواصل</label>
                                    <input type="number" class="form-control" value="05999234" disabled="disabled" />
                                </div>
                            </div>


                            <div class="separator separator-dashed my-5"></div>

                            <div class="form-group row">

                                <div class="col-lg-4">
                                    <label>المدينة</label>
                                    <input type="text" class="form-control" value="غزة" disabled="disabled" />
                                </div>
                                <div class="col-lg-4">
                                    <label>الموقع</label>
                                    <input type="text" class="form-control"
                                        value="غزة شارع الوحدة عمارة الأمل الطابق الرابع" disabled="disabled" />
                                </div>
                                <div class="col-lg-4">
                                    <label>قطاع العمل</label>
                                    <input type="text" class="form-control" value="تكنولوجيا المعلومات"
                                        disabled="disabled" />
                                </div>
                            </div>
                            <div class="separator separator-dashed my-5"></div>
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label>تخصصات التدريب</label>
                                    <input type="text" class="form-control" value="تطوير ويب وهواتف ذكية"
                                        disabled="disabled" />
                                </div>
                                <div class="col-lg-4">
                                    <label>حالة التدريب</label>
                                    <input type="text" class="form-control" value="متاح" disabled="disabled" />
                                </div>
                                <div class="col-lg-4">
                                    <label>عدد الأفراد المتاح استقبالهم</label>
                                    <input type="number" class="form-control" value="05999234" disabled="disabled" />
                                </div>
                            </div>
                            <div class="separator separator-dashed my-5"></div>
                            <div class="form-group row">
                                <div class="col-lg-8">
                                    <label>نبذة مختصرة</label>

                                    <textarea name="" id="" cols="30" rows="5" class="form-control"
                                        disabled="disabled">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, sapiente tempora accusamus dignissimos est eius non hic eaque iste iure rerum! Eum eaque fuga asperiores ipsa, voluptatibus id! Tempora, obcaecati.</textarea>
                                </div>
                                <div class="col-lg-4">
                                    <label class="col">شعار الشركة</label>
                                    <img src="{{asset('assets/media/logos/شعار للفيس والانستا وتويتر.png')}}" style="height:120px" alt="">
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->



    <!-- begin::Edit Info -->
    <div class="modal fade" id="editInfo" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">تعديل البيانات الأساسية</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form">
                        <div class="card-body">
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label>اسم الشركة</label>
                                    <input type="text" class="form-control" value="شركة بوصلة لتكنولوجيا المعلومات" />
                                </div>

                                <div class="col-lg-4">
                                    <label>البريد الإلكتروني</label>
                                    <input type="email" class="form-control" value="info@bosala.tech"/>
                                </div>
                                <div class="col-lg-4">
                                    <label>رقم التواصل</label>
                                    <input type="number" class="form-control" value="05999234"/>
                                </div>
                            </div>


                            <div class="separator separator-dashed my-5"></div>

                            <div class="form-group row">

                                <div class="col-lg-4">
                                    <label>المدينة</label>
                                    <input type="text" class="form-control" value="غزة"/>
                                </div>
                                <div class="col-lg-4">
                                    <label>الموقع</label>
                                    <input type="text" class="form-control"
                                        value="غزة شارع الوحدة عمارة الأمل الطابق الرابع"/>
                                </div>
                                <div class="col-lg-4">
                                    <label>قطاع العمل</label>
                                    <input type="text" class="form-control" value="تكنولوجيا المعلومات"/>
                                </div>
                            </div>
                            <div class="separator separator-dashed my-5"></div>
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label>تخصصات التدريب</label>
                                    <input type="text" class="form-control" value="تطوير ويب وهواتف ذكية"/>
                                </div>
                                <div class="col-lg-4">
                                    <label>حالة التدريب</label>
                                    <input type="text" class="form-control" value="متاح" />
                                </div>
                                <div class="col-lg-4">
                                    <label>عدد الأفراد المتاح استقبالهم</label>
                                    <input type="number" class="form-control" value="05999234"/>
                                </div>
                            </div>
                            <div class="separator separator-dashed my-5"></div>
                            <div class="form-group row">
                                <div class="col-lg-8">
                                    <label>نبذة مختصرة</label>

                                    <textarea name="" id="" cols="30" rows="5" class="form-control">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, sapiente tempora accusamus dignissimos est eius non hic eaque iste iure rerum! Eum eaque fuga asperiores ipsa, voluptatibus id! Tempora, obcaecati.</textarea>
                                </div>
                                <div class="col-lg-4">
                                    <label>شعار الشركة</label>
                                    <input type="file" class="form-control"/>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary font-weight-bold">تعديل</button>
                    <button type="button" class="btn btn-light-primary font-weight-bold"
                        data-dismiss="modal">اغلاق</button>

                </div>
            </div>
        </div>
    </div>
    <!-- end::Edit Info -->

</div>
<!--end::Content-->



@endsection

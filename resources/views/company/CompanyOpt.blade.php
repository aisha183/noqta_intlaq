@extends('layouts.layout_Company')

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
                            قائمة الفرص
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
                    </div>
                </div>
                <div class="card-body">
                    <!--begin: Datatable-->
                    <table class="table table-checkable" id="kt_datatable2">
                        <thead>
                            <tr>
                                <th></th>
                                <th>#</th>
                                <th>تاريخ النشر</th>
                                <th>نص الإعلان</th>
                                <th>الحالة</th>
                                <th>الإجراءات</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td>1</td>
                                <td>23/11/2020</td>
                                <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</td>

                                <td nowrap="nowrap"><span
                                        class="label label-lg label-inline mr-2 label-rounded label-dark"
                                        style="color:#fff;">
                                        منتهي</span>
                                </td>
                                <td nowrap="nowrap">
                                    <a href="#view" data-toggle="modal"
                                        class="btn btn-sm btn-icon btn-light btn-hover-info mr-2" title="عرض الإعلان">
                                        <i class="icon-x1 text-info text-primary-40 flaticon-eye icon-primary"></i>
                                    </a>
                                    <a href="#edit" data-toggle="modal"
                                        class="btn btn-sm btn-icon btn-light btn-hover-success mr-2" title="تعديل">

                                        <i
                                            class="icon-x1 text-success text-success-40 flaticon-edit icon-success"></i>
                                    </a>
                                    <a href="javascript:;" class="btn btn-sm btn-icon btn-light btn-hover-danger"
                                        title="حذف الإعلان">
                                        <span class="svg-icon svg-icon-md svg-icon-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path
                                                        d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                        fill="#000000" fill-rule="nonzero" />
                                                    <path
                                                        d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                        fill="#000000" opacity="0.3" />
                                                </g>
                                            </svg>
                                        </span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>2</td>
                                <td>7/7/2021</td>
                                <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit..</td>
                                <td nowrap="nowrap"><span
                                        class="label label-lg label-inline mr-2 label-rounded label-warning"
                                        style="color:#fff;">
                                        بإنتظار الموافقة</span></td>
                                <td nowrap="nowrap">
                                    <a href="#view" data-toggle="modal"
                                        class="btn btn-sm btn-icon btn-light btn-hover-info mr-2" title="عرض الإعلان">
                                        <i class="icon-x1 text-info text-primary-40 flaticon-eye icon-primary"></i>
                                    </a>
                                    <a href="#edit" data-toggle="modal"
                                        class="btn btn-sm btn-icon btn-light btn-hover-success mr-2" title="تعديل">

                                        <i
                                            class="icon-x1 text-success text-success-40 flaticon-edit icon-success"></i>
                                    </a>
                                    <a href="javascript:;" class="btn btn-sm btn-icon btn-light btn-hover-danger"
                                        title="حذف الإعلان">
                                        <span class="svg-icon svg-icon-md svg-icon-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path
                                                        d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                        fill="#000000" fill-rule="nonzero" />
                                                    <path
                                                        d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                        fill="#000000" opacity="0.3" />
                                                </g>
                                            </svg>
                                        </span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>3</td>
                                <td>15/6/2021</td>
                                <td>molestias at! Animi error repellat ratione corrupti odio quos.</td>
                                <td nowrap="nowrap">
                                    <span class="label label-lg label-inline mr-2 label-rounded"
                                        style="background-color:#28a745; color:#fff;">
                                        منشور</span>

                                </td>
                                <td nowrap="nowrap">
                                    <a href="#view" data-toggle="modal"
                                        class="btn btn-sm btn-icon btn-light btn-hover-info mr-2" title="عرض الإعلان">
                                        <i class="icon-x1 text-info text-primary-40 flaticon-eye icon-primary"></i>
                                    </a>
                                    <a href="#edit" data-toggle="modal"
                                        class="btn btn-sm btn-icon btn-light btn-hover-success mr-2" title="تعديل">

                                        <i
                                            class="icon-x1 text-success text-success-40 flaticon-edit icon-success"></i>
                                    </a>
                                    <a href="javascript:;" class="btn btn-sm btn-icon btn-light btn-hover-danger"
                                        title="حذف الإعلان">
                                        <span class="svg-icon svg-icon-md svg-icon-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path
                                                        d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                        fill="#000000" fill-rule="nonzero" />
                                                    <path
                                                        d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                        fill="#000000" opacity="0.3" />
                                                </g>
                                            </svg>
                                        </span>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td></td>
                                <td>4</td>
                                <td>22/6/2021</td>
                                <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</td>

                                <td nowrap="nowrap"><span
                                        class="label label-lg label-inline mr-2 label-rounded label-danger"
                                        style="color:#fff;">
                                        مرفوض</span></td>
                                <td nowrap="nowrap">
                                    <a href="#view" data-toggle="modal"
                                        class="btn btn-sm btn-icon btn-light btn-hover-info mr-2" title="عرض الإعلان">
                                        <i class="icon-x1 text-info text-primary-40 flaticon-eye icon-primary"></i>
                                    </a>
                                    <a href="#edit" data-toggle="modal"
                                        class="btn btn-sm btn-icon btn-light btn-hover-success mr-2" title="تعديل">

                                        <i
                                            class="icon-x1 text-success text-success-40 flaticon-edit icon-success"></i>
                                    </a>
                                    <a href="javascript:;" class="btn btn-sm btn-icon btn-light btn-hover-danger"
                                        title="حذف الإعلان">
                                        <span class="svg-icon svg-icon-md svg-icon-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path
                                                        d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                        fill="#000000" fill-rule="nonzero" />
                                                    <path
                                                        d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                        fill="#000000" opacity="0.3" />
                                                </g>
                                            </svg>
                                        </span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>5</td>
                                <td>22/6/2021</td>
                                <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</td>

                                <td nowrap="nowrap"><span
                                        class="label label-lg label-inline mr-2 label-rounded label-info"
                                        style="color:#fff;">
                                        مسودة</span></td>
                                <td nowrap="nowrap">
                                    <a href="#view" data-toggle="modal"
                                        class="btn btn-sm btn-icon btn-light btn-hover-info mr-2" title="عرض الإعلان">
                                        <i class="icon-x1 text-info text-primary-40 flaticon-eye icon-primary"></i>
                                    </a>
                                    <a href="#edit" data-toggle="modal"
                                        class="btn btn-sm btn-icon btn-light btn-hover-success mr-2" title="تعديل">

                                        <i
                                            class="icon-x1 text-success text-success-40 flaticon-edit icon-success"></i>
                                    </a>
                                    <a href="javascript:;" class="btn btn-sm btn-icon btn-light btn-hover-danger"
                                        title="حذف الإعلان">
                                        <span class="svg-icon svg-icon-md svg-icon-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path
                                                        d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                        fill="#000000" fill-rule="nonzero" />
                                                    <path
                                                        d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                        fill="#000000" opacity="0.3" />
                                                </g>
                                            </svg>
                                        </span>
                                    </a>
                                </td>
                            </tr>
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

    <!-- begin::view Info -->
    <div class="modal fade" id="view" tabindex="-1" role="dialog" aria-hidden="true">
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
                                <textarea name="" id="" cols="30" rows="5" class="form-control" disabled="disabled">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit eligendi dignissimos molestias earum eveniet voluptatibus, facilis, rem, voluptatum porro ipsam alias ut quo cumque. Nesciunt accusantium magnam repellendus praesentium nihil!</textarea>
                            </div>
                        </div>
                        <div class="separator separator-dashed my-5"></div>
                        <h5>فترة التدريب</h5>
                        <div class="form-group row">
                            <div class="col-lg-4">
                                <label>تبدأ من تاريخ</label>
                                <input type="date" class="form-control" value="05/17/2021" disabled="disabled"/>
                            </div>
                            <div class="col-lg-4">
                                <label>تنتهي بتاريخ</label>
                                <input type="date" class="form-control" value="07/17/2021" disabled="disabled"/>
                            </div>
                        </div>
                        <div class="separator separator-dashed my-5"></div>
                        <div class="form-group row">
                            <div class="col-lg-4">
                                <label>عدد المتدربين المطلوب</label>
                                <input type="number" class="form-control" value="5" disabled="disabled"/>
                            </div>
                            <div class="col-lg-4">
                                <label>مجال التدريب المطلوب</label>
                                <input type="text" class="form-control" value="تطوير وتصميم مواقع الويب" disabled="disabled"/>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-primary font-weight-bold"
                        data-dismiss="modal">اغلاق</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end::view Info -->

    <!-- begin::Edit Info -->
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">تعديل البيانات</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form">
                        <div class="form-group row">
                            <div class="col-lg-8">
                                <label>نص الإعلان</label>
                                <textarea name="" id="" cols="30" rows="5" class="form-control">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit eligendi dignissimos molestias earum eveniet voluptatibus, facilis, rem, voluptatum porro ipsam alias ut quo cumque. Nesciunt accusantium magnam repellendus praesentium nihil!</textarea>
                            </div>
                        </div>
                        <div class="separator separator-dashed my-5"></div>
                        <h5>فترة التدريب</h5>
                        <div class="form-group row">
                            <div class="col-lg-4">
                                <label>تبدأ من تاريخ</label>
                                <input type="date" class="form-control" value="05/17/2021"/>
                            </div>
                            <div class="col-lg-4">
                                <label>تنتهي بتاريخ</label>
                                <input type="date" class="form-control" value="07/17/2021"/>
                            </div>
                        </div>
                        <div class="separator separator-dashed my-5"></div>
                        <div class="form-group row">
                            <div class="col-lg-4">
                                <label>عدد المتدربين المطلوب</label>
                                <input type="number" class="form-control" value="5"/>
                            </div>
                            <div class="col-lg-4">
                                <label>مجال التدريب المطلوب</label>
                                <input type="text" class="form-control" value="تطوير وتصميم مواقع الويب"/>
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

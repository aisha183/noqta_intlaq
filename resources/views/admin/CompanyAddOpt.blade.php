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
                            إضافة فرصة تدريب
                        </h2>
                    </div>
                </div>

                <form class="form">
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-lg-8">
                                <label>نص الإعلان</label>
                                <textarea name="" id="" cols="30" rows="5" class="form-control"
                                    placeholder="ادخل نص اعلان فرصة التدريب المطروحة .."></textarea>
                            </div>
                        </div>

                        <div class="separator separator-dashed my-5"></div>
                        <h5>فترة التدريب</h5>
                        <div class="form-group row">
                            <div class="col-lg-4">
                                <label>تبدأ من تاريخ</label>
                                <input type="date" class="form-control" />
                            </div>
                            <div class="col-lg-4">
                                <label>تنتهي بتاريخ</label>
                                <input type="date" class="form-control" />
                            </div>
                        </div>
                        <div class="separator separator-dashed my-5"></div>
                        <div class="form-group row">
                            <div class="col-lg-4">
                                <label>عدد المتدربين المطلوب</label>
                                <input type="number" class="form-control" placeholder="ادخل عدد المتدربين المطلوب" />
                            </div>
                            <div class="col-lg-4">
                                <label>مجال التدريب المطلوب</label>
                                <input type="text" class="form-control" placeholder="ادخل مجال التدريب المقترح" />
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary mr-2"> 
                             نشر الآن
                             <i class="la la-share"></i>
                        </button>
                        <button class="btn btn-secondary">
                            حفظ كمسودة
                            <i class="la la-sticky-note"></i>
                        </button>
                    </div>
                </form>

            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->

</div>
<!--end::Content-->



@endsection

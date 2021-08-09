@extends('layouts.webLayout')

@section('content')

    <section class="contactus mt-5" id="contact">
    <div class="container">
        <div class="row mb-5 pb-5">
            <div class="col-sm-7" data-aos="fade-up" data-aos-offset="-500">
                <h3 class="font-weight-medium text-dark mt-5 mt-lg-0 ">تواصل معنا</h3>
                <h5 class="text-secondary mb-4">لنبقى على تواصل يمكنك مراسلتنا والاستفسار في أي وقت</h5>
                <form class="contact-form">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" placeholder="الاسم*">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="email" class="form-control" id="mail" placeholder="البريد الإلكتروني*">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <textarea name="message" id="message" class="form-control" placeholder="نص الرسالة*"
                                    rows="5"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <a href="#" class="btn btn-primary" style="padding:10px 40px; border-radius:12px;">ارسال</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-5 text-left" data-aos="fade-up" style="padding-top: 80px;">
                <img src="{{asset('assets/images/contact.jpg')}}" alt="contact" class="img-fluid">
            </div>
        </div>
    </div>
</section>




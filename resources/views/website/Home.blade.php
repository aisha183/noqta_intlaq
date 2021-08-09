@extends('layouts.webLayout')

@section('content')
    <div class="page-wrapper">

        <section class="banner-one" id="banner">
            <div class="container">
                <div class="banner-one__moc">
                    <img src="{{asset('assets/images/hero-img.png')}}" class="banner-one__line" alt="">
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="banner-one__content">

                            <h3 class="banner-one__title">نقطة إنطلاق </h3>
                            <p class="banner-one__text">
                                مكانك الأمثل للوصول لأماكن وفرص التدريب
                                <br>
                                وبدأ حياتك المهنية والعملية.</p>
                            <a href="#" class="banner-one__btn thm-btn ">اكتشف المزيد</a>

                        </div>
                    </div>
                </div>

                <div class="arrow">
                    <span></span>
                    <span></span>
                </div>
            </div>
        </section>
        <section class="blog-one blog-one__home" id="news">
            <div class="container">
                <div class="block-title text-center">
                    <p class="block-title__tag-line">اختر مكان التدريب المناسب لك وانطلق</p>
                    <h2 class="block-title__title">أماكن التدريب</h2>
                </div>

                <form action="{{ route('search') }}" method="GET">

                <div class="form-group row">
                    <div class="col-lg-9">
                        <label>بحث</label>
                        <input type="text" class="form-control" placeholder="أدخل محدد البحث هنا .."  style="height: 45px;   border-radius: 12px;" name="search" id="search" required/>
                    </div>
                    <div class="col-lg-3 d-flex" style="align-items:flex-end; ">
                        <button type="submit" class="btn btn-primary px-5">بحث</button>
                    </div>
                </div>

                </form>


                <div class="row" id="search">
                    @if($companies->isNotEmpty())
                        @foreach ($companies as $post)
                            <div class="col-lg-4 col-md-12 col-sm-12 wow fadeInUp" data-wow-duration="1500ms">
                                <div class="blog-one__single">

                                    <div class="blog-one__image hover14">
                                        <img src="{{asset('/images/'.$post->UrlImg)}}" alt="" width="100px">
                                    </div>
                                    <div class="chat-icon">
                                        <a href="/website/trainingrequest/{{$post->id}}/">
                                            <i class="flaticon-paper-plane-1 text-light"></i>
                                        </a>

                                    </div>
                                    <div class="blog-one__content">
                                        <h3 class="blog-one__title">
                                            <a href="/website/companyinfo/{{$post->id}}/">{{$post->name}}</a>
                                        </h3>
                                        <div class="text d-flex mb-3">
                                            <i class="flaticon2-envelope text-primary pl-2 icon-2x"></i>
                                            <span>
                                    {{$post->email}}
                                </span>
                                        </div>
                                        <div class="text d-flex mb-3">
                                            <i class="flaticon2-phone text-primary pl-2 icon-2x"></i>
                                            <span>
                                    {{$post->phone}}
                                </span>
                                        </div>
                                        <div class="text d-flex mb-3">
                                            <i class="flaticon2-pin text-primary pl-2 icon-2x"></i>
                                            <span>
                                  {{$post->Addresse}} </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div>
                            <h2>Not found :)</h2>
                        </div>
                    @endif


                </div>
            </div>
        </section>
    </div>

@endsection
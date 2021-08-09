@extends('layouts.webLayout')

@section('content')

    <section class="coinfo" id="">
        <div class="container">
            <div class="row justify-content-center">
                @foreach($chances as $chance)
                    <div class="col-10 card my-5">
                        <div class="card-body">
                            @foreach($compqurys as $compqury)
                                @if($compqury->id==$chance->CompanyId )
                            <div class="d-flex align-items-center mb-5">
                                <div class="card-img col-1 ">
                                    <img src="{{asset('/images/'.$compqury->UrlImg)}}" alt="" width="100px">
                                </div>
                                <div class="text col-8">

                                            <h5 class="card-title"> {{$compqury->name}} </h5>
                                            <p class="card-text">{{$compqury->email}}</p>


                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 info-text">
                                    <p class="font-weight-bold"> فترة التدريب: </p>
                                    <p> من <span>{{$chance->from_date}}</span></p>
                                    <p> الى <span>{{$chance->to_date}}</span></p>
                                </div>
                                <div class="col-6 info-text">
                                    <p class="font-weight-bold">عدد المتدربين : </p>
                                    <p>{{$chance->NO_trainers}}</p>
                                </div>
                                <div class="col-6 info-text">
                                    <p class="font-weight-bold">مجالات التدريب المطلوبة :</p>
                                    <p>{{$chance->Field_training_need}}</p>
                                </div>
                                <div class="col-6 info-text">
                                    <p class="font-weight-bold">رقم التواصل : </p>
                                    <p>{{$compqury->phone}}</p>
                                </div>
                                <div class="col-10 mt-3">
                                    <p class="font-weight-bold">نص الإعلان :</p>
                                    <p>{{$chance->AdText}}</p>
                                </div>
                            </div>

                        </div>
                        <div class="chat-req">
                            <a href="/website/trainingrequest"> ارسال طلب تدريب
                                <i class="flaticon-paper-plane-1 text-light"></i>
                            </a>
                        </div>
                    </div>
                    @endif
                @endforeach
                @endforeach


            </div>
        </div>
    </section>
@endsection
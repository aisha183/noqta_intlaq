@extends('layouts.webLayout')

@section('content')


    <section class="coinfo" id="">
        <div class="container">
            <div class="row">
                <div class="col-12 card my-5">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-5">
                            {{--@foreach($results as $result)--}}
                            <div class="card-img col-1 ">
                                <img src="{{asset('/images/'.$results->UrlImg)}}" alt="" width="100px">
                            </div>

                                <div class="text col-8">
                                    <h5 class="card-title">{{$results->name}}</h5>
                                    <p class="card-text">{{$results->email}}</p>
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-6 info-text">
                                <p class="font-weight-bold"> قطاع العمل : </p>
                                <p>{{$results->sectoreWorks}}</p>
                            </div>
                            <div class="col-6 info-text">
                                <p class="font-weight-bold">رقم التواصل : </p>
                                <p>{{$results->phone}}</p>
                            </div>
                            <div class="col-6 info-text">
                                <p class="font-weight-bold">المدينة :</p>
                                <p>{{$results->city}}</p>
                            </div>
                            <div class="col-6 info-text">
                                <p class="font-weight-bold">العنوان :</p>
                                <p>{{$results->Addresse}}</p>
                            </div>
                            <div class="col-6 info-text">
                                <p class="font-weight-bold">عدد أماكن التدريب المتاحة :</p>
                                <p>{{$results->noTrain}}</p>
                            </div>
                            <div class="col-6 info-text">
                                <p class="font-weight-bold">حالة التدريب :</p>
                                <p>{{$results->stutusTrain}}</p>
                            </div>
                            <div class="col-6 info-text">
                                <p class="font-weight-bold">مجالات التدريب المطلوبة :</p>
                                <p>{{$results->TrainingSpecialty}}</p>
                            </div>

                            <div class="col-10 mt-5">
                                <p class="font-weight-bold">نبذة عن الشركة :</p>
                                <p>
                                    {{$results->about}}
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="chat-req">
                        <a href="/website/trainingrequest/{{$results->id}}"> ارسال طلب تدريب
                            <i class="flaticon-paper-plane-1 text-light"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {{--@endforeach--}}
    </section>

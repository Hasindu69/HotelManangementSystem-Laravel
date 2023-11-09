@extends('frontlayout')
@section('content')

    <!--Slider section start-->
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img height="800" src="{{asset('images/banner1.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img height="800" src="{{asset('images/banner2.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img height="800" src="{{asset('images/banner3.jpg')}}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!--Slider Section End-->

    <!--Service Section Start-->
    <div class="container my-4">
        <h1 class="text-center border-bottom">Services</h1>
        @foreach($services as $service)
        <div class="row my-4">
            <div class="col-md-4">

                <p style="display:none">{{$myIMG = Str::remove('public',$service->photo)}}</p>
                <img class="img-thumbnail" src="{{asset('storage/'.$myIMG)}}" alt="Image"/>

                <!--<img src="{{asset('images/room1.jpg')}}" class="img-thumbnail" alt="..." -->
            </div>
            <div class="col-md-8">
                <h3>{{$service->title}}</h3>
                <p>{{$service->small_desc}}</p>
                    <a href="{{url('service')}}" class="btn btn-primary">Read More</a>
                </p>
            </div>
        </div>
        @endforeach
    </div>
    <!--Service Section End-->

    <a id="gallery">
    <!--Gallery Section Start-->
    <div class="container my-4">
        <h1 class="text-center border-bottom">Gallery</h1>
        <div class="row my-4">
            @foreach($roomTypes as $rtype)
            <div class="col-md-3">
                <div class="card">
                    <h5 class="card-header">{{$rtype->title}}</h5>
                    <div class="card-body">
                    @foreach($rtype->roomtypeimgs as $index=> $img)

                            <p style="display:none">{{$myIMG = Str::remove('public',$img->img_src)}}</p>
                            <a href="{{asset('storage/'.$myIMG)}}" data-lightbox="rgallery {{$rtype->id}}">

                            <!--<a href="{{asset('storage')}}/app/imgs'.$img->img_src" data-lightbox="rgallery {{$rtype->id}}">-->
                            @if($index > 0)

                            <p style="display:none">{{$myIMG = Str::remove('public',$img->img_src)}}</p>
                            <img class="img-fluid hide" src="{{asset('storage/'.$myIMG)}}" alt="Image"/>

                            <!--<img class="img-fluid hide" src="{{asset('storage')}}/app/imgs'.$img->img_src" /> -->
                            @else
                            
                            <p style="display:none">{{$myIMG = Str::remove('public',$img->img_src)}}</p>
                            <img class="img-fluid" src="{{asset('storage/'.$myIMG)}}" alt="Image"/>

                            <!--<img class="img-fluid" src="{{asset('storage')}}/app/imgs'.$img->img_src" /> -->
                            @endif
                            </a>

                            <!--<p style="display:none">{{$myIMG = Str::remove('public',$img->img_src)}}</p>
                            <img width="80" src="{{asset('storage/'.$myIMG)}}" alt="Image"/>-->

                            <!-- <img width="150" src="{{asset('storage')}}/app/public/imgs'.$img->img_src" /> -->
                        </td>
                    @endforeach
                        
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!--Gallery Section End-->
    </a>

<link rel="stylesheet" type="text/css" href="{{asset('vendor')}}/lightbox2-dev/dist/css/lightbox.min.css" />
<script type="text/javascript" src="{{asset('vendor')}}/lightbox2-dev/dist/js/lightbox.min.js"></script>

<style type="text/css">
    .hide{
        display:none;
    }
</style>
@endsection
</body>
</html>
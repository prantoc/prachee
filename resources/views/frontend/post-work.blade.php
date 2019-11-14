@extends('layouts.frontend.work-design')
@section('content')
<section class="middle-sec-one mt-3 ml-2">
   <div class="container-fluid">
      <div class="row">
         @if($works->count())
         @foreach($works as $work)
         <!-- <div class="col-md-2"></div> -->
         <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 mb-3">
            <div class="hovereffect">
               {{-- <img class="img-responsive" src="{{asset('assets/img/3.jpg')}}" alt=""> --}}
               @if($work->img)
               <img class="img-responsive" src="{{asset('img/feature/'.$work->img)}}" alt="$work->img" style="max-height: 180px;">
               @else
               <img class="img-responsive" src="{{asset('assets/img/no-image.jpg')}}" alt="John Doe" style="max-height: 180px;">
               @endif
               <div class="overlay">
                  <h2>{{$work->title}}</h2>
                  <a class="info" href="{{route('all-work-single')}}">See Full Post</a>
                  {{-- {{route('single-work', $work->slug)}} --}}
               </div>
            </div>
         </div>
         @endforeach
          @else
          <span class="btn btn-dark w-md px-5 mt-2 mb-2  d-flex justify-content-center text-white text-blod"><small>No data available !</small></span>
        @endif
      </div>
   </div>
</section>
@endsection
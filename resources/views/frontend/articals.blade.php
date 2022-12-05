@extends('frontend.admin')

@section('content')
    <div class="grid-sizer"></div>
@foreach ($articales as $artical)

    <article class="masonry__brick entry format-video" data-aos="fade-up">

        <div class="entry__thumb video-image">
                <img src="{{ asset('frontend/images/' . $artical->image) }}"
                    srcset="{{ asset('frontend/images/' . $artical->image) }}, {{ asset('frontend/images/' . $artical->image) }}"
                    alt="">
        </div>

        <div class="entry__text">
            <div class="entry__header">

                <div class="entry__date">
                    <a href="single-video.html">{{$artical->date}}</a>
                </div>
                <h1 class="entry__title"><a href="{{ route('Articales.single', ['id'=>$artical->id]) }}">{{$artical->title}}</a></h1>

            </div>
            <div class="entry__excerpt">
                <p>
                    @php
                        echo Str::limit($artical->description, 100, '...');
                    @endphp
                </p>
            </div>
            <div class="entry__meta">
                <span class="entry__meta-links">
                    <a href="#">{{$artical->category}}</a>
                    <a href="#">{{$artical->type}}</a>
                </span>
            </div>
        </div>

    </article> <!-- end article -->
    
    
    @endforeach

@endsection

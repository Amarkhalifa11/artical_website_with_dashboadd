@extends('frontend.admin')
@section('silde')
    <div class="featured">




        <div class="featured__column featured__column--big">

            <div class="entry" style="background-image:url('{{ asset('frontend/images/' . $articals['image']) }}');">

                <div class="entry__content">
                    <span class="entry__category"><a href="#0">{{ $articals['category'] }}</a></span>

                    <h1><a href="{{ route('Articales.single', ['id'=>$articals->id]) }}" title="">{{ $articals['title'] }}</a></h1>

                    <div class="entry__info">
                        <a href="#0" class="entry__profile-pic">
                            <img class="avatar" src="{{ asset('frontend/images/' . $articals['image_auther']) }}"
                                alt="">
                        </a>

                        <ul class="entry__meta">
                            <li><a href="#0">{{ $articals['auther'] }}</a></li>
                            <li>{{ $articals['date'] }}</li>
                        </ul>
                    </div>
                </div> <!-- end entry__content -->

            </div> <!-- end entry -->

        </div> <!-- end featured__big -->




        <div class="featured__column featured__column--small">

            <div class="entry" style="background-image:url('{{ asset('frontend/images/' . $posts['image']) }}');">

                <div class="entry__content">
                    <span class="entry__category"><a href="#0">{{ $posts['category'] }}</a></span>

                    <h1><a href="{{ route('Articales.single', ['id'=>$posts->id]) }}" title="">{{ $posts['title'] }}</a></h1>

                    <div class="entry__info">
                        <a href="#0" class="entry__profile-pic">
                            <img class="avatar" src="{{ asset('frontend/images/' . $posts['image_auther']) }}"
                                alt="">
                        </a>

                        <ul class="entry__meta">
                            <li><a href="#0">{{ $posts['auther'] }}</a></li>
                            <li>{{ $posts['date'] }}</li>
                        </ul>
                    </div>
                </div> <!-- end entry__content -->

            </div> <!-- end entry -->

            <div class="entry" style="background-image:url('{{ asset('frontend/images/' . $show['image']) }}');">

                <div class="entry__content">
                    <span class="entry__category"><a href="#0">{{ $show['category'] }}</a></span>

                    <h1><a href="#0" title="">{{ $show['title'] }}</a></h1>

                    <div class="entry__info">
                        <a href="{{ route('Articales.single', ['id'=>$show->id]) }}" class="entry__profile-pic">
                            <img class="avatar" src="{{ asset('frontend/images/' . $show['image_auther']) }}"
                                alt="">
                        </a>

                        <ul class="entry__meta">
                            <li><a href="#0">{{ $show['auther'] }}</a></li>
                            <li>{{ $show['date'] }}</li>
                        </ul>
                    </div>
                </div> <!-- end entry__content -->

            </div> <!-- end entry -->

        </div> <!-- end featured__small -->


    </div> <!-- end featured -->
@endsection

@section('content')
    <div class="grid-sizer"></div>
@foreach ($articalls as $artical)

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
                    <a href="category.html">{{$artical->category}}</a>
                    <a href="category.html">{{$artical->type}}</a>
                </span>
            </div>
        </div>

    </article> <!-- end article -->
    
    
    @endforeach

@endsection

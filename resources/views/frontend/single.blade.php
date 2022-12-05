@extends('frontend.admin')
@section('desc')

    <section class="s-content s-content--narrow s-content--no-padding-bottom">

        <article class="row format-standard">

            <div class="s-content__header col-full">
                
                <h1 class="s-content__header-title">
                    {{$articales->title}}
                </h1>
                <ul class="s-content__header-meta">
                    <li class="date">{{$articales->date}}</li>
                    <li class="date">{{$articales->auther}}</li>
                    <li class="cat">
                        In
                        <a href="#">{{$articales->category}}</a>
                        <a href="#">{{$articales->type}}</a>
                    </li>
                </ul>
            </div> <!-- end s-content__header -->

            <div class="text-center">
                <img src="{{ asset('frontend/images/' . $articales->image) }}" width="500" height="500" alt="">
            </div>
            <div class="col-full s-content__main">


                <li class="date">The auther is <b>{{$articales->auther}}</b></li><br>

                <p class="lead">{{$articales->description}}</p>


            </div> <!-- end s-content__main -->


            <div id="comments">
                <h2>All Comments</h2>
                <ul>
                        <li>
                        @foreach ($comments as $comment)
    
                            <article>
                                <header>
                                    <address>
                                        By <a href="#">{{$comment->name}}</a>
                                        By <a href="#">{{$comment->email}}</a>
                                    </address>
                                    <time datetime="">{{$comment->date}}</time>
                                </header>
                                <div class="comcont">
                                    <p>{{$comment->comment}}</p>
                                </div>
                            </article>

                            @endforeach

                        </li>

                </ul>
                <hr>
                <h2>Write A Comment</h2>
                <form action="{{ route('comment') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$articales->id}}">
                    <div class="one_third first">
                        <label for="name">Name <span>*</span></label>
                        <input type="text" name="name" id="name" value="" size="22" required>
                    </div>
                    <div class="one_third">
                        <label for="email">Mail <span>*</span></label>
                        <input type="email" name="email" id="email" value="" size="22" required>
                    </div>
                    <div class="block clear">
                        <label for="comment">Your Comment</label>
                        <textarea name="comment" id="comment" cols="25" rows="10"></textarea>
                    </div>
                    <div>
                        <input type="submit" name="submit" value="Send review">
                        &nbsp;
                        <input type="reset" name="reset" value="Reset Form">
                    </div>
                </form>
            </div>
        </article>



    </section> <!-- s-content -->



   
@endsection
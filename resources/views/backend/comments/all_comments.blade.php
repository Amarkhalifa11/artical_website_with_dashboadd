@extends('backend.admin')
@section('content')
    <h1 class="text-center">welcom to : {{Auth::User()->name}}</h1>
    <h1 class="text-center">welcom to : {{count($comments)}}</h1>

    <div class="col-lg-12">
        <div class="card card-default">

            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">post</th>
                            <th scope="col">name</th>
                            <th scope="col">comment</th>
                            <th scope="col">date</th>
                            <th scope="col">delete</th>
                        </tr>
                    </thead>
                    <tbody>

                        @php
                            $i=1;
                        @endphp

                       @foreach ($comments as $comment)
    
                        <tr>
                            <td scope="row">{{$i++}}</td>
                            <td>{{$comment->comment_post_id}}</td>
                            <td>{{$comment->name}}</td>
                            <td>{{$comment->comment}}</td>
                            <td>{{$comment->date}}</td>
                            <td><a href="{{ route('comments.destroy', ['id'=>$comment->id]) }}" class="btn btn-danger">delete</a></td>
                        </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
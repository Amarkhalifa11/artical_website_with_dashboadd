@extends('backend.admin')
@section('content')
    <h1 class="text-center">welcom to : {{Auth::User()->name}}</h1>
    <h1 class="text-center">welcom to : {{count($articales)}}</h1>

    <div class="col-lg-12">
        <div class="card card-default">

            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">title</th>
                            <th scope="col">image</th>
                            <th scope="col">image auther</th>
                            <th scope="col">auther</th>
                            <th scope="col">category</th>
                            <th scope="col">type</th>
                            <th scope="col">date</th>
                            <th scope="col">description</th>
                            <th scope="col">edit</th>
                            <th scope="col">delete</th>
                        </tr>
                    </thead>
                    <tbody>

                        @php
                            $i=1;
                        @endphp

                       @foreach ($articales as $artical)
    
                        <tr>
                            <td scope="row">{{$i++}}</td>
                            <td>{{$artical->title}}</td>
                            <td><img src="{{ asset('frontend/images/' . $artical->image) }}" width="50" alt="" srcset=""></td>
                            <td><img src="{{ asset('frontend/images/' . $artical->image_auther) }}" width="50" alt="" srcset=""></td>
                            <td>{{$artical->auther}}</td>
                            <td>{{$artical->category}}</td>
                            <td>{{$artical->type}}</td>
                            <td>{{$artical->date}}</td>
                            <td>{{$artical->description}}</td>
                            <td><a href="{{ route('all_articals.edit', ['id'=>$artical->id]) }}" class="btn btn-success">edit</a></td>
                            <td><a href="{{ route('all_articals.destroy', ['id'=>$artical->id]) }}" class="btn btn-danger">delete</a></td>
                        </tr> 

                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
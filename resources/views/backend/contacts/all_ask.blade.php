@extends('backend.admin')
@section('content')
    <h1 class="text-center">welcom to : {{Auth::User()->name}}</h1>
    <h1 class="text-center">welcom to : {{count($asks)}}</h1>

    <div class="col-lg-12">
        <div class="card card-default">

            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">name</th>
                            <th scope="col">email</th>
                            <th scope="col">ask</th>
                            <th scope="col">delete</th>
                        </tr>
                    </thead>
                    <tbody>

                        @php
                            $i=1;
                        @endphp

                       @foreach ($asks as $ask)
    
                        <tr>
                            <td scope="row">{{$i++}}</td>
                            <td>{{$ask->name}}</td>
                            <td>{{$ask->email}}</td>
                            <td>{{$ask->ask}}</td>
                            <td><a href="{{ route('ask.destroy', ['id'=>$ask->id]) }}" class="btn badge-danger">delete</a></td>
                        </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
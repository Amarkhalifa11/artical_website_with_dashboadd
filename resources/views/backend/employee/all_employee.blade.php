@extends('backend.admin')
@section('content')
    <h1 class="text-center">welcom to : {{Auth::User()->name}}</h1>
    <h1 class="text-center">welcom to : {{count($employes)}}</h1>

    <div class="col-lg-12">
        <div class="card card-default">

            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">name</th>
                            <th scope="col">image</th>
                            <th scope="col">email</th>
                            <th scope="col">edit</th>
                            <th scope="col">delete</th>
                        </tr>
                    </thead>
                    <tbody>

                        @php
                            $i=1;
                        @endphp

                       @foreach ($employes as $employ)
    
                        <tr>
                            <td scope="row">{{$i++}}</td>
                            <td>{{$employ->name}}</td>
                            <td><img src="{{ asset('frontend/images/' . $employ->image) }}" width="50" alt="" srcset=""></td>
                            <td>{{$employ->email}}</td>
                            <td><a href="{{ route('all_employee.edit', ['id'=>$employ->id]) }}" class="btn btn-success">edit</a></td>
                            <td><a href="{{ route('all_employee.edit', ['id'=>$employ->id]) }}" class="btn btn-danger">delete</a></td>
                        </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
@extends('backend.admin')
@section('content')
    <h1 class="text-center">welcom to : {{ Auth::User()->name }}</h1>
    <h1 class="text-center">update category</h1>

    <div class="content-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-default">

                        <div class="card-body">
                            <form method="post" enctype="multipart/form-data" action="{{ route('categories.update', ['id'=>$categories->id]) }}">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer01">name</label>
                                        <input type="text" name="name" value="{{$categories->name}}" class="form-control" id="validationServer01"
                                            placeholder="name"  required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>

                                </div>

                                <button class="btn btn-primary" type="submit">update category</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>




    </div>
@endsection

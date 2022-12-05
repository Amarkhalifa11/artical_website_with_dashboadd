@extends('backend.admin')
@section('content')
    <h1 class="text-center">welcom to : {{ Auth::User()->name }}</h1>
    <h1 class="text-center">Add employee</h1>

    <div class="content-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-default">

                        <div class="card-body">
                            <form method="post" enctype="multipart/form-data" action="{{ route('all_employee.store') }}">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer01">name</label>
                                        <input type="text" name="name" class="form-control" id="validationServer01"
                                            placeholder="name"  required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer02">image</label>
                                        <input type="file" name="image" class="form-control" id="validationServer02" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="validationServerUsername">email</label>
                                        <input type="email" name="email" class="form-control" id="validationServerUsername"
                                            placeholder="email" aria-describedby="inputGroupPrepend3" required>
                                        <div class="invalid-feedback">
                                            Please choose a username.
                                        </div>
                                    </div>
                                </div>

                                <button class="btn btn-primary" type="submit">Submit form</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>




    </div>
@endsection

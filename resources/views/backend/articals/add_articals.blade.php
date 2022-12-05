@extends('backend.admin')
@section('content')
    <h1 class="text-center">welcom to : {{ Auth::User()->name }}</h1>
    <h1 class="text-center">Add artical</h1>

    <div class="content-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-default">

                        <div class="card-body">
                            <form method="post" enctype="multipart/form-data" action="{{ route('all_articals.store') }}">
                                @csrf
                                <div class="form-row">



                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer01">title</label>
                                        <input type="text" name="title" class="form-control" id="validationServer01"
                                            placeholder="title"  required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>


                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer01">auther</label>
                                        <input type="text" name="auther" class="form-control" id="validationServer01"
                                            placeholder="auther"  required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>


                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer01">category</label>
                                        <input type="text" name="category" class="form-control" id="validationServer01" placeholder="category"  required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>


                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer01">type</label>
                                        <input type="text" name="type" class="form-control" id="validationServer01"
                                            placeholder="type"  required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>


                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer01">date</label>
                                        <input type="date" name="date" class="form-control" id="validationServer01"
                                           required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>


                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer01">description</label>
                                        <textarea type="text" name="description" class="form-control" id="validationServer01"
                                            placeholder="name"  required></textarea>
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
                                        <label for="validationServer02">image auther</label>
                                        <input type="file" name="image_auther" class="form-control" id="validationServer02" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>

                                </div>

                                <button class="btn btn-primary" type="submit">add artical</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>




    </div>
@endsection

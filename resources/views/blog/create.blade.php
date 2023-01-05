@extends('layouts.master')


@section('content')

<div class="container">
    <section class="vh-100">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-9">

                    <h1 class="text-bg-dark mb-4">Add a New Post</h1>

                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body">
                            <form action="{{route('post.store')}}" method="post">
                                @csrf
                            <div class="row align-items-center pt-4 pb-3">
                                <div class="col-md-3 ps-5">

                                    <h6 class="mb-0">Title</h6>

                                </div>
                                <div class="col-md-9 pe-5">

                                    <input type="text" name="title" placeholder="Enter Post Title" class="form-control form-control-lg" />

                                </div>
                            </div>


                            <hr class="mx-n3">

                            <div class="row align-items-center py-3">
                                <div class="col-md-3 ps-5">

                                    <h6 class="mb-0">Content</h6>

                                </div>
                                <div class="col-md-9 pe-5">

                                    <textarea class="form-control" name="content" rows="3" placeholder="Enter Post Description"></textarea>

                                </div>
                            </div>

                            <hr class="mx-n3">
                            <div class="px-5 py-4">
                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                            </form>

                        </div>



                    </div>

                </div>
            </div>
        </div>
    </section>
</div>


@endsection

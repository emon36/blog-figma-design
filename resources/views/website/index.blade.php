@extends('layouts.master')


@section('content')
    <header class="py-5 banner border-bottom mb-4">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="title">Our Blog</h1>
                <p class="subtitle">News from WiztecBD and Around The World of Digital <br>
                    Services Agency</p>

            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-7">
                <!-- Featured blog post-->
                <div class="card shadow  mb-5 bg-white rounded">
                    <a href="{{route('post.show')}}"><img class="card-img-top" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg" alt="..." /></a>

                    <div class="card-body">
                        <div class="post-info row">
                            <div class="col-md-4 col-sm author-name">
                                <i class="fa fa-user-o" aria-hidden="true"></i>
                                By Dalky
                            </div>

                            <div class="col-md-4 post-date">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                16 Dec, 2022
                            </div>
                            <div class="col-md-4 post-category">
                                <i class="fa fa-tags" aria-hidden="true"></i>
                                Digital Marketing
                            </div>
                        </div>
                        <div class="post-details">
                            <h2 class="card-title">Featured Post Title</h2>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                            <a class="btn btn-lg card-btn" href="{{route('post.show')}}">Read more →</a>
                        </div>

                    </div>
                </div>


                <!-- Pagination-->
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- Side widgets-->
            <div class="col-lg-5">
                <!-- Search widget-->
                <div class="card shadow  mb-5 bg-white rounded">
                    <div class="card-body">
                        <div class="input-group search">
                            <input class="form-control" type="text" placeholder="Search here" aria-label="Enter search term..." aria-describedby="button-search" />
                            <button class="btn btn-primary" id="button-search" type="button"> <i class="fa fa-search"></i> </button>
                        </div>
                    </div>
                </div>
                <!-- Categories widget-->
                <div class="card shadow  mb-5 bg-white rounded">
                    <div class="card-header">Recent Post</div>
                    <div class="card-body-side">
                        <div class="row mb-4">
                            <div class="col-sm-3">
                               <div> <img class="img-thumbnail" src="https://static.vecteezy.com/system/resources/previews/002/214/070/original/flat-design-concept-seo-search-engine-optimize-illustrate-free-vector.jpg"> </div>
                            </div>
                            <div class="col-sm-9">
                               <div class="card-title recent">Is It Time to Switch to a New
                                   SEO Tool?</div>
                                <div class="card-text"> <i class="fa fa-calendar"></i> 16 Dec, 2022 </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-sm-3">
                                <div> <img class="img-thumbnail" src="https://static.vecteezy.com/system/resources/previews/002/214/070/original/flat-design-concept-seo-search-engine-optimize-illustrate-free-vector.jpg"> </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="card-title recent">Is It Time to Switch to a New
                                    SEO Tool?</div>
                                <div class="card-text"> <i class="fa fa-calendar"></i> 16 Dec, 2022 </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Side widget-->
                <div class="card shadow  mb-5 bg-white rounded">
                    <div class="card-header">Categories</div>
                    <div class="card-body-side">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card-text">Careers</div>
                            </div>
                            <div class="col-sm-6">
                                <h5><span class="badge bg-dark float-end">3</span></h5>
                            </div>

                        </div>
                        <hr class="hr"/>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card-text">Careers</div>
                            </div>
                            <div class="col-sm-6">
                                <h5><span class="badge bg-dark float-end">3</span></h5>
                            </div>

                        </div>
                        <hr class="hr"/>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card-text">Careers</div>
                            </div>
                            <div class="col-sm-6">
                                <h5><span class="badge bg-dark float-end">3</span></h5>
                            </div>

                        </div>
                        <hr class="hr"/>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card-text">Careers</div>
                            </div>
                            <div class="col-sm-6">
                                <h5><span class="badge bg-dark float-end">3</span></h5>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="card shadow  mb-5 bg-white rounded">
                    <div class="card-header">Popular tags</div>
                    <div class="card-body-side">
                        <span class="tags">Agency</span>
                        <span class="tags">Agency</span>
                        <span class="tags">Agency</span>
                        <span class="tags">Agency</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

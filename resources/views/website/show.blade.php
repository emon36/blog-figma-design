@extends('layouts.master')


@section('content')

    <header class="py-5 banner border-bottom mb-4">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="title">Digital Marketing</h1>
                <p class="subtitle">Blog details</p>

            </div>
        </div>
    </header>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-7">
                <!-- Featured blog post-->
                <div class="card shadow  mb-5 bg-white rounded ">
                    <a href="#!"><img class="card-img-top" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg" alt="..." /></a>

                    <div class="card-body">
                        <div class="post-info-details row">
                            <span class=" author-name-details">
                                <i class="fa fa-user-o" aria-hidden="true"></i>
                                By Dalky
                            </span>

                            <span class="post-date-details">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                16 Dec, 2022
                            </span>
                            <span class=" post-category-details">
                                <i class="fa fa-tags" aria-hidden="true"></i>
                                Digital Marketing
                            </span>
                            <span class="col-md-3 post-view">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                                5012
                            </span>
                        </div>
                        <div class="post-show-details">
                            <p class="card-text mb-5">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. There are many variations of passages of Lorem Ipsum available.
                            </p>
                            <h3 class="mt-2 mb-5 card-title">Delivering the best digital marketing</h3>
                            <p class="mt-2 mb-5"> Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <img class="img-fluid" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg" alt="..."">
                                </div>
                                <div class="col-md-6">
                                    <img class="img-fluid" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg" alt="..."">
                                </div>

                            </div>

                            <h3 class="mt-5 mb-5 card-title">A Kentucky men who was mullied by the seniors</h3>
                            <p class="mt-3 mb-5">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>

                            <div class="row d-flex align-items-center h-100">
                                        <div class=" mb-4 mb-lg-0 ">
                                            <figure class="bg-light p-3 rounded" style="border-left: .25rem solid #97D446;;">
                                                <blockquote class="blockquote pb-2">
                                                    <p>
                                                        “What sort of men would think it is acceptable to girl to this for level of brutality and violence? an attack like thiop.”
                                                    </p>
                                                </blockquote>
                                                <figcaption class="blockquote-footer mb-0 font-italic">
                                                    Neil Borton
                                                </figcaption>
                                            </figure>
                                        </div>

                                    </div>



                        </div>

                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6">
                                <span>Tags: </span> <span class="badge bg-white text-dark">Carrer</span>
                                <span class="badge bg-white text-dark">Marketing</span>
                                <span class="badge bg-white text-dark">Online</span>
                            </div>
                            <div class="col-md-2">

                            </div>
                            <div class="col-md-4">
                                <span class="mx-2">Share:</span>
                                <span><i class="fa fa-facebook"></i></span>
                                <span><i class="fa fa-twitter"></i></span>
                                <span><i class="fa fa-linkedin"></i></span>
                                <span><i class="fa fa-youtube"></i></span>
                            </div>

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

                <div class="card shadow mb-5 bg-white rounded">
                    <div class="card-body">
                        <!-- Comment form-->
                        <!-- Comment with nested comments-->
                        <i class="fa fa-comment comment-icon"></i> <span class="fw-bold"> Comments (03) </span>

                        <div class="d-flex mt-4 mb-4 bg-light">
                            <!-- Parent comment-->

                            <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                            <div class="ms-3">
                                <span class="pull-right mx-auto reply">
                                    <button class="btn btn-dark">Reply</button>
                                </span>
                                <span class="fw-bold">Commenter Name</span>
                                <div class="date">Spetember 15, 2022 AT 07:12 PM </div>
                                <div class="comment mt-3">
                                    I really enjoyed this post. Very exciting article. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                </div>
                                <!-- Child comment 1-->
                                <div class="d-flex mt-4">
                                    <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                    <div class="ms-3">
                                        <div class="fw-bold">Commenter Name</div>
                                        <div class="date">Spetember 15, 2022 AT 07:12 PM </div>
                                        <div class="comment mt-3">
                                            I really enjoyed this post. Very exciting article. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Single comment-->
                        <div class="d-flex bg-light">
                            <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                            <div class="ms-3">
                                        <span class="pull-right mx-auto reply">
                                             <button class="btn btn-dark">Reply</button>
                                        </span>
                                <div class="fw-bold">Commenter Name</div>
                                <div class="date">Spetember 15, 2022 AT 07:12 PM </div>
                                <div class="comment mt-3">
                                    I really enjoyed this post. Very exciting article. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card shadow mb-5 bg-white rounded">

                    <div class="body">
                        <i class=" mt-2 fa fa-arrow-up comment-icon"></i> <span class="fw-bold ml-2 "> Leave a comment </span>
                        <form class=" mt-4 mb-5" method="post" id="contactForm" name="contactForm" novalidate="novalidate">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="" class="col-form-label">Name *</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="" class="col-form-label">Email *</label>
                                        <input type="text" class="form-control" name="email" id="email" placeholder="Your email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group mb-3">
                                        <label for="message" class="col-form-label">Message *</label>
                                        <textarea class="form-control" name="message" id="message" cols="30" rows="4" placeholder="Write your message"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <input type="submit" value="Post a comment" class="btn btn-lg card-btn">
                                        <span class="submitting"></span>
                                    </div>
                                </div>
                            </div>

                        </form>

                    </div>

                </div>

            </div>
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
            <!-- Side widgets-->
        </div>
    </div>
@endsection


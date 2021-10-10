@extends('front.frontlayout')
@section('meta-title')
<title>Self Blog - {{$blog->title}}</title>
    <meta name="keywords" content="{{$blog->title}}">
    <meta name="description" content="{{ substr(strip_tags($blog->body), 0, 200) }}">
@endsection
@section('top-banner')
        <div class="page-title wb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <h2><i class="fa fa-leaf bg-green"></i> Blog</h2>
                    </div><!-- end col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blog</li>
                        </ol>
                    </div><!-- end col -->                    
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end page-title -->
@endsection
@section('main-content')
        <section class="section wb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-title-area">
                                <span class="color-green">
                                @foreach ($blog->categories as $category)
                                <a href="#" title="">
                                 {{$category->name}}
                                </a>
                                @endforeach
                                </span>
                                <h3>{{$blog->title}}</h3>

                                <div class="blog-meta big-meta">
                                    <small><a href="garden-single.html" title="">21 July, 2017</a></small>
                                    <small><a href="blog-author.html" title="">by {{$blog->user->name}}</a></small>
                                    <small><a href="#" title=""><i class="fa fa-eye"></i> 2344</a></small>
                                </div><!-- end meta -->

                                {{-- <div class="post-sharing">
                                    <ul class="list-inline">
                                        <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                        <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                        <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div><!-- end post-sharing --> --}}
                            </div><!-- end title -->

                            <div class="single-post-media">
                                <img src="/images/{{$blog->blog_image}}"  class="img-fluid">
                            </div><!-- end media -->

                            <div class="blog-content">  
                                <div class="pp">
                                {!! $blog->body !!}
                                  </div><!-- end content -->

                          

                                <div class="post-sharing">
                                    <ul class="list-inline">
                                        <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                        <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                        <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div><!-- end post-sharing -->
                            </div><!-- end title -->
                            <hr class="invis1">

                        </div><!-- end page-wrapper -->
                    </div><!-- end col -->

                   @include('front.sidebar')
                </div><!-- end row -->
            </div><!-- end container -->
           
        </section>
@endsection
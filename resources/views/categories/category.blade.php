@extends('front.frontlayout')
@section('meta-title')
<title>Self Blog - Technology Blogs</title>
    <meta name="keywords" content="Self Blog">
    <meta name="description" content="Blogs">
@endsection
@section('top-banner')
        <div class="page-title wb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <h2><i class="fa fa-leaf bg-green"></i>{{$category->name}}</h2>
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
                            @if($category->blogs->count()> 0)
                            <div class="blog-list clearfix">
                                @foreach ($category->blogs as $blog)
                                <div class="blog-box row" id="blog-box">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="garden-single.html" title="">
                                                <img src="/images/{{$blog->blog_image}}" alt="" class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div><!-- end media -->
                                    </div><!-- end col -->

                                    <div class="blog-meta big-meta col-md-8" id="blogSection">
                                        @if(count($blog->categories)>0)
                                        <span class="bg-aqua">
                                            @foreach ($blog->categories as $category)
                                            <a href="#" title="">
                                                {{$category->name}}
                                            </a>
                                            @endforeach
                                        </span>
                                        @endif
                                        <h4><a href="/singleblog/{{$blog->slug}}" title="">{{$blog->title}}</a></h4>
                                        <p>{{ substr(strip_tags($blog->body), 0, 200) }}...</p>
                                        <small><a href="/" title=""><i class="fa fa-eye"></i> 1887</a></small>
                                        <small><a href="/" title="">{{$blog->created_at->todatestring()}}</a></small>
                                        <small><a href="/" title="">by {{$blog->user->name}}</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                                <hr class="invis">
                                @endforeach
                            </div><!-- end blog-list -->
                            
                            @else
                            <p>No blogs found</p>
                            @endif
                        </div><!-- end page-wrapper -->

                        <hr class="invis">
                    </div><!-- end col -->

                 @include('front.sidebar')
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
      
 @endsection
 
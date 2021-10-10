@extends('front.frontlayout')
@section('meta-title')
<title>Self Blog - Technology Blogs</title>
    <meta name="keywords" content="Self Blog">
    <meta name="description" content="Blogs">
@endsection
@section('top-banner')
        <section class="section first-section">
            <div class="container-fluid">
                @if($mainThreeBlogs)
                <div class="masonry-blog clearfix">
                    @foreach($mainThreeBlogs as $blog)
                    <div class="center-side">
                        <div class="masonry-box post-media">
                             <img src="images/{{$blog->blog_image}}" height="100%" alt="" class="img-fluid">
                             <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        <span class="bg-aqua"><a href="blog-category-01.html" title="">
                                            @if(count($blog->categories)>0)
                                            <span class="bg-aqua">
                                                @foreach ($blog->categories as $category)
                                                <a href="#" title="">
                                                    {{$category->name}}
                                                </a>
                                                @endforeach    
                                        </a></span>
                                       @endif
                                        <h4><a href="/singleblog/{{$blog->slug}}" title="">{{$blog->title}}</a></h4>
                                        <small><a href="/singleblog/{{$blog->slug}}" title="">19 July, 2017</a></small>
                                        <small><a href="/singleblog/{{$blog->slug}}" title="">by {{$blog->user->name}}</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end shadow-desc -->
                            </div><!-- end shadow -->
                        </div><!-- end post-media -->
                    </div><!-- end left-side -->
                    @endforeach
                </div><!-- end masonry -->
               @endif
            </div>
        </section>
@endsection
@section('main-content')
        <section class="section wb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            @if($blogs->count()> 0)
                            <div class="blog-list clearfix">
                                @foreach ($blogs as $blog)
                                <div class="blog-box row" id="blog-box">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="garden-single.html" title="">
                                                <img src="images/{{$blog->blog_image}}" alt="" class="img-fluid">
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
                                        <small><a href="garden-category.html" title=""><i class="fa fa-eye"></i> 1887</a></small>
                                        <small><a href="garden-single.html" title="">{{$blog->created_at->todatestring()}}</a></small>
                                        <small><a href="#" title="">by {{$blog->user->name}}</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                                <hr class="invis">
                                @endforeach
                                {{$blogs->appends(['search'=>request()->query('search')])->links()}}
                            </div><!-- end blog-list -->
                            
                            @else
                            <p>No blogs found</p>
                            @endif
                        </div><!-- end page-wrapper -->

                        <hr class="invis">

                        <div class="row">
                            <div class="col-md-12">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-start">
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end col -->

                 @include('front.sidebar')
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
      
 @endsection
 
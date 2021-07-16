<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
    <div class="sidebar">
        <div class="widget">
            <h2 class="widget-title">Search</h2>
            <form class="form-inline search-form" method="GET">
                <div class="form-group">
                    <input type="text" class="form-control" id="search"  value="{{request()->query('search')}}" name = "search" placeholder="Search on the site">
                </div>
                <button type="submit" id="searchSubmit" class="btn btn-primary"><i class="fa fa-search"></i></button>
            </form>
        </div><!-- end widget -->

        <div class="widget">
            <h2 class="widget-title">Recent Posts</h2>
            <div class="blog-list-widget">
                @if($recentBlogs->count() > 0)
                <div class="list-group">
                @foreach ($recentBlogs as $blog)
                    <a href="singleblog/{{$blog->slug}}" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="w-100 justify-content-between">
                            <img src="images/{{$blog->blog_image}}" alt="" class="img-fluid float-left">
                            <h5 class="mb-1">{{$blog->title}}</h5>
                            <small>12 Jan, 2016</small>
                        </div>
                    </a>
                @endforeach
                </div>
                @else
            No posts found
            @endif
            </div>
            
        </div>
                
{{-- 
                    <a href="garden-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="w-100 justify-content-between">
                            <img src="css/upload/garden_sq_06.jpg" alt="" class="img-fluid float-left">
                            <h5 class="mb-1">Let's make an introduction for creative life</h5>
                            <small>11 Jan, 2016</small>
                        </div>
                    </a>

                    <a href="garden-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="w-100 last-item justify-content-between">
                            <img src="css/upload/garden_sq_02.jpg" alt="" class="img-fluid float-left">
                            <h5 class="mb-1">Did you see the most beautiful sea in the world?</h5>
                            <small>07 Jan, 2016</small>
                        </div>
                    </a>
                </div>
            </div><!-- end blog-list -->
        </div><!-- end widget --> --}}

        <div class="widget">
            <h2 class="widget-title">Categories</h2>
            @if(count($categories)> 0)
            <div class="link-widget">
                <ul>
                    @foreach ($categories as $category)
                    <li><a href="#">{{$category->name}} <span>({{$category->blogs()->count()}})</span></a></li>
                    @endforeach
                </ul>
            </div><!-- end link-widget -->
            @endif
        </div><!-- end widget -->
    </div><!-- end sidebar -->
</div><!-- end col -->
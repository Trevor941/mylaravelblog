<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
    <div class="sidebar">
        <div class="widget">
            <h2 class="widget-title">Search</h2>
            <form class="form-inline search-form" method="GET">
                <div class="form-group">
                    <input type="text" class="form-control" id="search"  value="{{request()->query('search')}}" name = "search" placeholder="Search">
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
                            <img src="/images/{{$blog->blog_image}}" alt="" class="img-fluid float-left">
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
        
        <div class="widget">
            <h2 class="widget-title">Categories</h2>
            @if(count($categories)> 0)
            <div class="link-widget">
                <ul>
                    @foreach ($categories as $category)
                    <li><a href="/categories/{{$category->id}}">{{$category->name}} <span>({{$category->blogs()->count()}})</span></a></li>
                    @endforeach
                </ul>
            </div><!-- end link-widget -->
            @endif
        </div><!-- end widget -->
    </div><!-- end sidebar -->
</div><!-- end col -->

@extends('layouts.adminlte')
@section('content')
    @if(count($trashedBlogs) > 0)
        @foreach($trashedBlogs as $blog)
        <div class="col-md-4">
        <div class="card card-block" style="width: 24rem;">
            <div class="card-header">
            <h3>{{$blog->title}}</h3>
            </div>
            <img src="images/{{$blog->blog_image}}" alt="{{$blog->title}}">
                <div class="card-body">
                {{-- <p>{!! str_limit($blog->body, 100) !!}</p> --}}
                <p>{{ substr(strip_tags($blog->body), 0, 100) }}...</p>
               
                </div>
                <div class="card-footer text-white">
                    <span class="float-left">
                    <form method="get" action="/restoreBlogs/{{$blog->id}}">
                        @csrf
                        <button class="btn btn-sm btn-primary">Restore</button>
                    </form>  <!--b-->
                </span>
                  <span class="">
                 <form method="post" action="/deleteBlogs/{{$blog->id}}">
                    @csrf
                    <button class="btn btn-sm btn-danger ml-2">Delete</button>
                    @method('delete')
                </form>
            </span>
                 
                </div>
        </div>
    </div>
        @endforeach
    
 @else
  <p>Trash is empty</p>
  @endif

  @if(Session::has('success'))
<script>
    // swal("Great Job!", "{!! Session::get('success') !!}", "succeess",{
    //     button:"OK",
    // });
    swal("Success", "{!! Session::get('success') !!}", "success");
</script>

@endif
@endsection
<style>
    body{
        background: #d7d7d7 !important;
    }
    .card{
        border: 3px solid #737381;
    }
    .card-header{
        background: #737381 !important;
         color: #eee!important; 
         font-size: 25px; 
         font-weight: 900;
    }
    .card-body{
        padding: 60px;
        background: #f2f2f2;
    }
   
    .card-footer{
        padding:0px; 
        background: #737381 !important;
    }
    input:focus, textarea:focus {
 border: 1px solid #737381 !important;
 
box-shadow: none !important;
} 
.mce-txt, .mce-ico{
    color:#fff !important;
}  
{

}
</style>


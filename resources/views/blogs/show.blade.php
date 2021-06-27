@extends('layouts.adminlte')
@section('content')
<div class="col-md-12">
<div class="card card-block">
        <div class="card-header">
        <h3>{{$blog->title}}</h3>
        </div>
        <img src="/images/{{$blog->blog_image}}" alt="{{$blog->title}}">
            <div class="card-body">
            <p>{!! $blog->body !!}</p>
            </div>
            @if(auth()->user()->id === $blog->user_id)
            <span style="padding: 1.25rem;">
                <a href="/blogs/{{$blog->id}}/edit" class="float-left btn btn-sm btn-secondary mr-2">Edit Blog</a>  
                <form action="/blogs/{{$blog->id}}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-sm btn-danger ">Delete Blog</button>
              </form>          
               </span>
               @endif
            <div class="card-footer text-white">
                <div>
               
              <small class="">Written by <a><i>Trevor</i></a></small>
                </div>
            </div>
    </div>
    @include('blogs.comments')
</div>
</div>
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

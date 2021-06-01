@extends('layouts.adminlte')
@section('content')
    @if(count($readers) > 0)
        @foreach($readers as $reader)
        <div class="col-md-4">
        <div class="card card-block" style="width: 24rem;">
            <div class="card-header">
            <h3>{{$reader->name}}</h3>
            </div>
            {{-- <img src="images/{{$blog->blog_image}}" alt="{{$blog->title}}"> --}}
                {{-- <div class="card-body">
                <p>{{ substr(strip_tags($blog->body), 0, 100) }}...</p>
                <p><a href="/blogs/{{$blog->id}}">read more</a></p>
                </div> --}}
                {{-- <div class="card-footer text-white">
                  <small>Written by <a>Trevor</a></small>
                </div> --}}
        </div>
    </div>
        @endforeach
    
 @else
  <p>No users found</p>
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
    button{
        background: #737381 !important;
         border: 1px solid #666 !important;
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


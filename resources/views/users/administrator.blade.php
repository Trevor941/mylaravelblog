@extends('layouts.adminlte')
@section('content')
<div class="col-md-8 offset-md-2">
    @if(count($admins) > 0)
    <ul class="list-group">
        @foreach($admins as $admin)
            <li class="list-group-item bg-secondary">{{$admin->name}} <span class="float-right"><a href="/chat/{{$receiver_id}}"><i class="far fa-2x fa-envelope"></i><a></span></li>
            
           
            {{-- <img src="images/{{$blog->blog_image}}" alt="{{$blog->title}}"> --}}
                {{-- <div class="card-body">
                <p>{{ substr(strip_tags($blog->body), 0, 100) }}...</p>
                <p><a href="/blogs/{{$blog->id}}">read more</a></p>
                </div> --}}
                {{-- <div class="card-footer text-white">
                  <small>Written by <a>Trevor</a></small>
                </div> --}}
   
</li>
        @endforeach
    
 @else
  <p>No blogs have been found </p>
</ul>
  @endif
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


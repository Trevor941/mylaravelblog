@extends('layouts.adminlte')
@section('content')
<div class="col-md-8 offset-md-2">
<div class="card card-block">
    <div class="card-header">
    <h3>Chat with {{$receiver->name}}</h3>
    </div>
        <div class="card-body full-height">
            <div class="jumbotron">
                @foreach($messages as $message)
                <div class="alert alert-secondary" role="alert">
                    {{$message->message}}
                  </div>
                @endforeach
            </div>
        <form action="/blogs" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-inline">
            <div class="form-group col-12">
                @error('body')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <textarea class="form-control col-sm-10" name="body" rows="1"></textarea>
                <button type="submit" class="btn btn-secondary form-control col-sm-2">Save Blog</button>
            </div>
          </div>
        </form>
        </div>
        <div class="card-footer text-white">
          <small>&copy; Self Blog | All rights reserved.</small>
      </div>
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

</style>



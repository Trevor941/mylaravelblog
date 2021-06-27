@extends('layouts.adminlte')

@section('content')

<div class="col-md-8 offset-md-2">
<div class="card card-block">
    <div class="card-header">
    <h3>Chat with {{$receiver->name}}</h3>
    </div>
        <div class="card-body full-height">
            <div class="jumbotron">
                <ul id="messages" class="list-group">
                @foreach($chatmessages as $message)
                
                @if(auth()->user()->id === $message->sender_id)
                    <li class="alert bg-white" style="list-style-type: none;" role="alert">
                        {{$message->message}}
                    </li>
                    @else
                    <li class="alert alert-secondary" style="list-style-type: none; text-align:right;" role="alert">
                        {{$message->message}}
                    </li>
                @endif
              
                @endforeach
                </ul>
            </div>
        <form action="{{route('send.msg', $receiver->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-inline">
            <div class="form-group col-12">
                @error('body')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                {{-- <textarea class="form-control col-sm-10" name="message" rows="2"></textarea> --}}
                <input type="text" class="form-control col-sm-10" name="message" placeholder="Type your message here..."/>
                <button type="submit" class="btn btn-secondary form-control col-sm-2">Send</button>
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



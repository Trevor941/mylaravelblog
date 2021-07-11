@extends('layouts.adminlte')
@section('content')
<div class="offset-md-1 col-md-10">
    <div class="card card-block">
        <div class="card-header">
        <h3 class="text-center">List of all users</h3>
        </div>
            <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Total Posts</th>
                            <th scope="col">Status</th>
                            <th scope="col">Message</th>
                          </tr>
                        </thead>
                        @if(count($users) > 0)
                        @foreach($users as $user)
                        <tbody>
                          <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->blogs->count()}}</td>
                            <td>Offline</td>
                            <td class="text-success">Message</td>
                          </tr>
                        </tbody>
                        @endforeach
                        @else
                 <p>No blogs have been found</p>
              @endif
                      </table>
                  
         </div>
    </div>
</div>
        
    
 

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
    table thead, .card-header{
        background: #737381 !important;
         color: #eee!important; 
        
         
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


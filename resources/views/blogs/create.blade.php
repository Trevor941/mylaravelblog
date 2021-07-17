@extends('layouts.adminlte')
@section('content')
<div class="col-md-8 offset-md-2">
<div class="card card-block">
    <div class="card-header">
    <h3>Create A Blog</h3>
    </div>
        <div class="card-body">
        <form action="/blogs" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                @error('title')
                  <div class="alert alert-danger">{{$message}}</div>  
                @enderror
                <label for="title">Blog Title</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
            <div class="form-group">
                @error('body')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <label for="title">Blog Description</label>
                <textarea class="form-control tinymce-editor" name="body" rows="5"></textarea>
            </div>
            <div class="form-group">
                <label for="title">Select Category</label>
                <select name="categoriesid[]" id="categories" class="form-control">
                @foreach($categories as $category)
                 <option value="{{$category->id}}">{{$category->name}}</option>
                 @endforeach
                </select>
               
            </div>
            <div class="form-group">
                @error('blog_image')
                 <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <input type="file" name="blog_image" class="form-control"/>
            </div>
            <button type="submit" class="btn btn-secondary form-control">Save Blog</button>
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
{

}
</style>



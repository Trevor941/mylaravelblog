@extends('front.frontlayout')
@section('meta-title')
<title>Self Blog - Technology Blogs</title>
    <meta name="keywords" content="Self Blog">
    <meta name="description" content="Blogs">
@endsection
@section('top-banner')
        <div class="page-title wb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <h2><i class="fa fa-leaf bg-green"></i>Contact Form</h2>
                    </div><!-- end col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Contact Form</li>
                        </ol>
                    </div><!-- end col -->                    
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end page-title -->
@endsection
@section('main-content')
        <section class="section wb">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="page-wrapper">
                            @if (Session('success'))
                                <div class="alert alert-success">
                                    <p>{{session('success')}}</p>
                                </div>
                            @endif
                           <form action="/contactform" method="Post" enctype="multipart/form-data" style="    padding: 40px; background: #eee; border-radius: 5px;">
                               @csrf
                               <div class="form-group">
                                   <label for="Name">Name</label><br>
                                   @error('name')
                                   <span class="text-danger">{{$message}}</span>
                                   @enderror
                                   <input type="text" class="form-control" name="name" value="{{old('name')}}">
                               </div>
                               <div class="form-group">
                                <label for="Name">Subject</label><br>
                                @error('subject')
                                <span class="text-danger">{{$message}}</span>
                                   @enderror
                                <input type="text" class="form-control" name="subject" value="{{old('subject')}}">
                            </div>
                            <div class="form-group">
                                <label for="Name">Message</label><br>
                                @error('body')
                                       <span class="text-danger">{{$message}}</span>
                                   @enderror
                                <textarea name="body" id="" cols="30" rows="10" class="form-control">{{old('Body')}}</textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-secondary btn-block">Send Message</button>
                            </div>
                           </form>
                        </div><!-- end page-wrapper -->

                        <hr class="invis">
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
      
 @endsection
 
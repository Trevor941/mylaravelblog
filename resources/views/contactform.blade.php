@extends('front.frontlayout')
@section('meta-title')
<title>Self Blog - Technology Blogs</title>
    <meta name="keywords" content="Self Blog">
    <meta name="description" content="Blogs">
@endsection
@section('top-banner')
        <section class="section first-section">
            <div class="container">
                <div class="row">
                    <h3>Contact Form</h3>
                </div>
            </div>
        </section>
@endsection
@section('main-content')
        <section class="section wb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            @if (Session('success'))
                                <div class="alert alert-success">
                                    <p>{{session('success')}}</p>
                                </div>
                            @endif
                           <form action="/contactform" method="Post" enctype="multipart/form-data">
                               @csrf
                               <div class="form-group">
                                   <label for="Name">Name</label>
                                   <input type="text" class="form-control" name="name" value="{{old('name')}}">
                               </div>
                               <div class="form-group">
                                <label for="Name">Subject</label>
                                <input type="text" class="form-control" name="subject" value="{{old('subject')}}">
                            </div>
                            <div class="form-group">
                                <label for="Name">Message</label>
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
 
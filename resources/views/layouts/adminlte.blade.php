
<!DOCTYPE html>
<html lang="en">  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Layout | AdminLTE 3 Documentation</title>
    <!-- Begin Jekyll SEO tag v2.5.0 -->
<title>Layout | AdminLTE v3 Documentaion</title>
<meta name="generator" content="Jekyll v3.8.5" />
<meta property="og:title" content="Layout" />
<meta property="og:locale" content="en_US" />
<meta name="description" content="AdminLTE v3 Documentaion" />
<meta property="og:description" content="AdminLTE v3 Documentaion" />
<meta property="og:site_name" content="AdminLTE v3 Documentaion" />
<meta name="csrf-token" content="{{ csrf_token() }}">

   


<script src="https://cdn.tiny.cloud/1/7fegfscst1ltbtfw6yki02u9tgjmp7ggfp3aou7nrw3lwxi5/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script src="https://cdn.tiny.cloud/1/7fegfscst1ltbtfw6yki02u9tgjmp7ggfp3aou7nrw3lwxi5/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>   
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
      .layout-navbar-fixed .wrapper .main-header{
        padding: 0px;
      }
      .content-wrapper{
        background: #d7d7d7 !important;
      }
      [class*='sidebar-dark-'], [class*='sidebar-dark'] .brand-link {
    background-color: #737381c2 !important;
}
[class*='sidebar-dark-'] .nav-treeview > .nav-item > .nav-link, .sidebar .nav-link p {
    color: rgb(255, 255, 255) !important;
}
.sidebar-dark-primary .nav-sidebar > .nav-item > .nav-link.active, .sidebar-light-primary .nav-sidebar > .nav-item > .nav-link.active {
    background-color: #737381 !important;
    color: #ffffff;
}
[class*='sidebar-dark-'] .nav-sidebar > .nav-item > .nav-treeview {
    background: #737381 !important;
}

.disqus-footer__wrapper{
display: none !important;
}
    </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
    <div class="wrapper">  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
     
    </ul>

    {{-- <ul class="navbar-nav ml-auto"> --}}
      <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        <li class="nav-item">
         <a href = "/myblogs" class="nav-link"><i class="fas fa-blog"></i>@if(count($myBlogs)>0)<span class="badge">{{$myBlogs->count()}}</span>@endif&nbsp;MyBlogs</a>
        </li>
        <li class="nav-item">
          <a href = "/inbox" class="nav-link"><i class="fas fa-envelope"></i>&nbsp;Messages</a>
         </li>
        @guest
            @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif

            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                   Welcome &nbsp; {{ Auth::user()->name }} !
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                      <span><i class="fas fa fa-lock"></i></span>  {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    
    </ul>

    <!-- SEARCH FORM -->
    <!-- <form class="form-check-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->
    </nav>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="/docs/3.0/index.html" class="brand-link logo-switch">
      Logo Text
    </a>
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar nav-child-indent flex-column" data-widget="treeview" role="menu">
            <li class="nav-item has-treeview menu-open">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-folder"></i>
                  <p>
                    Blogs
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: block;">
                  <li class="nav-item">
                    <a href="/blogs/create" class="nav-link">
                      <i class="fas fa-edit"></i>
                      <p>Create Blogs</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/blogs" class="nav-link">
                      <i class="fas fa-book-reader"></i>
                      <p>Read Blogs</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/trashedBlogs" class="nav-link">
                      <i class="fas fa-trash"></i>
                      <p>Trashed Blogs</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview menu-open">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Users
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: block;">
                  <li class="nav-item">
                    <a href="/users" class="nav-link">
                      <i class="fas fa-user-lock"></i>
                      <p>Users</p>
                    </a>
                  </li>
                </ul>
              </li>
            
        </ul>
      </nav>
    </div>
  </aside>
<div class="content-wrapper px-4 py-2">
	{{-- <div class="content-header">
		<h1 class="text-dark">Layout</h1>
    </div> --}}

    <div class="content px-2">
      @include('flash-messages')
      <div class="container-fluid">
        <div class="row">
          
            @yield('content')
        
        </div>
      </div>
	   
    </div>
</div>
    <footer class="main-footer">
      <div class="float-right d-none d-sm-inline">
        v3.0.3
      </div>
      <strong>Copyright &copy;2021</strong>Self Blog
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>   
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>

<script>
  tinymce.init({
    selector: 'textarea.tinymce-editor'
 });
</script>
@include('messages.scripts')
@yield('customScripts')
</body>
</html>

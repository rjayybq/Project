<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>SITE BLOG</title>
        <link rel="shortcut icon" type="image/png" href="../assets/images/logos/site-logo.jpg" />
        <link rel="stylesheet" href="../assets/css/styles.min.css" />
    </head>

    <body>
        <!--  Body Wrapper -->
        <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
            <!-- Sidebar Start -->
            <aside class="left-sidebar">
                <!-- Sidebar scroll-->
                <div>
                    <div class="brand-logo d-flex align-items-center justify-content-between mt-5">
                        <a href="home" class="text-nowrap logo-img ">
                            <img src="../assets/images/logos/logo-site.jpg" width="180" alt="" />
                        </a>
                        <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                            <i class="ti ti-x fs-8"></i>
                        </div>
                    </div>
                    <!-- Sidebar navigation-->
                    <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                        <ul id="sidebarnav">
                            <li class="nav-small-cap">
                                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                <span class="hide-menu">Home</span>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="./index.html" aria-expanded="false">
                                    <span>
                                        <i class="ti ti-layout-dashboard"></i>
                                    </span>
                                    <span class="hide-menu">Dashboard</span>
                                </a>
                        </ul>
                        

                        
                    </nav>
                    <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->
            </aside>
            <!--  Sidebar End -->
            <!--  Main wrapper -->
            <div class="body-wrapper">
                <!--  Header Start -->
                <header class="app-header">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <ul class="navbar-nav">
                            <li class="nav-item d-block d-xl-none">
                                <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                                    <i class="ti ti-menu-2"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                                    <i class="ti ti-bell-ringing"></i>
                                    <div class="notification bg-primary rounded-circle"></div>
                                </a>
                            </li>
                        </ul>
                        
                    </nav>
                </header>
                <!--  Header End -->
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold mb-4 ">Create Blogs</h5>
                            
                        </div>
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">{{ __('Create Form') }}</div>
                    
                    
                                    <div class="card-body">
                                        @if (session('success'))
                                            <div class="alert alert-success" role="alert">
                                                {{ session('success') }}
                                            </div>
                                        @endif
                    
                    
                                        <form action="{{ url('blogs') }}" method="POST">
                                            @csrf
                                            <div class="row mb-3 mx-3">
                                                <label for="title" class="form-label p-0">Title</label>
                                                <input type="text" id="title" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" />
                                                @error('title')
                                                    <div class="invalid-feedback p-0" role="alert">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="row mb-3 mx-3">
                                                <label for="content" class="form-label p-0">Content</label>
                                                <textarea name="content" id="content" rows="5" style="width: 100%" class="form-control @error('description') is-invalid @enderror"></textarea>
                                                @error('content')
                                                    <div class="invalid-feedback p-0" role="alert">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="row mb-3 mx-3">
                                                <label for="author" class="form-label p-0">Author</label>
                                                <input type="text" id="author" name="author" class="form-control @error('author') is-invalid @enderror" value="{{ old('author') }}" />
                                                @error('author')
                                                    <div class="invalid-feedback p-0" role="alert">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="row mb-3 mx-3">
                                                <label for="publish" class="form-label p-0">Publish Date</label>
                                                <input type="date" id="publish" name="publish" class="form-control @error('deadline') is-invalid @enderror" value="{{ old('deadline') }}" />
                                                @error('deadline')
                                                    <div class="invalid-feedback p-0" role="alert">{{ $message }}</div>
                                                @enderror
                                            </div>
                                           <div class="row mb-3 mx-3">
                                            <label for="image" class="form-label p-0">Upload your Image</label>
                                            <input type="file" id="image" name="image" class="form-control">
                                           </div>
                                            <div class="row mb-3 mx-2">
                                                <div class="col-6">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
        <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/js/sidebarmenu.js"></script>
        <script src="../assets/js/app.min.js"></script>
        <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
       
    </body>
</html>

@extends('layouts.app')

@section('content')
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->


<!-- Topbar Start -->
<div class="container-fluid bg-dark px-5 d-none d-lg-block">
    <div class="row gx-0">
        <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>123 Street, New York, USA</small>
                <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+012 345 6789</small>
                <small class="text-light"><i class="fa fa-envelope-open me-2"></i>info@example.com</small>
            </div>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>Tourist</h1>
            <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ route('demandes') }}" class="nav-item nav-link">demandes</a>
                
                
                <a href="package.html" class="nav-item nav-link active">Profil</a>
              
                <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
            </div>
            @guest
            <!-- Show Register and Login buttons when user is not authenticated -->
            <a href="{{ route('register') }}" class="btn btn-primary rounded-pill py-2 px-4">Register</a>
            <a href="{{ route('login') }}" class="btn btn-primary rounded-pill py-2 px-4">Login</a>
        @else
            <!-- Show Logout button when user is authenticated -->
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
        
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        @endguest
        </div>
    </nav>

    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Packages</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Packages</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Navbar & Hero End -->


<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Packages</h6>
            <h1 class="mb-5">Our Request</h1>
        </div>
        
    </div>
</div>
<div class="card-body">
    <div class="table-responsive">
       <div class="row justify-content-between">
          <div class="col-sm-6 col-md-6">
             <div id="user_list_datatable_info" class="dataTables_filter">
                <form class="mr-3 position-relative">
                   <div class="form-group mb-0">
                      <input type="search" class="form-control" id="exampleInputSearch" placeholder="Search" aria-controls="user-list-table">
                   </div>
                </form>
             </div>
          </div>
          <div class="col-sm-6 col-md-6">
             <div class="user-list-files d-flex">
                <a class="bg-primary" href="javascript:void();" >
                   Print
                </a>
                <a class="bg-primary" href="javascript:void();">
                   Excel
                </a>
                <a class="bg-primary" href="javascript:void();">
                   Pdf
                </a>
             </div>
          </div>
       </div>
       <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
       <thead>
             <tr>
                <th>Profile</th>
                <th>Name</th>
                <th>Contact</th>
                <th>Email</th>
                <th>Country</th>
                <th>Status</th>
                <th>Company</th>
                <th>Join Date</th>
                <th style="min-width: 100px">Action</th>
             </tr>
       </thead>
       <tbody>
             <tr>
                <td class="text-center"><img class="rounded img-fluid avatar-40" src="../assets/images/user/01.jpg" alt="profile"></td>
                <td>Anna Sthesia</td>
                <td>(760) 756 7568</td>
                <td>annasthesia@gmail.com</td>
                <td>USA</td>
                <td><span class="badge iq-bg-primary">Active</span></td>
                <td>Acme Corporation</td>
                <td>2019/12/01</td>
                <td>
                   <div class="flex align-items-center list-user-action">
                      <a class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add" href="#">accepter<i class="ri-user-add-line"></i></a>
                      <a class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#">refuser<i class="ri-pencil-line"></i></a>
                   </div>
                </td>
             </tr>
             <tr>
                <td class="text-center"><img class="rounded img-fluid avatar-40" src="../assets/images/user/02.jpg" alt="profile"></td>
                <td>Brock Lee</td>
                <td>+62 5689 458 658</td>
                <td>brocklee@gmail.com</td>
                <td>Indonesia</td>
                <td><span class="badge iq-bg-primary">Active</span></td>
                <td>Soylent Corp</td>
                <td>2019/12/01</td>
                <td>
                   <div class="flex align-items-center list-user-action">
                    <a class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add" href="#">accepter<i class="ri-user-add-line"></i></a>
                    <a class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#">refuser<i class="ri-pencil-line"></i></a>
                   </div>
                </td>
             </tr>
             <tr>
                <td class="text-center"><img class="rounded img-fluid avatar-40" src="../assets/images/user/03.jpg" alt="profile"></td>
                <td>Dan Druff</td>
                <td>+55 6523 456 856</td>
                <td>dandruff@gmail.com</td>
                <td>Brazil</td>
                <td><span class="badge iq-bg-warning">Pending</span></td>
                <td>Umbrella Corporation</td>
                <td>2019/12/01</td>
                <td>
                   <div class="flex align-items-center list-user-action">
                    <a class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add" href="#">accepter<i class="ri-user-add-line"></i></a>
                    <a class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#">refuser<i class="ri-pencil-line"></i></a>
                   </div>
                </td>
             </tr>
             <tr>
                <td class="text-center"><img class="rounded img-fluid avatar-40" src="../assets/images/user/04.jpg" alt="profile"></td>
                <td>Hans Olo</td>
                <td>+91 2586 253 125</td>
                <td>hansolo@gmail.com</td>
                <td>India</td>
                <td><span class="badge iq-bg-danger">Inactive</span></td>
                <td>Vehement Capital</td>
                <td>2019/12/01</td>
                <td>
                   <div class="flex align-items-center list-user-action">
                    <a class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add" href="#">accepter<i class="ri-user-add-line"></i></a>
                    <a class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#">refuser<i class="ri-pencil-line"></i></a>
                   </div>
                </td>
             </tr>
             <tr>
                <td class="text-center"><img class="rounded img-fluid avatar-40" src="../assets/images/user/05.jpg" alt="profile"></td>
                <td>Lynn Guini</td>
                <td>+27 2563 456 589</td>
                <td>lynnguini@gmail.com</td>
                <td>Africa</td>
                <td><span class="badge iq-bg-primary">Active</span></td>
                <td>Massive Dynamic</td>
                <td>2019/12/01</td>
                <td>
                   <div class="flex align-items-center list-user-action">
                    <a class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add" href="#">accepter<i class="ri-user-add-line"></i></a>
                    <a class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#">refuser<i class="ri-pencil-line"></i></a>
                   </div>
                </td>
             </tr>
             <tr>
                <td class="text-center"><img class="rounded img-fluid avatar-40" src="../assets/images/user/06.jpg" alt="profile"></td>
                <td>Eric Shun</td>
                <td>+55 25685 256 589</td>
                <td>ericshun@gmail.com</td>
                <td>Brazil</td>
                <td><span class="badge iq-bg-warning">Pending</span></td>
                <td>Globex Corporation</td>
                <td>2019/12/01</td>
                <td>
                   <div class="flex align-items-center list-user-action">
                    <a class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add" href="#">accepter<i class="ri-user-add-line"></i></a>
                    <a class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#">refuser<i class="ri-pencil-line"></i></a>
                   </div>
                </td>
             </tr>
             <tr>
                <td class="text-center"><img class="rounded img-fluid avatar-40" src="../assets/images/user/07.jpg" alt="profile"></td>
                <td>aaronottix</td>
                <td>(760) 765 2658</td>
                <td>budwiser@ymail.com</td>
                <td>USA</td>
                <td><span class="badge iq-bg-info">Hold</span></td>
                <td>Acme Corporation</td>
                <td>2019/12/01</td>
                <td>
                   <div class="flex align-items-center list-user-action">
                    <a class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add" href="#">accepter<i class="ri-user-add-line"></i></a>
                    <a class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#">refuser<i class="ri-pencil-line"></i></a>
                   </div>
                </td>
             </tr>
             <tr>
                <td class="text-center"><img class="rounded img-fluid avatar-40" src="../assets/images/user/08.jpg" alt="profile"></td>
                <td>Marge Arita</td>
                <td>+27 5625 456 589</td>
                <td>margearita@gmail.com</td>
                <td>Africa</td>
                <td><span class="badge iq-bg-success">Complite</span></td>
                <td>Vehement Capital</td>
                <td>2019/12/01</td>
                <td>
                   <div class="flex align-items-center list-user-action">
                    <a class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add" href="#">accepter<i class="ri-user-add-line"></i></a>
                    <a class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#">refuser<i class="ri-pencil-line"></i></a>
                   </div>
                </td>
             </tr>
             <tr>
                <td class="text-center"><img class="rounded img-fluid avatar-40" src="../assets/images/user/09.jpg" alt="profile"></td>
                <td>Bill Dabear</td>
                <td>+55 2563 456 589</td>
                <td>billdabear@gmail.com</td>
                <td>Brazil</td>
                <td><span class="badge iq-bg-primary">active</span></td>
                <td>Massive Dynamic</td>
                <td>2019/12/01</td>
                <td>
                   <div class="flex align-items-center list-user-action">
                      <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add" href="#"><i class="ri-user-add-line"></i></a>
                      <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i class="ri-pencil-line"></i></a>
                      <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                   </div>
                </td>
             </tr>
       </tbody>
       </table>
    </div>
       <div class="row justify-content-between mt-3">
          <div id="user-list-page-info" class="col-md-6">
             <span>Showing 1 to 5 of 5 entries</span>
          </div>
          <div class="col-md-6">
             <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end mb-0">
                   <li class="page-item disabled">
                      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                   </li>
                   <li class="page-item active"><a class="page-link" href="#">1</a></li>
                   <li class="page-item"><a class="page-link" href="#">2</a></li>
                   <li class="page-item"><a class="page-link" href="#">3</a></li>
                   <li class="page-item">
                      <a class="page-link" href="#">Next</a>
                   </li>
                </ul>
             </nav>
          </div>
       </div>
 </div>
<!-- Service End -->



<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Company</h4>
                <a class="btn btn-link" href="">About Us</a>
                <a class="btn btn-link" href="">Contact Us</a>
                <a class="btn btn-link" href="">Privacy Policy</a>
                <a class="btn btn-link" href="">Terms & Condition</a>
                <a class="btn btn-link" href="">FAQs & Help</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Contact</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Gallery</h4>
                <div class="row g-2 pt-2">
                    <div class="col-4">
                        <img class="img-fluid bg-light p-1" src="img/package-1.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light p-1" src="img/package-2.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light p-1" src="img/package-3.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light p-1" src="img/package-2.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light p-1" src="img/package-3.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light p-1" src="img/package-1.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Newsletter</h4>
                <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                    <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.

                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="">Home</a>
                        <a href="">Cookies</a>
                        <a href="">Help</a>
                        <a href="">FQAs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content-page">
    <div class="container-fluid container">
  <div class="row">
     <div class="col-sm-12">
           <div class="card">
              <div class="card-header d-flex justify-content-between">
                 <div class="header-title">
                    <h4 class="card-title">User List</h4>
                 </div>
              </div>
              
           </div>
     </div>
  </div>
  @endsection
@extends('layouts.app')

@section('content')
  <!-- Spinner Start -->
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
            <a href="{{ route('home') }}" class="btn btn-primary rounded-pill py-2 px-4">logout</a>
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


<!-- Package Start -->

<!-- Package End -->

<div class="content-page">
    <div class="container-fluid container">
     <div class="row">
        <div class="col-lg-12">
           <div class="card">
              <div class="card-body p-0">
                 <div class="iq-edit-list usr-edit">
                 </div>
              </div>
           </div>
        </div>
        <div class="col-lg-12">
           <div class="iq-edit-list-data">
              <div class="tab-content">
                 <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                    <div class="card">
                       <div class="card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                             <h4 class="card-title">Personal Information</h4>
                          </div>
                       </div>
                       <div class="card-body">
                          <form>
                             <div class="form-group row align-items-center">
                                <div class="col-md-12">
                                   <div class="profile-img-edit">
                                    <div class="crm-profile-img-edit">
                                        <img class="crm-profile-pic rounded-circle avatar-50" src="./assets/images/user/11.png" alt="profile-pic">
                                        <div class="crm-p-image bg-primary">
                                            <i class="las la-pen upload-button"></i>
                                            <input class="file-upload" type="file" accept="image/*">
                                        </div>
                                    </div>
                                    
                                      </div>                                          
                                   </div>
                                </div>
                             </div>
                             <div class=" row align-items-center">
                                <div class="form-group col-sm-6">
                                   <label for="fname">First Name:</label>
                                   <input type="text" class="form-control" id="fname" value="Barry">
                                </div>
                                <div class="form-group col-sm-6">
                                   <label for="lname">Last Name:</label>
                                   <input type="text" class="form-control" id="lname" value="Tech">
                                </div>
                                
                                <div class="form-group col-sm-6">
                                   <label for="cname">City:</label>
                                   <input type="text" class="form-control" id="cname" value="Atlanta">
                                </div>
                                
                                <div class="form-group col-sm-6">
                                   <label class="d-block">Gender:</label>
                                   <div class="custom-control custom-radio custom-control-inline">
                                      <input type="radio" id="customRadio6" name="customRadio1" class="custom-control-input" checked="">
                                      <label class="custom-control-label" for="customRadio6"> Male </label>
                                   </div>
                                   <div class="custom-control custom-radio custom-control-inline">
                                      <input type="radio" id="customRadio7" name="customRadio1" class="custom-control-input">
                                      <label class="custom-control-label" for="customRadio7"> Female </label>
                                   </div>
                                </div>
                                
                                
                                <div class="form-group col-sm-6">
                                   <label>Horaire de travail:</label>
                                   <select class="form-control" id="exampleFormControlSelect2">
                                      <option>08-10</option>
                                      <option>10-13</option>
                                      <option selected="">13-15</option>
                                      <option>15-17</option>
                                      <option>17 > </option>
                                   </select>
                                </div>
                                <div class="form-group col-sm-6">
                                   <label>Country:</label>
                                   <select class="form-control" id="exampleFormControlSelect3">
                                      <option>Caneda</option>
                                      <option>Noida</option>
                                      <option selected="">USA</option>
                                      <option>India</option>
                                      <option>Africa</option>
                                   </select>
                                </div>
                                
                                </div>
                                <div class="form-group col-sm-12">
                                   <label>Address:</label>
                                   <textarea class="form-control" name="address" rows="5" style="line-height: 22px;">
                                   37 Cardinal Lane
                                   Petersburg, VA 23803
                                   United States of America
                                   Zip Code: 85001
                                   </textarea>
                                </div>
                                <label>Certification:</label>
                                <div class="crm-p-image bg-primary">
                                    <i class="las la-pen upload-button"></i>
                                    <input class="file-upload" type="file" accept="image/*">
                                </div>
                                <div style="margin-top: 20px; margin-bottom: 20px;">
                                    <!-- Contenu à l'intérieur du div -->
                                </div>
                             </div>
                             <button type="submit" class="btn btn-primary mr-2">Submit</button>
                             <button type="reset" class="btn iq-bg-danger">Cancel</button>
                          </form>
                       </div>
                    </div>
                 </div>
                 
              </div>
           </div>
        </div>
     </div>
    </div>
  </div>
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
@endsection

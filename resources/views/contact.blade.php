@extends('layouts.base')
@section('content')
<section class="breadcrumb-section section-b-space" style="padding-top:20px;padding-bottom:20px;">
    <ul class="circles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Contact Us</h3>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.htm">
                                <i class="fas fa-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section> <!-- Contact Section Start -->
<section class="contact-section">
    <div class="container">
        <div class="row g-4">
            <!-- Form Contact -->
            <div class="col-lg-7">
                <div class="materialContainer">
                    <div class="material-details">
                        <div class="title title1 title-effect mb-1 title-left">
                            <h2>Contact Us</h2>
                            <p class="ms-0 w-100">Your email address will not be published. Required fields are marked *</p>
                        </div>
                    </div>
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="row g-4 mt-md-1 mt-2">
                    
                            <!-- First Name -->
                            <div class="col-md-6">
                                <label for="first" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="first" name="first_name" placeholder="Enter Your First Name" required>
                            </div>
                    
                            <!-- Last Name -->
                            <div class="col-md-6">
                                <label for="last" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="last" name="last_name" placeholder="Enter Your Last Name" required>
                            </div>
                    
                            <!-- Email -->
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email Address" required>
                            </div>
                    
                            <!-- Phone Number -->
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter Your Phone Number" required>
                            </div>
                    
                            <!-- Comment -->
                            <div class="col-12">
                                <label for="comment" class="form-label">Comment</label>
                                <textarea class="form-control" id="comment" name="comment" rows="5" placeholder="Enter your comment here..." required></textarea>
                            </div>
                    
                            <!-- Submit Button -->
                            <div class="col-auto">
                                <button class="btn btn-solid-default" type="submit">Submit</button>
                            </div>
                    
                        </div>
                    </form>
                    
                </div>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-5">
                <div class="contact-details">
                    <div>
                        <h2>Let's get in touch</h2>
                        <h5 class="font-light">We're open for any suggestion or just to have a chat</h5>
                        <div class="contact-box">
                            <div class="contact-icon">
                                <i data-feather="map-pin" aria-label="Location"></i>
                            </div>
                            <div class="contact-title">
                                <h4>Address:</h4>
                                <p>Tan Phu, VietNam</p>
                            </div>
                        </div>

                        <div class="contact-box">
                            <div class="contact-icon">
                                <i data-feather="phone" aria-label="Phone Number"></i>
                            </div>
                            <div class="contact-title">
                                <h4>Phone Number:</h4>
                                <p>+84 0000000000</p>
                            </div>
                        </div>

                        <div class="contact-box">
                            <div class="contact-icon">
                                <i data-feather="mail" aria-label="Email Address"></i>
                            </div>
                            <div class="contact-title">
                                <h4>Email Address:</h4>
                                <p>TSL@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<!-- Contact Section End -->
@endsection
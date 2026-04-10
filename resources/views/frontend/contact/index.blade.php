@extends('layouts.frontend.main')
@section('title', 'Contact Us')

@section('content')
@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if(session('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <i class="fas fa-exclamation-circle me-2"></i> {{ session('error') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const header = document.querySelector(".header-area");
        if (header) {
            header.classList.remove("header-2");
            header.classList.add("header-1");
        }

        const logo = document.querySelector(".logo img");
        if (logo) {
            logo.src = "{{ asset('frontend/assets/images/logos/logo.webp') }}";
        }
    });
</script>
<main id="primary" class="site-main">
    <div class="space-for-header"></div>
    <!-- start: Breadcrumb Section -->
    <section class="tj-page-header section-gap-x" data-bg-image="https://themejunction.net/html/bexon/demo/assets/images/bg/pheader-bg.webp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-page-header-content text-center">
                        <h1 class="tj-page-title">Contact Us</h1>
                        <div class="tj-page-link">
                            <span><i class="tji-home"></i></span>
                            <span>
                                <a href="{{ route('home') }}">Home</a>
                            </span>
                            <span><i class="tji-arrow-right"></i></span>
                            <span>
                                <span>Contact Us</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-header-overlay" data-bg-image="https://themejunction.net/html/bexon/demo/assets/images/shape/pheader-overlay.webp"></div>
    </section>
    <!-- end: Breadcrumb Section -->

    <!-- start: Contact Top Section -->
    <div class="tj-contact-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec-heading text-center">
                        <span class="sub-title wow fadeInUp" data-wow-delay=".1s"><i class="tji-box"></i>Contact info</span>
                        <h2 class="sec-title title-anim"><span>Reach</span> Out to Us</h2>
                    </div>
                </div>
            </div>
            <div class="row row-gap-4">
                <div class="col-xl-3 col-lg-6 col-sm-6">
                    <div class="contact-item style-2 wow fadeInUp" data-wow-delay=".3s">
                        <div class="contact-icon">
                            <i class="tji-location-3"></i>
                        </div>
                        <h3 class="contact-title">Our Location</h3>
                        <p>993 Renner Burg, West Rond, MT 94251-030</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6">
                    <div class="contact-item style-2 wow fadeInUp" data-wow-delay=".5s">
                        <div class="contact-icon">
                            <i class="tji-envelop"></i>
                        </div>
                        <h3 class="contact-title">Email us</h3>
                        <ul class="contact-list">
                            <li><a href="mailto:info@truenorthbuild.ca">info@truenorthbuild.ca</a></li>
                            <li><a href="mailto:israr@truenorthbuild.ca">israr@truenorthbuild.ca</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6">
                    <div class="contact-item style-2 wow fadeInUp" data-wow-delay=".7s">
                        <div class="contact-icon">
                            <i class="tji-phone"></i>
                        </div>
                        <h3 class="contact-title">Call us</h3>
                        <ul class="contact-list">
                            <li><a href="tel:+14038300054"><b>Phone:</b> +1 (403) 830-0054</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6">
                    <div class="contact-item style-2 wow fadeInUp" data-wow-delay=".9s">
                        <div class="contact-icon">
                            <i class="tji-chat"></i>
                        </div>
                        <h3 class="contact-title">Live chat</h3>
                        <ul class="contact-list">
                            <li><a href="mailto:admin@truenorthbuild.ca">admin@truenorthbuild.ca</a></li>
                            <li class="active"><a href="{{ route('contact') }}">Need help?</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end: Contact Top Section -->

    <!-- start: Contact Section -->
    <section class="tj-contact-section-2 section-bottom-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-form wow fadeInUp" data-wow-delay=".1s">
                        <h3 class="title">Feel Free to Get in Touch or Visit our Location.</h3>
                        <form id="contact-form">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-input">
                                        <input type="text" name="conName" placeholder="Full Name*" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-input">
                                        <input type="email" name="conEmail" placeholder="Email Address*" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-input">
                                        <input type="tel" name="conPhone" placeholder="Phone number*" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-input">
                                        <div class="tj-nice-select-box">
                                            <div class="tj-select">
                                                <select name="conSubject">
                                                    <option value="">Chose a option</option>
                                                    <option value="Business Strategy">Business Strategy</option>
                                                    <option value="Customer Experience">Customer Experience</option>
                                                    <option value="Sustainability and ESG">Sustainability and ESG</option>
                                                    <option value="Training and Development">Training and Development</option>
                                                    <option value="IT Support & Maintenance">IT Support & Maintenance</option>
                                                    <option value="Marketing Strategy">Marketing Strategy</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-input message-input">
                                        <textarea name="conMessage" id="message" placeholder="Type message*" required></textarea>
                                    </div>
                                </div>
                                <div class="submit-btn">
                                    <button class="tj-primary-btn" type="submit">
                                        <span class="btn-text"><span>Submit Now</span></span>
                                        <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="map-area wow fadeInUp" data-wow-delay=".3s">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d316440.5712687838!2d-74.01091796224334!3d40.67186885683901!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1745918398047!5m2!1sen!2sbd"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Contact Section -->

    <!-- start: Cta Section -->
    <section class="tj-cta-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-area">
                        <div class="cta-content">
                            <h2 class="title title-anim">Let’s Build Future Together.</h2>
                            <div class="cta-btn wow fadeInUp" data-wow-delay=".6s">
                                <a class="tj-primary-btn btn-dark" href="{{ route('contact') }}">
                                    <span class="btn-text"><span>Get Started Now</span></span>
                                    <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                </a>
                            </div>
                        </div>
                        <div class="cta-img">
                            <img src="https://themejunction.net/html/bexon/demo/assets/images/cta/cta-bg.webp" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Cta Section -->
</main>
@endsection
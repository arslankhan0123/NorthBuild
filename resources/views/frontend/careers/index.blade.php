@extends('layouts.frontend.main')
@section('title', 'Careers')

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
                        <h1 class="tj-page-title">Careers</h1>
                        <div class="tj-page-link">
                            <span><i class="tji-home"></i></span>
                            <span>
                                <a href="{{ route('home') }}">Home</a>
                            </span>
                            <span><i class="tji-arrow-right"></i></span>
                            <span>
                                <span>Careers</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-header-overlay" data-bg-image="https://themejunction.net/html/bexon/demo/assets/images/shape/pheader-overlay.webp"></div>
    </section>
    <!-- end: Breadcrumb Section -->

    <!-- start: Careers Section -->
    <section class="tj-careers-section section-gap">
        <div class="container">
            <div class="row rg-30">
                <div class="col-xl-4 col-md-6">
                    <div class="tj-careers wow fadeInUp" data-wow-delay="0.1s">
                        <div class="tj-careers-icon mb-30">
                            <i class="tji-strategy"></i>
                        </div>
                        <div class="tj-careers-tag">
                            <span>Full time job/on site</span> <span>Urgent</span>
                        </div>
                        <h4 class="tj-careers-title">
                            <a href="careers-details.html">Business Strategy Consultant</a>
                        </h4>
                        <div class="tj-careers-salary">
                            <span>$400-$550</span> / week
                        </div>
                        <div class="tj-careers-bottom">
                            <span class="location"><i class="tji-location"></i>London,UK</span>
                            <a href="careers-details.html" class="tj-careers-btn">
                                <div class="btn-text">
                                    <span>Apply Now</span>
                                </div>
                                <span class="btn-icon">
                                    <i class="tji-arrow-right"></i>
                                    <i class="tji-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="tj-careers wow fadeInUp" data-wow-delay="0.3s">
                        <div class="tj-careers-icon mb-30">
                            <i class="tji-manage"></i>
                        </div>
                        <div class="tj-careers-tag">
                            <span>Full time job/on site</span> <span>Urgent</span>
                        </div>
                        <h4 class="tj-careers-title">
                            <a href="careers-details.html">Management Consultant</a>
                        </h4>
                        <div class="tj-careers-salary">
                            <span>$400-$550</span> / week
                        </div>
                        <div class="tj-careers-bottom">
                            <span class="location"><i class="tji-location"></i>London,UK</span>
                            <a href="careers-details.html" class="tj-careers-btn">
                                <div class="btn-text">
                                    <span>Apply Now</span>
                                </div>
                                <span class="btn-icon">
                                    <i class="tji-arrow-right"></i>
                                    <i class="tji-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="tj-careers wow fadeInUp" data-wow-delay="0.5s">
                        <div class="tj-careers-icon mb-30">
                            <i class="tji-process-1"></i>
                        </div>
                        <div class="tj-careers-tag">
                            <span>Full time job/on site</span> <span>Urgent</span>
                        </div>
                        <h4 class="tj-careers-title">
                            <a href="careers-details.html">Business Process Consultant</a>
                        </h4>
                        <div class="tj-careers-salary">
                            <span>$400-$550</span> / week
                        </div>
                        <div class="tj-careers-bottom">
                            <span class="location"><i class="tji-location"></i>London,UK</span>
                            <a href="careers-details.html" class="tj-careers-btn">
                                <div class="btn-text">
                                    <span>Apply Now</span>
                                </div>
                                <span class="btn-icon">
                                    <i class="tji-arrow-right"></i>
                                    <i class="tji-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="tj-careers wow fadeInUp" data-wow-delay="0.7s">
                        <div class="tj-careers-icon mb-30">
                            <i class="tji-operations"></i>
                        </div>
                        <div class="tj-careers-tag">
                            <span>Full time job/on site</span> <span>Urgent</span>
                        </div>
                        <h4 class="tj-careers-title">
                            <a href="careers-details.html">Operations Consultant</a>
                        </h4>
                        <div class="tj-careers-salary">
                            <span>$400-$550</span> / week
                        </div>
                        <div class="tj-careers-bottom">
                            <span class="location"><i class="tji-location"></i>London,UK</span>
                            <a href="careers-details.html" class="tj-careers-btn">
                                <div class="btn-text">
                                    <span>Apply Now</span>
                                </div>
                                <span class="btn-icon">
                                    <i class="tji-arrow-right"></i>
                                    <i class="tji-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="tj-careers wow fadeInUp" data-wow-delay="0.9s">
                        <div class="tj-careers-icon mb-30">
                            <i class="tji-organize"></i>
                        </div>
                        <div class="tj-careers-tag">
                            <span>Full time job/on site</span> <span>Urgent</span>
                        </div>
                        <h4 class="tj-careers-title">
                            <a href="careers-details.html">Organizational Development</a>
                        </h4>
                        <div class="tj-careers-salary">
                            <span>$400-$550</span> / week
                        </div>
                        <div class="tj-careers-bottom">
                            <span class="location"><i class="tji-location"></i>London,UK</span>
                            <a href="careers-details.html" class="tj-careers-btn">
                                <div class="btn-text">
                                    <span>Apply Now</span>
                                </div>
                                <span class="btn-icon">
                                    <i class="tji-arrow-right"></i>
                                    <i class="tji-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="tj-careers wow fadeInUp" data-wow-delay="1.1s">
                        <div class="tj-careers-icon mb-30">
                            <i class="tji-performance"></i>
                        </div>
                        <div class="tj-careers-tag">
                            <span>Full time job/on site</span> <span>Urgent</span>
                        </div>
                        <h4 class="tj-careers-title">
                            <a href="careers-details.html">Performance Optimization</a>
                        </h4>
                        <div class="tj-careers-salary">
                            <span>$400-$550</span> / week
                        </div>
                        <div class="tj-careers-bottom">
                            <span class="location"><i class="tji-location"></i>London,UK</span>
                            <a href="careers-details.html" class="tj-careers-btn">
                                <div class="btn-text">
                                    <span>Apply Now</span>
                                </div>
                                <span class="btn-icon">
                                    <i class="tji-arrow-right"></i>
                                    <i class="tji-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- post pagination -->
            <div class="tj-pagination d-flex justify-content-center">
                <ul>
                    <li>
                        <span aria-current="page" class="page-numbers current">01</span>
                    </li>
                    <li>
                        <a class="page-numbers" href="#">02</a>
                    </li>
                    <li>
                        <a class="next page-numbers" href="#"><i class="tji-arrow-right-long"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- end: Careers Section -->

    <!-- start: Cta Section -->
    <section class="tj-cta-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-area">
                        <div class="cta-content">
                            <h2 class="title title-anim">Let’s Build Future Together.</h2>
                            <div class="cta-btn wow fadeInUp" data-wow-delay=".6s">
                                <a class="tj-primary-btn btn-dark" href="contact.html">
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
<?php get_header() ?>

<section id="hero" class="hero-section py-5 d-flex justify-content-center align-items-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 text-center px-4 text-lg-start order-2 order-lg-1">
                <h1 class="fw-bold py-2">Your Digital Journey Starts Here</h1>
                <p class="text-white-50 mb-5">We're a team of creators and innovators dedicated to designing, developing, and delivering standout websites.
                    Whether you're a fresh startup or an established brand, we provide the tools and strategies to bring your online presence to life.</p>
                <a href="#" class="btn text-light py-2 px-4 main-btn">Free Consultation</a>
            </div>
            <div class="col-lg-6 text-center px-4 pb-4 pb-lg-0 order-1 order-lg-2">
                <div class="hero-img">
                    <img class="img-fluid py-4" src="<?php echo get_template_directory_uri() . '/imgs/hero-img.png' ?>" alt="Hero Image">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about" class="about-section py-5 d-flex justify-content-center align-items-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 text-center px-4">
                <div class="about-img">
                    <img class="img-fluid py-4" src="<?php echo get_template_directory_uri() . '/imgs/about-img.png' ?>" alt="About Us Image">
                </div>
            </div>
            <div class="col-lg-6 text-center px-4 text-lg-start">
                <h5 class="fw-bold">About</h5>
                <h1 class="fw-bold py-2">Who We Are</h1>
                <p class="mb-5">At AGEN, we believe in the power of simplicity and efficiency. Our team specializes in transforming ideas into digital realities.
                    From sleek web designs to robust e-commerce platforms, we provide a full spectrum of services tailored to elevate your brand. With a focus on user-centric solutions and innovative marketing, we ensure your online presence is not just visible, but memorable.</p>
                <a href="#" class="btn text-light py-2 px-4 main-btn">Know More</a>
            </div>
        </div>
    </div>
</section>

<section id="services" class="services-section py-5 d-flex justify-content-between align-items-center">
    <div class="container">
        <div class="main-text text-center pb-5">
            <h5 class="fw-bold">Services</h5>
            <h1 class="fw-bold py-2">What We Do</h1>
        </div>
        <div class="row my-5">
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <div class="box">
                    <div class="icon-box"><i class="fa-solid fa-laptop"></i></div>
                    <h4 class="title">Web Design</h4>
                    <p class="description">We focus on crafting visually appealing, intuitive interfaces that ensure a seamless user experience.
                        Our designs are about creating a digital space where your brand's personality shines through.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <div class="box">
                    <div class="icon-box"><i class="fa-solid fa-code"></i></div>
                    <h4 class="title">Web Development</h4>
                    <p class="description">We build robust, scalable, and secure websites that function flawlessly.
                        From front-end to back-end, our developers ensure that your site is responsive, fast, and aligned with the latest web standards.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <div class="box">
                    <div class="icon-box"><i class="fa-solid fa-store"></i></div>
                    <h4 class="title">E-commerce Solutions</h4>
                    <p class="description">We develop e-commerce platforms that are user-friendly, secure, and optimized for conversions.
                        We make sure your online store operates smoothly.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <div class="box">
                    <div class="icon-box"><i class="fa-solid fa-bullhorn"></i></div>
                    <h4 class="title">Marketing</h4>
                    <p class="description">Our marketing strategies are data-driven and tailored to your unique brand.
                        We use a mix of SEO and content marketing to drive traffic, engage customers, and boost sales.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="team" class="team-section py-5 d-flex justify-content-between align-items-center">
    <div class="container">
        <div class="main-text text-center pb-5">
            <h5 class="fw-bold">Team</h5>
            <h1 class="fw-bold py-2">Our Experts</h1>
        </div>
        <div class="row my-5">
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <div class="box">
                    <div class="box-content text-center">
                        <div class="profile-img">
                            <img class="img-fluid mx-auto" src="<?php echo get_template_directory_uri() . '/imgs/Ethan-img.png' ?>" alt="">
                        </div>
                        <span class="job-title">Web Designer</span>
                        <h4 class="name mb-3 mt-2">Ethan</h4>
                        <ul class="social-icons list-unstyled d-flex flex-wrap justify-content-center gap-3">
                            <li><a href="#"> <i class="fa-brands fa-facebook fs-4"></i> </a></li>
                            <li><a href="#"> <i class="fa-brands fa-twitter fs-4"></i> </a></li>
                            <li><a href="#"> <i class="fa-brands fa-linkedin fs-4"></i> </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <div class="box">
                    <div class="box-content text-center">
                        <div class="profile-img">
                            <img class="img-fluid mx-auto" src="<?php echo get_template_directory_uri() . '/imgs/Sofia-img.png' ?>" alt="">
                        </div>
                        <span class="job-title">Manager</span>
                        <h4 class="name mb-3 mt-2">Sofia</h4>
                        <ul class="social-icons list-unstyled d-flex flex-wrap justify-content-center gap-3">
                            <li><a href="#"> <i class="fa-brands fa-facebook fs-4"></i> </a></li>
                            <li><a href="#"> <i class="fa-brands fa-twitter fs-4"></i> </a></li>
                            <li><a href="#"> <i class="fa-brands fa-linkedin fs-4"></i> </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <div class="box">
                    <div class="box-content text-center">
                        <div class="profile-img">
                            <img class="img-fluid mx-auto" src="<?php echo get_template_directory_uri() . '/imgs/Noah-img.png' ?>" alt="">
                        </div>
                        <span class="job-title">Web Developer</span>
                        <h4 class="name mb-3 mt-2">Noah</h4>
                        <ul class="social-icons list-unstyled d-flex flex-wrap justify-content-center gap-3">
                            <li><a href="#"> <i class="fa-brands fa-facebook fs-4"></i> </a></li>
                            <li><a href="#"> <i class="fa-brands fa-twitter fs-4"></i> </a></li>
                            <li><a href="#"> <i class="fa-brands fa-linkedin fs-4"></i> </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <div class="box">
                    <div class="box-content text-center">
                        <div class="profile-img">
                            <img class="img-fluid mx-auto" src="<?php echo get_template_directory_uri() . '/imgs/Olivia-img.png' ?>" alt="">
                        </div>
                        <span class="job-title">Marketing Specialist</span>
                        <h4 class="name mb-3 mt-2">Olivia</h4>
                        <ul class="social-icons list-unstyled d-flex flex-wrap justify-content-center gap-3">
                            <li><a href="#"> <i class="fa-brands fa-facebook fs-4"></i> </a></li>
                            <li><a href="#"> <i class="fa-brands fa-twitter fs-4"></i> </a></li>
                            <li><a href="#"> <i class="fa-brands fa-linkedin fs-4"></i> </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="consultation-section text-center py-5">
    <div class="container">
        <div class="main-text text-center pb-5">
            <h5 class="fw-bold">Contact</h5>
            <h1 class="fw-bold mb-3 py-2">48-Hour Project Estimates</h1>
            <p class="px-5">Looking to expand your business with a website? Connect with us for a consultation.</p>
            <a href="#" class="btn text-light my-4 py-2 px-4 main-btn">Free Consultation</a>
        </div>
    </div>
</section>

<?php get_footer() ?>
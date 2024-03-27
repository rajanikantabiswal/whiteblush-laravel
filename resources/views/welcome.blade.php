@extends('layouts.masterLayout')
@section('title')
    Lastmile Solutions
@endsection

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
        <div class="row gy-4 d-flex justify-content-between">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h2 data-aos="fade-up">Empowering Logistics Excellence</h2>
                <p data-aos="fade-up" data-aos-delay="100">At WhiteBlush Last Mile Solution, we redefine logistics
                    support. We specialize in providing dynamic manpower solutions to streamline last-mile deliveries
                    for logistics companies. From expert manpower services tailored for efficient Delhivery to
                    comprehensive transportation solutions, we pave the way for your success. Trust our agile start-up
                    to elevate your logistical prowess and exceed every delivery expectation.</p>

                <!-- <form action="#" class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
            <input type="text" class="form-control" placeholder="ZIP code or CitY">
            <button type="submit" class="btn btn-primary">Search</button>
          </form> -->

                <div class="row gy-4" data-aos="fade-up" data-aos-delay="400">

                    <div class="col-lg-3 col-6">
                        <div class="stats-item text-center w-100">
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Clients</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-6">
                        <div class="stats-item text-center w-100">
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Projects</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-6">
                        <div class="stats-item text-center w-100">
                            <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Support</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-6">
                        <div class="stats-item text-center w-100">
                            <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Workers</p>
                        </div>
                    </div><!-- End Stats Item -->

                </div>
            </div>

            <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                <img src="assets/img/hero-img.svg" class="img-fluid mb-3 mb-lg-0" alt="">
            </div>

        </div>
    </div>
</section><!-- End Hero Section -->
@section('main-section')
    <main id="main">

        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up">
                        <div class="icon flex-shrink-0"><i class="fa-solid fa-cart-flatbed"></i></div>
                        <div>
                            <h4 class="title">Technology Integration</h4>
                            <p class="description">Innovative systems enhancing tracking and efficiency.</p>
                            <a href="service-details.html" class="readmore stretched-link"><span>Learn More</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon flex-shrink-0"><i class="fa-solid fa-truck"></i></div>
                        <div>
                            <h4 class="title">Efficient Delivery Network</h4>
                            <p class="description">Streamlined logistics solutions for prompt deliveries.</p>
                            <a href="service-details.html" class="readmore stretched-link"><span>Learn More</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon flex-shrink-0"><i class="fa-solid fa-truck-ramp-box"></i></div>
                        <div>
                            <h4 class="title">Eco-friendly Transport Solutions</h4>
                            <p class="description">Sustainable practices driving our transportation services.</p>
                            <a href="service-details.html" class="readmore stretched-link"><span>Learn More</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>
        </section><!-- End Featured Services Section -->

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about pt-0">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4">
                    <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
                        <img src="assets/img/about.jpg" class="img-fluid" alt="">
                        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
                    </div>
                    <div class="col-lg-6 content order-last  order-lg-first">
                        <h3>About Us</h3>
                        <p>
                            At WhiteBlush Last Mile Solution, we pioneer logistical excellence through agile manpower
                            services and reliable transportation solutions. Committed to optimizing deliveries, we redefine
                            industry standards, empowering businesses to thrive in the fast-paced world of logistics.
                        </p>
                        <ul>
                            <li data-aos="fade-up" data-aos-delay="100">
                                <i class="bi bi-diagram-3"></i>
                                <div>
                                    <h5>Empowering Logistics</h5>
                                    <p>We drive logistical success through tailored manpower solutions, ensuring seamless
                                        last-mile delivery for our partners.</p>
                                </div>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-fullscreen-exit"></i>
                                <div>
                                    <h5>Innovation at Core</h5>
                                    <p>Our commitment to innovative systems and technology integration fuels efficient
                                        tracking and optimized logistical operations.</p>
                                </div>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="300">
                                <i class="bi bi-broadcast"></i>
                                <div>
                                    <h5>Sustainability in Motion</h5>
                                    <p>Embracing eco-friendly practices, our transportation solutions prioritize
                                        sustainability, contributing to a greener logistical future.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Services Section ======= -->
        <section id="service" class="services pt-0">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <span>Our Services</span>
                    <h2>Our Services</h2>

                </div>

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/man-power-deployment.jpg" alt="" class="img-fluid">
                            </div>
                            <h3><a href="#" class="stretched-link">Manpower Deployment</a></h3>
                            <p>Whether you need temporary support per order or ongoing personnel on a salary basis, our
                                skilled workforce is ready to handle your requirements with professionalism and dedication.
                            </p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/payroll-and-vendor-management.jpg" alt="" class="img-fluid">
                            </div>
                            <h3><a href="#" class="stretched-link">Payroll and Vendor Management</a></h3>
                            <p>Leave the hassle of managing payroll and vendor relationships to us, allowing you to focus on
                                your core business activities while we ensure seamless operations.</p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/cargo-service.jpg" alt="" class="img-fluid">
                            </div>
                            <h3><a href="service-details.html" class="stretched-link">3PL logistics (DH/ODH/MDH)
                                </a></h3>
                            <p>From Direct Handling (DH) to Origin-Destination Handling (ODH) and Multi-Destination Handling
                                (MDH), our 3PL solutions are designed to optimize efficiency and reduce costs across your
                                supply chain.</p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/trucking-service.jpg" alt="" class="img-fluid">
                            </div>
                            <h3><a href="service-details.html" class="stretched-link">Last Mile Hub Operation</a></h3>
                            <p>Our strategically located last-mile hubs enable us to facilitate swift and reliable delivery
                                of goods to their final destination, enhancing customer satisfaction and loyalty.</p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/packaging-service.jpg" alt="" class="img-fluid">
                            </div>
                            <h3><a href="service-details.html" class="stretched-link">Contract Logistics</a></h3>
                            <p>Partner with us for tailored contract logistics solutions designed to meet your specific
                                requirements, providing you with flexibility and scalability as your business evolves.</p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/warehousing-service.jpg" alt="" class="img-fluid">
                            </div>
                            <h3><a href="service-details.html" class="stretched-link">Transportation (FTL/LTL/PTL)</a>
                            </h3>
                            <p>Whether it's Full Truckload (FTL), Less Than Truckload (LTL), or Partial Truckload (PTL)
                                shipments, count on us for efficient and cost-effective transportation solutions that keep
                                your supply chain moving smoothly.</p>
                        </div>
                    </div><!-- End Card Item -->

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Call To Action Section ======= -->
        <section id="call-to-action" class="call-to-action">
            <div class="container" data-aos="zoom-out">

                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h3>Ready to Elevate Your Logistics?</h3>
                        <p> Let's revolutionize your logistical journey together. Contact us now to explore customized
                            solutions designed to drive efficiency and success in every delivery.</p>
                        <a class="cta-btn" href="#">Get in Touch</a>
                    </div>
                </div>

            </div>
        </section><!-- End Call To Action Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container">

                <div class="row gy-4 align-items-center features-item" data-aos="fade-up">

                    <div class="col-md-5">
                        <img src="assets/img/man-power-deployment.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7">
                        <h3>Empower Your Operations with Reliable Manpower</h3>
                        <p class="fst-italic">
                            We understand the importance of reliable and skilled manpower for the success of your logistics
                            operations. Our dedicated team of professionals is trained to handle various tasks efficiently,
                            whether it's order processing, inventory management, or loading and unloading. With flexible
                            deployment options, we ensure that you have the right workforce at the right time to meet your
                            business demands. Trust us to provide seamless manpower solutions that drive productivity and
                            streamline your operations.
                        </p>
                        <ul>
                            <li><i class="bi bi-check"></i> Streamlined personnel for swift deliveries</li>
                            <li><i class="bi bi-check"></i> Customized manpower solutions</li>
                            <li><i class="bi bi-check"></i> Expertise in Delhivery operations</li>
                            <li><i class="bi bi-check"></i> Precision-driven logistics support</li>
                        </ul>
                    </div>
                </div><!-- Features Item -->

                <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
                    <div class="col-md-5 order-1 order-md-2">
                        <img src="assets/img/features-2.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 order-2 order-md-1">
                        <h3>Efficient Payroll and Vendor Management Solutions</h3>
                        <p class="fst-italic">
                            Navigating the intricacies of payroll and vendor relationships can be daunting.
                        </p>
                        <p>
                            At WhiteBlush Last-Mile Solution Pvt. Ltd., we offer tailored solutions that streamline these
                            processes, freeing you to concentrate on your core business activities. From precise payroll
                            processing to meticulous vendor performance evaluation, we manage it all seamlessly, ensuring
                            compliance and optimizing costs at every turn.
                        </p>
                    </div>
                </div><!-- Features Item -->


            </div>
        </section><!-- End Features Section -->

        <!-- ======= Pricing Section ======= -->
        <!-- <section id="pricing" class="pricing pt-0">
              <div class="container" data-aos="fade-up">

                <div class="section-header">
                  <span>Pricing</span>
                  <h2>Pricing</h2>

                </div>

                <div class="row gy-4">

                  <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="pricing-item">
                      <h3>Free Plan</h3>
                      <h4><sup>$</sup>0<span> / month</span></h4>
                      <ul>
                        <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                        <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                        <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                        <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span></li>
                        <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                      </ul>
                      <a href="#" class="buy-btn">Buy Now</a>
                    </div>
                  </div>

                  <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="pricing-item featured">
                      <h3>Business Plan</h3>
                      <h4><sup>$</sup>29<span> / month</span></h4>
                      <ul>
                        <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                        <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                        <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                        <li><i class="bi bi-check"></i> Pharetra massa massa ultricies</li>
                        <li><i class="bi bi-check"></i> Massa ultricies mi quis hendrerit</li>
                      </ul>
                      <a href="#" class="buy-btn">Buy Now</a>
                    </div>
                  </div>

                  <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="pricing-item">
                      <h3>Developer Plan</h3>
                      <h4><sup>$</sup>49<span> / month</span></h4>
                      <ul>
                        <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                        <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                        <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                        <li><i class="bi bi-check"></i> Pharetra massa massa ultricies</li>
                        <li><i class="bi bi-check"></i> Massa ultricies mi quis hendrerit</li>
                      </ul>
                      <a href="#" class="buy-btn">Buy Now</a>
                    </div>
                  </div>

                </div>

              </div>
            </section>End Pricing Section -->
    
        <!--====== CLIENT LOGO PART START ======-->
        <section class="client-logo-area" style='background:#f4f5f4'>
          <!--======  Start Section Title Two ======-->
          <div class="section-title-two">
              <div class="container">
                  <div class="row">
                      <div class="col-12">
                          <div class="section-header">
                              <span>Our Awesome Clients</span>
                              <h2>Our Awesome Clients</h2>

                          </div>
                      </div>
                  </div>
              </div>
              <!-- container -->
          </div>
          <!--====== End Section Title Two ======-->

          <!-- Swiper -->
          <div class="container">
          <div class="swiper clients">
              <div class="swiper-wrapper">
                  <div class="swiper-slide"><img src="assets/img/clients/flipkart.png" alt="Logo"
                          class="img-fluid" /></div>
                  <div class="swiper-slide"><img src="assets/img/clients/bigbasket.png" class="img-fluid"
                          alt="Logo" /></div>
                  <div class="swiper-slide"><img src="assets/img/clients/jumbotail.png" class="img-fluid"
                          alt="Logo" /></div>
                  <div class="swiper-slide"><img src="assets/img/clients/identity-plus.png" class="img-fluid"
                          alt="Logo" /></div>
                  <div class="swiper-slide"><img src="assets/img/clients/airbox.png" class="img-fluid"
                          alt="Logo" /></div>
                  <div class="swiper-slide"><img src="assets/img/clients/elasticrun.png" class="img-fluid"
                          alt="Logo" /></div>
                  <div class="swiper-slide"><img src="assets/img/clients/swiggy.png" class="img-fluid"
                          alt="Logo" /></div>
                    <div class="swiper-slide"><img src="assets/img/clients/bluwheelz.png" class="img-fluid"
                          alt="Logo" /></div>
                <div class="swiper-slide"><img src="assets/img/clients/jiomart.png" class="img-fluid"
                          alt="Logo" /></div>
              </div>
              
          </div>
        </div>

      </section>
      <!--====== CLIENT LOGO PART ENDS ======-->
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="slides-1 swiper" data-aos="fade-up">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <span>Frequently Asked Questions</span>
                    <h2>Frequently Asked Questions</h2>

                </div>

                <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-10">

                        <div class="accordion accordion-flush" id="faqlist">

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-1">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        What types of logistics services does WhiteBlush offer?
                                    </button>
                                </h3>
                                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        WhiteBlush offers a wide range of logistics services including manpower deployment,
                                        payroll and vendor management, 3PL logistics, warehousing and fulfillment, last-mile
                                        hub operations, contract logistics, and transportation solutions.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-2">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        How can I request a quote for your services?
                                    </button>
                                </h3>
                                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        You can request a quote by contacting us directly through phone, email, or by
                                        filling out the inquiry form on our website. Our team will promptly respond to your
                                        request and provide you with a customized quote based on your specific requirements.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-3">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        How does WhiteBlush ensure the security of my inventory?
                                    </button>
                                </h3>
                                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        WhiteBlush takes security seriously and implements stringent measures to safeguard
                                        your inventory. Our warehouses are equipped with advanced security systems,
                                        including surveillance cameras, access control, and alarm systems. Additionally, we
                                        conduct regular audits and inspections to maintain the integrity of your goods.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-4">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        What sets WhiteBlush apart from other logistics providers?
                                    </button>
                                </h3>
                                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        WhiteBlush stands out for its commitment to innovation, reliability, and customer
                                        satisfaction. We leverage cutting-edge technology and industry best practices to
                                        deliver efficient and cost-effective logistics solutions tailored to our clients'
                                        needs.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-5">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Does WhiteBlush offer customizable logistics solutions?
                                    </button>
                                </h3>
                                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Yes, WhiteBlush understands that every business is unique. That's why we offer
                                        customizable logistics solutions to meet your specific requirements. Whether you
                                        need temporary manpower deployment, tailored transportation services, or specialized
                                        warehousing solutions, we can accommodate your needs.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End Frequently Asked Questions Section -->

    </main><!-- End #main -->
@endsection

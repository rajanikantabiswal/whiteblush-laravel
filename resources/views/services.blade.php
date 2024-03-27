@extends('layouts.masterLayout')
@section('title')
    Services
@endsection
@section('main-section')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
                <div class="container position-relative">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h2>Services</h2>
                            <p>Explore our tailored logistics solutions for manpower, delivery, warehousing, and
                                distribution needs.</p>
                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <div class="container">
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Services</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Featured Services Section ======= -->
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

        <!-- ======= Services Section ======= -->
        <section id="service" class="services pt-0">
            <div class="container" data-aos="fade-up">

                {{-- <div class="section-header">
                    <span>Our Services</span>
                    <h2>Our Services</h2>

                </div> --}}

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



        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container">

                <div class="slides-1 swiper" data-aos="fade-up">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                    rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                    risus at semper.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                    cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                    legam anim culpa.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam
                                    duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat
                                    minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore
                                    labore illum veniam.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                    alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                    veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                                    culpa fore nisi cillum quid.
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

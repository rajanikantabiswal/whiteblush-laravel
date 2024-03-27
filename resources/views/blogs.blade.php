@extends('layouts.masterLayout')
@section('title')
Our Blogs
@endsection
@section('main-section')
<main id="main">
      <!-- ======= Breadcrumbs ======= -->
      <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
          <div class="container position-relative">
            <div class="row d-flex justify-content-center">
              <div class="col-lg-6 text-center">
                <h2>Our Blogs</h2>
                <p>Stay informed with industry insights and updates on logistics and manpower solutions.</p>
              </div>
            </div>
          </div>
        </div>
        <nav>
          <div class="container">
            <ol>
              <li><a href="{{ route('home') }}">Home</a></li>
              <li>blogs</li>
            </ol>
          </div>
        </nav>
      </div><!-- End Breadcrumbs -->

      <section id="blogs" class="blogs">
        <div class="d-flex justify-content-center">
          <h4>No blogs found!</h4>
        </div>
      </section>
</main>
@endsection
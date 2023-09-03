@extends('client.index')
@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('');">
          <div class="container position-relative">
            <div class="row d-flex justify-content-center">
              <div class="col-lg-6 text-center">
                <h2>Detail</h2>
                <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
              </div>
            </div>
          </div>
        </div>
        <nav>
          <div class="container">
            <ol>
              <li><a href="index.html">Home</a></li>
              <li>Detail</li>
            </ol>
          </div>
        </nav>
      </div><!-- End Breadcrumbs -->
  
      <!-- ======= Portfolio Details Section ======= -->
      <section id="portfolio-details" class="portfolio-details">
        <div class="container" data-aos="fade-up">
  
          <div class="position-relative h-100">
        
  
                <div class="swiper-slide">
                  <img src="{{ url('berita/img') }}/{{ $ta->foto }}" width="100%"
                                                class="img-thumbnail">
                </div>
  
                
              
        
  
          </div>
  
          <div class="row justify-content-between gy-4 mt-4">
  
            <div class="col-lg-8">
              <div class="portfolio-description">
                <h2>{{ $ta->judul }}</h2>
                <p>
                    {{ $ta->keterangan }}  
                </p>
  
              </div>
            </div>
  
            <div class="col-lg-3">
              <div class="portfolio-info">
                <h3>Information</h3>
                <ul>
                  <li><strong>Tanggal</strong> <span>{{ $ta->tanggal }}</span></li>
                  <li><strong>Penerbit</strong> <span>{{ $ta->user->name }}</span></li>
                </ul>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Portfolio Details Section -->

@endsection
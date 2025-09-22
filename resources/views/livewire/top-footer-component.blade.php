@if(Route::currentRouteName() === 'event.product')
@elseif(Route::currentRouteName() === 'event.productreview')
@else
      <!-- <section class="container-fluid pt-1 px-0 d-none d-sm-block">
        <div class="row g-0">
          <div class="col-md-6">
          <a class="card border-0 rounded-0 text-decoration-none py-md-4 bg-faded-primary" href="{{route('blog.Coi')}}">
              <div class="card-body text-center"><i class="bi bi-pencil h3 mt-2 mb-4 text-primary"></i>
                <h3 class="h5 mb-1">Read the blog</h3>
                <p class="text-muted fs-sm">Latest innovation, news and trends</p>
              </div></a></div>
          <div class="col-md-6">
          <div class="card border-0 rounded-0 text-decoration-none py-md-4 bg-faded-accent" >
              <div class="card-body text-center">
              <a href="#"><i class=" bi bi-facebook h3 mt-2 mb-4 text-accent"></i></a>
              <a href="#"><i class=" bi bi-twitter h3 mt-2 mb-4 text-accent"></i></a>
              <a href="#"><i class=" bi bi-instagram h3 mt-2 mb-4 text-accent"></i></a>
              <a href="#"><i class=" bi bi-youtube h3 mt-2 mb-4 text-accent"></i></a>
                <h3 class="h5 mb-1">Follow on social platform</h3>
                <p class="text-muted fs-sm">#Innovation_COi</p>
              </div></div></div>
        </div>
      </section> -->

      <!-- Workplace Finder Section -->
    <section class="workplace-section py-5" style="background-color:#f3f9f6;">
      <div class="container">
        <div class="row align-items-center">
          
          <!-- Illustration Image -->
          <div class="col-md-6 mb-4 mb-md-0 text-center">
            <img src="{{url('public/assets/image/exhibition/hero-reviews.webp')}}" alt="Workplace Illustration" class="img-fluid" style="max-width:100%; height:auto;">
          </div>

          
          <!-- Content -->
          <div class="col-md-6">
            <h4 class="fw-bold" style="color: #000; max-width:500px;">
              Find a business events that works for you 
              <!-- <span class="badge bg-success ms-0 fs-ms" style="color: #000;">New</span> -->
            </h4>

            <div class="mt-3 text-dark" style="max-width:500px; color:#000;">
             Discover what an exhibition audience is really like before you make your next move. Search reviews and ratings, and filter Business events based on the qualities that matter most to your business search.
            </div>

            <div class="mt-4">
              <a href="#" class="btn btn-sm btn-dark me-2 mb-2">Our Data Your Customers</a>
              <a href="{{route('design.strategy')}}" class="btn btn-sm btn-dark me-2 mb-2">Great Place to Exhibit</a>
              <br>
              <a href="{{route('buy.license')}}" class="btn btn-sm btn-dark me-2 mb-2">Design & Fabrication</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  @endif
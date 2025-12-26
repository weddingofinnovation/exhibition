<main>



  <div class="container py-5">
    <div class="row g-4 text-center">

      <!-- Birthday -->
      <div class="col-md-3 col-sm-6">
        <a href="{{ route('gift.business', ['partytype' => 'birthday']) }}" class="text-decoration-none text-dark">
          <div class="card h-100 shadow-sm party-card">
            <div class="card-body">
              <i class="bi bi-balloon-fill fs-1 text-primary"></i>

              <h5 class="mt-3">Birthday</h5>
              <p class="text-muted">Celebrate birthdays with themes & fun.</p>
            </div>
          </div>
        </a>
      </div>

      <!-- Anniversary -->
      <div class="col-md-3 col-sm-6">
        <a href="{{ route('gift.business', ['partytype' => 'anniversary']) }}" class="text-decoration-none text-dark">
          <div class="card h-100 shadow-sm party-card">
            <div class="card-body">
              <i class="bi bi-heart-fill fs-1 text-danger"></i>
              <h5 class="mt-3">Anniversary</h5>
              <p class="text-muted">Romantic & elegant celebrations.</p>
            </div>
          </div>
        </a>
      </div>

      <!-- Proposal -->
      <div class="col-md-3 col-sm-6">
        <a href="{{ route('gift.business', ['partytype' => 'proposal']) }}" class="text-decoration-none text-dark">
          <div class="card h-100 shadow-sm party-card">
            <div class="card-body">
              <i class="bi bi-gem fs-1 text-warning"></i>
              <h5 class="mt-3">Proposal</h5>
              <p class="text-muted">Make your proposal unforgettable.</p>
            </div>
          </div>
        </a>
      </div>

      <!-- Baby Shower -->
      <div class="col-md-3 col-sm-6">
        <a href="{{ route('gift.business', ['partytype' => 'babyshower']) }}" class="text-decoration-none text-dark">
          <div class="card h-100 shadow-sm party-card">
            <div class="card-body">
              <i class="bi bi-emoji-smile-fill fs-1 text-info"></i>
              <h5 class="mt-3">Baby Shower</h5>
              <p class="text-muted">Warm & joyful baby celebrations.</p>
            </div>
          </div>
        </a>
      </div>

      <!-- Private Theatre -->
      <div class="col-md-3 col-sm-6">
        <a href="{{ route('gift.business', ['partytype' => 'private-theatre']) }}" class="text-decoration-none text-dark">
          <div class="card h-100 shadow-sm party-card">
            <div class="card-body">
              <i class="bi bi-film fs-1 text-secondary"></i>
              <h5 class="mt-3">Private Theatre</h5>
              <p class="text-muted">Movie + celebration experience.</p>
            </div>
          </div>
        </a>
      </div>

      <!-- House Party -->
      <div class="col-md-3 col-sm-6">
        <a href="{{ route('gift.business', ['partytype' => 'houseparty']) }}" class="text-decoration-none text-dark">
          <div class="card h-100 shadow-sm party-card">
            <div class="card-body">
              <i class="bi bi-house-fill fs-1 text-success"></i>
              <h5 class="mt-3">House Party</h5>
              <p class="text-muted">Celebrate at home with style.</p>
            </div>
          </div>
        </a>
      </div>

      <!-- Office Party -->
      <div class="col-md-3 col-sm-6">
        <a href="{{ route('gift.business', ['partytype' => 'officeparty']) }}" class="text-decoration-none text-dark">
          <div class="card h-100 shadow-sm party-card">
            <div class="card-body">
              <i class="bi bi-briefcase-fill fs-1 text-dark"></i>
              <h5 class="mt-3">Office Party</h5>
              <p class="text-muted">Corporate & team celebrations.</p>
            </div>
          </div>
        </a>
      </div>

      <!-- Custom Party -->
      <div class="col-md-3 col-sm-6">
        <a href="{{ route('gift.business', ['partytype' => 'customparty']) }}" class="text-decoration-none text-dark">
          <div class="card h-100 shadow-sm party-card">
            <div class="card-body">
              <i class="bi bi-stars fs-1 text-primary"></i>
              <h5 class="mt-3">Custom Party</h5>
              <p class="text-muted">Plan your own unique party.</p>
            </div>
          </div>
        </a>
      </div>

    </div>
  </div>



  <!-- Hero Section -->
  <section class="bg-cover bg-center text-white py-20 px-6" style="background-image: url('/images/party-hero.jpg')">
    <div class="max-w-2xl mx-auto text-center">
      <h1 class="text-4xl font-bold mb-4">Make Your Party Unforgettable!</h1>
      <p class="mb-6 text-lg">All-in-one party planning: Decor, Food, Gifts & More!</p>
      <a href="#booking" class="bg-pink-500 hover:bg-pink-600 text-white py-3 px-6 rounded-full shadow-md">Plan Your Party</a>
    </div>
  </section>

  <!-- Services Grid -->
  <section class="py-16 px-6 bg-gray-100">
    <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 text-center">
      <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg">
        <img src="/icons/decor.svg" class="mx-auto mb-4 w-12 h-12" alt="">
        <h3 class="text-xl font-semibold mb-2">Decor & Setup</h3>
        <p class="text-gray-600 mb-3">Theme-based décor with fresh flowers, balloons, and lights.</p>
        <a href="#booking" class="text-pink-500 font-bold underline">Customize</a>
      </div>
      <!-- Repeat for Food, Invite, Gift -->
    </div>
  </section>

  <!-- Booking Form -->
  <section id="booking" class="bg-white py-16 px-6">
    <div class="max-w-xl mx-auto">
      <h2 class="text-2xl font-bold mb-6 text-center">Get a Free Quote</h2>
      <form class="space-y-4">
        <input type="text" placeholder="Your Name" class="w-full border p-3 rounded">
        <input type="text" placeholder="Event Location" class="w-full border p-3 rounded">
        <input type="date" class="w-full border p-3 rounded">
        <select multiple class="w-full border p-3 rounded">
          <option>Decor</option>
          <option>Food</option>
          <option>Invite Design</option>
          <option>Gift Packaging</option>
        </select>
        <input type="text" placeholder="Approx. Budget" class="w-full border p-3 rounded">
        <button type="submit" class="w-full bg-pink-500 hover:bg-pink-600 text-white py-3 rounded shadow-md">Submit</button>
      </form>
    </div>
  </section>

  <div class="col-md-5 mt-2 pt-4 mt-md-0 pt-md-0 align-center">
    <div class="bg-secondary py-grid-gutter px-grid-gutter rounded-3">
      {{--<h3 class="h4 pb-2">Write a review</h3>--}}
      <form class="needs-validation" wire:submit.prevent="jollyknotes" enctype="multipart/form-data">
        <div class="mb-3">
          <label class="form-label" for="review-name">Your name<span class="text-danger">*</span></label>
          <input class="form-control" type="text" required="" wire:model.lazy="name">
          @error('name')
          <div class="invalid-feedback">{{$message}}</div>
          @enderror

        </div>


        <div class="mb-3">
          <label class="form-label" for="review-pros">Phone<span class="text-danger">*</span></label>
          <input class="form-control" type="phone" required="" wire:model.lazy="phone">
          @error('phone')
          <div class="invalid-feedback">{{$message}}</div>
          @enderror
        </div>



        <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Your Day</button>
      </form>
    </div>
  </div>



</main>
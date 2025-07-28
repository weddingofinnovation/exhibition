<main>
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
            <form class="needs-validation" wire:submit.prevent="jollyknotes" enctype= "multipart/form-data">
                <div class="mb-3">
                    <label class="form-label" for="review-name">Your name<span class="text-danger">*</span></label>
                    <input class="form-control" type="text" required="" wire:model.lazy="name" >
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
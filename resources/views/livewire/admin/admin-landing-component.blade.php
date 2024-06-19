<main>

        <section class="container py-3 py-lg-5 mt-4 mb-3">
          <div class="text-center mb-5">
            <p class="col-md-10 col-lg-8 mx-auto fw-normal">Reach your business goals with COI Marketing Solutions.</p>
            <div class="container">
                <div class="row row-cols-2 row-cols-lg-6 gy-2 gx-3 g-lg-3">
                    <div class="col">
                        <a  href="{{route('admin.dashboard', ['board' => 'event'])}}">
                           <div class="p-3 border rounded border-dark bg-light text-center"> {{$eventd->count()}} Event</div>
                        </a> 
                    </div>
                    <div class="col">
                         <a href="{{route('admin.dashboard', ['board' => 'order'])}}">
                            <div class="p-3 border rounded border-dark bg-light text-center">Order</div>
                        </a> 
                    </div>
                    <div class="col">
                        <a  href="{{route('admin.dashboard', ['board' => 'findSearch'])}}">
                           <div class="p-3 border rounded border-dark bg-light text-center">Searched</div>
                        </a> 
                    </div>
                    <div class="col">
                         <a href="{{route('admin.dashboard', ['board' => 'job'])}}">
                            <div class="p-3 border rounded border-dark bg-light text-center">Job</div>
                        </a> 
                    </div>
                   
                    <div class="col">
                         <a href="{{route('admin.dashboard', ['board' => 'client'])}}">
                            <div class="p-3 border rounded border-dark bg-light text-center">Visitor</div>
                        </a> 
                    </div>
                    
                    <div class="col">
                         <a href="{{route('admin.dashboard', ['board' => 'blog'])}}">
                            <div class="p-3 border rounded border-dark bg-light text-center">Blog</div>
                        </a> 
                    </div>

                    <div class="col">
                        <a  href="{{route('all.category')}}">
                           <div class="p-3 border rounded border-dark bg-light text-center">Category</div>
                        </a> 
                    </div>

                    <div class="col">
                        <a  href="{{route('admin.dashboard', ['board' => 'createhashtagss'])}}">
                           <div class="p-3 border rounded border-dark bg-light text-center">Hashtag</div>
                        </a> 
                    </div>


                    <div class="col">
                        <a  href="{{route('admin.dashboard', ['board' => 'magazine'])}}">
                           <div class="p-3 border rounded border-dark bg-light text-center">Magazine</div>
                        </a> 
                    </div>

                    <div class="col">
                        <a  href="{{route('admin.dashboard', ['board' => 'review'])}}">
                           <div class="p-3 border rounded border-dark bg-light text-center">Review</div>
                        </a> 
                    </div>

                    <div class="col">
                        <a  href="{{route('admin.dashboard', ['board' => 'visitor'])}}">
                           <div class="p-3 border rounded border-dark bg-light text-center">User</div>
                        </a> 
                    </div>

                    <div class="col">
                        <a  href="{{route('admin.dashboard', ['board' => 'viewso'])}}">
                           <div class="p-3 border rounded border-dark bg-light text-center">Views</div>
                        </a> 
                    </div>

                    <div class="col">
                        <a  href="{{route('admin.dashboard', ['board' => 'bulkReview'])}}">
                           <div class="p-3 border rounded border-dark bg-light text-center">Reviews</div>
                        </a> 
                    </div>

                    <div class="col">
                        <a  href="{{route('admin.dashboard', ['board' => 'organizer'])}}">
                           <div class="p-3 border rounded border-dark bg-light text-center">Organiser</div>
                        </a> 
                    </div>
                    <div class="col">
                        <a href="{{route('admin.dashboard', ['board' => 'new-organiser'])}}">
                           <div class="p-3 border rounded border-dark bg-light text-center">Add Organiser</div>
                        </a> 
                    </div>

                    <div class="col">
                        <a href="{{route('admin.dashboard', ['board' => 'venue'])}}">
                           <div class="p-3 border rounded border-dark bg-light text-center">Venue</div>
                        </a> 
                    </div>

                    

                    <div class="col">
                        <a  href="{{route('admin.questionadd')}}">
                           <div class="p-3 border rounded border-dark bg-light text-center">Question</div>
                        </a> 
                    </div>

                    <div class="col">
                        <a  href="{{route('admin.dashboard', ['board' => 'ticketPlan'])}}">
                           <div class="p-3 border rounded border-dark bg-light text-center">Plan</div>
                        </a> 
                    </div>

                    
                </div>
            </div>
          </div>
        </section>

        <section class="container py-3 py-lg-5 mt-4 mb-3">
          <div class="text-center mb-5">
          <p class="col-md-10 col-lg-8 mx-auto fw-normal">Status</p>
            <div class="container">
                <div class="row row-cols-2 row-cols-lg-6 gy-2 gx-3 g-lg-3">
                    <div class="col">
                        <a  href="{{route('admin.dashboard', ['board' => 'event'])}}">
                           <div class="p-3 border rounded border-dark bg-light text-center"> <span class="small">total</span>
                           {{$event->count()}} Event</div>
                        </a> 
                    </div>
                    
                    

                    <div class="col">
                         <a href="{{route('admin.dashboard', ['board' => 'job'])}}">
                            <div class="p-3 border rounded border-dark bg-light text-center"><span class="small">Expire</span>{{$eventd->count()}} Event</div>
                        </a> 
                    </div>
                   
                    <div class="col">
                         <a href="{{route('admin.dashboard', ['board' => 'client'])}}">
                            <div class="p-3 border rounded border-dark bg-light text-center"><span class="small">Active</span>{{$evento->count()}} Event</div>
                        </a> 
                    </div>

                    <div class="col">
                         <a href="{{route('admin.dashboard', ['board' => 'createShtDesc'])}}">
                            <div class="p-3 border rounded border-dark bg-light text-center">Sht Desc</div>
                        </a> 
                    </div>

                    <div class="col">
                         <a href="{{route('admin.dashboard', ['board' => 'multiple_images'])}}">
                            <div class="p-3 border rounded border-dark bg-light text-center">Poster</div>
                        </a> 
                    </div>

                    <div class="col">
                         <a href="{{route('admin.dashboard', ['board' => 'upgradeContent'])}}">
                            <div class="p-3 border rounded border-dark bg-light text-center">Error free</div>
                        </a> 
                    </div>

                    
                </div>
            </div>
          </div>
        </section>

        <section class="container">
            <div class="grido">
                
                    <div class="element-item transition metal" data-category="transition">

                        <a  href="{{route('coi.exhibitioncategory',['time' => 'upcoming', 'eventype' => 'exhibition', 'categry' => $category->slug])}}">
                        <h3 class="name">Event</h3>
                        </a> 
                        <p class="symbol">Hg</p>
                        <!-- <p class="number">80</p>
                        <p class="weight">200.59</p> -->
                    </div>

                    <div class="element-item transition metal" data-category="transition">

                        <a  href="{{route('coi.exhibitioncategory',['time' => 'upcoming', 'eventype' => 'exhibition', 'categry' => $category->slug])}}">
                        <h3 class="name">Order</h3>
                        </a> 
                        <p class="symbol">Hg</p>
                        <!-- <p class="number">80</p>
                        <p class="weight">200.59</p> -->
                    </div>
                    
                    <div class="element-item transition metal" data-category="transition">

                        <a  href="{{route('coi.exhibitioncategory',['time' => 'upcoming', 'eventype' => 'exhibition', 'categry' => $category->slug])}}">
                        <h3 class="name">Searched</h3>
                        </a> 
                        <p class="symbol">Hg</p>
                        <!-- <p class="number">80</p>
                        <p class="weight">200.59</p> -->
                    </div>

                    <div class="element-item transition metal" data-category="transition">

                        <a  href="{{route('coi.exhibitioncategory',['time' => 'upcoming', 'eventype' => 'exhibition', 'categry' => $category->slug])}}">
                        <h3 class="name">Job</h3>
                        </a> 
                        <p class="symbol">Hg</p>
                        <!-- <p class="number">80</p>
                        <p class="weight">200.59</p> -->
                    </div>

                    <div class="element-item transition metal" data-category="transition">

                        <a  href="{{route('coi.exhibitioncategory',['time' => 'upcoming', 'eventype' => 'exhibition', 'categry' => $category->slug])}}">
                        <h3 class="name">Blog</h3>
                        </a> 
                        <p class="symbol">HG</p>
                        <!-- <p class="number">80</p>
                        <p class="weight">200.59</p> -->
                    </div>

                    <div class="element-item transition metal" data-category="transition">

                        <a  href="{{route('coi.exhibitioncategory',['time' => 'upcoming', 'eventype' => 'exhibition', 'categry' => $category->slug])}}">
                        <h3 class="name">Visitor</h3>
                        </a> 
                        <p class="symbol">Hg</p>
                        <!-- <p class="number">80</p>
                        <p class="weight">200.59</p> -->
                    </div>

                    <div class="element-item transition metal" data-category="transition">

                        <a  href="{{route('coi.exhibitioncategory',['time' => 'upcoming', 'eventype' => 'exhibition', 'categry' => $category->slug])}}">
                        <h3 class="name">Review</h3>
                        </a> 
                        <p class="symbol">Hg</p>
                        <!-- <p class="number">80</p>
                        <p class="weight">200.59</p> -->
                    </div>

                    <div class="element-item transition metal" data-category="transition">

                        <a  href="{{route('coi.exhibitioncategory',['time' => 'upcoming', 'eventype' => 'exhibition', 'categry' => $category->slug])}}">
                        <h3 class="name">Magazine</h3>
                        </a> 
                        <p class="symbol">Hg</p>
                        <!-- <p class="number">80</p>
                        <p class="weight">200.59</p> -->
                    </div>

                    <div class="element-item transition metal" data-category="transition">

                        <a  href="{{route('coi.exhibitioncategory',['time' => 'upcoming', 'eventype' => 'exhibition', 'categry' => $category->slug])}}">
                        <h3 class="name">Hashtag</h3>
                        </a> 
                        <p class="symbol">Hg</p>
                        <!-- <p class="number">80</p>
                        <p class="weight">200.59</p> -->
                    </div>

                    <div class="element-item transition metal" data-category="transition">

                        <a  href="{{route('coi.exhibitioncategory',['time' => 'upcoming', 'eventype' => 'exhibition', 'categry' => $category->slug])}}">
                        <h3 class="name">Category</h3>
                        </a> 
                        <p class="symbol">Hg</p>
                        <!-- <p class="number">80</p>
                        <p class="weight">200.59</p> -->
                    </div>
                
            </div>
      </section>

</main>
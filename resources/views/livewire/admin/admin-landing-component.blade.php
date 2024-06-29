<main>
    <style>
        
  * { box-sizing: border-box; }

body {
  font-family: sans-serif;
}

/* ---- button ---- */

.button {
  display: inline-block;
  padding: 0.5em 1.0em;
  background: #EEE;
  border: none;
  border-radius: 7px;
  background-image: linear-gradient( to bottom, hsla(0, 0%, 0%, 0), hsla(0, 0%, 0%, 0.2) );
  color: #222;
  font-family: sans-serif;
  font-size: 16px;
  text-shadow: 0 1px white;
  cursor: pointer;
}

.button:hover {
  background-color: #8CF;
  text-shadow: 0 1px hsla(0, 0%, 100%, 0.5);
  color: #222;
}

.button:active,
.button.is-checked {
  background-color: #28F;
}

.button.is-checked {
  color: white;
  text-shadow: 0 -1px hsla(0, 0%, 0%, 0.8);
}

.button:active {
  box-shadow: inset 0 1px 10px hsla(0, 0%, 0%, 0.8);
}

/* ---- button-group ---- */

.button-group {
  margin-bottom: 20px;
}

.button-group:after {
  content: '';
  display: block;
  clear: both;
}

.button-group .button {
  float: left;
  border-radius: 0;
  margin-left: 0;
  margin-right: 1px;
}

.button-group .button:first-child { border-radius: 0.5em 0 0 0.5em; }
.button-group .button:last-child { border-radius: 0 0.5em 0.5em 0; }

/* ---- isotope ---- */

.grid {
  border: 1px solid #333;
}

/* clear fix */
.grid:after {
  content: '';
  display: block;
  clear: both;
}

/* ---- .element-item ---- */

.element-item {
  position: relative;
  float: left;
  width: 100px;
  height: 100px;
  margin: 5px;
  padding: 10px;
  background: #888;
  color: #262524;
}

.element-item > * {
  margin: 0;
  padding: 0;
}

.element-item .name {
  position: absolute;

  left: 10px;
  top: 60px;
  text-transform: none;
  letter-spacing: 0;
  font-size: 12px;
  font-weight: normal;
}

.element-item .symbol {
  position: absolute;
  left: 10px;
  top: 0px;
  font-size: 42px;
  font-weight: bold;
  color: white;
}

.element-item .number {
  position: absolute;
  right: 8px;
  top: 5px;
}

.element-item .weight {
  position: absolute;
  left: 10px;
  top: 76px;
  font-size: 12px;
}

.element-item.alkali          { background: #F00; background: hsl(   0, 100%, 50%); }
.element-item.alkaline-earth  { background: #F80; background: hsl(  36, 100%, 50%); }
.element-item.lanthanoid      { background: #FF0; background: hsl(  72, 100%, 50%); }
.element-item.actinoid        { background: #0F0; background: hsl( 108, 100%, 50%); }
.element-item.transition      { background: #0F8; background: hsl( 144, 100%, 50%); }
.element-item.post-transition { background: #0FF; background: hsl( 180, 100%, 50%); }
.element-item.metalloid       { background: #08F; background: hsl( 216, 100%, 50%); }
.element-item.diatomic        { background: #00F; background: hsl( 252, 100%, 50%); }
.element-item.halogen         { background: #F0F; background: hsl( 288, 100%, 50%); }
.element-item.noble-gas       { background: #F08; background: hsl( 324, 100%, 50%); }

    </style>


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
                           <div class="p-3 border rounded border-dark bg-light text-center"> bulk Reviews</div>
                        </a> 
                    </div>

                    <div class="col">
                        <a  href="{{route('admin.dashboard', ['board' => 'organizer'])}}">
                           <div class="p-3 border rounded border-dark bg-light text-center">Organiser</div>
                        </a> 
                    </div>
                    <a class="element-item transition metal" data-category="transition" href="{{route('admin.dashboard', ['board' => 'organizer'])}}">
                        <!-- <a  href="{{route('admin.dashboard', ['board' => 'event'])}}"> -->
                          <h3 class="name">Organiser</h3>
                        <!-- </a>  -->
                        <p class="symbol">count</p>
                        <!-- <p class="number">80</p>
                        <p class="weight">200.59</p> -->
                    </a>

                    <!-- <div class="col">
                        <a href="{{route('admin.dashboard', ['board' => 'new-organiser'])}}">
                           <div class="p-3 border rounded border-dark bg-light text-center">Add Organiser</div>
                        </a> 
                    </div> -->
                    <a class="element-item transition metal" data-category="transition" href="{{route('admin.dashboard', ['board' => 'new-organiser'])}}">
                        <!-- <a  href="{{route('admin.dashboard', ['board' => 'event'])}}"> -->
                          <h3 class="name">Add Organiser</h3>
                        <!-- </a>  -->
                        <p class="symbol">count</p>
                        <!-- <p class="number">80</p>
                        <p class="weight">200.59</p> -->
                    </a>
                    <!-- <div class="col">
                        <a href="{{route('admin.dashboard', ['board' => 'venue'])}}">
                           <div class="p-3 border rounded border-dark bg-light text-center">Venue</div>
                        </a> 
                    </div> -->

                    <a class="element-item transition metal" data-category="transition" href="{{route('admin.dashboard', ['board' => 'venue'])}}">
                        <!-- <a  href="{{route('admin.dashboard', ['board' => 'event'])}}"> -->
                          <h3 class="name">Venue</h3>
                        <!-- </a>  -->
                        <p class="symbol">0</p>
                        <!-- <p class="number">80</p>
                        <p class="weight">200.59</p> -->
                    </a>
                    

                    <!-- <div class="col">
                        <a  href="{{route('admin.questionadd')}}">
                           <div class="p-3 border rounded border-dark bg-light text-center">Question</div>
                        </a> 
                    </div> -->
                    
                    <a class="element-item transition metal" data-category="transition" href="{{route('admin.questionadd')}}">
                        <!-- <a  href="{{route('admin.dashboard', ['board' => 'event'])}}"> -->
                          <h3 class="name">Question</h3>
                        <!-- </a>  -->
                        <p class="symbol">0</p>
                        <!-- <p class="number">80</p>
                        <p class="weight">200.59</p> -->
                    </a>
                    <!-- <div class="col">
                        <a  href="{{route('admin.dashboard', ['board' => 'ticketPlan'])}}">
                           <div class="p-3 border rounded border-dark bg-light text-center">Plan</div>
                        </a> 
                    </div> -->

                    <a class="element-item transition metal" data-category="transition" href="{{route('admin.dashboard', ['board' => 'ticketPlan'])}}">
                        <!-- <a  href="{{route('admin.dashboard', ['board' => 'event'])}}"> -->
                          <h3 class="name">Plan</h3>
                        <!-- </a>  -->
                        <p class="symbol">count</p>
                        <!-- <p class="number">80</p>
                        <p class="weight">200.59</p> -->
                    </a>
                    
                </div>
            </div>
          </div>
        </section>


        <section class="container">
            <div class="grido">
                
                    <div class="element-item transition metal" data-category="transition">

                        <a  href="{{route('admin.dashboard', ['board' => 'event'])}}">
                        <h3 class="name">Event</h3>
                        </a> 
                        <p class="symbol">Hg</p>
                        <!-- <p class="number">80</p>
                        <p class="weight">200.59</p> -->
                    </div>

                    <div class="element-item transition metal" data-category="transition">

                        <a  href="{{route('admin.dashboard', ['board' => 'event'])}}">
                        <h3 class="name">Order</h3>
                        </a> 
                        <p class="symbol">Hg</p>
                        <!-- <p class="number">80</p>
                        <p class="weight">200.59</p> -->
                    </div>
                    
                    <a class="element-item transition metal" data-category="transition" href="{{route('admin.dashboard', ['board' => 'event'])}}">

                        <!-- <a  href="{{route('admin.dashboard', ['board' => 'event'])}}"> -->
                          <h3 class="name">Searched</h3>
                        <!-- </a>  -->
                        <p class="symbol">Hg</p>
                        <!-- <p class="number">80</p>
                        <p class="weight">200.59</p> -->
                    </a>

                    <div class="element-item transition metal" data-category="transition">

                        <a  href="{{route('admin.dashboard', ['board' => 'event'])}}">
                        <h3 class="name">Job</h3>
                        </a> 
                        <p class="symbol">Hg</p>
                        <!-- <p class="number">80</p>
                        <p class="weight">200.59</p> -->
                    </div>

                    <div class="element-item transition metal" data-category="transition">

                        <a  href="{{route('admin.dashboard', ['board' => 'event'])}}">
                        <h3 class="name">Blog</h3>
                        </a> 
                        <p class="symbol">HG</p>
                        <!-- <p class="number">80</p>
                        <p class="weight">200.59</p> -->
                    </div>

                    <div class="element-item transition metal" data-category="transition">

                        <a  href="{{route('admin.dashboard', ['board' => 'event'])}}">
                        <h3 class="name">Visitor</h3>
                        </a> 
                        <p class="symbol">Hg</p>
                        <!-- <p class="number">80</p>
                        <p class="weight">200.59</p> -->
                    </div>

                    <div class="element-item transition metal" data-category="transition">

                        <a  href="{{route('admin.dashboard', ['board' => 'event'])}}">
                        <h3 class="name">Review</h3>
                        </a> 
                        <p class="symbol">Hg</p>
                        <!-- <p class="number">80</p>
                        <p class="weight">200.59</p> -->
                    </div>

                    <div class="element-item transition metal" data-category="transition">

                        <a  href="{{route('admin.dashboard', ['board' => 'event'])}}">
                        <h3 class="name">Magazine</h3>
                        </a> 
                        <p class="symbol">Hg</p>
                        <!-- <p class="number">80</p>
                        <p class="weight">200.59</p> -->
                    </div>

                    <div class="element-item transition metal" data-category="transition">

                        <a  href="{{route('admin.dashboard', ['board' => 'event'])}}">
                        <h3 class="name">Hashtag</h3>
                        </a> 
                        <p class="symbol">Hg</p>
                        <!-- <p class="number">80</p>
                        <p class="weight">200.59</p> -->
                    </div>

                    <div class="element-item transition metal" data-category="transition">

                        <a  href="{{route('admin.dashboard', ['board' => 'event'])}}">
                        <h3 class="name">Category</h3>
                        </a> 
                        <p class="symbol">Hg</p>
                        <!-- <p class="number">80</p>
                        <p class="weight">200.59</p> -->
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
            <div class="text-center  fs-md fw-bold">Data Center</div>
            <div class="grido">
              <a class="element-item transition metal" data-category="transition" href="{{route('admin.dashboard', ['board' => 'event'])}}">

                  <!-- <a  href="{{route('admin.dashboard', ['board' => 'event'])}}"> -->
                    <h3 class="name">expo</h3>
                  <!-- </a>  -->
                  <p class="symbol">count</p>
                  <!-- <p class="number">80</p>
                  <p class="weight">200.59</p> -->
              </a>
            </div>
        </section>

</main>
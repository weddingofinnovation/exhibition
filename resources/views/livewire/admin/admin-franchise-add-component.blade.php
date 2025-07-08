<main>
  <div class="container">
    <form wire:submit.prevent="newcomment">
        <div class="row g-1">

            <div class="col-sm-1">
                <label class="form-label" for="seniority">Type</label>
                <select class="form-control" type="text"   wire:model.lazy="response"  id="seniority"  placeholder="Provide short title of your request">
                    <option selected>Choose</option>
                    <option value="award">Award</option>
                    <option value="conference">Conference, Forum, Seminar</option>
                    <option value="expo">Exhibition</option>
                    <option value="festival">Festival</option>
                    <option value="network">Network</option>
                    <option value="dealer">Dealer Distribution</option>
                    <option value="embassy">Embassy</option>
                </select>
                @error('response') <div class="invalid-feedback">{{$message}}</div>@enderror
            </div>

            <div class="col-sm-4">
                <label class="form-label" for="cf-name">Comment</label>
                <input class="form-control" type="text" placeholder="Your comment"  wire:model.lazy="comment" required="">
                @error('comment'){{$message}}@enderror
            </div>
            
        </div>

        <hr class="my-2">
        <button class="btn btn-primary mt-2" type="submit">Submit</button>
    </form>
  </div>

  <div class="bg-secondary d-lg-none mb-3">
        <div class="container">
            <div class="col-md-6 offset-md-3 d-flex justify-content-between ">

                <div class="align-content-center py-2 "><a href="#"><i class="bi bi-chevron-left"></i></a></div>
            
                <div class="text-center py-2"><div>How was the experience?</div></div>

                <div class="align-content-center py-2"><a href=""><i class="bi bi-x"></i></a></div>
            </div>
        </div>
    </div>

    <div class="container py-lg-5 my-lg-5">
        <form wire:submit.prevent="add">
            <!-- Title-->
            <div class="align-items-center pb-5 d-none d-sm-block position-absolute">
                <h3 class=" pt-2 me-2 text-center text-sm-start">How was the experience ?</h3>
                <p class=" fs-sm  me-2 text-center text-sm-start">We hope your visit to this event was a experience! Please hit the appropriate rating below:</p>
            </div>


            <div class="pb-5 pb-sm-3"> 
                <div class="form-label fw-bold">How would you rate your experience?</div> 
                    <div class="d-flex justify-content-between">
                    <div >0</div>
                    <div >5</div>
                    <div>10</div>
                </div>

                <input type="range" class="form-range" min="0" max="10" step="1" id="customRange3" wire:model.lazy="rate">
                <small class="fs-xs  me-2 text-center text-sm-start text-muted">They help others decide what to visit next. </small>

                @error('rate')
                    <div class="form-text text-primary">{{$message}}</div>
                @enderror
            </div>
            
                
            {{--@if(!is_null($rate))--}}
                <div class="col-sm-2 col-md-12 pb-5 pb-sm-3">
                    <label class="form-label fw-bold">What do you think about business learning?
                        <span class="">Express yourself with hashtags!</span></label>
                       
                    <div class="input-group">
                        @foreach ($hashtag as $hhtag)
                            <div class=" col col-auto my-1 px-2"> 
                                <input class="form-check-input" type="checkbox"   value="{{$hhtag->id}}"  wire:model="hasttag"> {{$hhtag->hastag}}
                            </div>
                        @endforeach
                    </div>

                    {{-- @json($hasttag) --}}
                    
                </div>

            
                <div class=" col-sm-10 mb-3 pb-sm-2">
                    <label class="form-label fw-normal " for="unp-product-name">Express more, write a review <span class="text-muted">(optional)</span></label>
                    <textarea class="form-control" type="text" wire:model.lazy="opinion" row="3"></textarea>
                    <div class="form-text">Maximum 100 characters.</div>
                    @error('opinion')
                    <div class="form-text text-primary">{{$message}}</div>
                    @enderror
                </div>
            {{--@endif--}}
        
            <button class="btn btn-primary d-block w-100 mt-5 d-none d-sm-block" type="submit">Submit</button>

            <div class="handheld-toolbar bg-secondary">
                <button class="btn btn-primary d-block w-100" type="submit">Submit</button>
            </div>
        </form>
    </div>

  <div class="handheld-toolbar">
    <div class="d-table table-layout-fixed w-100">
      <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.dashboard',['board' => 'event'])}}">
        <span class="handheld-toolbar-icon">
        <i class="ci-filter-alt"></i></span>
        <span class="handheld-toolbar-label">Admin</span>
      </a>
      

      <a class="d-table-cell handheld-toolbar-item" href="#">
        <span class="handheld-toolbar-icon"><i class="ci-menu"></i></span>
      <span class="handheld-toolbar-label">Edit</span></a>
      
      <a class="d-table-cell handheld-toolbar-item" href="#">
        <span class="handheld-toolbar-icon"><i class="ci-cart"></i></span>
        <span class="handheld-toolbar-label">View</span>
      </a>

      <a class="d-table-cell handheld-toolbar-item" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
        <span class="handheld-toolbar-icon"><i class="ci-heart"></i></span>
        <span class="handheld-toolbar-label">Menu</span>
      </a>
    </div>
  </div>
</main>
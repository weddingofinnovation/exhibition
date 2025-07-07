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

  <div class="handheld-toolbar">
    <div class="d-table table-layout-fixed w-100">
      <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.dashboard',['board' => 'event'])}}">
        <span class="handheld-toolbar-icon">
        <i class="ci-filter-alt"></i></span>
        <span class="handheld-toolbar-label">Admin</span>
      </a>
      

      <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.eventEdit',['event_id' => $evento->id , 'board' => 'edit'])}}">
        <span class="handheld-toolbar-icon"><i class="ci-menu"></i></span>
      <span class="handheld-toolbar-label">Edit</span></a>
      
      <a class="d-table-cell handheld-toolbar-item" href="{{route('event.details',['slug' => $evento->slug])}}">
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
<main>
    
         <div class=" container my-3">
          <form wire:submit.prevent="multiImage">
            <label class="form-label">Upload Multi Image<span class="text-danger">*</span></label> 
              <input type="file" class="form-control" placeholder="multiple Image" wire:model="brand_lgo"  multiple="multiple">
              <button class="btn btn-primary btn-shadow d-block w-100 mt-2"  type="submit">Submit</button>
          </form>  

          <hr> find Images

          @php
             $photos = DB::table('photos')->whereNotNull('magazine_id')->where('magazine_id', $this->magazine_id)->get()
          @endphp
            @foreach($photos as $imgo)
              <div class="container">
                  <img src="{{url('public/assets/image/exhibition/'.$imgo->image)}}" width="50%" alt="">
                  <a href="" wire:click.prevent="delphoto({{$imgo->id}})"><i class="bi bi-x"></i> </a>
              </div>
            @endforeach  
        </div>

</main>
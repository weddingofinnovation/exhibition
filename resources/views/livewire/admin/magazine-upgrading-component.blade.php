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
      
    <div class="container">
        @if($formm == 'image')
            <div class="my-5">
                <form  wire:submit.prevent="dateImage">
                        <div class="col-sm-6 col-md-12">
                            <label class="form-label" for="cf-name">Image</label>
                            <input class="form-control" type="file"   wire:model.lazy="image" required="">
                            @error('image'){{ $message}}@enderror
                        </div>
                        <button class="btn btn-primary mt-2 form-control" type="submit">Submit</button>
                </form>
            </div>

            <hr class="mt-5">
               
                @foreach($photos as $imgo)
                    <div class="container">
                        <div class="row row-cols-3 row-cols-lg-6 gy-2 gx-1 g-lg-3"> 
                            <div class="col">
                                <a href="#" wire:click.prevent="adDphoto({{$imgo->id}})">
                                    <img src="{{url('public/assets/image/exhibition/'.$imgo->brand_lgo)}}"  width="50%" alt=""></a>

                                <a href="#" wire:click.prevent="delphoto({{$imgo->id}})"><i class="bi bi-x"></i> </a>

                                <a href="#" class="btn btn-primary" wire:click.prevent="adDphoto({{$imgo->id}})"> Testing</a>
                           </div>
                        </div>
                    </div>
                @endforeach




        <div class="grid">
            @foreach($photos as $imgo)
            
                <div class="element-item" data-category="metalloid" href="#" wire:click.prevent="adDphoto({{$imgo->id}})" style="background-image: url('{{('public/assets/image/exhibition/'.$imgo->brand_lgo')}}')">
                  <!-- <img  class="element-item" src="{{url('public/assets/image/exhibition/'.$imgo->brand_lgo)}}" alt=""> -->
                  <h3 class="name">Tellurium</h3>
                  <p class="symbol">te</p>
                  <a class="number" href="#" wire:click.prevent="delphoto({{$imgo->id}})"><i class="bi bi-x"></i></a>
                  <p class="weight">127.6</p>
                </div>
            @endforeach
        </div>

        @endif



        

    </div>
</main>
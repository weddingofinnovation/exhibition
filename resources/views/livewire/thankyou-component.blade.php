    <main >
     
      

        @if($board == 'thankyou')
          <div class="container py-4 py-lg-5 my-4">
            <div class="row justify-content-center">


            
              <div class="col-lg-8 col-md-10">
                <h2 class="h3 mb-2">Right Time, Right Place, Right People</h2>
                <p class="fs-md">Join the ranks of top industry leaders and connect with your target audience. <br> Thanks for sharing and let's make it happen </p>
                <ol class="list-unstyled fs-md">
                  <li><span class="text-primary me-2"></span>Thank you for your interest in the Exhibition</li>
                  <li><span class="text-primary me-2"></span>Our representative will be contacting you shortly to discuss your participation.</li>
                  <li><span class="text-primary me-2"></span>If you prefer, you can also proactively reach us at 9991856776</li>
                </ol>

                {{$visitorid->name}}
                {{$visitorid->designation}}
                {{$visitorid->company}}
                {{QrCode::size(255)->generate('')}}
                 
                <a href="">Print</a>
                <a href="">Download</a>
              
              </div>
            

            </div>
          </div>
        @else
          <div class="container pb-5 mb-sm-4">
            <div class="pt-5">
              <div class="card py-3 mt-sm-3">
                <div class="card-body text-center">
                  <h2 class="h4 pb-3">Thank you for your order!</h2>
                  <p class="fs-sm mb-2">Your order has been placed and will be processed as soon as possible.</p>
                  <p class="fs-sm mb-2">Make sure you make note of your order number, which is <span class="fw-medium">34VB5540K83.</span></p>
                  <p class="fs-sm">You will be receiving an email shortly with confirmation of your order. <u>You can now:</u></p>
                  <a class="btn btn-secondary mt-3 me-3" href="{{route('')}}">Go back shopping</a>
                  <a class="btn btn-primary mt-3" href=""><i class="ci-location"></i>&nbsp;Track order</a>
                </div>
              </div>
            </div>
          </div>
        @endif

        @if($board == 'thankyou')

            <div class="handheld-toolbar">
              <div class="d-table table-layout-fixed w-100">
                <a class="d-table-cell handheld-toolbar-item" href="{{route('adminevent.detail', ['slug' => $evento->slug])}}">
                  <span class="handheld-toolbar-icon">
                  <i class="ci-filter-alt"></i></span>
                  <span class="handheld-toolbar-label">Advertise</span>
                </a>
              
                <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.eventEdit',['event_id' => $evento->id,'board'=>'edit'])}}">
                  <span class="handheld-toolbar-icon"><i class="ci-menu"></i></span>
                <span class="handheld-toolbar-label">Conference</span></a>
                
                <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.editcategories',['event_id' => $evento->id])}}">
                  <span class="handheld-toolbar-icon"><i class="ci-cart"></i></span>
                  <span class="handheld-toolbar-label">Exhibitor</span>
                </a>

                <a class="d-table-cell handheld-toolbar-item" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                  <span class="handheld-toolbar-icon"><i class="ci-heart"></i></span>
                  <span class="handheld-toolbar-label">Menu</span>
                </a>
              </div>
            </div>

        @endif

    </main>
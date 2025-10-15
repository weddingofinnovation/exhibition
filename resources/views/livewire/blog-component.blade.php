<main>
    <!-- Trending START -->
	<section class="py-2">
		<div class="container">
			<div class="row g-0">
				<div class="col-12 bg-primary-soft p-2 rounded">
					<div class="d-sm-flex align-items-center  text-sm-start">
						<div class="me-3"><span class="badge bg p-2 px-3 badgecolor" >Trending:</span></div>
						<div class="my-Slider1 arrow-end arrow-xs arrow-white arrow-round arrow-md-none">
							@foreach($trending as $post)
								<a href="{{route('blog.details',['slug' => $post->slug])}}" class="text-reset btn-link">{{$post->tittle}}</a>
							@endforeach
						</div>
					</div>
				</div>
			</div> <!-- Row END -->
		</div>
	</section>
	<!-- Trending END -->


	<section class="bg-light py-5 text-center">
		<div class="container">
			<h1 class="display-5 fw-bold mb-3">Got a Question? Ask Us Anything!</h1>
			<p class="lead mb-4 text-muted">We're here to help you with anything related to exhibitions, marketing, events, or your business queries.</p>
			
			<form class="d-flex justify-content-center" style="max-width: 600px; margin: 0 auto;">
				<input type="text" class="form-control form-control-lg rounded-start-pill" placeholder="Type your question here..." />
				<button type="submit" class="btn btn-primary btn-lg rounded-end-pill px-4">Ask Now</button>
			</form>

		</div>
	</section>

		@php
			$updateQuestion = DB::table('questions')
							->whereNull('event_id')
							->orderBy('updated_at', 'desc')  // ✅ Correct way to sort by latest update
							->get();

		@endphp

	<!--testing-->
		<section class="position-relative">
			<div class="container">
				<div class="row">
					<!-- Main Post START -->
					<div class="col-lg-9">
						<!-- Top highlights START -->
						<div class="mb-3">
							<!-- <h2 class="m-0"><i class="bi bi-hourglass-top me-2"></i>Today's top highlights</h2> -->
							<h2 class="m-0"><i class="bi bi-hourglass-top me-2"></i>Frequently Asked Questions</h2>
							
							<p>Latest breaking news, pictures, videos, and special reports</p>
						</div>

						<div class="arrow-blur arrow-round rounded-3">
							<div class="bg-white">
								<!-- <div class=""> -->
									<!-- <h2 class="mb-4 text-center">Frequently Asked Questions</h2> -->

									<div class="mb-2">
									  <input type="search" class="form-control form-control-lg" placeholder="Search questions..." />
									</div>

									<div class="accordion" id="faqAccordion">
										@foreach($updateQuestion as $key => $evento)
											<div class="accordion-item">
												<h2 class="accordion-header" id="heading{{$key}}">
													<button class="accordion-button {{ $key != 0 ? 'collapsed' : '' }}" type="button"
															data-bs-toggle="collapse" data-bs-target="#collapse{{$key}}"
															aria-expanded="{{ $key == 0 ? 'true' : 'false' }}"
															aria-controls="collapse{{$key}}">
														{{ $evento->question }}
													</button>
												</h2>

												@php
												  $answero = DB::table('answers')->where('question_id', $evento->id)->where('status', '1')->get();
												@endphp

												<!-- <div id="collapse{{$key}}" class="accordion-collapse collapse {{ $key == 0 ? 'show' : '' }}"
													aria-labelledby="heading{{$key}}"> -->

													<div id="collapse{{$key}}" 
														class="accordion-collapse collapse {{ $openAccordion == $evento->id ? 'show' : '' }}" 
														aria-labelledby="heading{{$key}}">


													<div class="accordion-body">

														@if($answero->count())
															@foreach($answero as $ans)
																<p class="mb-2">{{ $ans->answer }}</p>
															@endforeach
														@else
															<p class="text-muted">
																Start by building a strong landing page, promote on social media, send email invites, and use platforms like The Exhibition Network to increase your reach.
															</p>
														@endif


														@auth
															<!-- Show reply button only if user is logged in -->
															<button 
																wire:click="showReplyBox({{ $evento->id }})" 
																class="btn btn-sm btn-outline-primary"
															>
																{{ $replyingTo === $evento->id ? 'Cancel' : 'Give Reply' }}
															</button>
														@endauth

														@guest
															<!-- Optional: message or login button -->
															<a href="{{ route('login') }}" class="btn btn-sm btn-outline-secondary">
																Login to reply
															</a>
														@endguest


												<!-- Conditional reply box -->
												@if($replyingTo === $evento->id)
													<div class="mt-3">
														<textarea wire:model.defer="replyText" rows="3" class="form-control mb-2" placeholder="Write your answer here..."></textarea>
														<button wire:click="submitReply({{ $evento->id }})" class="btn btn-success btn-sm">Submit Answer</button>
													</div>
												@endif
												
													</div>
												</div>
											</div>
										@endforeach

										@if (session()->has('message'))
											<div class="alert alert-success mt-4">
												{{ session('message') }}
											</div>
										@endif
									</div>
								<!-- </div> -->
							</div>
						</div>
						<!-- Top highlights START -->

						<!-- Adv -->
						<div>
							<a href="" class="card-img-flash d-block mt-4">
								<img src="{{asset('mag/adv-3.png')}}" alt="adv">
							</a>
						</div>
						
					</div>
					<!-- Main Post END -->

					<!-- Sidebar START -->
					<div class="col-lg-3 mt-5 mt-lg-0">
						<div data-sticky="" data-margin-top="80" data-sticky-for="767">
							<!-- Social links -->
							<div class="row g-2">
								<a href="https://blogzine.webestica.com/index-3.html#" class="d-flex justify-content-between align-items-center bg-facebook text-white-force rounded p-2 position-relative">
									<i class="fab fa-facebook-square fs-3"></i>
									<div class="d-flex">
										<h6 class="me-1 mb-0">1.5K</h6>
										<small class="small">Fans</small>
									</div>
								</a>
								<a href="https://blogzine.webestica.com/index-3.html#" class="d-flex justify-content-between align-items-center bg-instagram-gradient text-white-force rounded p-2 position-relative">
									<i class="fab fa-instagram fs-3"></i>
									<div class="d-flex">
										<h6 class="me-1 mb-0">1.8M</h6>
										<small class="small">Followers</small>
									</div>
								</a>
								<a href="https://blogzine.webestica.com/index-3.html#" class="d-flex justify-content-between align-items-center bg-youtube text-white-force rounded p-2 position-relative">
									<i class="fab fa-youtube-square fs-3"></i>
									<div class="d-flex">
										<h6 class="me-1 mb-0">22K</h6>
										<small class="small">Subscribers</small>
									</div>
								</a>
							</div>
							<!-- Categories -->
							<div class="row g-2 mt-5">
								<h5>Categories</h5>
										@foreach($cag as $post)
											<div class="d-flex justify-content-between align-items-center bg-warning-soft rounded p-2 position-relative">
												<h6 class="m-0 text-warning">{{$post->tag}}</h6>
												<a href="{{--route('blog.category', ['category_slug'=> $post->tag])--}}" class="badge badgecolor text-dark stretched-link">{{$post->mag->count()}}</a>
											</div>
										@endforeach
							</div>
							<!-- Most read -->
							<div class="row g-2 mt-5">
							<h5 class="mt-5 mb-3">Most read</h5>
								@foreach ($tittlemostread as $post)
									<div class="d-flex position-relative mb-3">
										<span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">{{$post->count()}}</span>
										<h6><a href="{{route('blog.details',['slug' => $post->slug])}}" class="stretched-link text-reset btn-link">{{Str::limit($post->tittle,65)}}</a></h6>
									</div>
								@endforeach
							</div>

						</div>
					</div>
					<!-- Sidebar END -->
				</div> <!-- Row end -->
			</div>
		</section>
	<!--testingend-->



	<div>
    <!-- Search and Filter Section -->
    <div class="row mb-4">
        <div class="col-md-5">
            <input type="text" wire:model.debounce.500ms="search" class="form-control"
                   placeholder="Search questions or topics...">
        </div>
        <div class="col-md-3">
            <select wire:model="category" class="form-select">
                <option value="">All Categories</option>
                <option value="exhibitor">Exhibitor Queries</option>
                <option value="visitor">Visitor Queries</option>
                <option value="sponsorship">Sponsorship</option>
                <option value="payment">Payment & Billing</option>
                <option value="logistics">Logistics</option>
            </select>
        </div>
        <div class="col-md-3">
            <select wire:model="sortBy" class="form-select">
                <option value="latest">Latest</option>
                <option value="popular">Most Popular</option>
                <option value="answered">Answered</option>
                <option value="unanswered">Unanswered</option>
            </select>
        </div>
    </div>

    <!-- Accordion Section -->
    <div class="accordion" id="faqAccordion">
        @forelse($updateQuestion as $key => $evento)
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading{{$key}}">
                    <button class="accordion-button {{ $openAccordion != $evento->id ? 'collapsed' : '' }}"
                            type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse{{$key}}"
                            aria-expanded="{{ $openAccordion == $evento->id ? 'true' : 'false' }}"
                            aria-controls="collapse{{$key}}">
                        {{ $evento->question }}
                    </button>
                </h2>

                <div id="collapse{{$key}}" class="accordion-collapse collapse {{ $openAccordion == $evento->id ? 'show' : '' }}">
                    <div class="accordion-body">

                        @php
                            $answers = \App\Models\Answer::where('question_id', $evento->id)
                                ->where('status', '1')->get();
                        @endphp

                        @if($answers->count())
                            @foreach($answers as $ans)
                                <p class="mb-2">{{ $ans->answer }}</p>
                            @endforeach
                        @else
                            <p class="text-muted">No answers yet. Be the first to reply!</p>
                        @endif

                        @auth
                            <button wire:click="showReplyBox({{ $evento->id }})" class="btn btn-sm btn-outline-primary">
                                {{ $replyingTo === $evento->id ? 'Cancel' : 'Give Reply' }}
                            </button>
                        @endauth

                        @guest
                            <a href="{{ route('login') }}" class="btn btn-sm btn-outline-secondary">Login to reply</a>
                        @endguest

                        @if($replyingTo === $evento->id)
                            <div class="mt-3">
                                <textarea wire:model.defer="replyText" rows="3" class="form-control mb-2"
                                          placeholder="Write your answer here..."></textarea>
                                <button wire:click="submitReply({{ $evento->id }})"
                                        class="btn btn-success btn-sm">Submit Answer</button>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        @empty
            <p class="text-muted">No questions found for your search.</p>
        @endforelse
    </div>

    @if (session()->has('message'))
        <div class="alert alert-success mt-4">
            {{ session('message') }}
        </div>
    @endif

    <div class="mt-4 text-center">
        <a href="#" class="btn btn-outline-dark">Didn’t find what you’re looking for? Ask a Question</a>
    </div>
</div>


    @push('scripts')
		<script>
			var slider = tns({
				"container": '.my-Slider1',            
				"responsive": {
				"300": {
					"items": 2,
					"controls": false,
					"mouseDrag": true,
					"autoplay": false,
					"autoplayButtonOutput": false,
					"autoplayHoverPause": false,
					"fixedWidth": 100,
				},
				"500": {
					"items": 4,
					"nav": false,
					"controls": false,
					"autoplayHoverPause": true,
					"autoplay":true,
					"autoplayButtonOutput":false,
					"fixedWidth": auto,
				},
				
				},
				"autoplayButtonOutput":false
			});
		</script>

		<script>
			var slider = tns({
				"container": '.my-Slider2',            
				"responsive": {
					"300": {
				"items": 2,
				"controls": false,
				"mouseDrag": true,
				"autoplay": false,
				"autoplayButtonOutput": false,
				"autoplayHoverPause": false,
				"fixedWidth": 100,
					},
			"500": {
				"items": 4,
				"nav": false,
				"controls": false,
				"autoplayHoverPause": true,
				"autoplay":true,
				"autoplayButtonOutput":false,
				"fixedWidth": auto,
			},
			
			},
			"autoplayButtonOutput":false
			});
		</script>
			
		<script>
			var slider = tns({
				"container": '.my-Slider3',
				"responsive": {
					"300": {
				"items": 2,
				"controls": false,
				"mouseDrag": true,
				"autoplay": false,
				"autoplayButtonOutput": false,
				"autoplayHoverPause": false,
				"fixedWidth": 100,
					},
			"500": {
				"items": 4,
				"nav": false,
				"controls": false,
				"autoplayHoverPause": true,
				"autoplay":true,
				"autoplayButtonOutput":false,
				"fixedWidth": auto,
			},
			
			},
			"autoplayButtonOutput":false
			});
		</script>

		<script>
			
			var slider = tns({
				"container": '.my-Slider5',
				"responsive": {
					"300": {
				"items": 2,
				"controls": false,
				"mouseDrag": true,
				"autoplay": false,
				"autoplayButtonOutput": false,
				"autoplayHoverPause": false,
				"fixedWidth": 100,
					},
			"500": {
				"items": 4,
				"nav": false,
				"controls": false,
				"autoplayHoverPause": true,
				"autoplay":true,
				"autoplayButtonOutput":false,
				"fixedWidth": auto,
			},
			
			},
			"autoplayButtonOutput":false
			});
		</script>
			
		<script>
			
			var slider = tns({
				"container": '.my-Slider6',
				"responsive": {
					"300": {
				"items": 2,
				"controls": false,
				"mouseDrag": true,
				"autoplay": false,
				"autoplayButtonOutput": false,
				"autoplayHoverPause": false,
				"fixedWidth": 100,
					},
			"500": {
				"items": 4,
				"nav": false,
				"controls": false,
				"autoplayHoverPause": true,
				"autoplay":true,
				"autoplayButtonOutput":false,
				"fixedWidth": auto,
			},
			
			},
			"autoplayButtonOutput":false
			});
		</script>
			
		<script>
			var slider = tns({
				"container": '.my-SliderRe',
				"responsive": {
					"300": {
				"items": 2,
				"controls": false,
				"mouseDrag": true,
				"autoplay": false,
				"autoplayButtonOutput": false,
				"autoplayHoverPause": false,
				"fixedWidth": 100,
					},
			"500": {
				"items": 4,
				"nav": false,
				"controls": false,
				"autoplayHoverPause": true,
				"autoplay":true,
				"autoplayButtonOutput":false,
				"fixedWidth": auto,
			},
			
			},
			"autoplayButtonOutput":false
			});
		</script>
			
		<script>
			var slider = tns({
				"container": '.my-SliderL',
				"responsive": {
					"300": {
				"items": 2,
				"controls": false,
				"mouseDrag": true,
				"autoplay": false,
				"autoplayButtonOutput": false,
				"autoplayHoverPause": false,
				"fixedWidth": 100,
					},
			"500": {
				"items": 4,
				"nav": false,
				"controls": false,
				"autoplayHoverPause": true,
				"autoplay":true,
				"autoplayButtonOutput":false,
				"fixedWidth": auto,
			},
			
			},
			"autoplayButtonOutput":false
			});
		</script>
    @endpush  

</main>
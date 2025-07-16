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
					<div class="mb-4">
						<h2 class="m-0"><i class="bi bi-hourglass-top me-2"></i>Today's top highlights</h2>
						<p>Latest breaking news, pictures, videos, and special reports</p>
					</div>

					<div class="my-Slider5 arrow-blur arrow-round rounded-3">
						@foreach( $highlight as $post)
							<div class="card">
								<!-- Card img -->
								<div class="position-relative">
									<img class="card-img" href="{{route('blog.details',['slug' => $post->slug])}}" src="{{url('public/assets/image/exhibition/'.$post->image)}}" alt="{{Str::limit($post->tittle, 24)}}">
									<div class="card-img-overlay d-flex align-items-start flex-column p-3">
										<!-- Card overlay bottom -->
										<div class="w-100 mt-auto" >
											<!-- Card category -->
											<a href="{{--route('blog.category', ['category_slug'=> $post->tag])--}}" class="badge badgecolor mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>{{$post->tag}}</a>
										</div>
									</div>
								</div>
								<div class="card-body px-0 pt-3">
									<h4 class="card-title"><a href="{{route('blog.details',['slug' => $post->slug])}}" class="btn-link text-reset fw-bold">{{Str::limit($post->tittle,51)}}</a></h4>
									<p class="card-text">{{Str::limit($post->desc,141)}}</p>
									<!-- Card info -->
									<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
										<li class="nav-item">
											<div class="nav-link">
												<div class="d-flex align-items-center position-relative">
													<div class="avatar avatar-xs"> 
														{{--<img class="avatar-img rounded-circle" src="{{url('public/assets/image/exhibition/'.$post->user->profile_photo_url ?? '')}}" alt="{{Str::limit($post->tittle, 24)}}">--}}
													</div>
													{{-- <span class="ms-3">by <a href="{{route('blog.author',['slug' => $post->user->slug])}}" class="stretched-link text-reset btn-link">{{$post->user->name}}</a></span> --}}
												</div>
											</div>
										</li>
										<li class="nav-item">
											@guest
												<a href="{{asset('/login')}}"><i class="bi bi-hand-thumbs-up-fill" aria-hidden="true"></i> </a>
												@else
													<a href="#" onclick="document.getElementById('like-form-{{$post->user->id}}').submit();">{{$post->likedUsers->count()}}<i class="bi bi-hand-thumbs-up" aria-hidden="true"></i></a>
													<form action="{{route('post.like',$post->user->id)}}" method="POST" style="display:none" id="like-form-{{$post->user->id}}">
														@csrf
													</form>
											@endguest
										</li>
										<li class="nav-item">{{ Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</li>
										<li class="nav-item"><a href="#" class="btn-link"><i class="far fa-comment-alt me-1"></i> 1 </a></li>
									</ul>
								</div>
							</div>
						@endforeach
					</div>
					<!-- Top highlights START -->

					<!-- Divider -->
					<div class="border-bottom border-primary border-2 opacity-1 my-4"></div>

					<!-- Card video item START -->
					<div class="card mb-2 mb-sm-4">
						<div class="row g-3">
							<div class="col-md-6 order-sm-2">
								<div class="rounded-3 overflow-hidden">
									<div class="ratio ratio-16x9">
										<iframe width="560" height="315" src="./final_files/tXHviS-4ygo.html" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
									</div>
								</div>
							</div>
							
							<div class="col-md-6">
											<a href="{{--route('blog.category', ['category_slug'=> $post->tag])--}}" class="badge badgecolor mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>{{$post->tag}}</a>
											<h3><a href="{{route('blog.details',['slug' => $post->slug])}}" class="btn-link text-reset fw-bold">{{Str::limit($post->tittle,48)}}</a></h3>
											<p>{{Str::limit($post->s_desc,241)}}</p>
											<!-- Card info -->
											<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
												<li class="nav-item">
													<div class="nav-link">
														<div class="d-flex align-items-center position-relative">
															<div class="avatar avatar-xs">
																{{--<img class="avatar-img rounded-circle"  src="{{$post->user->profile_photo_url ?? ''}}" alt="avatar">--}}
															</div>
															<span class="ms-3">by <a href="{{route('blog.author',['slug' => $post->user->slug])}}" class="stretched-link text-reset btn-link">{{$post->user->name}}</a></span>
														</div>
													</div>
												</li>
												<li class="nav-item">
														@guest
														<a href="{{asset('/login')}}"><i class="bi bi-hand-thumbs-up-fill" aria-hidden="true"></i> </a>
															
														@else
															<a href="#" onclick="document.getElementById('like-form-{{$post->user->id}}').submit();">	
															{{$post->likedUsers->count()}}<i class="bi bi-hand-thumbs-up" aria-hidden="true"></i> 
															</a>
															<form action="{{route('post.like',$post->user->id)}}" method="POST" style="display:none" id="like-form-{{$post->user->id}}">
																@csrf
															</form>
														@endguest
													
														</li>
												<li class="nav-item">{{ Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</li>
												<li class="nav-item"><a href="" class="btn-link"><i class="far fa-comment-alt me-1"></i> 14 </a></li>
											</ul>
										</div>

							</div>
					</div>
					<!-- Card video item END -->

					<!-- Divider -->
					<div class="border-bottom border-primary border-2 opacity-1 my-4"></div>

					<!-- Small card 6X6 START -->
					<div class="row">
						<div class="col-12 col-md-6">
							@foreach($oddsmall as $post)
								<!-- Card item START -->
								<div class="card mb-3">
									<div class="row g-3">
										<div class="col-4">
											<img class="rounded" src="{{url('public/assets/image/exhibition/'.$post->image)}}" alt="{{Str::limit($post->tittle, 24)}}">
										</div>
										<div class="col-8">
											<h5><a href="{{route('blog.details',['slug' => $post->slug])}}" class="btn-link stretched-link text-reset">{{Str::limit($post->tittle,36)}}</a></h5>
											<!-- Card info -->
											<ul class="nav nav-divider align-items-center mt-3 small">
												<li class="nav-item">
													<div class="nav-link">
														<div class="d-flex align-items-center position-relative">
															<div class="avatar avatar-xs">
																{{--<img class="avatar-img rounded-circle"  src="{{$post->user->profile_photo_url ?? ''}}" alt="avatar">--}}
															</div>
															{{--<span class="ms-2">by <a href="#" class="stretched-link text-reset btn-link">{{$post->user->name}}</a></span>--}}
														</div>
													</div>
												</li>
												<li class="nav-item">
													@guest
														<a href="{{asset('/login')}}"><i class="bi bi-hand-thumbs-up-fill" aria-hidden="true"></i></a>
													@else
														<a href="#" onclick="document.getElementById('like-form-{{$post->user->id}}').submit();">	
														{{$post->likedUsers->count()}}<i class="bi bi-hand-thumbs-up" aria-hidden="true"></i> 
														</a>
														<form action="{{route('post.like',$post->user->id)}}" method="POST" style="display:none" id="like-form-{{$post->user->id}}">
															@csrf
														</form>
														
													@endguest
												</li>
												<li class="nav-item">{{ Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</li>
											</ul>
										</div>
									</div>
								</div>
								<!-- Card item END -->
							@endforeach
						</div>

						<div class="col-12 col-md-6">
							@foreach($evensmall as $post)
								<!-- Card item START -->
								<div class="card mb-3">
									<div class="row g-3">
										<div class="col-4">
											<img class="rounded" src="{{url('public/assets/image/exhibition/'.$post->image)}}" alt="{{Str::limit($post->tittle, 24)}}">
										</div>
										<div class="col-8">
											<h5><a href="{{route('blog.details',['slug' => $post->slug])}}" class="btn-link stretched-link text-reset">{{Str::limit($post->tittle,36)}}</a></h5>
											<!-- Card info -->
											<ul class="nav nav-divider align-items-center mt-3 small">
												<li class="nav-item">
													<div class="nav-link">
														<div class="d-flex align-items-center position-relative">
															<div class="avatar avatar-xs">
																{{--<img class="avatar-img rounded-circle"  src="{{$post->user->profile_photo_url ?? ''}}" alt="avatar">--}}
															</div>
															{{--<span class="ms-2">by <a href="#" class="stretched-link text-reset btn-link">{{$post->user->name}}</a></span>--}}
														</div>
													</div>
												</li>
												<li class="nav-item">
													@guest
														<a href="{{asset('/login')}}"><i class="bi bi-hand-thumbs-up-fill" aria-hidden="true"></i></a>
													@else
														<a href="#" onclick="document.getElementById('like-form-{{$post->user->id}}').submit();">	
														{{$post->likedUsers->count()}}<i class="bi bi-hand-thumbs-up" aria-hidden="true"></i> 
														</a>
														<form action="{{route('post.like',$post->user->id)}}" method="POST" style="display:none" id="like-form-{{$post->user->id}}">
															@csrf
														</form>
														
													@endguest
												</li>
												<li class="nav-item">{{ Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</li>
											</ul>
										</div>
									</div>
								</div>
								<!-- Card item END -->
							@endforeach
						</div>
					
					</div><!-- Row END -->
					<!-- Small card 6X6 END -->

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
	<section class="py-5 bg-white">
		<div class="container">
			<h2 class="mb-4 text-center">Frequently Asked Questions</h2>

			<div class="mb-4">
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

						<div id="collapse{{$key}}" class="accordion-collapse collapse {{ $key == 0 ? 'show' : '' }}"
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


								<!-- Give Reply button -->
						<button wire:click="showReplyBox({{ $evento->id }})" class="btn btn-sm btn-outline-primary">
							{{ $replyingTo === $evento->id ? 'Cancel' : 'Give Reply' }}
						</button>

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
		</div>
	</section>

	
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
<main>

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

		@php
			$updateQuestion = DB::table('questions')
							->whereNull('event_id')
							->orderBy('updated_at', 'desc')  // ✅ Correct way to sort by latest update
							->get();

		@endphp

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
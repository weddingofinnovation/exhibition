@section('page_title', ($mag->tittle))
@section('page_description', ($mag->s_desc))
@section('page_keyword', 'The Exhibition Network, Exhibition, World largest business event platform, find all upcoming events, business conferences, exhibition 2023, trade shows, global seminars, networking meets and workshops. Browse and connect with visitors attending, participating exhibitors and view profiles of speakers and organizers. Manage, sell event tickets and promote your event on exhbition.org.in')



<main>


<style>
	.blog-article {
    font-size: 18px;
    line-height: 1.9;
    color: #333;
}

.blog-article p {
    margin-bottom: 1.5rem;
}

.blog-article h1,
.blog-article h2,
.blog-article h3,
.blog-article h4 {
    font-weight: 700;
    margin-top: 2rem;
    margin-bottom: 1rem;
    color: #111;
}

.blog-article ul,
.blog-article ol {
    margin-bottom: 1.5rem;
    padding-left: 1.5rem;
}

.blog-article li {
    margin-bottom: 0.5rem;
}

.blog-article strong {
    font-weight: 600;
}

.blog-article blockquote {
    border-left: 4px solid #0d6efd;
    padding-left: 1rem;
    font-style: italic;
    color: #555;
    margin: 2rem 0;
}

</style>


	<section class="bg-dark-overlay-4" style="background-image:url({{asset('public/assets/image/exhibition/'.$mag->image)}}); background-position: center left; background-size: cover;">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 py-md-5 my-lg-5">
			<a href="{{route('blog.category',['category_slug'=> $mag->slug])}}" class="badge bg-warning mb-2">
				<i class="fas fa-circle me-2 small fw-bold"></i>{{$mag->tag}}</a>
			
					<h1 class="text-white">{{$mag->tittle}}</h1>
					

			{{--<p class="lead text-white">{{Str::limit($mag->s_desc,263)}} </p>--}}
			<!-- Info -->
			<ul class="nav nav-divider text-white-force align-items-center">
			<li class="nav-item">
				<div class="nav-link">
				<div class="d-flex align-items-center text-white position-relative">
					<div class="avatar avatar-sm">
					<img class="avatar-img rounded-circle" src="assets/images/avatar/12.jpg" alt="avatar">
					</div>
					<span class="ms-3">by <a href="{{route('blog.author',['slug' => $mag->slug])}}" class="stretched-link text-reset btn-link">{{$mag->user->name}}</a></span>
				</div>
				</div>
			</li>
			<li class="nav-item">{{ Carbon\Carbon::parse($mag->created_at)->diffForHumans()}}</li>
			<li class="nav-item">5 min read</li>
			
			<li class="nav-item">
				@guest
					<a href="{{asset('/login')}}"><i class="bi bi-hand-thumbs-up" aria-hidden="true"></i> {{$mag->likedUsers->count()}} likes</a>
					
				@else
					<a href="#" onclick="document.getElementById('like-form-{{$mag->id}}').submit();">{{$mag->likedUsers->count()}} <i class="bi bi-hand-thumbs-up-fill"  aria-hidden="true" style = "color:{{Auth::user()->likedMags()->where('mag_id','$mag->id')->count() > 0 ? 'red' : ''}}"></i></a>
					<form action="{{route('postdetail.like',$mag->user->id)}}" method="POST" style="display:none" id="like-form-{{$mag->id}}">
						@csrf
					</form>
				@endguest
			</li>
			<li class="nav-item"><a href="#"><i class="fas fa-heart me-1 text-danger"></i></a>{{$mag->review->count()}} Reviews</li>
			<li class="nav-item"><a href="#"><i class="fas fa-heart me-1 text-danger"></i></a>{{$mag->views_count}} Views</li>
			</ul>

			<!-- Share post -->
			<div class="d-md-flex align-items-center mt-4">
			<h5 class="text-white me-3">Share on: </h5>
						<ul class="nav text-white-force">
							<li class="nav-item">
								<a class="nav-link icon-md rounded-circle me-2 mb-2 p-0 fs-5 bg-facebook" href="#">
									<i class="fab fa-facebook-square align-middle"></i>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link icon-md rounded-circle me-2 mb-2 p-0 fs-5 bg-twitter" href="#">
									<i class="fab fa-twitter-square align-middle"></i>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link icon-md rounded-circle me-2 mb-2 p-0 fs-5 bg-linkedin" href="#">
									<i class="fab fa-linkedin align-middle"></i>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link icon-md rounded-circle me-2 mb-2 p-0 fs-5 bg-pinterest" href="#">
									<i class="fab fa-pinterest align-middle"></i>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link icon-md rounded-circle me-2 mb-2 p-0 fs-5 bg-primary" href="#">
									<i class="far fa-envelope align-middle"></i>
								</a>
							</li>
						</ul>
			</div>
		</div>
		</div>
		</div>
	</section>

	<section>
		<div class="container position-relative">
			<div class="row">
				<div class="col-lg-9 mb-5">
					<p>
						<span class="dropcap">A</span>
						{!! $mag->desc !!}
					</p>

				<div class="blog-content">
						
					</div>
					
				
					
				</div>

					<!-- Next prev post START -->
						<div class="row g-0 my-3">
							@foreach($relpost as $post)
								<div class="col-sm-6 border p-3 p-md-4 position-relative rounded-start">
									<div class="d-flex align-items-center">
										<!-- Icon -->
										<div class="bg-primary-soft h-auto align-items-center d-flex align-self-stretch">
											<i class="bi bi-chevron-compact-left fs-3 text-primary px-1"></i>
										</div>
										<!-- image -->
										<div class="col-3 d-none d-md-block">
											<img src="{{url('Storage/mags/'.$post->image)}}" alt="{{Str::limit($post->tittle, 24)}}">
										</div>
										<!-- Title -->
										<div class="ms-3">
											<h5 class="m-0"> 
												<a href="{{route('blog.details',['slug' => $post->slug])}}" class="stretched-link btn-link text-reset">{{Str::limit($post->titte)}}</a></h5>
										</div>
									</div>
								</div>
							@endforeach
						</div>
					<!-- Next prev post START -->

					<!-- Author info START -->
					<div class="d-flex p-2 p-md-4 my-3 bg-primary-soft rounded">
						<!-- Avatar -->
						<a href="#">
							<div class="avatar avatar-xxl me-2 me-md-4">
								<img class="avatar-img rounded-circle" src="" alt="avatar">
							</div>
						</a>
						<!-- Info -->
						<div>
							<div class="d-sm-flex align-items-center justify-content-between">
								<div>
									<h4 class="m-0"><a href="{{route('blog.author',['slug' => $mag->user->slug])}}" class="text-reset btn-link">{{$mag->user->name}}</a></h4>
									<small>An editor at Blogzine</small>
								</div>
								<a href="{{route('blog.author',['slug' => $post->user->slug])}}" class="btn btn-xs btn-primary-soft">View Articles</a>
							</div>
							<p class="my-2">{{$mag->user->name}}, is a senior editor for the blogzine and also reports on breaking news based in London. He has written about government, criminal justice, and the role of money in politics since 2015.</p>
							<!-- Social icons -->
							<ul class="nav">
								<li class="nav-item">
									<a class="nav-link ps-0 pe-2 fs-5" href="#"><i class="fab fa-facebook-square"></i></a>
								</li>
								<li class="nav-item">
									<a class="nav-link px-2 fs-5" href="#"><i class="fab fa-twitter-square"></i></a>
								</li>
								<li class="nav-item">
									<a class="nav-link px-2 fs-5" href="#"><i class="fab fa-linkedin"></i></a>
								</li>
							</ul>					
						</div>
					</div>
					<!-- Author info END -->

					
					

				</div>
				<!-- Main Content END -->



				
			</div>
		</div>
	</section>

</main>
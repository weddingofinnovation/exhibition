<main>

    {{-- Mobile Header --}}
    <div class="bg-secondary d-lg-none mb-3">
        <div class="container">
            <div class="col-md-6 offset-md-3 d-flex justify-content-between">
                <div class="align-content-center py-2">
                    <a href="#"><i class="bi bi-chevron-left"></i></a>
                </div>
                <div class="text-center py-2">
                    <div>How was the experience?</div>
                </div>
                <div class="align-content-center py-2">
                    <a href="#"><i class="bi bi-x"></i></a>
                </div>
            </div>
        </div>
    </div>

    {{-- Feedback Form --}}
    <div class="container py-lg-5 my-lg-5">
        <form wire:submit.prevent="add">
            
            {{-- Hashtag Rating Section --}}
            <div class="col-sm-2 col-md-12 pb-5 pb-sm-3">
                <label class="form-label fw-bold">
                    What do you think about business learning?
                    <span class="text-muted">Express yourself with hashtags!</span>
                </label>

                <div class="input-group flex-wrap">
                    @foreach ($hashtag as $hhtag)
                        <div class="col-auto my-1 px-2">
                            <input 
                                type="checkbox" 
                                class="form-check-input" 
                                value="{{ $hhtag->id }}" 
                                wire:model="hasttag"
                                id="tag-{{ $hhtag->id }}"
                            >
                            <label for="tag-{{ $hhtag->id }}">{{ $hhtag->hastag }}</label>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Optional Text Review --}}
            <div class="col-sm-10 mb-3 pb-sm-2">
                <label class="form-label fw-normal" for="opinion">
                    Express more, write a review 
                    <span class="text-muted">(optional)</span>
                </label>
                <textarea 
                    class="form-control" 
                    id="opinion"
                    wire:model.lazy="opinion" 
                    rows="3"
                    maxlength="100"
                ></textarea>
                <div class="form-text">Maximum 100 characters.</div>
                @error('opinion')
                    <div class="form-text text-primary">{{ $message }}</div>
                @enderror
            </div>

            {{-- Submit Button (Desktop) --}}
            <button class="btn btn-primary d-block w-100 mt-5 d-none d-sm-block" type="submit">
                Submit
            </button>

            {{-- Submit Button (Mobile Toolbar) --}}
            <div class="handheld-toolbar bg-secondary">
                <button class="btn btn-primary d-block w-100" type="submit">Submit</button>
            </div>
        </form>
    </div>

    {{-- Mobile Bottom Toolbar Navigation --}}
    <div class="handheld-toolbar">
        <div class="d-table table-layout-fixed w-100">

            <a class="d-table-cell handheld-toolbar-item" 
               href="{{ route('admin.dashboard', ['board' => 'event']) }}">
                <span class="handheld-toolbar-icon"><i class="ci-filter-alt"></i></span>
                <span class="handheld-toolbar-label">Admin</span>
            </a>

            <a class="d-table-cell handheld-toolbar-item" href="#">
                <span class="handheld-toolbar-icon"><i class="ci-menu"></i></span>
                <span class="handheld-toolbar-label">Edit</span>
            </a>

            <a class="d-table-cell handheld-toolbar-item" href="#">
                <span class="handheld-toolbar-icon"><i class="ci-cart"></i></span>
                <span class="handheld-toolbar-label">View</span>
            </a>

            <a class="d-table-cell handheld-toolbar-item" 
               data-bs-toggle="offcanvas" 
               href="#offcanvasExample" 
               role="button" 
               aria-controls="offcanvasExample">
                <span class="handheld-toolbar-icon"><i class="ci-heart"></i></span>
                <span class="handheld-toolbar-label">Menu</span>
            </a>
        </div>
    </div>
</main>

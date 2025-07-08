    @if($board == 'email') 
        <!-- email -->
        <div class="container-fluid">
            <div class="row">
                <!-- Search bar -->
                <div class="col-md-8">
                    <div class="input-group my-3">
                        <input type="text" class="form-control" placeholder="Search..." wire:model="searchTerm">
                        <button class="btn btn-primary">Search</button>
                    </div>

                    <!-- Search Results -->
                    <ul class="list-group">
                        @foreach($searchResults as $result)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{ $result->name }}
                                <button class="btn btn-sm btn-outline-success" wire:click="selectItem({{ $result->id }})">Select</button>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Sidebar for Desktop -->
                <div class="col-md-4 d-none d-md-block border-start">
                    @if($selectedItem)
                        <h5 class="mt-3">Selected: {{ $selectedItem->name }}</h5>
                        <input type="email" class="form-control my-2" wire:model="email" placeholder="Enter Email">
                        <button class="btn btn-success w-100" wire:click="sendEmail">Send to Email</button>
                    @endif
                </div>
            </div>
        </div>

        <!-- Mobile Footer Button -->
        <div class="d-md-none fixed-bottom bg-light p-2 border-top" style="z-index: 1050;">
        @if($selectedItem)
            <button class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#emailModal">
            Send "{{ $selectedItem->name }}" to Email
            </button>
        @endif
        </div>

        <!-- Mobile Modal -->
        <div class="modal fade" id="emailModal" tabindex="-1" aria-labelledby="emailModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Send to Email</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="email" class="form-control mb-2" wire:model="email" placeholder="Enter Email">
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" wire:click="sendEmail" data-bs-dismiss="modal">Send</button>
            </div>
            </div>
        </div>
        </div>
    @else
        <div class="container py-4">
            <div class="row">

                {{-- Left (Form) --}}
                <div class="col-md-8 border-end">
                    <h5 class="mb-3">Share Your Comment</h5>

                    <form wire:submit.prevent="addcomm">
                        <!-- Hashtag Section -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Use hashtags to describe your experience</label>
                            <div class="d-flex flex-wrap">
                                @foreach ($hashtag as $hhtag)
                                    <div class="form-check me-3 mb-2">
                                        <input 
                                            type="checkbox" 
                                            class="form-check-input" 
                                            id="tag-{{ $hhtag->id }}" 
                                            value="{{ $hhtag->id }}" 
                                            wire:model="hasttag"
                                        >
                                        <label class="form-check-label" for="tag-{{ $hhtag->id }}">
                                            #{{ $hhtag->hastag }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Text Area -->
                        <div class="mb-3">
                            <label for="opinion" class="form-label">Write a comment <span class="text-muted">(optional)</span></label>
                            <textarea 
                                class="form-control" 
                                id="opinion" 
                                rows="4" 
                                wire:model.lazy="comment" 
                                maxlength="100"
                            ></textarea>
                            <div class="form-text">Max 100 characters.</div>
                            @error('comment')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary w-100 w-md-auto mt-3">Submit</button>
                    </form>

                    {{-- Mobile Toggle Button for Previous Comments --}}
                    <div class="d-block d-md-none text-end mt-4">
                        <button class="btn btn-outline-secondary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#mobilePreviousComments">
                            Show Previous Comments
                        </button>
                    </div>
                </div>

            @php
                $bladepreviousComments = DB::table('business_calledos')->where('lead_id', $this->lead_id)->orderBy('created_at', 'desc')->get();
                
            @endphp
                
                
                {{-- Right (Previous Comments) - Desktop View --}}
                <div class="col-md-4 ps-md-4 d-none d-md-block">
                    <h6 class="mb-3">Previous Comments {{$bladepreviousComments->count()}}</h6>

                    @if($bladepreviousComments && $bladepreviousComments->count())
                        <div class="list-group" style="max-height: 400px; overflow-y: auto;">
                            @foreach($bladepreviousComments as $commen)
                                <div class="list-group-item small">
                                    <div>{{ $commen->comment ?? 'No written feedback' }}</div>
                                    <small class="text-muted">{{ \Carbon\Carbon::parse($commen->created_at)->diffForHumans() }}</small>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-muted">No previous comments yet.</p>
                    @endif
                </div>

                {{-- Mobile Collapsible Comments --}}
                <div class="col-12 collapse mt-3 d-md-none" id="mobilePreviousComments">
                    <h6 class="mb-3">Previous Comments</h6>
                    @if($bladepreviousComments && $bladepreviousComments->count())
                        <div class="list-group">
                            @foreach($bladepreviousComments as $commen)
                                <div class="list-group-item small">
                                    <div>{{ $commen->comment ?: 'No written feedback' }}</div>
                                    <small class="text-muted">{{ \Carbon\Carbon::parse($commen->created_at)->diffForHumans() }}</small>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-muted">No previous comments yet.</p>
                    @endif
                </div>

            </div>
        </div>
    @endif
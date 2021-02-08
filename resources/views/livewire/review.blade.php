<div>

    @if(session()->has('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif

    {{-- Success is as dangerous as failure. --}}

    <form id="checkout-form" wire:submit.prevent="store">
        @csrf
        <div class="billing details ">
            <div class="form-group">
                <input class="form-control" wire:model="subject" type="text" placeholder="Subject">
                @error('subject') <span class="text-danger">{{$message}}</span>@enderror
            </div>
            <div class="form-group mt-2">
                <textarea class="form-control" wire:model="review" type="textarea" placeholder="Your Review"></textarea>
                @error('review') <span class="text-danger">{{$message}}</span>@enderror
            </div>
            <div class="form-group mt-2">

                <label class="input-group-text" for="inputGroupSelect01">@error('rate')@enderror Options</label>
                <select class="form-select" id="inputGroupSelect01">
                    <option selected>Urun Puan</option>
                    <option wire:model="rate" value="1">One</option>
                    <option wire:model="rate" value="2">Two</option>
                    <option wire:model="rate" value="3">Three</option>
                    <option wire:model="rate" value="4">four</option>
                    <option wire:model="rate" value="5">five</option>
                </select>

            </div>

            @auth
                <input type="submit" class="site-btn" value="Save"/>
            @else
                <a href="/login" class="primary-btn">For Submit Review Login</a>
            @endauth
        </div>
    </form>
</div>

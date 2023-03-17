<!-- Cooperations -->
@foreach($posts as $post)
    @if($loop->index%2 == 0)
        <div class="container">
            <div class="row py-5 text-start">
                <div class="col-1"></div>
                <div id="cooperation-post-{{$loop->index}}-{{$post->slug}}" class="col-7">
                    <img src="{{$post->image}}">
                    <h2 class="fw-bold text-primary fs-1">
                        {!! $post->title !!}
                    </h2>
                    <div class="bg-white shadow">
                        {!! $post->content !!}
                    </div>
                </div>
                <div class="col-4"></div>
            </div>
        </div>
    @endif
    @if($loop->index%2 == 1)
        <div class="container">
            <div class="row py-5 text-start">
                <div class="col-4"></div>
                <div id="cooperation-post-{{$loop->index}}-{{$post->slug}}" class="col-7">
                    <img src="{{$post->image}}">
                    <h2 class="fw-bold text-primary fs-1">
                        {!! $post->title !!}
                    </h2>
                    <div class="bg-white shadow">
                        {!! $post->content !!}
                    </span>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
    @endif
@endforeach 
<!-- ./ Cooperations -->
    <!-- Test -->
    <div class="row py-5 text-start">
        <div class="col-12">
            @foreach($posts as $post)
            <img src="{{$post->image}}">
            <h1 class="fw-bold text-primary">
                {!! $post->title !!}
            </h1>
            <p>
                {!! $post->content !!}
            </p>
            @endforeach 
        </div>
    </div>
    <!-- ./ Test -->
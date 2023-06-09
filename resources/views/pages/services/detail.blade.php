<div class="container-fluid g-0 px-3 px-xl-5">

    <!-- wp content -->
    <div class="row py-5 px-3 px-xl-5 align-items-center">
        <div class="col-lg-4">
            <img style="max-height: 340px; width: auto;" src="{{$post->image}}" class="img-fluid rounded rounded-3 border border-5 border-white shadow text-center">
        </div>
        <div class="col-lg-8 position-relative text-center text-xl-end h-100">
            <div class="row h-100 align-items-center">
                <div class="d-none d-xl-block">
                    <h2 class="text-primary bg-white px-3 py-2 shadow d-inline" style="font-size: 2.8em;">{{ $post->title }}</h2>
                </div>
                <div class="d-block d-xl-none">
                    <h2 class="text-primary bg-white px-3 py-2 shadow d-inline" style="font-size: 1.4em;">{{ $post->title }}</h2>
                </div>
            </div>
        </div>
        <div class="col-12 mt-3">
            <div>
                {!! $post->content !!}
            </div>
        </div>
    </div>
    <!-- ./wp content -->

    <!-- attached image -->
    @php if(!isset($imgAttachment)) {$imgAttachment = null;} @endphp
    @php if(!isset($pdfAttachmentTitle)) {$pdfAttachmentTitle = null;} @endphp
    @if(!is_null($imgAttachment))
        <div class="row px-3 px-xl-5 pb-3">
            <div class="col-12 text-center text-xl-start">
                <a @if(is_null($pdfAttachmentTitle)) style="pointer-events: none;" @endif href="/pdf/{{$pdfAttachmentTitle}}.pdf" download="{{$pdfAttachmentTitle}}">
                    <img src="{{$post->image}}" @if($imgType == 'normal') style="max-width: 320px; height: auto;" @endif>
                </a>             
            </div>
        </div>
    @endif
    <!-- ./ attached image -->

    <!-- manual special sections -->
    @php if(!isset($secondPost)) {$secondPost = null;} @endphp
    @php if(!isset($elements)) {$elements = null;} @endphp

    @if($post->slug == 'detox')
        @include('pages.inc.detox.comparison')
        @include('pages.inc.detox.days', array('elements' => $elements))
        @include('pages.inc.second-post', array('secondPost' => $secondPost))
    @endif
    <!-- ./ manual special sections -->

    <!-- service contact -->
    @include('pages.inc.service-contact')
    <!-- ./ service contact -->

    <!-- attached btn -->
    @php if(!isset($btnUri) && !isset($btnTitle)) {$btnUri = null; $btnTitle = null;} @endphp
    @if(!is_null($btnUri))
        @if(!is_null($btnTitle))
        <div class="row px-3 px-xl-5 pb-3">
            <div class="col-12 text-end pt-2 pb-5">
                <a href="{{$btnUri}}" class="btn btn-primary mt-3">
                    {{$btnTitle}}
                </a>                 
            </div>
        </div>
        @endif
    @endif
    <!-- ./ attached btn -->

    @include('pages.services.index')

</div>

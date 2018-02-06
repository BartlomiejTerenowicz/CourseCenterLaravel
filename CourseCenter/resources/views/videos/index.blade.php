@extends('master')
@section('content')
    <div class="videos-header card">
        <h2>Najnowsze kursy</h2>
    </div>
    <div class="row">

        @foreach($videos as $video)
        <!-- Single video record -->
        <div class="col-xs-12 col-md-6 col-lg-4 single-video">
            <div class="card">

                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="{{$video->url}}?showinfo=0" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="card-content">
                    <!--<a href="{/{ url('videos', $video->id)}}">-->
                    <a href="single_video.html">
                        <h4>{{ $video->title }}</h4>
                    </a>
                    <p>{{ $video->description }}</p>
                    <span class="upper-label">Dodał</span>
                    <span class="video-author">Course Center</span>
                </div>

            </div>
        </div>
    @endforeach
    </div>
@stop
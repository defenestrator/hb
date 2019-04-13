@extends('layouts._master')
@section('content')
<div class="container justify-content-center">
    <div class="row justify-content-center pagetitle">
        <h1>Heisenbeans</h1>
    </div>
     <div class="row justify-content-center">
        <h2>Grand Opening</h2>
    </div>
    <div class="row justify-content-center">
        <h3>Saturday April 13th, 2019!</h3>
    </div>
    <div class="row justify-content-center">
        <h4>...sorry for the delay, <br>seriously though, we're almost ready!</h4>
    </div>
    <strains :products="{{ $strains }}" ></strains>
    <hr />
    <div class="row justify-content-center">
        <a style="text-align:center;" href="https://www.instagram.com/heisenbeans_genetics/">Follow us on IG</a>
    </div>
    <div class="row justify-content-center">
        <a style="text-align:center;" href="https://www.instagram.com/heisenbeans_genetics/">
            <img src="http://i.heisenbeans.com/images/app-icon2-small.png">
        </a>
    </div>
        <div>
        @foreach(array_chunk(array_slice($posts, 0, 3), 3) as $postRow)
            <div class="row justify-content-center">
                @foreach($postRow as $post)
                    <div class="col-md-3 col-md-offset-1 info">
                        <a href="{!! $post->link !!}">
                            <img src="{!! $post->images->standard_resolution->url !!}">
                        </a>
                        <p>
                            <a href="{!! $post->link !!}">{!! $post->caption->text !!}</a>
                        </p>
                    </div>

                @endforeach
            </div>
        @endforeach
    </div>
</div>
@endsection

@extends('frontend.master')
@section('body')

    <div class="w3-rest w3-margin-bottom">
        <h2 class="w3-xlarge">{{$categoryname->category_name}}</h2>
        <div class="w3-row-padding w3-stretch">
            @foreach($allnewses as $news)
            <div class="w3-col m4">
                <a href="{{route('details',$news->id)}}"
                ><img
                        class="w3-image"
                        src="{{asset($news->news_image)}}"
                    />
                    <h2>
                        {{$news->news_title}}
                    </h2></a
                >
            </div>
            @endforeach
        </div>

    </div>
@endsection

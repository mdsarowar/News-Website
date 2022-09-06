@extends('frontend.master')
@section('title')

@endsection
@section('body')
    <div class="w3-rest w3-margin-bottom">
        <div class="w3-row-padding w3-margin-bottom w3-stretch">
            <div class="w3-col s7">
                <div class="w3-display-container w3-text-white w3-margin-bottom" style="font-weight=bold;">
                    @if(isset($news1))
                    <a class="w3-hover-text-white" href="{{route('details',$news1->id)}}">
                        <div class="lead-image">
                            <img class="w3-image w3-hover-opacity" src="{{asset($news1->news_image)}}"/>
                        </div>
                        <div class="w3-display-bottomleft" style="padding: 10px 10px 0px 16px">
                            <h1 class="leadtext">
                                {{$news1->news_title}}
                            </h1>
                        </div>
                    </a>
                    @endif
                </div>
                <div class="w3-row-padding w3-stretch">
                    @if(isset($news2))
                    @foreach($news2 as $newss)
                    <div class="w3-col s6">
                        <a href="{{route('details',$newss->id)}}">
                            <img
                                class="w3-image"
                                src="{{asset($newss->news_image)}}"
                            />
                            <h2>
                                {{$newss->news_title}}
                            </h2>
                        </a>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
            <div class="w3-col s5">
                <div class="w3-row">
                    @if(isset($news3))
                    @foreach($news3 as $news)
                    <div class="w3-row-padding w3-margin-bottom w3-stretch">
                        <div class="w3-col s6">
                            <a href="{{route('details',$news->id)}}">
                                <img
                                    class="w3-image"
                                    src="{{asset($news->news_image)}}"
                                />
                            </a>
                        </div>
                        <div class="w3-col s6">
                            <a href="{{route('details',$news->id)}}">
                                <h2 style="margin-top: 0px">
                                    {{$news->news_title}}
                                </h2>
                            </a>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
{{--        <div class="w3-row w3-margin-bottom w3-margin-top w3-center">--}}
{{--            <div--}}
{{--                id="div-gpt-ad-1660151313982-0"--}}
{{--                style="min-width: 728px; min-height: 90px"--}}
{{--            >--}}
{{--                <script type="9a1cfd8ac5baa49ef3e056e2-text/javascript">--}}
{{--                    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1660151313982-0'); });--}}
{{--                  </script>--}}
{{--            </div>--}}
{{--            <div class="w3-center w3-small">advertisement</div>--}}
{{--        </div>--}}
        <div class="w3-row-padding w3-stretch">
            @if(isset($bangladeshs))
            @foreach($bangladeshs as $bangladesh)
            <div class="w3-col s4">
                <a href="post/393663.html">
                    <img class="w3-image" src="{{asset($bangladesh->news_image)}}" />
                    <h2>{{$bangladesh->news_title}}</h2></a
                >
            </div>
            @endforeach
            @endif

        </div>
        <div class="w3-row-padding w3-stretch">
            @if(isset($worlds))
            @foreach($worlds as $world)
                <div class="w3-col s4">
                    <a href="{{route('details',$world->id)}}">
                        <img
                            class="w3-image"
                            src="{{asset($world->news_image)}}"
                        />
                        <h2>
                           {{$world->news_title}}
                        </h2>
                    </a>
                </div>
            @endforeach
            @endif
        </div>
        <div class="w3-row-padding w3-stretch w3-margin-bottom">
            @if(isset($sports))
            @foreach($sports as $sport)
                <div class="w3-col s4">
                    <a href="{{route('details',$sport->id)}}">
                        <img
                            class="w3-image"
                            src="{{asset($sport->news_image)}}"
                        />
                        <h2>
                            {{$sport->news_title}}
                        </h2>
                    </a>
                </div>
            @endforeach
            @endif

        </div>
{{--        <div class="w3-row w3-margin-bottom w3-margin-top w3-center">--}}
{{--            <ins--}}
{{--                data-purplepatch-slotid="729"--}}
{{--                data-purplepatch-ct0="%%CLICK_URL_UNESC%%"--}}
{{--                data-purplepatch-id="53126d71827fcba70ff68055b9a73ca1"--}}
{{--            ></ins>--}}
{{--            <script--}}
{{--                async--}}
{{--                src="../bgd1.purplepatch.online/payload/async.js"--}}
{{--                type="9a1cfd8ac5baa49ef3e056e2-text/javascript"--}}
{{--            ></script>--}}
{{--            <div class="w3-center w3-small">advertisement</div>--}}
{{--        </div>--}}
        <div class="w3-row w3-margin-bottom">
            <div class="w3-col s7">
                <div class="w3-row-padding w3-stretch">
                    @if(isset($relezs))
                    @foreach($relezs as $relez)
                    <div class="w3-col s6">
                        <a href="{{route('details',$relez->id)}}">
                            <img
                                class="w3-image"
                                src="{{asset($relez->news_image)}}"
                            />
                            <h2>{{$relez->news_title}}</h2>
                        </a>
                    </div>
                    @endforeach
                    @endif
                </div>
                <div class="w3-row-padding w3-stretch">
                    @if(isset($sportsa))
                    @foreach($sportsa as $sport)
                    <div class="w3-col s6">
                        <a href="{{route('details',$sport->id)}}">
                            <img
                                class="w3-image"
                                src="{{asset($sport->news_image)}}"
                            />
                            <h2>
                                {{$sport->news_title}}
                            </h2>
                        </a>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>

            <div class="w3-col s5">
                <div class="w3-row w3-margin-left">
                    @if(isset($news4))
                    @foreach($news4 as $news)
                    <div class="w3-col s12 w3-margin-bottom">
                        <a href="{{route('details',$news->id)}}">
                            <img
                                class="w3-image w3-left w3-margin-right"
                                src="{{asset($news->news_image)}}"
                                style="width: 100px"
                            />
                            <h2 style="margin-top: 0px">
                                {{$news->news_title}}
                            </h2>
                        </a>
                    </div>
                    @endforeach
                    @endif

                </div>

            </div>
        </div>


        <div class="w3-row w3-margin-bottom">
            <h4 class="categoryBorder">
                <a href="entertainment.html">বিনোদন</a>
            </h4>
            <div class="w3-row-padding w3-stretch">
                @if(isset($entertainments1))
                @foreach($entertainments1 as $entertainment)
                    <div class="w3-col s6">
                        <a href="{{route('details',$entertainment->id)}}">
                            <img
                                class="w3-image"
                                src="{{asset($entertainment->news_image)}}"
                            />
                            <h2>
                                {{$entertainment->news_title}}
                            </h2>
                        </a>
                    </div>
                @endforeach
                @endif
            </div>
            <div class="w3-row-padding w3-stretch">
                @if(isset($entertainments2))
                @foreach($entertainments2 as $entertainment)
                    <div class="w3-col s4">
                        <a href="{{route('details',$entertainment->id)}}">
                            <img
                                class="w3-image"
                                src="{{asset($entertainment->news_image)}}"
                            />
                            {{$entertainment->news_title}}
                        </a>
                    </div>
                @endforeach
                @endif
            </div>
        </div>

        <div class="w3-row-padding w3-stretch w3-margin-bottom">
{{--            <div class="w3-col m4 w3-center">--}}
{{--                <a--}}
{{--                    href="https://marcelbd.com/refrigerator-freezer"--}}
{{--                    target="_blank"--}}
{{--                ><img--}}
{{--                        class="w3-image"--}}
{{--                        src="{{asset('/')}}frontend/files/media/advertisement/walton/Marcel_Fridge_19_Jul_2022_288x96.jpg"--}}
{{--                        alt="Marcel"--}}
{{--                        width="288"--}}
{{--                        height="96"--}}
{{--                    /></a>--}}
{{--                <div class="w3-small">advertisement</div>--}}
{{--            </div>--}}


{{--            <div class="w3-col m4 w3-center">--}}
{{--                &nbsp;--}}
{{--                <div class="w3-small">advertisement</div>--}}
{{--            </div>--}}
{{--            <div class="w3-col m4 w3-center">--}}
{{--                <a href="http://www.gulshanclinicbd.org/" target="_blank"--}}
{{--                ><img--}}
{{--                        class="w3-image"--}}
{{--                        src="files/media/advertisement/gulshan-clinic/gulshan_clinic_288x96.jpg"--}}
{{--                        alt="gulshan clinic"--}}
{{--                        width="288"--}}
{{--                        height="96"--}}
{{--                    /></a>--}}
{{--                <div class="w3-small">advertisement</div>--}}
{{--            </div>--}}
        </div>

        <div class="w3-row w3-margin-bottom">
            <div class="w3-col m12">
                <h4 class="categoryBorder">
                    <a href="bangladesh.html">বাংলাদেশ</a>
                </h4>
            </div>
            <div class="w3-row-padding w3-stretch">
                @if(isset($bangladesh1))
                @foreach($bangladesh1 as $entertainment)
                    <div class="w3-col s6">
                        <a href="{{route('details',$entertainment->id)}}">
                            <img
                                class="w3-image"
                                src="{{asset($entertainment->news_image)}}"
                            />
                            <h2>
                                {{$entertainment->news_title}}
                            </h2>
                        </a>
                    </div>
                @endforeach
                @endif
            </div>
            <div class="w3-row-padding w3-stretch">
                @if(isset($bangladesh2))
                @foreach($bangladesh2 as $entertainment)
                    <div class="w3-col s4">
                        <a href="{{route('details',$entertainment->id)}}">
                            <img
                                class="w3-image"
                                src="{{asset($entertainment->news_image)}}"
                            />
                            {{$entertainment->news_title}}
                        </a>
                    </div>
                @endforeach
                @endif
            </div>
        </div>
        <div class="w3-row w3-margin-bottom">
            <div class="w3-col m12">
                <h4 class="categoryBorder">
                    <a href="chittagong-shomoy.html">চট্টগ্রাম সময়</a>
                </h4>
            </div>
            <div class="w3-col m12">
                <div class="w3-row">
                    @if(isset($cottogram1))
                    @foreach($cottogram1 as $cottogram)
                    <div class="w3-col s7">
                        <div class="w3-row-padding w3-stretch">
                            <div class="w3-col s12">
                                <a href="{{route('details',$cottogram->id)}}">
                                    <img class="w3-image" src="{{asset($cottogram->news_image)}}"/>
                                    <h2>
                                        {{$cottogram->news_title}}
                                    </h2>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                    <div class="w3-col s5">
                        <div class="w3-row w3-margin-left">
                            @if(isset($cottogram2))
                            @foreach($cottogram2 as $cottogram)

                                <div class="w3-col s12 w3-margin-bottom">
                                    <a href="{{route('details',$cottogram->id)}}"
                                    ><img
                                            class="w3-left w3-margin-right"
                                            src="{{asset($cottogram->news_image)}}"
                                            style="width: 100px"
                                        />
                                        <h2 style="margin-top: 0px">
                                            {{$cottogram->news_title}}
                                        </h2></a
                                    >
                                </div>
                            @endforeach
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w3-row w3-margin-bottom">
            <h4 class="categoryBorder">
                <a href="sports.html">খেলাধুলা</a>
            </h4>
            <div class="w3-row-padding w3-stretch">
                @if(isset($sports1))
                @foreach($sports1 as $sport)
                    <div class="w3-col s6">
                        <a href="{{route('details',$sport->id)}}">
                            <img
                                class="w3-image"
                                src="{{asset($sport->news_image)}}"
                            />
                            <h2>{{$sport->news_title}}</h2>
                        </a>
                    </div>
                @endforeach
                @endif

            </div>
            <div class="w3-row-padding w3-stretch">
                @if(isset($sports2))
                @foreach($sports2 as $sport)
                <div class="w3-col s4">
                    <a href="{{route('details',$sport->id)}}">
                        <img
                            class="w3-image"
                            src="{{asset($sport->news_image)}}"
                        />
                        <h2>{{$sport->news_title}}</h2>
                    </a>
                </div>
                @endforeach
                @endif
            </div>
        </div>
{{--        <div class="w3-row w3-margin-bottom">--}}
{{--            <div class="w3-col m12">--}}
{{--                <h4 class="categoryBorder">--}}
{{--                    <a href="international.html">আন্তর্জাতিক</a>--}}
{{--                </h4>--}}
{{--            </div>--}}
{{--            <div class="w3-col m12">--}}
{{--                <div class="w3-row">--}}
{{--                    <div class="w3-col s7">--}}
{{--                        <div class="w3-row-padding w3-stretch">--}}
{{--                            <div class="w3-col s12">--}}
{{--                                <a href="post/393659.html">--}}
{{--                                    <img--}}
{{--                                        class="w3-image"--}}
{{--                                        src="files/thumbs/daily-media/2022/09/03/495x283/1122.jpg"--}}
{{--                                    />--}}
{{--                                    <h2>গর্বাচেভের শেষকৃত্য সম্পন্ন, ছিলেন না পুতিন</h2>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="w3-col s5">--}}
{{--                        <div class="w3-row w3-margin-left">--}}
{{--                            <div class="w3-col s12 w3-margin-bottom">--}}
{{--                                <a href="post/393653.html">--}}
{{--                                    <img--}}
{{--                                        class="w3-left w3-margin-right"--}}
{{--                                        src="files/thumbs/daily-media/2022/09/03/100x58/India.png"--}}
{{--                                        style="width: 100px"--}}
{{--                                    />--}}
{{--                                    <h2 style="margin-top: 0px">--}}
{{--                                        চাকরি দেওয়ার নামে অর্থ আত্মসাৎ, নেতাকে গাছে বেঁধে--}}
{{--                                        পিটুনি--}}
{{--                                    </h2>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="w3-col s12 w3-margin-bottom">--}}
{{--                                <a href="post/393644.html">--}}
{{--                                    <img--}}
{{--                                        class="w3-left w3-margin-right"--}}
{{--                                        src="files/thumbs/daily-media/2022/09/03/100x58/U-K-prime-minister.png"--}}
{{--                                        style="width: 100px"--}}
{{--                                    />--}}
{{--                                    <h2 style="margin-top: 0px">--}}
{{--                                        কে হচ্ছেন ব্রিটেনের প্রধানমন্ত্রী, জানা যাবে--}}
{{--                                        সোমবার--}}
{{--                                    </h2>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="w3-col s12 w3-margin-bottom">--}}
{{--                                <a href="post/393633.html">--}}
{{--                                    <img--}}
{{--                                        class="w3-left w3-margin-right"--}}
{{--                                        src="files/thumbs/daily-media/2022/09/03/100x58/05.jpg"--}}
{{--                                        style="width: 100px"--}}
{{--                                    />--}}
{{--                                    <h2 style="margin-top: 0px">--}}
{{--                                        দেশে ফিরলেন গোতাবায়া, পেলেন রাষ্ট্রীয় অভ্যর্থনা--}}
{{--                                    </h2>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="w3-col s12 w3-margin-bottom">--}}
{{--                                <a href="post/393610.html">--}}
{{--                                    <img--}}
{{--                                        class="w3-left w3-margin-right"--}}
{{--                                        src="files/thumbs/daily-media/2022/09/03/100x58/taiwan.jpg"--}}
{{--                                        style="width: 100px"--}}
{{--                                    />--}}
{{--                                    <h2 style="margin-top: 0px">--}}
{{--                                        তাইওয়ানকে ১১০ কোটি ডলারের অস্ত্র দিচ্ছে--}}
{{--                                        যুক্তরাষ্ট্র--}}
{{--                                    </h2>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="w3-row w3-margin-bottom">--}}
{{--            <h4 class="categoryBorder">--}}
{{--                <a href="lifestyle.html">লাইফস্টাইল</a>--}}
{{--            </h4>--}}
{{--            <div class="w3-row-padding w3-stretch">--}}
{{--                <div class="w3-col s6">--}}
{{--                    <a href="post/393613.html">--}}
{{--                        <img--}}
{{--                            class="w3-image"--}}
{{--                            src="files/thumbs/daily-media/2022/09/03/416x238/relation_pic.jpg"--}}
{{--                        />--}}
{{--                        <h2>পরকীয়ায় জড়ানোর প্রবণতা কোন মাসে বেশি?</h2>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="w3-col s6">--}}
{{--                    <a href="post/393449.html">--}}
{{--                        <img--}}
{{--                            class="w3-image"--}}
{{--                            src="files/thumbs/daily-media/2022/09/02/416x238/fish.jpg"--}}
{{--                        />--}}
{{--                        <h2>মাছের পুডিং</h2>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="w3-row-padding w3-stretch">--}}
{{--                <div class="w3-col s4">--}}
{{--                    <a href="post/393440.html">--}}
{{--                        <img--}}
{{--                            class="w3-image"--}}
{{--                            src="files/thumbs/daily-media/2022/09/02/272x156/icecream0.jpg"--}}
{{--                        />--}}
{{--                        <h2>রোগ প্রতিরোধ ক্ষমতা বাড়ায় আইসক্রিম</h2>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="w3-col s4">--}}
{{--                    <a href="post/393229.html">--}}
{{--                        <img--}}
{{--                            class="w3-image"--}}
{{--                            src="files/thumbs/daily-media/2022/09/01/272x156/coffe.jpg"--}}
{{--                        />--}}
{{--                        <h2>দিনে সর্বোচ্চ কত কাপ কফি পান স্বাস্থ্যসম্মত?</h2>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="w3-col s4">--}}
{{--                    <a href="post/392812.html">--}}
{{--                        <img--}}
{{--                            class="w3-image"--}}
{{--                            src="files/thumbs/daily-media/2022/08/30/272x156/kan0.jpg"--}}
{{--                        />--}}
{{--                        <h2>কান খোঁচানোর অভ্যাস ত্যাগ না করলে ভয়াবহ বিপদ</h2>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="w3-row w3-margin-bottom w3-center">
            <div
                id="div-gpt-ad-1647935021067-0"
                style="min-width: 300px; min-height: 60px"
            >
                <script type="9a1cfd8ac5baa49ef3e056e2-text/javascript">
                    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1647935021067-0'); });
                  </script>
            </div>
            <div class="w3-center w3-small">advertisement</div>
        </div>

    </div>
    <!-- pagination
    ============================================ -->
{{--    @include('frontend.includes.body.pagination')--}}

@endsection

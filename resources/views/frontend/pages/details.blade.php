@extends('frontend.master')
@section('title')

@endsection

@section('body')
    <div class="w3-rest w3-margin-right">
        <div class="w3-row">
            <div class="w3-col" style="width: 160px">
                <div class="w3-row w3-margin-bottom"></div>
            </div>
            <div class="w3-rest">
                <div class="w3-row w3-margin-left w3-margin-right">
                    <h1 style="line-height: 1.3">
                        {{$details->news_title}}
                    </h1>
                    <div class="w3-row-padding w3-stretch">
                                <div class="w3-col s1 mt-2 ">
                                    <div style="width: 38px;height: 38px;border-radius: 19px; overflow: hidden;">
                                        <img class="author-image" style="width: 100%;" src="{{asset($details->reporter_image)}}" alt="Mani Acharjya">
                                    </div>
                                </div>
                                <div class="w3-col s4">
                                    <div class="w3-col ">
                                        <p> <strong>রিপোর্টার :</strong>{{$details->writer_name}}</p>
                                        <p class="news-time" style="color: rgba(0,0,0,.7);">{{$details->updated_at}}</p>
                                    </div>
                                </div>


                    </div>


                    <div class="w3-row w3-margin-bottom">
                        <div class="w3-col l4 w3-right-align">
                            <div
                                class="w3-bar-item sharethis-inline-share-buttons"
                            ></div>
                        </div>
                    </div>
                    <img
                        class="w3-image"
                        src="{{asset($details->news_image)}}"
                    />
                    <ins
                        data-purplepatch-slotid="652"
                        data-purplepatch-ct0="%%CLICK_URL_UNESC%%"
                        data-purplepatch-id="53126d71827fcba70ff68055b9a73ca1"
                    ></ins>
                    <script
                        async
                        src="{{asset($details->news_image)}}"
                        type="896ba19a27b8b667e5d08b47-text/javascript"
                    ></script>
                    <div class="w3-text-grey w3-border-bottom w3-padding-16">
                        {{$details->image_title}}
                    </div>
                    <div class="w3-row w3-margin-bottom">
                        <div id="DAS_article_top"></div>
                    </div>
                    <div class="w3-large img-am w3-justify">
                        <div class="w3-row w3-margin-bottom w3-center">
                            <div
                                id="div-gpt-ad-1654067981248-0"
                                style="min-width: 300px; min-height: 60px"
                            >
                                <script type="896ba19a27b8b667e5d08b47-text/javascript">
                          googletag.cmd.push(function() { googletag.display('div-gpt-ad-1654067981248-0'); });
                        </script>
                            </div>
                            <div class="w3-small">advertisement</div>
                        </div>
{{--                        <p>--}}
{{--                            ইলেক্ট্রিক বা ই-সিগারেট কী সেটা হয়তো বর্তমানে দীর্ঘ--}}
{{--                            সংজ্ঞাকারে বোঝানোর প্রয়োজন নেই। ইতিমধ্যে চলচ্চিত্র, নাটক--}}
{{--                            কিংবা সামাজিক যোগাযোগমাধ্যমের কল্যাণে অনেকেই দেখেছেন।--}}
{{--                            বর্তমানে সারা বিশ্বের প্রায় ৪০টির বেশি দেশ ই-সিগারেট--}}
{{--                            নিষিদ্ধ করেছে। সর্বশেষ গত সপ্তাহে এশিয়ার বিজনেস হাব খ্যাত--}}
{{--                            হংকং ই-সিগারেটকে নিষিদ্ধ করেছে। আমাদের প্রতিবেশী দেশ ভারত,--}}
{{--                            নেপাল ও শ্রীলঙ্কাতেও ই-সিগারেট নিষিদ্ধ। যুক্তরাষ্ট্রের--}}
{{--                            কেন্দ্রীয় সরকারের সতর্কতার পর দেশটির অনেক রাজ্যও একই--}}
{{--                            সিদ্ধান্ত নিয়েছে। এর প্রধান কারণ স্বাস্থ্য ঝুঁকি।--}}
{{--                        </p>--}}
{{--                        <p>--}}
{{--                            সম্প্রতি যুক্তরাষ্ট্রের ম্যাসাচুটেস মেডিকেলের একদল গবেষক--}}
{{--                            জানিয়েছেন, ই-সিগারেট মস্তিষ্কে মারাত্বক প্রভাব ফেলে। শুধু--}}
{{--                            তাই নয়, ই-সিগারেটের কার্সিনোজেনিক রাসায়নিক পদার্থ--}}
{{--                            ক্যানসারে আক্রান্ত হওয়ার অন্যতম কারণ। পাশাপাশি ই-সিগারেটের--}}
{{--                            তীব্র ধোঁয়া ও রাসায়নিকের প্রভাবে রোগ-প্রতিরোধকারী কোষ--}}
{{--                            অকার্যকর হয়ে ফুসফুসের রোগ ও শ্বাসযন্ত্রে ইনফেকশন হতে পারে।--}}
{{--                            একইসঙ্গে সাধারণ সিগারেটের মতোই ই-সিগারেটেও থাকে ক্ষতিকর ও--}}
{{--                            আসক্তি সৃষ্টিকারী রাসায়নিক &lsquo;নিকোটিন&rsquo;তাই এটাও--}}
{{--                            নেশায় রূপ নেয়।--}}
{{--                        </p>--}}
                        <div class="w3-center">
                            <ins
                                data-infostation-sid="19"
                                data-infostation-ct0="%%CLICK_URL_UNESC%%"
                                data-infostation-appid="0575abe6ecfbb507e774764a13bc147f"
                            ></ins>
                            <script
                                async
                                src="../../ep1.infostation.digital/req.js"
                                type="896ba19a27b8b667e5d08b47-text/javascript"
                            ></script>
                            <div class="w3-small">advertisement</div>
                        </div>
{{--                        <p>--}}
{{--                            অন্যদিকে &lsquo;জার্নাল অব অ্যাডোলেসেন্ট হেলথ&rsquo;-এ--}}
{{--                            ছাপা এক সমীক্ষায় বলা হয়েছে, &lsquo;তামাকযুক্ত সিগারেট--}}
{{--                            সেবনকারীদের তুলনায় ই-সিগারেট ব্যবহারকারীদের করোনা সংক্রমিত--}}
{{--                            হওয়ার আশঙ্কা বেশি এবং করোনাকালে সেটির মাত্রা বেশি হওয়ার--}}
{{--                            আশঙ্কা অনেক&rsquo;। করোনাকালীন সময়ে বিশ্ব স্বাস্থ্য সংস্থা--}}
{{--                            জানিয়েছে ধূমপায়ীরা করোনায় আক্রান্ত হওয়ার ক্ষেত্রে সাধারণ--}}
{{--                            মানুষের চেয়ে ১৪ গুণ বেশি ঝুঁকিতে রয়েছে। ফলে সহজেই অনুমান--}}
{{--                            করা যায় ই-সিগারেট ব্যবহারকারীরা কতোটা বিপদের সম্মুখীন।--}}
{{--                        </p>--}}
                        <script
                            async
                            src="../../pagead2.googlesyndication.com/pagead/js/f.txt"
                            type="896ba19a27b8b667e5d08b47-text/javascript"
                        ></script>
                        <ins
                            class="adsbygoogle"
                            style="display: block; text-align: center"
                            data-ad-layout="in-article"
                            data-ad-format="fluid"
                            data-ad-client="ca-pub-7602943490381613"
                            data-ad-slot="9070855481"
                        ></ins>
                        <script type="896ba19a27b8b667e5d08b47-text/javascript">
                      (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                        {!! $details->content !!}

                    </div>
                    <div class="w3-row w3-margin-bottom">
                        <div class="w3-cell">
                            <div
                                class="w3-bar-item sharethis-inline-share-buttons"
                            ></div>
                        </div>
                    </div>
                    <div class="w3-row w3-margin-bottom">
                        <div class="w3-center w3-margin-bottom">
                            <div
                                id="div-gpt-ad-1647934883542-0"
                                style="min-width: 300px; min-height: 60px"
                            >
                                <script type="896ba19a27b8b667e5d08b47-text/javascript">
                          googletag.cmd.push(function() { googletag.display('div-gpt-ad-1647934883542-0'); });
                        </script>
                            </div>
                            <div class="w3-small">advertisement</div>
                        </div>
                    </div>
                    <div class="w3-row w3-margin-bottom">
                        <div
                            class="fb-comments"
                            data-href="https://www.dainikamadershomoy.com/post/343657"
                            data-width="100%"
                            data-numposts="5"
                        ></div>
                    </div>
{{--                    <div class="w3-row w3-margin-bottom">--}}
{{--                        <h4 class="categoryBorder">এ বিভাগের আরও খবর</h4>--}}
{{--                        <div class="w3-row-padding w3-stretch">--}}
{{--                            <div class="w3-col s4">--}}
{{--                                <a href="388767.html">--}}
{{--                                    <img--}}
{{--                                        class="w3-image"--}}
{{--                                        src="../files/thumbs/daily-media/2022/08/08/416x238/Dr-Protiva.png"--}}
{{--                                    />--}}
{{--                                    <h2>--}}
{{--                                        বঙ্গমাতা শেখ ফজিলাতুন নেছা মুজিব : স্বাধীন--}}
{{--                                        বাংলাদেশের মমতায় সজীব--}}
{{--                                    </h2>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="w3-col s4">--}}
{{--                                <a href="388766.html">--}}
{{--                                    <img--}}
{{--                                        class="w3-image"--}}
{{--                                        src="../files/thumbs/daily-media/2022/08/08/416x238/Dr-atiqur.png"--}}
{{--                                    />--}}
{{--                                    <h2>--}}
{{--                                        বঙ্গবন্ধুর সাফল্যের নেপথ্যে রয়েছে বঙ্গমাতার উৎসর্গিত--}}
{{--                                        মহৎ জীবনের অবদান--}}
{{--                                    </h2>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="w3-col s4">--}}
{{--                                <a href="386750.html">--}}
{{--                                    <img--}}
{{--                                        class="w3-image"--}}
{{--                                        src="../files/thumbs/daily-media/2022/07/28/416x238/Razu_movie.jpg"--}}
{{--                                    />--}}
{{--                                    <h2>--}}
{{--                                        ‘বাংলাদেশের ফিল্ম ইন্ডাস্ট্রি ধীরে ধীরে জৌলুস ফিরে--}}
{{--                                        পাচ্ছে’--}}
{{--                                    </h2>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="w3-row-padding w3-stretch">--}}
{{--                            <div class="w3-col s4">--}}
{{--                                <a href="382235.html">--}}
{{--                                    <img--}}
{{--                                        class="w3-image"--}}
{{--                                        src="../files/thumbs/daily-media/2022/07/01/416x238/Artisan.jpg"--}}
{{--                                    />--}}
{{--                                    <h2>পীরজঙ্গী মাজার হইতে গুলশান বনানী</h2>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="w3-col s4">--}}
{{--                                <a href="380848.html">--}}
{{--                                    <img--}}
{{--                                        class="w3-image"--}}
{{--                                        src="../files/thumbs/daily-media/2022/06/23/416x238/BS.png"--}}
{{--                                    />--}}
{{--                                    <h2>--}}
{{--                                        সাফল্যে নিজের অর্জনের রেকর্ড বারবার নিজেই ভেঙেছে--}}
{{--                                        আওয়ামী লীগ--}}
{{--                                    </h2>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="w3-col s4">--}}
{{--                                <a href="379867.html">--}}
{{--                                    <img--}}
{{--                                        class="w3-image"--}}
{{--                                        src="../files/thumbs/daily-media/2022/06/18/416x238/Inunnishat-.png"--}}
{{--                                    />--}}
{{--                                    <h2>ভবিষ্যতে এমন বন্যা আরও হবে</h2>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
@endsection

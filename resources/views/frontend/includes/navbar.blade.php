<div class="w3-row w3-margin-bottom">
    <div class="w3-col s12 w3-left">
        <div
            class="w3-bar w3-large"
            style="background-color: #c4161c; color: white"
            id="myNavbar"
        >
            <div class="w3-hide-small" id="mainMenu">
                <a class="w3-bar-item w3-button" href="{{route('home')}}">মূলপাতা</a>
                @foreach($newscategorys as $category)
                <a class="w3-bar-item w3-button" href="{{route('category_newses',$category->id)}}">{{$category->category_name}}</a>
                @endforeach
                <div class="w3-dropdown-hover">
                    <button class="w3-button">
                        আরও <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="w3-dropdown-content w3-bar-block w3-card-4">
                        @foreach($newscategorys1 as $category)
                            <a class="w3-bar-item w3-button" href="{{route('category_newses',$category->id)}}">{{$category->category_name}}</a>
                        @endforeach
                    </div>
                </div>
                <a
                    href="javascript:void(0)"
                    onclick="if (!window.__cfRLUnblockHandlers) return false; showHide()"
                    class="w3-bar-item w3-button w3-right"
                    data-cf-modified-9a1cfd8ac5baa49ef3e056e2-=""
                ><i class="fa fa-search"></i
                    ></a>
            </div>
            <a
                href="javascript:void(0)"
                class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium"
                onclick="if (!window.__cfRLUnblockHandlers) return false; w3_open()"
                data-cf-modified-9a1cfd8ac5baa49ef3e056e2-=""
            ><i class="fa fa-bars"></i
                ></a>
        </div>
        <div
            id="gcs"
            class="w3-hide w3-animate-right w3-border w3-border-green"
            style="border-width: 3px !important"
        >
            <div class="w3-row w3-green">
                <div class="w3-col w3-right" style="width: 45px">
                    <a
                        href="javascript:void(0)"
                        onclick="if (!window.__cfRLUnblockHandlers) return false; showHide()"
                        class="w3-button"
                        data-cf-modified-9a1cfd8ac5baa49ef3e056e2-=""
                    ><i class="fa fa-times"></i
                        ></a>
                </div>
                <div class="w3-rest">
                    <script
                        type="9a1cfd8ac5baa49ef3e056e2-text/javascript"
                    >
                            (function() {	var cx = '007179477255932512336:pohrkp4x6zo';	var gcse = document.createElement('script');	gcse.type = 'text/javascript';	gcse.async = true;	gcse.src = '../cse.google.com/cse07b6.html?cx=' + cx;	var s = document.getElementsByTagName('script')[0];	s.parentNode.insertBefore(gcse, s);	})();
                          </script>
                    <gcse:search></gcse:search>
                </div>
            </div>
        </div>
    </div>
</div>

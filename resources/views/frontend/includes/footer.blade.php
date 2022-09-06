<div class="footer  w3-content" style="width: 90%; max-width: 1200px">
    <div class="w3-row w5-margin-bottom ">
        <div class="w3-col s8">
            <div class="w3-row">
                ভারপ্রাপ্ত সম্পাদক :<strong>{{$footer->sompadok_name}}</strong>
                প্রকাশক :<strong>{{$footer->prokasok_name}} </strong><br />
                {!! $footer->content !!}
{{--                <a--}}
{{--                    href="cdn-cgi/l/email-protection.html"--}}
{{--                    class="__cf_email__"--}}
{{--                    data-cfemail="a6c8c3d1d5e6c2c7cfc8cfcdc7cbc7c2c3d4d5cec9cbc9df88c5c9cb"--}}
{{--                >[email&#160;protected]</a--}}
{{--                >,--}}
{{--                <a--}}
{{--                    href="cdn-cgi/l/email-protection.html"--}}
{{--                    class="__cf_email__"--}}
{{--                    data-cfemail="d6b3b2bfa2b9a496b2b7bfb8bfbdb7bbb7b2b3a4a5beb9bbb9aff8b5b9bb"--}}
{{--                >[email&#160;protected]</a--}}
{{--                >--}}
            </div>
        </div>
        <div class="w3-col s4">
            <div class="w3-row">
                <a href="#">
                    <img
                        src="{{asset($footer->footer_image)}}"
                        style="width: 230px"
                    />
                </a>
                <p style="margin-top: 5px">
                    {{$footer->image_title}}
                </p>
            </div>
        </div>
    </div>
</div>

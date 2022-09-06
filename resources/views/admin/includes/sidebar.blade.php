<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Dashboard</li>


                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bx-home-circle"></i><span class="badge badge-pill badge-info float-right">03</span>
                        <span>Category</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">

                        <li><a href="{{route('add_category')}}">Create Category</a></li>
                        <li><a href="{{route('manage_category')}}">Manage Category</a></li>

                    </ul>
                </li>

{{--                <li>--}}
{{--                    <a href="javascript: void(0);" class="has-arrow waves-effect">--}}
{{--                        <i class="bx bx-layout"></i>--}}
{{--                        <span>Sub-Category</span>--}}
{{--                    </a>--}}
{{--                    <ul class="sub-menu" aria-expanded="false">--}}
{{--                        <li><a href="{{route('add_sub_category')}}">Create Sub Category</a></li>--}}
{{--                        <li><a href="{{route('manage_sub_category')}}">Manage Sub Category</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Nesw</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('add_news')}}">Create News</a></li>
                        <li><a href="{{route('manage_news')}}">Manage News</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Image Url</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('add_imageurl')}}">Create Url</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Setting</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('add_logo')}}">Logo</a></li>
                        <li><a href="{{route('manage_logo')}}">Manage logo</a></li>
                        <li><a href="{{route('add_footer')}}">Footer</a></li>
                        <li><a href="{{route('manage_footer')}}">Manage footer</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>

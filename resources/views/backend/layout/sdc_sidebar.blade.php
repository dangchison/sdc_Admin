<div class="left-side sticky-left-side">

    <!--logo and iconic logo start-->
    <div class="logo">
        <a href={{ URL::route('B.login') }} ><img src={{ asset("images/logo.png") }} alt=""></a>
    </div>

    <div class="logo-icon text-center">
        <a href={{ URL::route('B.login') }} ><img src={{ asset("images/logo_icon.png") }} alt=""></a>
    </div>
    <!--logo and iconic logo end-->

    <div class="left-side-inner">

        <!-- visible to small devices only -->
        <div class="visible-xs hidden-sm hidden-md hidden-lg">
            <div class="media logged-user">
                <img alt="avatar" src={{ asset( Auth::user()->avatar_small ) }} class="media-object">
                <div class="media-body">
                    <h4><a href={{ URL::route("B.user.profile", Auth::user()->user_slug ) }}  >{{ Auth::user()->display_name }}</a></h4>
                    <span>"Hello There..."</span>
                </div>
            </div>

            <h5 class="left-nav-title">Account Information</h5>
            <ul class="nav nav-pills nav-stacked custom-nav">
              <li><a href={{ URL::route("B.user.profile", Auth::user()->user_slug ) }} ><i class="fa fa-user"></i> <span>Profile</span></a></li>
              <li><a href={{ URL::route("B.post.logout") }}><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
            </ul>
        </div>

        <!--sidebar nav start-->
        <ul class="nav nav-pills nav-stacked custom-nav">

            <li class={{ Helper::active("admin/dashboard") }}>
                <a href={{ URL::route("B.dashboard") }}>
                    <i class="fa fa-home"></i> <span>Dashboard</span>
                </a>
            </li>
            
            @if ( Auth::user()->sdc_role_id == 1 )
            <li class="menu-list {{ Helper::active('admin/user') }}">
                <a href=""><i class="fa fa-users"></i> <span>Users</span></a>
                <ul class="sub-menu-list">
                    <li class={{ Helper::active("admin/user/list") }}>
                        <a href={{ URL::route("B.user.list") }}> List</a>
                    </li>
                    <li class={{ Helper::active("admin/user/add") }}>
                        <a href={{ URL::route("B.user.get.add") }} > Add</a>
                    </li>
                </ul>
            </li>
            @endif

            <li class="menu-list {{ Helper::active('admin/post') }}">
                <a href=""><i class="fa fa-book"></i> <span>Post</span></a>
                <ul class="sub-menu-list">
                    <li class={{ Helper::active("admin/post/list") }}>
                        <a href={{ URL::route("B.post.list") }} > List</a>
                    </li>
                    <li class={{ Helper::active("admin/post/add") }}>
                        <a href="" > Add</a>
                    </li>
                </ul>
            </li>

            <li class={{ Helper::active("admin/media") }}>
                <a href={{ URL::route("B.media") }}>
                    <i class="fa fa-picture-o"></i> <span>Media Gallery</span>
                </a>
            </li>           

            {{-- <li class="menu-list"><a href=""><i class="fa fa-cogs"></i> <span>Components</span></a>
                <ul class="sub-menu-list">
                    <li><a href="grids.html"> Grids</a></li>
                    <li><a href="gallery.html"> Media Gallery</a></li>
                    <li><a href="calendar.html"> Calendar</a></li>
                    <li><a href="tree_view.html"> Tree View</a></li>
                    <li><a href="nestable.html"> Nestable</a></li>

                </ul>
            </li>

            <li><a href="fontawesome.html"><i class="fa fa-bullhorn"></i> <span>Fontawesome</span></a></li>

            <li class="menu-list"><a href=""><i class="fa fa-envelope"></i> <span>Mail</span></a>
                <ul class="sub-menu-list">
                    <li><a href="mail.html"> Inbox</a></li>
                    <li><a href="mail_compose.html"> Compose Mail</a></li>
                    <li><a href="mail_view.html"> View Mail</a></li>
                </ul>
            </li>

            <li class="menu-list"><a href=""><i class="fa fa-tasks"></i> <span>Forms</span></a>
                <ul class="sub-menu-list">
                    <li><a href="form_layouts.html"> Form Layouts</a></li>
                    <li><a href="form_advanced_components.html"> Advanced Components</a></li>
                    <li><a href="form_wizard.html"> Form Wizards</a></li>
                    <li><a href="form_validation.html"> Form Validation</a></li>
                    <li><a href="editors.html"> Editors</a></li>
                    <li><a href="inline_editors.html"> Inline Editors</a></li>
                    <li><a href="pickers.html"> Pickers</a></li>
                    <li><a href="dropzone.html"> Dropzone</a></li>
                </ul>
            </li>
            <li class="menu-list"><a href=""><i class="fa fa-bar-chart-o"></i> <span>Charts</span></a>
                <ul class="sub-menu-list">
                    <li><a href="flot_chart.html"> Flot Charts</a></li>
                    <li><a href="morris.html"> Morris Charts</a></li>
                    <li><a href="chartjs.html"> Chartjs</a></li>
                    <li><a href="c3chart.html"> C3 Charts</a></li>
                </ul>
            </li>
            <li class="menu-list"><a href="#"><i class="fa fa-th-list"></i> <span>Data Tables</span></a>
                <ul class="sub-menu-list">
                    <li><a href="basic_table.html"> Basic Table</a></li>
                    <li><a href="dynamic_table.html"> Advanced Table</a></li>
                    <li><a href="responsive_table.html"> Responsive Table</a></li>
                    <li><a href="editable_table.html"> Edit Table</a></li>
                </ul>
            </li>

            <li class="menu-list"><a href="#"><i class="fa fa-map-marker"></i> <span>Maps</span></a>
                <ul class="sub-menu-list">
                    <li><a href="google_map.html"> Google Map</a></li>
                    <li><a href="vector_map.html"> Vector Map</a></li>
                </ul>
            </li>
            <li class="menu-list"><a href=""><i class="fa fa-file-text"></i> <span>Extra Pages</span></a>
                <ul class="sub-menu-list">
                    <li><a href="profile.html"> Profile</a></li>
                    <li><a href="invoice.html"> Invoice</a></li>
                    <li><a href="pricing_table.html"> Pricing Table</a></li>
                    <li><a href="timeline.html"> Timeline</a></li>
                    <li><a href="blog_list.html"> Blog List</a></li>
                    <li><a href="blog_details.html"> Blog Details</a></li>
                    <li><a href="directory.html"> Directory </a></li>
                    <li><a href="chat.html"> Chat </a></li>
                    <li><a href="404.html"> 404 Error</a></li>
                    <li><a href="500.html"> 500 Error</a></li>
                    <li><a href="registration.html"> Registration Page</a></li>
                    <li><a href="lock_screen.html"> Lockscreen </a></li>
                </ul>
            </li>
            <li><a href="login.html"><i class="fa fa-sign-in"></i> <span>Login Page</span></a></li> --}}

        </ul>
        <!--sidebar nav end-->

    </div>
</div>
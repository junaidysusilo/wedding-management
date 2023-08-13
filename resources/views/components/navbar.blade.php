<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
<!-- begin:: Header -->
<div id="kt_header" class="kt-header kt-grid kt-grid--ver  kt-header--fixed ">

    <!-- begin: Header Menu -->
    <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
    <div class="kt-header-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_header_menu_wrapper">
        <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout- ">
            <ul class="kt-menu__nav ">
                <li class="kt-menu__item  kt-menu__item--active " aria-haspopup="true"><a href="/" class="kt-menu__link "><span class="kt-menu__link-text">Dashboard</span></a></li>
                </li>
            </ul>
        </div>
    </div>

    <!-- end: Header Menu -->

    <!-- begin:: Header Topbar -->
    <div class="kt-header__topbar">

        <!--begin: Search -->
        <div class="kt-header__topbar-item kt-header__topbar-item--search">
            <div class="kt-header__topbar-wrapper">
                <div class="kt-quick-search kt-quick-search--inline kt-quick-search--result-compact" id="kt_quick_search_inline">
                    <form method="get" class="kt-quick-search__form">
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text"><i class="flaticon2-search-1"></i></span></div>
                            <input type="text" class="form-control kt-quick-search__input" placeholder="Search...">
                            <div class="input-group-append"><span class="input-group-text"><i class="la la-close kt-quick-search__close" style="display: none;"></i></span></div>
                        </div>
                    </form>
                    <div id="kt_quick_search_toggle" data-toggle="dropdown" data-offset="0px,10px"></div>
                    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-lg">
                        <div class="kt-quick-search__wrapper kt-scroll" data-scroll="true" data-height="300" data-mobile-height="200">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end: Search -->

        <!--begin: User bar -->
        <div class="kt-header__topbar-item kt-header__topbar-item--user">
            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
                <span class="kt-hidden kt-header__topbar-welcome">Hi,</span>
                <span class="kt-hidden kt-header__topbar-username">Nick</span>
                <img class="kt-hidden" alt="Pic" src="{{ asset('vendor') }}/media/users/300_21.jpg"/>
                <span class="kt-header__topbar-icon"><i class="flaticon2-user-outline-symbol"></i></span>
            </div>
            <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">

                <!--begin: Head -->
                <div class="kt-user-card kt-user-card--skin-light kt-notification-item-padding-x">
                    <div class="kt-user-card__avatar">
                        <img class="kt-hidden-" alt="Pic" src="{{ asset('vendor') }}/media/users/300_25.jpg" />3
                        <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                        <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold kt-hidden"></span>
                    </div>
                    <div class="kt-user-card__name">
                        Renggani Group
                    </div>
                    <div class="kt-user-card__badge">
                        <span class="btn btn-label-primary btn-sm btn-bold btn-font-md">23 messages</span>
                    </div>
                </div>
                <!--end: Head -->

                <!--begin: Navigation -->
                <div class="kt-notification">
                    <div class="kt-notification__custom kt-space-between">
                        <a href="/login" target="_blank" class="btn btn-label btn-label-brand btn-sm btn-bold">Login</a>
                        <a href="custom/user/login-v2.html" target="_blank" class="btn btn-label btn-label-brand btn-sm btn-bold">Sign Out</a>
                    </div>
                </div>
                <!--end: Navigation -->
            </div>
        </div>
        <!--end: User bar -->
        
    </div>
    <!-- end:: Header Topbar -->
</div>
<!-- end:: Header -->
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
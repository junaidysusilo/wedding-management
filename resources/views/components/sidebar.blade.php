<!-- Logo -->
<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
	<div class="kt-header-mobile__logo">
		<a href="index.html">
			<img alt="Logo" src="{{ asset('vendor') }}/media/logos/logo-6.png" />
		</a>
	</div>
	<div class="kt-header-mobile__toolbar">
		<button class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left" id="kt_aside_mobile_toggler"><span></span></button>
		<button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
		<button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
	</div>
</div>
<!-- end:: Logo -->

<div class="kt-grid kt-grid--hor kt-grid--root">
<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
	<div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">
		<!-- begin:: Brand -->
		<div class="kt-aside__brand kt-grid__item " id="kt_aside_brand">
			<div class="kt-aside__brand-logo">
				<a href="index.html">
				<img alt="Logo" src="{{ asset('vendor') }}/media/logos/logo-7.png" />
				</a>
			</div>
		</div>
		<!-- end:: Brand -->

		<!-- begin:: Aside Menu -->
		<div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
			<div id="kt3_aside_menu" class="kt-aside-menu  kt-aside-menu--dropdown" data-ktmenu-vertical="1" data-ktmenu-dropdown="1" data-ktmenu-scroll="0">
				<ul class="kt-menu__nav">
					<li class="nav-item mb-3" data-toggle="tooltip" data-placement="right" data-container="body">
					<li class="kt-menu__item kt-menu__item--submenu
					@if(Route::current()->action['as']=='rgpanel') kt-menu__item--here @endif">
						<a href="{{ route('rgpanel') }}" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon-home-2"></i>
					</li>
					<li class="kt-menu__item  kt-menu__item--submenu mb-5 @if(Route::current()->action['as']=='users.index') kt-menu__item--here @endif">
						<a href="{{ route('users.index') }}" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-group"></i></a>
					</li>
					<li class="kt-menu__item  kt-menu__item--submenu mb-4 @if(Route::current()->action['as']=='categories.index') kt-menu__item--here @endif">
						<a href="{{ route('categories.index') }}" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon-squares-4"></i></a>
					</li>
					<li class="kt-menu__item  kt-menu__item--submenu @if(Route::current()->action['as']=='tenants.index') kt-menu__item--here @endif">
						<a href="{{ route('tenants.index') }}" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon-users"></i></a>
					</li>
				</ul>
			</div>
		</div>
		<!-- end:: Aside Menu -->
	</div>
	<div class="kt-aside-menu-overlay"></div>
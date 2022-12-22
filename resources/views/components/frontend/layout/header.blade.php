<header id="site-header" class="site-header header-transparent">
    <!-- Main Header start -->
    <div class="octf-main-header is-fixed">
        <div class="octf-area-wrap">
            <div class="container-fluid octf-mainbar-container">
                <div class="octf-mainbar">
                    <div class="octf-mainbar-row octf-row">
                        <div class="octf-col logo-col no-padding">
                            <div id="site-logo" class="site-logo">
                                <a href="{{ route('home') }}">
                                    <img src="{{ asset("assets/frontend/images/logo.png") }}" alt="Agsan Group"
                                         class="">
                                </a>
                            </div>
                        </div>
                        <div class="octf-col menu-col no-padding">
                            <nav id="site-navigation" class="main-navigation">
                                <ul class="menu">
                                    <li class="current-menu-item current-menu-ancestor">
                                        <a href="{{ route('home') }}">{{ __('main.Home') }}</a>
                                    </li>

                                    <li><a href="{{ route('about-us') }}">{{ __('main.About Us') }}</a></li>

                                    <li><a href="{{ route('our-services') }}">{{ __('main.Our Services') }}</a></li>

                                    <li><a href="{{ route('our-projects') }}">{{ __('main.Gallery') }}</a></li>

                                    <li><a href="{{ route('home') }}#brances">{{ __('main.Branches') }}</a></li>

                                    <li><a href="{{ route('blogs') }}">{{ __('main.Blog') }}</a></li>

                                    <li><a href="{{ route('contact') }}">{{ __('main.Contacts') }}</a></li>

{{--                                    <li class="menu-item-has-children lang-item"><a--}}
{{--                                            href="#">{{ app()->getLocale() == 'ar' ? __('main.Arabic') : __('main.English') }}</a>--}}
{{--                                        <ul class="sub-menu">--}}
{{--                                            <li class="{{ app()->getLocale() == 'en' ? 'current-menu-item' : '' }}"><a--}}
{{--                                                    href="{{ route('switch_lang',['local'=>'en']) }}">{{ __('main.English') }}</a>--}}
{{--                                            </li>--}}
{{--                                            <li class="{{ app()->getLocale() == 'ar' ? 'current-menu-item' : '' }}">--}}
{{--                                                <a href="{{ route('switch_lang',['local'=>'ar']) }}">{{ __('main.Arabic') }}</a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
                                </ul>
                            </nav>
                        </div>
                        <div class="octf-col lang-col logo-col no-padding">
                            <nav class="main-navigation">
                                <ul class="menu">
                                    <li class="menu-item-has-children lang-item"><a href="#">{{ app()->getLocale() == 'ar' ? __('main.Arabic') : __('main.English') }}</a>
                                        <ul class="sub-menu lang-sub">
                                            <li class="{{ app()->getLocale() == 'en' ? 'current-menu-item' : '' }}"><a href="{{ route('switch_lang',['local'=>'en']) }}">{{ __('main.English') }}</a></li>
                                            <li class="{{ app()->getLocale() == 'ar' ? 'current-menu-item' : '' }}"><a href="{{ route('switch_lang',['local'=>'ar']) }}">{{ __('main.Arabic') }}</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
{{--                        <div class="octf-col cta-col no-padding">--}}
{{--                                <div class="octf-btn-cta">--}}
{{--                                    <div class="octf-cart octf-cta-header">--}}
{{--                                        <a href="#"> <i class="ot-globe"></i> {{ app()->getLocale() == 'ar' ? __('main.Arabic') : __('main.English') }}</a>--}}
{{--                                        <div class="site-header-cart">--}}
{{--                                            <ul class="sub-menu">--}}
{{--                                                <li class="{{ app()->getLocale() == 'en' ? 'current-menu-item' : '' }}"><a--}}
{{--                                                        href="{{ route('switch_lang',['local'=>'en']) }}">{{ __('main.English') }}</a>--}}
{{--                                                </li>--}}
{{--                                                <li class="{{ app()->getLocale() == 'ar' ? 'current-menu-item' : '' }}">--}}
{{--                                                    <a href="{{ route('switch_lang',['local'=>'ar']) }}">{{ __('main.Arabic') }}</a>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header_mobile">
        <div class="container-fluid">
            <div class="octf-mainbar-row octf-row">
                <div class="octf-col">
                    <div class="mlogo_wrapper clearfix">
                        <div class="mobile_logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset("assets/frontend/images/logo.png") }}" alt="Agsan Group">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="octf-col justify-content-end">
                    <div class="octf-search octf-cta-header">
                        <!-- Form Search on Header -->
                        <div class="h-search-form-field collapse">
                            <div class="h-search-form-inner">
                                <form role="search" method="get" class="search-form">
                                    <input type="search" class="search-field" placeholder="SEARCH..." value="" name="s">
                                    <button type="submit" class="search-submit"><i class="ot-flaticon-search"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="octf-menu-mobile octf-cta-header">
                        <div id="mmenu-toggle" class="mmenu-toggle">
                            <button><i class="ot-flaticon-menu"></i></button>
                        </div>
                        <div class="site-overlay mmenu-overlay"></div>
                        <div id="mmenu-wrapper" class="mmenu-wrapper on-right">
                            <div class="mmenu-inner">
                                <a class="mmenu-close" href="#"><i class="ot-flaticon-right-arrow"></i></a>
                                <div class="mobile-nav">
                                    <ul id="menu-main-menu" class="mobile_mainmenu none-style">
                                        <li class="current-menu-item current-menu-ancestor">
                                            <a href="{{ route('home') }}">{{ __('main.Home') }}</a>
                                        </li>

                                        <li><a href="{{ route('about-us') }}">{{ __('main.About Us') }}</a></li>

                                        <li><a href="{{ route('our-services') }}">{{ __('main.Our Services') }}</a></li>

                                        <li><a href="{{ route('our-projects') }}">{{ __('main.Portfolio') }}</a></li>

                                        <li><a href="{{ route('home') }}#brances">{{ __('main.Branches') }}</a></li>

                                        <li><a href="{{ route('blogs') }}">{{ __('main.Blog') }}</a></li>

                                        <li><a href="{{ route('contact') }}">{{ __('main.Contacts') }}</a></li>

                                        <li class="menu-item-has-children"><a href="#">{{ __('main.English') }}</a>
                                            <ul class="sub-menu">
                                                <li class="current-menu-item"><a href="#">{{ __('main.English') }}</a>
                                                </li>
                                                <li><a href="#">{{ __('main.Arabic') }}</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

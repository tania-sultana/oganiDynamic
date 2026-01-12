<!--Page Header Start-->
<section class="page-header">
    <div class="page-header__bg"
        style="background-image: url({{ asset('assets/images/backgrounds/page-header-bg.jpg') }});">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h3>{{ $title }}</h3>
            <div class="thm-breadcrumb__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><span class="icon-arrow-angle-pointing-to-right"></span></li>
                    <li>{{ $title }}</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Page Header End-->

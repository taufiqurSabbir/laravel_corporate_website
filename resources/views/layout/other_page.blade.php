@extends('layout.UserMaster')

@section('other_page_title')
    <div id="banner-area" class="banner-area" style="background-image:url(@yield('banner_image')">
        <div class="banner-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-heading">
                            <h1 class="banner-title">@yield('page_title')</h1>
                        </div>
                    </div><!-- Col end -->
                </div><!-- Row end -->
            </div><!-- Container end -->
        </div><!-- Banner text end -->
    </div><!-- Banner area end -->

    @endsection


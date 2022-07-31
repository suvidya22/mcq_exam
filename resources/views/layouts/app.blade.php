<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
</head>

<body class="page-header-fixed">

    <div class="page-header navbar navbar-fixed-top">
        @include('partials.header')
    </div>

    <div class="clearfix"></div>

    <div class="page-container">
        <div class="page-sidebar-wrapper">
            @include('partials.sidebar')
        </div>

        <div class="page-content-wrapper">
            <div class="page-content">

                @if (isset($siteTitle))
                    <h3 class="page-title">

                    </h3>
                @endif

                <div class="row">
                    <div class="col-md-12">

                        @yield('content')

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="scroll-to-top" style="display: none;">
        <i class="fa fa-arrow-up"></i>
    </div>

    @include('partials.javascripts')
</body>

</html>

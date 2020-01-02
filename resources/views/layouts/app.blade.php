<!DOCTYPE html>
<html dir="ltr" lang="fr">
    @include('layouts.head')

    <style>
    .marker {
        background-color: #1f2f79;
        background-size: cover;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        cursor: pointer;
        border: 2px solid #00acee;
    }
    .marker-velox {
        background-color: #8dd821;
        background-size: cover;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        cursor: pointer;
        border: 2px solid #111114;
    }
    .mapboxgl-popup {
    border-radius: 30px !important;
    }

    .mapboxgl-popup-content {
    text-align: center;
    width: 480px;
    border-radius: 10px !important;
    -webkit-border-radius: 10px !important;
    text-align: left;
    font-size: 1.2em;
    padding: 1em 1.5em !important;
    }
</style>
  <body>
    @include('layouts.frontmenu')
    @yield('content')
    <footer id="footer">
        <div class="container">
            <section class="py-4">
                    <div class="row pt-5 py-4">
                        <img src="/img/footer_g_m.png" alt="" class="d-block d-sm-none">
                        <img src="/img/footer_g_t.png" alt="" class="d-none d-sm-block d-lg-none">
                        <img src="/img/footer_g_s.png" alt="" class="d-none d-lg-block d-xl-block">
                    </div>
            </section>
            <section class="py-4">
                <div class="row py-4">
                    @include('layouts.footer.footermenu')
                    @include('layouts.footer.pagesmenu')
                    @include('layouts.footer.socialnetworks')
                </div>
            </section>
            <section class="py-4">
                <div class="row py-4">
                    <div class="col-12">@lang('common.gitane_mention')</div>
                </div>
            </section>
            <section class="py-4">
                <div class="row py-4">
                    <div class="col-12">
                        <a href="mailto:contact@cycles-gitane.fr"><i class="fas fa-paper-plane mr-1"></i>&nbsp;@lang('common.contact_us')</a>
                         • <a href="http://www.cycleurope.fr"><i class="fas fa-bicycle mr-1"></i>&nbsp;@lang('common.cycleurope_portal')</a>
                         • <a href="http://www.tandem-cycleurope.fr"><i class="fas fa-shopping-cart mr-1"></i>&nbsp;@lang('common.tandem_cycleurope')</a></div>
                </div>
            </section>
        </div>
    </footer>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="{{ secure_asset('js/app.js') }}"></script>
</html>
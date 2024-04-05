@extends('layouts.secondary')

@section('titulo')
    404 Página No Encontrada
@endsection


@section('content')
    <main>
        <!-- error-area-start -->
        <div class="tp-error__area pt-85 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tp-error__item text-center">
                            <div class="tp-error__thumb">
                                <img src="assets/img/error/thumb-1-1.png" alt="">
                            </div>
                            <div class="tp-error__content mb-40">
                                <h6 class="tp-error__title">Oops... It looks like you ‘re <span>lost !</span></h6>
                                <span>Oops! The page you are looking for does not exist. It might have been moved or deleted.</span>
                            </div>
                            <a class="tp-btn-purple-sm" href="index.html">Back To Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- error-area-end -->
    </main>
@endsection

@section('scripts')
   <!-- JS here -->
   <script src="assets/js/jquery.js"></script>
   <script src="assets/js/waypoints.js"></script>
   <script src="assets/js/bootstrap.bundle.min.js"></script>
   <script src="assets/js/slick.js"></script>
   <script src="assets/js/magnific-popup.js"></script>
   <script src="assets/js/purecounter.js"></script>
   <script src="assets/js/wow.js"></script>
   <script src="assets/js/countdown.js"></script>
   <script src="assets/js/nice-select.js"></script>
   <script src="assets/js/swiper-bundle.js"></script>
   <script src="assets/js/isotope-pkgd.js"></script>
   <script src="assets/js/imagesloaded-pkgd.js"></script>
   <script src="assets/js/range-slider.js"></script>
   <script src="assets/js/ajax-form.js"></script>
   <script src="assets/js/main.js"></script>
@endsection

@section('styles')
@endsection
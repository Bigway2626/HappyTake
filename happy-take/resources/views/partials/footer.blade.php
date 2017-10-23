<script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery-migrate/jquery-migrate.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery.easing/js/jquery.easing.js') }}"></script>
<script src="{{ asset('assets/vendor/popper.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ asset('assets/js/hs.core.js') }}"></script>
<script  src="{{ asset('assets/vendor/custombox/custombox.min.js') }}"></script>
<script  src="{{ asset('assets/js/components/hs.modal-window.js') }}"></script>
<script src="{{ asset('assets/js/components/hs.scrollbar.js') }}"></script>
<script src="{{ asset('assets/js/helpers/hs.rating.js') }}"></script>
<script src="https://swc.cdn.skype.com/sdk/v1/sdk.min.js"></script>
<script>
$(document).on('ready', function () {
    $.HSCore.components.HSModalWindow.init('[data-modal-target]');
    $.HSCore.components.HSScrollBar.init( $('.js-scrollbar') );
    $.HSCore.helpers.HSRating.init();
    var $star_rating = $('.score-rating .fa');
    $star_rating.on('click', function() {
        $('input.score-value').val($(this).data('rating'));
    });
});
</script>
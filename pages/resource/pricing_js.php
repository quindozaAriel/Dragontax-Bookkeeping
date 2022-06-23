<!-- Tilt Js -->
<script src="../assets/build/scripts/tilt.jquery.min.js"></script>
<!-- SPLIDE js-->
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
<script>
    $(document).ready(function() {
        new Splide('#review_carousel', {
            type: 'loop',
            autoplay: true
        }).mount();
    });

    $('.js-tilt').tilt({
        glare: true,
        maxGlare: .5,
    })
</script>
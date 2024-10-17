<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

{{-- jspdf --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.13/jspdf.plugin.autotable.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>


<script>
    window.addEventListener('scroll', function() {
        const navigation = document.querySelector('.navigation');
        if (window.scrollY > 50) { 
            navigation.classList.add('scrolled');
        } else {
            navigation.classList.remove('scrolled');
        }
    });
    </script>
    

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuItems = document.querySelectorAll('.nav-menu .menu-item');
        const currentUrl = window.location.pathname;

        menuItems.forEach(item => {
            const link = item.querySelector('a').getAttribute('href');
            if (link === currentUrl) {
                item.classList.add('active');
            }
        });
    });
</script>

<script>
    AOS.init();
</script>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js">
</script>
<script>
    $(document).ready(function() {
        $('#testimonial-slider').owlCarousel({
            items: 1,
            itemsDesktop: [1000, 1],
            itemsDesktopSmall: [979, 1],
            itemsTablet: [768, 1],
            pagination: false,
            navigation: true,
            navigationText: ["", ""],
            slideSpeed: 1000,
            autoPlay: true
        });
    });
</script>

<script src="/Cube.js"></script>
<script src="credential.js"></script>

<script src="/Contact.js"></script>


{{-- SCRIPT IN INDEX --}}
<script>
    $(document).ready(function() {
        $('.customer-logos').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 4
                }
            }, {
                breakpoint: 520,
                settings: {
                    slidesToShow: 3
                }
            }]
        });
    });
</script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        var clickableDivs = document.querySelectorAll('.clickable');
        clickableDivs.forEach(function(div) {
            div.addEventListener('click', function() {
                var href = div.getAttribute('data-href');
                if (href) {
                    window.location.href = href;
                }
            });
        });
    });
</script>    
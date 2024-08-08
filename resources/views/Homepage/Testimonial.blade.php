<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonials | Infinitech Advertising Corporation | Web Development</title>

    @include('Layout/Header')
</head>

<body>
    <!-- Navigation Bar -->
    @include('Layout/Navigation')

    <main>
        <!-- Hero Section -->
        <section class="hero contact-layout">
            <div class="container contact-section">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <h1 class="tagline"><strong>Testimonials</strong></h1>
                    </div>

                    <div class="col-12 col-md-6 d-flex justify-content-start">
                        <div class="left-content">
                            <img class="pricing-svg" src="../assets/svg/testimonial.svg" alt="Testimonials">
                        </div>
                    </div>
                </div> 
            </div>
        </section>
        
        <!-- Clients Section -->
        <section class="clients py-3 py-md-5">
            <div class="container" data-aos="fade-up" data-aos-duration="1000">
                <div class="partners">
                    <span class="header d-block">Testimonials</span>
                </div>
                <div class="featured-carousel owl-carousel d-flex justify-content-center align-items-center">
                    <div class="item d-block">
                        <p class="feedback mb-xl-5">I was really impressed with the fast service! The staff handled everything efficiently and had my request taken care of in no time. It’s great to experience such prompt and effective service—thank you for making it a seamless experience!</p>
                        <h2 class="feedback-name">Giolo Evora</h2>
                        <small>Infinitech Advertising Corporation</small>
                    </div>
                    <div class="item d-block">
                        <p class="feedback mb-xl-5">Fantastic job with the system! It’s evident that a lot of thought and effort went into its design. Everything functions smoothly and efficiently, making the whole experience very satisfying. Thanks for delivering such a high-quality solution.</p>
                        <h2 class="feedback-name">Moses Alcantara</h2>
                        <small>Infinitech Advertising Corporation</small>
                    </div>
                    <div class="item d-block">
                        <p class="feedback mb-xl-5">I’m impressed with the performance so far.Excellent work on the website. It’s user-friendly, reliable, and performs exactly as promised. I’m very pleased with its effectiveness and ease of use. Great job on creating something that truly delivers. </p>
                        <h2 class="feedback-name">Justin De Castro</h2>
                        <small>Infinitech Advertising Corporation</small>
                    </div>
                    <div class="item d-block">
                        <p class="feedback mb-xl-5">Outstanding service with the domain and hosting. The setup was quick and hassle-free, and everything is running smoothly. Im impressed with the quality thanks for providing such a solid foundation for my online presence!</p>
                        <h2 class="feedback-name">Kimberly Niñeria</h2>
                        <small>Infinitech Advertising Corporation</small>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- Footer -->
    @include('Layout/Footer')

    <!-- Script -->
    @include('Layout/Script')
 
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 0,
                nav: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    600: {
                        items: 2,
                        nav: false
                    },
                    1000: {
                        items: 3,
                        nav: false
                    }
                }
            });
        });
    </script>

    <script>
        function openCity(evt, cityName) {
            var i, servicecontent, serviceTab;
            servicecontent = document.getElementsByClassName("servicecontent");
            for (i = 0; i < servicecontent.length; i++) {
                servicecontent[i].style.display = "none";
            }
            serviceTab = document.getElementsByClassName("serviceTab");
            for (i = 0; i < serviceTab.length; i++) {
                serviceTab[i].className = serviceTab[i].className.replace(" service-active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " service-active";
        }
    </script>
</body>

</html>

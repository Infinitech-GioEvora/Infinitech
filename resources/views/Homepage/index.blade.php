<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infinitech Advertising Corporation | Web Developmet</title>


    @include('Layout/Header')

</head>


<body style="position: relative">
    @include('Layout/Navigation')
    <main>
        <section class="hero section-layout ">
            <div class="container main-section">
                <div class="row d-flex align-items-center">
                    <div class="col-12 col-md-12 col-lg-6">
                        <div class="tagline">
                            <h1 class="hero-header">INFINITECH: turning ideas into infinite possibilities</h1>
                            <p class="hero-desc">At <strong>Infinitech Advertising Corporation</strong>, we create
                                captivating campaigns that leverage cutting-edge digital solutions to boost your brand's
                                online presence.</p>
                            <div class="d-flex">
                                <a class="button btn-hero" href="/about-us" style="text-decoration: none;">
                                    <span>Explore More</span>
                                    <svg width="34" height="34" viewBox="0 0 74 74" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="37" cy="37" r="35.5" stroke="white" stroke-width="3">
                                        </circle>
                                        <path
                                            d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z"
                                            fill="white"></path>
                                    </svg>
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-6">
                        <div class="left-content">
                            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img src="/assets/img/manpower.png" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="/assets/img/tracking.jpg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="/assets/img/manpower.png" class="d-block w-100" alt="...">
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="infinitech">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <img class="infinitech-img" data-aos="fade-up" data-aos-duration="1000"
                            src="../assets/img/infinitech-about-us.jpeg" alt="">
                    </div>
                    <div class="col-12 col-md-6" data-aos="fade-up" data-aos-duration="1000">
                        <h1 class="title-header mb-4">Who is Infinitech Advertising Corporation?</h1>
                        <p class="infinitech-desc mb-4">At Infinitech Advertising Company, our mission is to help
                            businesses thrive by providing top-notch, tailor-made digital solutions that boost growth,
                            streamline operations, and enhance user satisfaction.</p>
                        <p> We are committed to customer satisfaction, offering a guarantee of unique web design and
                            high-quality work. Our expertise spans Website Design and Development, Mobile App
                            Development, Ecommerce Solutions, and IT Outsourcing. Through our innovative solutions, we
                            ensure our clients achieve their goals and experience exceptional service.</p>
                        <div class="d-flex">
                            <a class="button btn-hero" href="/about-us" style="text-decoration: none;"> <span>Learn More
                                    About Us</span>
                                <svg width="34" height="34" viewBox="0 0 74 74" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="37" cy="37" r="35.5" stroke="white" stroke-width="3">
                                    </circle>
                                    <path
                                        d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z"
                                        fill="white"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="services">
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <h5 class="sub-header">What we do?</h5>
                        <h2 class="sub-heading">Driving success through innovative digital solutions!</h2>
                    </div>
                    <div class="col-4">
                        <div class="d-flex justify-content-end">
                            <a class="button btn-hero" href="/services" style="text-decoration: none;"> <span>See
                                    More</span>
                                <svg width="34" height="34" viewBox="0 0 74 74" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="37" cy="37" r="35.5" stroke="white" stroke-width="3">
                                    </circle>
                                    <path
                                        d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z"
                                        fill="white"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row" data-aos="zoom-in-up" data-aos-duration="1000">
                    <div class="col-12 col-md-3">
                        <div class="service-content text-center">
                            <img src="../assets/svg/Static assets-amico.svg" alt="">
                            <h2 class="serviceTitle">Web Design & Development</h2>
                            <p class="service-desc">Custom-built, professionally-designed websites featuring an
                                easy-to-use Content Management System (CMS).</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3" ">
                        <div class="service-content text-center">
                            <img src="../assets/svg/Website setup-cuate.svg" alt="">
                            <h2 class="serviceTitle">Web Based Application </h2>
                            <p class="service-desc">We have the capability to create personalized web applications
                                designed to enhance your organization's operational effectiveness.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="service-content text-center">
                            <img src="../assets/svg/Online Groceries-cuate.svg" alt="">
                            <h2 class="serviceTitle">Ecommerce / Online Shop </h2>
                            <p class="service-desc">Infinitech specializes in developing meticulously designed
                                e-commerce websites and online stores.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="service-content text-center">
                            <img src="../assets/svg/WebAppDev.svg" alt="">
                            <h2 class="serviceTitle">Mobile App Development</h2>
                            <p class="service-desc">We specialize in developing custom mobile applications for both
                                Android and iOS platforms, starting from inception to completion.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="our-partners">
            <div class="container">
                <div class="partners" data-aos="fade-up" data-aos-duration="1000">
                    <span class="header d-block" style="margin-bottom:30px"> Our Partners</span>
                </div>

                <div class="partners-container" >
                   
                    <div class="partners-logo" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                        <a href="https://www.facebook.com/profile.php?id=61552676815080">
                            <img src="../assets/img/ABIC-Realty.png" alt="ABIC-Realty">
                        </a>
                    </div>
                    <div class="partners-logo" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                        <a href="https://www.facebook.com/mngtechvoc.antique"><img src="../assets/img/MNG-Techvoc-INC.png" alt="MNG-Techvoc-INC"></a>
                    </div>
                    <div class="partners-logo" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                        <a href="https://www.facebook.com/bcrvtvi.edu.ph"><img src="../assets/img/bcrv-techvoc.png" alt="bcrv-techvoc"></a>
                    </div>
                    <div class="partners-logo" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                        <a href="https://www.facebook.com/profile.php?id=61552586366733"><img src="../assets/img/NRG-Info-Tech.png" alt="NRG-Info-Tech"></a>
                    </div>
                    <div class="partners-logo" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                        <a href="https://www.facebook.com/profile.php?id=100090318514723"><img src="../assets/img/abic-manpower.png" alt="abic-manpower"></a>
                    </div>
                   
                </div>

            </div>

        </section>

        <section class="clients py-3 py-md-5" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-duration="1000">
            <div class="container">
                <div class="partners">
                    <span class="header d-block">Testimonials</span>
                    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
                        rel="stylesheet"
                        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
                        crossorigin="anonymous">
                    <link rel="stylesheet"
                        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
                        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
                        crossorigin="anonymous">
                    <link rel="stylesheet"
                        href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-offset-2 col-md-8">
                            <div id="testimonial-slider" class="owl-carousel">
                                <div class="testimonial">
                                    <div class="pic">
                                        <img src="../assets/img/infinitech-sirGio.png">
                                    </div>
                                    <div class="testimonial-content">
                                        <p>I was really impressed with the fast service! The staff handled everything e
                                            fficiently and had my request taken care of in no time. It’s great to
                                            experience such prompt a
                                            nd effective service—thank you for making it a seamless experience!
                                        </p>
                                    </div>
                                    <h3 class="testimonial-title">
                                        <a href="#">Giolo Evora</a>
                                        <small>- Senior Web Developer</small>
                                    </h3>
                                </div>

                                <div class="testimonial">
                                    <div class="pic">
                                        <img src="../assets/img/infinitech-sirMoses.png">
                                    </div>
                                    <div class="testimonial-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet eum excepturi
                                            incidunt
                                            Fantastic job with the system! It’s evident that a lot of thought and effort
                                            went into its
                                            design. Everything functions smoothly and efficiently, making the whole
                                            experience very satisfying.
                                            Thanks for delivering such a high-quality solution.
                                        </p>
                                    </div>
                                    <h3 class="testimonial-title">
                                        <a href="#">Moses Alcantara</a>
                                        <small>- Senior Web Developer</small>
                                    </h3>
                                </div>

                                <div class="testimonial">
                                    <div class="pic">
                                        <img src="../assets/img/infinitech-sirJustin.png">
                                    </div>
                                    <div class="testimonial-content">
                                        <p>I’m impressed with the performance so far.Excellent work on the website.
                                            It’s user-friendly, reliable, and performs exactly as promised. I’m very
                                            pleased with its effectiveness and ease of use.
                                            Great job on creating something that truly delivers.

                                        </p>
                                    </div>
                                    <h3 class="testimonial-title">
                                        <a href="#">Justin De Castro</a>
                                        <small>- Senior Web Developer</small>
                                    </h3>
                                </div>
                                <div class="testimonial">
                                    <div class="pic">
                                        <img src="../assets/img/infinitech-msKim.png">
                                    </div>
                                    <div class="testimonial-content">
                                        <p>Outstanding service with the domain and hosting.
                                            The setup was quick and hassle-free, and everything is running smoothly. Im
                                            impressed with the quality thanks for providing such
                                            a solid foundation for my online presence!
                                        </p>
                                    </div>
                                    <h3 class="testimonial-title">
                                        <a href="#">Kimberly Niñeria</a>
                                        <small>- Junior Web Developer</small>
                                    </h3>
                                </div>
                                <div class="testimonial">
                                    <div class="pic">
                                        <img src="../assets/img/infinitech-mamAly.png">
                                    </div>
                                    <div class="testimonial-content">
                                        <p>I’m genuinely amazed by the exceptional quality of this product/service.
                                            It’s evident that a lot of thought and craftsmanship went into every detail.
                                            The performance is not just reliable but
                                            impressively outstanding, setting a new benchmark for excellence.
                                        </p>
                                    </div>
                                    <h3 class="testimonial-title">
                                        <a href="#">Allysa Perez</a>
                                        <small>- Admin Assistant</small>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        {{-- <section class="pricing-section">
            <div class="container" >
                <div class="pricing-head text-center">
                    <h1 class="header d-block" style="margin-bottom:15px">Latest News</h1>
                    <p>Stay ahead with the latest updates on exciting events. Discover what's happening next and never miss out!</p>
                </div>

                <div class="news-section mb-xl-7" style="margin-bottom:80px">
                    <div class="row no-gutters d-flex justify-content-center" >
                        <div class="col-12 col-md-3 px-0">
                            <div class="card">
                                <img src="../assets/img/opening.png" alt="Avatar" style="width:100%">
                                <div class="container">
                                    <h1 class="news-header">Infinitech Grand Opening</h1>
                                    <p class="news-desc">Infinitech is thrilled to announce the grand opening of its new headquarters on July 6, 2024. 
                                        Join us for a day of innovation and excitement as we unveil cutting-edge technology and showcase our state-of-the-art facilities.</p>
                                    <div class="read-more">
                                        <a href="https://www.facebook.com/share/ataf7HLGF5xUgnho/">Read More </a>
                                    </div>
                                    <hr>
                                    <small class="date mb-xl-5">
                                        July 6, 2024
                                        <span></span>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3 px-0 ">
                            <div class="card">
                                <img src="../assets/img/kalayaan.png" alt="Avatar" style="width:100%">
                                <div class="container">
                                    <h1 class="news-header">Kalayaan Mega Job Fair</h1>
                                    <p class="news-desc">It was wonderful to connect with so many talented individuals and share opportunities. If you missed us, don't hesitate to get in touch—we’re always looking for great talent
                                    </p>
                                    <div class="read-more">
                                        <a href="https://www.facebook.com/people/ABIC-Manpower-Service-Corp/100090318514723/">Read More </a>
                                    </div>
                                    <hr>
                                    <small class="date mb-xl-5">
                                        July 30, 2024
                                        <span></span>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3 px-0 ">
                            <div class="card">
                                <img src="../assets/img/sil.png" alt="Avatar" style="width:100%">
                                <div class="container">
                                    <h1 class="news-header">Supervised Industry Learning</h1>
                                    <p class="news-desc">We are thrilled to announce that Infinitech is now officially open for strategic partnerships in the realm of Supervised Industry Learning! As a leader in innovative tech solutions, we are eager to collaborate with forward-thinking organizations to advance the future of supervised learning.</p>
                                    <div class="read-more">
                                        <a href="https://www.facebook.com/share/p/CYD9zZzyXoB6hjVz/">Read More </a>
                                    </div>
                                    <hr>
                                    <small class="date mb-xl-5">
                                        August 07, 2024
                                        <span></span>
                                    </small>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
        </section> --}}

        <section class="work-with-us" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 right-work">
                        <div class="right-work">
                            <div class="work-header">
                                <h2 class="work-title">Let's work together</h2>
                                <p class="work-description">We have extensive experience in your market and are confident in our ability to build a lasting relationship with you.</p>
                            </div>
                            <hr>
                            <form class="contactForm">
                                <div class="form-group">
                                    <label for="name">Please tell us your name.</label>
                                    <input type="text" id="name" name="name" placeholder="Giolo Evora" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Share your email for us to reach you.</label>
                                    <input type="email" id="email" name="email" placeholder="infinitechcorp.ph@gmail.com" required>
                                </div>
                                <div class="form-group">
                                    <label for="website">Website</label>
                                    <input type="text" id="website" name="website" placeholder="https://www.infinitech.com">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Mobile Phone</label>
                                    <input type="text" id="phone" name="phone" placeholder="(+63) 9924401097">
                                </div>
                                <div class="form-group">
                                    <label for="message">Send us a message.</label>
                                    <textarea id="message" name="message" rows="5" placeholder="Say something...." required></textarea>
                                </div>
                                <button type="submit" class="button">
                                    <span>Submit</span>
                                    <svg width="34" height="34" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="37" cy="37" r=" 35.5" stroke="white"
                        stroke-width="3">
                        </circle>
                        <path
                            d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z"
                            fill="white"></path>
                        </svg>
                        </button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 maps d-flex justify-content-center align-items-center">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.686618330031!2d121.01093307590381!3d14.559904978070104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c90b830e5f29%3A0x89fe307dfecd3c0d!2sCampos%20Rueda%20Building!5e0!3m2!1sen!2sph!4v1721716690771!5m2!1sen!2sph"
                        width="700" height="850" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            </div>
        </section>

        @include('Layout.Social')
    </main>
    {{-- Testimonials --}}
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
    {{-- POP UP DISCOUNT --}}
    {{-- <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
    <div class="elfsight-app-e818f66d-4134-4d9c-a300-ccbe7922c605" data-elfsight-app-lazy></div> --}}


    <script src="/Contact.js"></script>

</body>
@include('Layout/Footer')
@include('Layout/Script')

</html>

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
    <main >
        <section class="hero section-layout ">
            <div class="container main-section">
                <div class="row d-flex align-items-center">
                    <div class="col-12 col-md-12 col-lg-6">
                        <div class="tagline">
                            <h1 class="hero-header">INFINITECH: turning ideas into infinite possibilities</h1>
                            <p class="hero-desc">At <strong>Infinitech Advertising Corporation</strong>, we create captivating campaigns that leverage cutting-edge digital solutions to boost your brand's online presence.</p>
                            <div class="d-flex">
                                <a class="button btn-hero" href="/about-us" style="text-decoration: none;"> <span>Explore More</span>
                                    <svg width="34" height="34" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="37" cy="37" r="35.5" stroke="white" stroke-width="3"></circle>
                                        <path d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z" fill="white"></path>
                                    </svg>
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-6">
                        <div class="left-content">
                            <img src="../assets/svg/hero.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="infinitech">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <img class="infinitech-img" data-aos="fade-up" data-aos-duration="1000" src="../assets/img/infinitech-about-us.jpeg" alt="">
                    </div>
                    <div class="col-12 col-md-6" data-aos="fade-up" data-aos-duration="1000">
                        <h1 class="title-header mb-4">Who is Infinitech Advertising Corporation?</h1>
                        <p class="infinitech-desc mb-4">At Infinitech Advertising Company, our mission is to help businesses thrive by providing top-notch, tailor-made digital solutions that boost growth, streamline operations, and enhance user satisfaction.</p>
                        <p> We are committed to customer satisfaction, offering a guarantee of unique web design and high-quality work. Our expertise spans Website Design and Development, Mobile App Development, Ecommerce Solutions, and IT Outsourcing. Through our innovative solutions, we ensure our clients achieve their goals and experience exceptional service.</p>
                        <div class="d-flex">
                            <a class="button btn-hero" href="/about-us" style="text-decoration: none;"> <span>Learn More About Us</span>
                                <svg width="34" height="34" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="37" cy="37" r="35.5" stroke="white" stroke-width="3"></circle>
                                    <path d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z" fill="white"></path>
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
                            <a class="button btn-hero" href="/services" style="text-decoration: none;"> <span>See More</span>
                                <svg width="34" height="34" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="37" cy="37" r="35.5" stroke="white" stroke-width="3"></circle>
                                    <path d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z" fill="white"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-3">
                        <div class="service-content text-center">
                            <img src="../assets/svg/Static assets-amico.svg" alt="">
                            <h2 class="serviceTitle">Web Design & Development</h2>
                            <p class="service-desc">Custom-built, professionally-designed websites featuring an easy-to-use Content Management System (CMS).</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="service-content text-center">
                            <img src="../assets/svg/Website setup-cuate.svg" alt="">
                            <h2 class="serviceTitle">Web Based Application  </h2>
                            <p class="service-desc">We have the capability to create personalized web applications designed to enhance your organization's operational effectiveness.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="service-content text-center">
                            <img src="../assets/svg/Online Groceries-cuate.svg" alt="">
                            <h2 class="serviceTitle">Ecommerce / Online Shop    </h2>
                            <p class="service-desc">Infinitech specializes in developing meticulously designed e-commerce websites and online stores.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="service-content text-center">
                            <img src="../assets/svg/WebAppDev.svg" alt="">
                            <h2 class="serviceTitle">Mobile App Development</h2>
                            <p class="service-desc">We specialize in developing custom mobile applications for both Android and iOS platforms, starting from inception to completion.</p>
                        </div>
                    </div>
            </div>
        </section>

        <section class="our-partners">
            <div class="container">
                <div class="partners" data-aos="fade-up" data-aos-duration="1000">
                    <span class="header d-block" style="margin-bottom:30px"> Our Partners</span>
                </div>

                <div class="partners-logo">
                    <div class="row d-flex justify-content-center no-gutters">
                        <div class="col-6 col-md-4 col-lg-2" data-aos="fade-up" data-aos-duration="1000">
                            <a href="https://www.facebook.com/profile.php?id=61552676815080"><img src="../assets/img/ABIC-Realty.png" alt="ABIC-Realty"></a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-2" data-aos="fade-up" data-aos-duration="1000">
                            <a href="https://www.facebook.com/mngtechvoc.antique"><img src="../assets/img/MNG-Techvoc-INC.png" alt="MNG-Techvoc-INC"></a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-2" data-aos="fade-up" data-aos-duration="1000">
                            <a href="https://www.facebook.com/bcrvtvi.edu.ph"><img src="../assets/img/bcrv-techvoc.png" alt="bcrv-techvoc"></a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-2" data-aos="fade-up" data-aos-duration="1000">
                            <a href="https://www.facebook.com/profile.php?id=61552586366733"><img src="../assets/img/NRG-Info-Tech.png" alt="NRG-Info-Tech"></a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-2" data-aos="fade-up" data-aos-duration="1000">
                            <a href="https://www.facebook.com/profile.php?id=100090318514723"><img src="../assets/img/abic-manpower.png" alt="abic-manpower"></a>
                        </div>

                    </div>
                </div>
            </div>

        </section>

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

        <section class="latest-news">
            <div class="container">
                <div class="news" data-aos="fade-up" data-aos-duration="1000">
                    <span class="header d-block" style="margin-bottom:30px"> Latest News</span>
                </div>

                <div class="news-section" data-aos="fade-up" data-aos-duration="1000">
                    <div class="row no-gutters">
                        <div class="col-12 col-md-3 px-0">
                            <div class="card">
                                <img src="../assets/img/infinitech-signing.jpg" alt="Avatar" style="width:100%">
                                <div class="container">
                                    <h1 class="news-header">Infinitech Grand Opening</h1>
                                    <p class="news-desc">Infinitech is thrilled to announce the grand opening of its new headquarters on July 6, 2024. Join us for a day of innovation and excitement as we unveil cutting-edge technology and showcase our state-of-the-art facilities.</p>
                                    <div class="read-more">
                                        <a href="#">Read More </a>
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
                                <img src="../assets/img/infinitech-signing.jpg" alt="Avatar" style="width:100%">
                                <div class="container">
                                    <h1 class="news-header">Infinitech Grand Opening</h1>
                                    <p class="news-desc">Infinitech is thrilled to announce the grand opening of its new headquarters on July 6, 2024. Join us for a day of innovation and excitement as we unveil cutting-edge technology and showcase our state-of-the-art facilities.</p>
                                    <div class="read-more">
                                        <a href="#">Read More </a>
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
                                <img src="../assets/img/infinitech-signing.jpg" alt="Avatar" style="width:100%">
                                <div class="container">
                                    <h1 class="news-header">Infinitech Grand Opening</h1>
                                    <p class="news-desc">Infinitech is thrilled to announce the grand opening of its new headquarters on July 6, 2024. Join us for a day of innovation and excitement as we unveil cutting-edge technology and showcase our state-of-the-art facilities.</p>
                                    <div class="read-more">
                                        <a href="#">Read More </a>
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
                                <img src="../assets/img/infinitech-signing.jpg" alt="Avatar" style="width:100%">
                                <div class="container">
                                    <h1 class="news-header">Infinitech Grand Opening</h1>
                                    <p class="news-desc">Infinitech is thrilled to announce the grand opening of its new headquarters on July 6, 2024. Join us for a day of innovation and excitement as we unveil cutting-edge technology and showcase our state-of-the-art facilities.</p>
                                    <div class="read-more">
                                        <a href="#">Read More </a>
                                    </div>
                                    <hr>
                                    <small class="date mb-xl-5">
                                        July 6, 2024
                                        <span></span>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="work-with-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 left-work d-flex justify-content-center align-items-center">
                        <img data-aos="fade-right" data-aos-duration="1000" src="../assets/svg/Collaboration-cuate.svg" alt="">
                    </div>

                    <div class="col-md-6 right-work">
                        <div class="right-work" data-aos="fade-up" data-aos-duration="1000">
                            <div class="work-header">
                                <h2 class="work-title">Let's work together</h2>
                                <p class="work-description">We have extensive experience in your market and are confident in our ability to build a lasting relationship with you.</p>
                            </div>
                            <hr>
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="">Please tell us your name.</label>
                                    <input type="text" placeholder="Giolo Evora">
                                </div>
                                <div class="form-group">
                                    <label for="">Share you email for us to reach you.</label>
                                    <input type="email" placeholder="giolo.evora@gmail.com">
                                </div>
                                <div class="form-group">
                                    <label for="">Website</label>
                                    <input type="text" placeholder="httpps://www.infinitech.com">
                                </div>
                                <div class="form-group">
                                    <label for="">Mobile Phone</label>
                                    <input type="text" placeholder="(+63) 9924401097">
                                </div>
                                <div class="form-group">
                                    <label for="">Send us message.</label>
                                    <textarea name="" id="" rows="5" placeholder="Say something...."></textarea>
                                </div>
                                <div class="d-flex">
                                    <a class="button btn-hero" href="/about-us" style="text-decoration: none;"> <span>SUBMIT</span>
                                        <svg width="34" height="34" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="37" cy="37" r="35.5" stroke="white" stroke-width="3"></circle>
                                            <path d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z" fill="white"></path>
                                        </svg>
                                    </a>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            
        </section>

        <div class="floating-socmed">
            <a href="https://www.facebook.com/profile.php?id=61562146592005" class="fa fa-facebook"></a>
            <a href="mailto:infinitechcorp.ph@gmail.com" class="fa fa-envelope" style="font-size:30px; background: #fbad26; color: rgb(22, 22, 22)"></a>
            <a href="tel:+639622530149" class="fa fa-telegram"></a>
            <a href="https://www.facebook.com/profile.php?id=61562146592005" class="fa fa-instagram"></a>
            <a href="tel:0270016157" class="fa fa-phone"></a>
        </div>

    </main>

    


    @include('Layout/Footer')
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
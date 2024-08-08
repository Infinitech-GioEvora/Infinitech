<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infinitech Advertising Corporation | Web Developmet</title>

    @include('Layout/Header')

</head>


<body>
    @include('Layout/Navigation')
    <main>
        <section class="hero section-layout ">
            <div class="container main-section">
                <div class="row pt-xl-5 d-flex align-items-center">
                    <div class="col-12 col-md-12 col-lg-6       ">
                        <div class="tagline">
                            <h1 class="hero-header">Connect and thrive with cutting-edge digital solutions</h1>
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
                            <a class="button btn-hero" href="/about-us" style="text-decoration: none;"> <span>See More</span>
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
                            <p class="service-desc">We develop web-based software solutions designed to enhance your company's efficiency.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="service-content text-center">
                            <img src="../assets/svg/Online Groceries-cuate.svg" alt="">
                            <h2 class="serviceTitle">Ecommerce / Online Shop    </h2>
                            <p class="service-desc">Infinitech builds professionally-designed Ecommerce websites and online shops.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="service-content text-center">
                            <img src="../assets/svg/Static assets-amico.svg" alt="">
                            <h2 class="serviceTitle">Web Design & Development</h2>
                            <p class="service-desc">Custom-built, professionally-designed websites featuring an easy-to-use Content Management System (CMS).</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- <section class="sec-div">
            <div class="container">
                <div class="our-services">
                    <div class="row no-gutters">
                        <div class="col-12 col-md-5 col-lg-5 px-0">
                            <div class="service-header" data-aos="fade-up" data-aos-duration="1000">
                                <h5>What we do?</h5>
                                <h1>Driving success through strategic paid search advertising!</h1>
                                <div class="tab">
                                    <hr>
                                    <a class="serviceTab service-active" onclick="openCity(event, 'London')">Website Development <span><i class="fa-solid fa-greater-than"></i></span></a>

                                    <hr>
                                    <a class="serviceTab" onclick="openCity(event, 'Paris')">System Development <span><i class="fa-solid fa-greater-than"></i></span></a>
                                    <hr>
                                    <a class="serviceTab" onclick="openCity(event, 'Tokyo')">Advertising <span><i class="fa-solid fa-greater-than"></i></span></a>
                                    <hr>
                                    <div class="d-flex">
                                        <a class="button btn-hero" href="/about-us" style="text-decoration: none;"> <span>GET A PROPOSAL</span>
                                            <svg width="34" height="34" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="37" cy="37" r="35.5" stroke="white" stroke-width="3"></circle>
                                                <path d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z" fill="white"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-7 col-lg-7 px-0">
                            <div class="right-content-service" data-aos="fade-up" data-aos-duration="1000">
                                <p class="mb-xl-5">Transforming your brand's online presence and generating meaningful results is our top priority at Infinitech Advertising Corporation.</p>
                                <a class="about-link">KNOW MORE ABOUT US <span><i class="fa-solid fa-greater-than"></i></span></a>

                                <div id="London" class="servicecontent" style="display: block;">
                                    <div class="service-content text-center">
                                        <div class="our-service-icon">
                                            <img src="../assets/svg/UI-UX design-amico.svg" alt="">
                                        </div>
                                        <h1 class="service-title">Web Development</h1>

                                        <p class="service-description">
                                            Brilliance has no limits. Let your imagination run wild! We can help take your concept from thought to reality.
                                        </p>
                                    </div>
                                </div>

                                <div id="Paris" class="servicecontent">
                                    <div class="service-content text-center">
                                        <div class="our-service-icon">
                                            <img src="../assets/svg/Software engineer-amico.svg" alt="">
                                        </div>
                                        <h1 class="service-title">System Development</h1>

                                        <p class="service-description">
                                            Brilliance has no limits. Let your imagination run wild! We can help take your concept from thought to reality.
                                        </p>
                                    </div>
                                </div>

                                <div id="Tokyo" class="servicecontent text-center">
                                    <div class="service-content">
                                        <div class="our-service-icon">
                                            <img src="../assets/svg/Mobile Marketing-cuate.svg" alt="">
                                        </div>
                                        <h1 class="service-title">Social Media Marketing</h1>

                                        <p class="service-description">
                                            Brilliance has no limits. Let your imagination run wild! We can help take your concept from thought to reality.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section> -->

        <!-- <section class="project ">
            <div class="container">
                <div class="left-project" data-aos="fade-up" data-aos-duration="1000">
                    <small>Take your business to the top!</small>
                    <h1 class="left-tag mb-xl-5">Accelerate Your Success with <strong>IAC.</strong></h1>
                </div>
                <div class="project-carousel d-flex justify-content-center align-items-center" data-aos="fade-up" data-aos-duration="1000">
                    <div class="project-item d-block">
                        <img src="../assets/img/website-mockup-1.png" alt="">
                    </div>
                    <div class="project-item d-block">
                        <img src="../assets/img/website-mockup-2.png" alt="">
                    </div>

                </div>

            </div>

            </div>

        </section> -->

        <!-- <section class="mission">
            <div class="container">
                <div class="about">
                    <div class="about-us ">
                        <span class="header"> About Us</span>
                    </div>
                    <div class="about-content">

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel sit dolore delectus debitis ex earum minima cumque nihil recusandae repudiandae sapiente, sed hic velit voluptatum a, repellat at voluptas officia!</p>
                    </div>
                </div>


                <div class="row">
                    <div class=" col-sm-12 col-md-12 col-lg-6">
                        <div class="vm-img" data-aos="fade-right" data-aos-duration="1000">
                            <img class="pic-back" src="../assets/img/mission.jpg" alt="">
                        </div>
                    </div>
                    <div class=" col-sm-12 col-md-12 col-lg-6">
                        <div class="mission-content" data-aos="fade-up" data-aos-duration="1000">
                            <span class="vm-header mb-xl-4"> Mission</span>
                            <p>To help business thrive by providing top-notch, tailor-made digital solutions that boost growth, streamline operations, and enhance user satisfaction.</p>
                        </div>
                        <div class="vision-content" data-aos="fade-up" data-aos-duration="1000">
                            <span class="vm-header">Vision</span>
                            <p>To lead in offering exeptional service and advertising expertise, ensuring boundless value for our clients. We aim to build enduring partnership by continually surpassing expectations through innovation, comitmment, and a profound understanding of our client's specific needs.</p>
                        </div>
                        <div class="vision-content" data-aos="fade-up" data-aos-duration="1000">
                            <span class="vm-header">Goal</span>
                            <p>To create meaningful employment opportunities for fresh IT graduates fro the provinces, empowering them to excel and innovate in the field of technology. We are commited to fostering an inclusive environment where talent from all backgrounds can develop their skills, drive technological advancements, and contribute to the growth of our community, and a profound understanding of og client's specific needs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <section class="our-partners">
            <div class="container">
                <div class="partners" data-aos="fade-up" data-aos-duration="1000">
                    <span class="header d-block"> Our Partners</span>
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
                    <span class="header d-block">Testemonials</span>
                </div>
                <div class="featured-carousel owl-carousel d-flex justify-content-center align-items-center">
                    <div class="item d-block">
                        <p class="feedback mb-xl-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut labore esse est corrupti facere, exercitationem, tempore quas, sunt illum asperiores amet voluptates tempora saepe assumenda harum cum! Voluptatum, officia molestiae?</p>
                        <br>
                        <h2 class="feedback-name">Giolo Evora</h2>
                        <small>Infinitech Advertising Corporation</small>
                    </div>
                    <div class="item d-block">
                        <p class="feedback  mb-xl-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut labore esse est corrupti facere, exercitationem, tempore quas, sunt illum asperiores amet voluptates tempora saepe assumenda harum cum! Voluptatum, officia molestiae?</p>
                        <br>
                        <h2 class="feedback-name">Moses Alcantara</h2>
                        <small>Infinitech Advertising Corporation</small>
                    </div>
                    <div class="item d-block">
                        <p class="feedback  mb-xl-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut labore esse est corrupti facere, exercitationem, tempore quas, sunt illum asperiores amet voluptates tempora saepe assumenda harum cum! Voluptatum, officia molestiae?</p>
                        <br>
                        <h2 class="feedback-name">Justin De Castro</h2>
                        <small>Infinitech Advertising Corporation</small>
                    </div>

                </div>
            </div>
        </section>

        <section class="latest-news">
            <div class="container">
                <div class="news" data-aos="fade-up" data-aos-duration="1000">
                    <span class="header d-block"> Latest News</span>
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
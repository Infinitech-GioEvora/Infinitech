<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infinitech Advertising Corporation | Web Develompent</title>


    @include('Layout/Header')

</head>


<body style="position: relative">
    @include('Layout/Navigation')
    <main>
        <section class="section hero"> 
            <div class="hero-overlay"></div>    
            <div class="content">
                    <div class="tagline">
                        <h1 class="hero-header">High Quality, <strong>Lower Price</strong> </h1>
                        <p class="hero-desc">At <strong>Infinitech Advertising Corporation, </strong><br> We offer excellent products without breaking the bank.</br>
                        </p>
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

            {{-- <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="/assets/img/manpower.png" />
                    </div>
                    <div class="swiper-slide">
                        <img src="/assets/img/tracking.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="/assets/img/manpower.png" />
                    </div>
                    <div class="swiper-slide">
                        <img src="/assets/img/tracking.jpg" />
                    </div>
                </div>
            </div> --}}
            <div class="col-12 col-md-12 col-lg-6">
                <div class="left-content">
                    <div class="imageslider">
                            <div class="imageitem">
                                <img src="/assets/img/dmcihomes.png" >
                            </div>
                            <div class="imageitem">
                                <img src="/assets/img/abicmanpower.png">
                            </div>
                        <div class="imageitem">
                            <img src="/assets/img/dmcihomes.png">
                        </div>
                        <div class="imageitem">
                            <img src="/assets/img/abicmanpower.png" >
                        </div>
                        <button id="nextt"><</button>
                        <button id="prevv">></button>
                    </div>
                  </div>
              </div>
          </div>
          <div class="logos">
            <div class="logo_items">
            <img src="/assets/img/partner.png" height="100" width="250" alt="">
            <img src="/assets/img/partner1.png">
            <img src="/assets/img/partner2.png">
            <img src="/assets/img/partner3.png">
            <img src="/assets/img/partner4.png">
            <img src="/assets/img/partner5.png">
            <img src="/assets/img/partner6.png">
            <img src="/assets/img/partner.png">
            <img src="/assets/img/partner1.png">
            <img src="/assets/img/partner2.png">
            <img src="/assets/img/partner3.png">
            <img src="/assets/img/partner4.png">
            <img src="/assets/img/partner5.png">
            <img src="/assets/img/partner.png">
            <img src="/assets/img/partner1.png">
            <img src="/assets/img/partner2.png">
            <img src="/assets/img/partner3.png">
            <img src="/assets/img/partner4.png">
            <img src="/assets/img/partner5.png">
            <img src="/assets/img/partner.png">
            <img src="/assets/img/partner1.png">
            <img src="/assets/img/partner2.png">
            <img src="/assets/img/partner3.png">
            <img src="/assets/img/partner4.png">
            <img src="/assets/img/partner5.png">
           </div>
        </div>

           <div class="custom-shape-divider-bottom-1726013583">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
                </svg>
            </div>
        </div>
        </section>
    

        <section class="infinitech">
            <div class="container">
                <div class="row">

                    <div class="col-12 col-md-6">
                        <img class="infinitech-img" data-aos="fade-up" data-aos-duration="1000"
                            src="../assets/img/banner.png" alt="">
                    </div>
                    <div class="col-12 col-md-6" data-aos="fade-up" data-aos-duration="1000">
                        <h1 class="title-header mb-4">Who is Infinitech Advertising Corporation?</h1>
                        <p class="infinitech-desc mb-4">At Infinitech Advertising Company, our mission is to help
                            businesses thrive by providing top-notch, tailor-made digital solutions that boost growth,
                            streamline operations, and enhance user satisfaction.
                            We are committed to customer satisfaction, offering a guarantee of unique web design and
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

        <section class="problem">
            <div class="container" style="font-size: medium">
                <div class="row" >
                        <h2 class="sub-heading" style="text-align: center">Common Business Hurdles!</h2>
                    <div class="col-md-6 ">
                        <ol class="olcards clickable" data-href="/solution">
                            <li style="--cardColor:#00aaff">
                                <div class="content">
                                    <div class="text">Your business lacks online visibility.</div>
                                </div>
                            </li>
                            <li style="--cardColor:#0099cc">
                                <div class="content">
                                    <div class="text">Competitors have a stronger online presence.</div>
                                </div>
                            </li>
                            <li style="--cardColor:#006699">
                                <div class="content">
                                    <div class="text">Marketing efforts are not converting into sales.</div>
                                </div>
                            </li>
                            <li style="--cardColor:#007acc">
                                <div class="content">
                                    <div class="text">You’re struggling to stand out in a crowded market.</div>
                                </div>
                            </li>
                            <li style="--cardColor:#003366">
                                <div class="content">
                                    <div class="text">You don't know how to reach your target audience.</div>
                                </div>
                            </li>
                        </ol>
                    </div>
                    <div class="col-md-6 ">
                        <ol class="olcards clickable" data-href="/solution">
                            <li style="--cardColor:#00aaff">
                                <div class="content">
                                    <div class="text">Your business lacks online visibility.</div>
                                </div>
                            </li>
                            <li style="--cardColor:#0099cc">
                                <div class="content">
                                    <div class="text">Competitors have a stronger online presence.</div>
                                </div>
                            </li>
                            <li style="--cardColor:#006699">
                                <div class="content">
                                    <div class="text">Marketing efforts are not converting into sales.</div>
                                </div>
                            </li>
                            <li style="--cardColor:#007acc">
                                <div class="content">
                                    <div class="text">You’re struggling to stand out in a crowded market.</div>
                                </div>
                            </li>
                            <li style="--cardColor:#003366">
                                <div class="content">
                                    <div class="text">You don't know how to reach your target audience.</div>
                                </div>
                            </li>
                        </ol>
                    </div>
            </div>
        </section>

        <section class="services ">
            <div class="container-fluid">
                <div class="head">
                    <img src="../assets/svg/AIHEAD.svg" alt="head" style="width:80%">
                </div>
                <div class="row">
                    <div class="col-xs-10 col-sm-6 col-lg-8">
                        <h5 class="sub-header">What we do?</h5>
                        <h2 class="sub-heading">Driving success through innovative digital solutions!</h2>
                    </div>
                    <div class="col-6 col-md-2" style="margin-left:50px;">
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

                <div class="offer" data-aos="zoom-in-up" data-aos-duration="1000" style="font-size: 14px">
                    <div class="col-8 col-md-2 clickable" data-href="/get-proposal">
                        <div class="offer-content text-center">
                            <img src="../assets/svg/webapp.svg" alt="">
                            <h2 class="offerTitle">Web Based Application </h2>
                            <p class="offer-desc">We have the capability to create personalized web applications
                                designed to enhance your organization's operational effectiveness.</p>
                        </div>
                    </div>
                    <div class="col-8 col-md-2 clickable" data-href="/get-proposal">
                        <div class="offer-content text-center">
                            <img src="../assets/svg/search.svg" alt="">
                            <h2 class="offerTitle">Search Engine Optimization</h2>
                            <p class="offer-desc">We can assist in improving your website's ranking on major search
                                engines such as Google.</p>
                        </div>
                    </div>
                    <div class="col-8 col-md-2 clickable" data-href="/get-proposal">
                        <div class="offer-content text-center">
                            <img src="../assets/svg/Hosting.svg" alt="">
                            <h2 class="offerTitle">Web Hosting and Domain</h2>
                            <p class="offer-desc">Our servers are fine-tuned for speed, security, and reliability,
                                ensuring your websites operate seamlessly.</p>
                        </div>
                    </div>
                    <div class="col-8 col-md-2 clickable" data-href="/get-proposal">
                        <div class="offer-content text-center">
                            <img src="../assets/svg/fast.svg" alt="">
                            <h2 class="offerTitle">Fast Turn Over</h2>
                            <p class="offer-desc">We specialize in providing swift turnaround times, guaranteeing the
                                prompt completion of your projects while upholding high standards of quality.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="our-partners">
            <div class="container">
                <div class="headingstyle" style="margin-bottom: 20px" data-aos="fade-up" data-aos-duration="1000">
                    <h1>Our Partners</h1> 
                </div>

                <div class="partners-container">
                    <div class="partners-logo" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                        data-aos-duration="2000">
                        <a href="https://www.facebook.com/profile.php?id=61552676815080">
                            <img src="../assets/img/ABIC-Realty.png" alt="ABIC-Realty">
                        </a>
                    </div>
                    <div class="partners-logo" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                        data-aos-duration="2000">
                        <a href="https://www.facebook.com/mngtechvoc.antique"><img
                                src="../assets/img/MNG-Techvoc-INC.png" alt="MNG-Techvoc-INC"></a>
                    </div>
                    <div class="partners-logo" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                        data-aos-duration="2000">
                        <a href="https://www.facebook.com/bcrvtvi.edu.ph"><img src="../assets/img/bcrv-techvoc.png"
                                alt="bcrv-techvoc"></a>
                    </div>
                    <div class="partners-logo" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                        data-aos-duration="2000">
                        <a href="https://www.facebook.com/profile.php?id=61552586366733"><img
                                src="../assets/img/NRG-Info-Tech.png" alt="NRG-Info-Tech"></a>
                    </div>
                    <div class="partners-logo" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                        data-aos-duration="2000">
                        <a href="https://www.facebook.com/profile.php?id=100090318514723"><img
                                src="../assets/img/abic-manpower.png" alt="abic-manpower"></a>
                    </div>

                </div>

            </div>

        </section>

        <section class="clients py-3 py-md-5">
            <div class="container">
                <div class="headingstyle">
                    <div class="headingstyle" data-aos="fade-up" data-aos-duration="1000">
                        <h1>Testimonials</h1> 
                    </div>
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
                    <div class="row"data-aos="zoom-in-up" data-aos-duration="1000" >
                        <div class="col-md-offset-2 col-md-8">
                            <div id="testimonial-slider" class="owl-carousel" >
                                <div class="testimonial">
                                    <div class="pic">
                                        <img src="../assets/img/person.png">
                                    </div>
                                    <div class="testimonial-content">
                                        <p>I was really impressed with the fast service! The staff handled everything e
                                            fficiently and had my request taken care of in no time. It’s great to experience such prompt a
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
                                        <img src="../assets/img/person.png">
                                    </div>
                                    <div class="testimonial-content">
                                        <p>Fantastic job with the system! It’s evident that a lot of thought and effort went into its
                                            design. Everything functions smoothly and efficiently, making the whole experience very satisfying. 
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
                                        <img src="../assets/img/person.png">
                                    </div>
                                    <div class="testimonial-content">
                                        <p>I’m impressed with the performance so far.Excellent work on the website. 
                                            It’s user-friendly, reliable, and performs exactly as promised. I’m very pleased with its effectiveness and ease of use. 
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
                                        <img src="../assets/img/person.png">
                                    </div>
                                    <div class="testimonial-content">
                                        <p>Outstanding service with the domain and hosting. 
                                            The setup was quick and hassle-free, and everything is running smoothly. Im impressed with the quality thanks for providing such
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
                                        <img src="../assets/img/person.png">
                                    </div>
                                    <div class="testimonial-content">
                                        <p>I’m genuinely amazed by the exceptional quality of this product/service. 
                                            It’s evident that a lot of thought and craftsmanship went into every detail. The performance is not just reliable but
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
        <section class="work-with-us">  
            <div class="container" data-aos="zoom-in-up" data-aos-duration="1000">
                <div class="row">
                    <div class="col-md-6 right-work">
                        <div class="right-work">
                            <div class="work-header">
                                <h2 class="work-title">Let's work together</h2>
                                <p class="work-description">We have extensive experience in your market and are confident in our ability to build a lasting relationship with you.</p>
                            </div>
                            <hr>
                            <form class="contactForm" >
                                <div class="form-group">
                                    <label for="name" style="font-size: 12px">Please tell us your name</label>
                                    <input type="text" id="name" name="name" placeholder="Enter Your Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="email" style="font-size: 12px">Share your email for us to reach you</label>
                                    <input type="email" id="email" name="email" placeholder="Enter Your Email" required>
                                </div>
                                <div class="form-group">
                                    <label for="website" style="font-size: 12px">Website</label>
                                    <input type="text" id="website" name="website" placeholder="Enter Your Website">
                                </div>
                                <div class="form-group">
                                    <label for="phone" style="font-size: 12px">Mobile Phone</label>
                                    <input type="text" id="phone" name="phone" placeholder="Enter Phone Number">
                                </div>
                                <div class="form-group">
                                    <label for="message" style="font-size: 12px">Send us a message</label>
                                    <textarea id="message" name="message" rows="5" placeholder="Say something...." required></textarea>
                                </div>
                                <button type="submit" class="button">
                                    <span>Submit</span>
                                    <svg width="34" height="34" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="37" cy="37" r="35.5" stroke="white" stroke-width="3"></circle>
                                        <path d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z" fill="white"></path>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 maps-block" style="margin-top: 20px">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.686618330031!2d121.01093307590381!3d14.559904978070104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c90b830e5f29%3A0x89fe307dfecd3c0d!2sCampos%20Rueda%20Building!5e0!3m2!1sen!2sph!4v1721716690771!5m2!1sen!2sph"width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <div class="address" style="margin-top: 15px">
                            <i class="fa-solid fa-location-dot"></i>
                            Unit 311, campos rueda building, 101 Urban Ave, Makati, 1206 Metro Manila
                        </div>
                        <div class="calls">
                            <a href="tel:+63270016157" style="color: black;">
                                <i class="fa-solid fa-phone"></i> (02) 7001-6157
                            </a>
                        </div>  
                        </div>
                    </div>
                </div>
            </div>
        </section>


        @include('Layout.Social')
    </main>

    <script src="imageslider.js"></script>

    @include('Layout/Footer')
    @include('Layout/Script')
    <!-- Modal HTML -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <img src="../assets/svg/undermaintenace.svg" alt="Under Maintenance">
            <div class="text">
                <h2>Website Under Maintenance</h2>
                <p>We're currently performing maintenance on our website. You can still browse our site, but some features may be unavailable. Thank you for your patience!</p>
            </div>
        </div>
    </div>    
    <script src="modal.js"></script>
</body>

</html>

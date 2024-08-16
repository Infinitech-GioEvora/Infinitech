<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Infinitech Advertising Corporation | Web Developmet</title>

    @include('Layout/Header')
</head>


<body>
    <!-- Navigation Bar -->
    @include('Layout/Navigation')

    <main>
        <section class="hero contact-layout">
            <div class="container contact-section">

                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="tagline ">
                            <h1><strong>Contact Us</strong></h1>
                            <p class="sub-tagline pt-xl-5">Leave us a message, and we promise to respond as soon as possible. 
                                Your feedback is important to us, and we’re committed to addressing your needs promptly and efficiently.</p>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 d-flex justify-content-center">
                        <div class="left-content">
                            <img src="../assets/svg/contact.svg" alt="">
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
                                        <circle cx="37" cy="37" r="35.5" stroke="white" stroke-width="3"></circle>
                                        <path d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z" fill="white"></path>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 maps-block" style="margin-top: 20px">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.686618330031!2d121.01093307590381!3d14.559904978070104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c90b830e5f29%3A0x89fe307dfecd3c0d!2sCampos%20Rueda%20Building!5e0!3m2!1sen!2sph!4v1721716690771!5m2!1sen!2sph" width="700" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <div class="address" style="margin-top: 15px">
                            <i class="fa-solid fa-location-dot"></i>
                            Unit 311, campos rueda building, 101 Urban Ave, Makati, 1206 Metro Manila
                        </div>
                        <div class="calls">
                            <i class="fa-solid fa-phone"></i>
                            (02) 7001-6157
                        </div>   
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('Layout.Social')

    </main>

    <!-- Footer  -->
    @include('Layout/Footer')

    <!-- Script -->
    <script src="/Contact.js"></script>
    @include('Layout/Script')
   
</body>

</html>
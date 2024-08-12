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
            <div class="container">
                <div class="row">
                    <div class="col-md-6 right-work">
                        <div class="right-work">
                            <div class="work-header">
                                <h2 class="work-title">Let's work together</h2>
                                <p class="work-description">We have extensive experience in your market and are confident in our ability to build a lasting relationship with you.</p>
                            </div>
                            <hr>
                            <form id="contactForm">
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
                                <button type="submit" class="btn-submit">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 maps d-flex justify-content-center align-items-center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.686618330031!2d121.01093307590381!3d14.559904978070104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c90b830e5f29%3A0x89fe307dfecd3c0d!2sCampos%20Rueda%20Building!5e0!3m2!1sen!2sph!4v1721716690771!5m2!1sen!2sph" width="700" height="850" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

    <!-- Footer  -->
    @include('Layout/Footer')

    <!-- Script -->
    @include('Layout/Script')
</body>

</html>
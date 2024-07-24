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
                        <h1 class="tagline"><strong>Contact Us</strong></h1>
                    </div>

                    <div class="col-12 col-md-6 d-flex justify-content-start    ">
                        <div class="left-content">
                            <img class="hero-svg" src="../assets/svg/contact.svg" alt="'">
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
                                <button class="btn-submit">Submit</button>
                            </form>
                        </div>

                    </div>
                    <div class="col-md-6 maps d-flex justify-content-center align-items-center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.686618330031!2d121.01093307590381!3d14.559904978070104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c90b830e5f29%3A0x89fe307dfecd3c0d!2sCampos%20Rueda%20Building!5e0!3m2!1sen!2sph!4v1721716690771!5m2!1sen!2sph" width="700" height="850" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- Footer  -->
    @include('Layout/Footer')

    <!-- Script -->
    @include('Layout/Script')
</body>

</html>
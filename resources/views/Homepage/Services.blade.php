<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services | Infinitech Advertising Corporation | Web Developmet</title>

    @include('Layout/Header')
</head>


<body>
    <!-- Navigation Bar -->
    @include('Layout/Navigation')

    <main>
        <section class="hero contact-layout">
            <div class="container service-section">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="tagline ">
                            <h1><strong>Our Services</strong></h1>
                            <p class="sub-tagline pt-xl-5">Transform your vision into reality with our innovative
                                solutions.
                                We turn ideas into actionable plans, bringing your goals to life with precision and
                                creativity.</p>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 d-flex justify-content-center">
                        <div class="left-content">
                            <img src="../assets/svg/services.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section class="services">
            <div class="container" data-aos="zoom-in-up" data-aos-duration="1000">
               

                <div class="row">
                    <div class="col-12 col-md-3">
                        <div class="service-content text-center">
                            <img src="../assets/svg/Static assets-amico.svg" alt="">
                            <h2 class="serviceTitle">Web Design & Development</h2>
                            <p class="service-desc">Custom-built, professionally-designed websites featuring an
                                easy-to-use Content Management System (CMS).</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
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
                    <div class="col-12 col-md-3">
                        <div class="service-content text-center">
                            <img src="../assets/svg/Hosting.svg" alt="">
                            <h2 class="serviceTitle">Web Hosting and Domain</h2>
                            <p class="service-desc">Our servers are fine-tuned for speed, security, and reliability,
                                ensuring your websites operate seamlessly.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="service-content text-center">
                            <img src="../assets/svg/outsource.svg" alt="">
                            <h2 class="serviceTitle">Web Design Outsourcing</h2>
                            <p class="service-desc">We can facilitate your business expansion by offering highly skilled
                                IT professionals at a competitive rate.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="service-content text-center">
                            <img src="../assets/svg/redesign.svg" alt="">
                            <h2 class="serviceTitle">Website Redesign</h2>
                            <p class="service-desc">We can either improve your current website design or create a
                                completely new one from scratch.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="service-content text-center">
                            <img src="../assets/svg/graphic.svg" alt="">
                            <h2 class="serviceTitle">Graphic Design</h2>
                            <p class="service-desc">We can assist in enhancing your brand through the creation of
                                marketing materials.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="service-content text-center">
                            <img src="../assets/svg/maintenance.svg" alt="">
                            <h2 class="serviceTitle">Website Maintenance</h2>
                            <p class="service-desc">We are dedicated to maintaining your website's relevance by
                                incorporating the latest technological trends.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="service-content text-center">
                            <img src="../assets/svg/search.svg" alt="">
                            <h2 class="serviceTitle">Search Engine Optimization</h2>
                            <p class="service-desc">We can assist in improving your website's ranking on major search
                                engines such as Google.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="service-content text-center">
                            <img src="../assets/svg/photo.svg" alt="">
                            <h2 class="serviceTitle">Professional Photography</h2>
                            <p class="service-desc">We possess the ability to capture exceptional photographs that can
                                breathe life into your marketing materials.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="service-content text-center">
                            <img src="../assets/svg/fast.svg" alt="">
                            <h2 class="serviceTitle">Fast Turn Over</h2>
                            <p class="service-desc">We specialize in providing swift turnaround times, guaranteeing the
                                prompt completion of your projects while upholding high standards of quality.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('Layout.Social')
    </main>

    <!-- Footer -->
    @include('Layout/Footer')

    <!-- Script -->
    @include('Layout/Script')


</body>
<script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<div class="elfsight-app-d5ccc98b-ab7f-4e86-b38a-fb71fff2a38b" data-elfsight-app-lazy></div>

</html>

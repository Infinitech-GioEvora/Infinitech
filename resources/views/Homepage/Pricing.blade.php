<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing - Infinitech Advertising Corporation | Web Developmet</title>

    @include('Layout/Header')
</head>


<body>
    @include('Layout/Navigation')

    <main>
        <section class="hero contact-layout">
            <div class="container pricing-section">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="tagline ">
                            <h1><strong>Our Pricing</strong></h1>
                            <p class="sub-tagline pt-xl-5">Empower your system with clear and transparent pricing from our parent company. 
                                Our straightforward approach ensures you have full visibility and confidence in your investment.</p>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 d-flex justify-content-center">
                        <div class="left-content">
                            <img src="../assets/svg/pricing.svg" alt="">
                        </div>
                    </div>
                </div>

            </div>

        </section>

        <section class="pricing-section" data-aos="zoom-in-up" data-aos-duration="1000">
            <div class="container">
                <div class="pricing-head text-center">
                    <h1 class="pricing-header">Choose your right plan!</h1>
                    <small>Select from best plans, ensuring a perfect match. Need more or less?</small> <br>
                    <small>Customize your subscription for a seamless fit!</small>
                </div>
                <div class="tab d-flex justify-content-center">
                    <button class="tablinks active" onclick="openPlan(event, 'Basic')">Basic</button>
                    <button class="tablinks" onclick="openPlan(event, 'Informative')">Informative</button>
                    <button class="tablinks" onclick="openPlan(event, 'Dynamic')">Dynamic</button>
                    <button class="tablinks" onclick="openPlan(event, 'Ecommerce')">E-Commerce</button>
                </div>

                <div id="Basic" class="tabcontent">
                    <div class="basic-plan">
                        <div class="row">
                            <div class="col-12 col-md-4 col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h1 class="plan-header"><span class="badge">Basic</span></h1>
                                        <small class="plan-desc">
                                            The Basic Plan is ideal for small businesses or personal websites that need an online presence without complex features. 
                                        </small>
                                        <div class="plan-price pt-xl-4">
                                            <h2> &#8369;28,000 <span><small>/ month</small></span></h2>
                                        </div>
                                        <hr>
                                        <div class="plan-include">
                                            <ul>
                                                <li><i class="fa-solid fa-check"></i> Custom Design</li>
                                                <li><i class="fa-solid fa-check"></i> Content Management System (CMS)</li>
                                                <li><i class="fa-solid fa-check"></i> Responsive Design</li>
                                                <li><i class="fa-solid fa-check"></i> Basic SEO Setup</li>
                                                <li><i class="fa-solid fa-check"></i> Social Media Integration</li>
                                                <li><i class="fa-solid fa-check"></i> Limited support (1-2 months)</li>
                                            </ul>
                                        </div>
                                        <button class="btn-plan d-flex justify-content-center">See More</button>
                                    </div>
                                </div>

                            </div>
                            <div class="col-12 col-md-4 col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h1 class="plan-header"><span class="badge">Standard</span></h1>
                                        <small class="plan-desc">
                                            Suitable for small to medium-sized businesses that need a more advanced website with additional features and customization. 
                                        </small>
                                        <div class="plan-price pt-xl-4">
                                            <h2> &#8369;45,000.00 <span><small>/ month</small></span></h2>
                                        </div>
                                        <hr>
                                        <div class="plan-include">
                                            <ul>
                                                <li><i class="fa-solid fa-check"></i> Custom Design (unique design with enhanced elements)                                                </li>
                                                <li><i class="fa-solid fa-check"></i> Advanced CMS Setup</li>
                                                <li><i class="fa-solid fa-check"></i> Fully Responsive Design</li>
                                                <li><i class="fa-solid fa-check"></i> Intermediate SEO Setup</li>
                                                <li><i class="fa-solid fa-check"></i> Advanced Contact Forms</li>
                                                <li><i class="fa-solid fa-check"></i> Social Media Integration (enhanced)</li>
                                                <li><i class="fa-solid fa-check"></i> Enhanced Security</li>
                                                <li><i class="fa-solid fa-check"></i> Domain and Hosting Assistance</li>
                                                <li><i class="fa-solid fa-check"></i> Extended Support (2-3 months)</li>
                                            </ul>
                                        </div>
                                        <button class="btn-plan d-flex justify-content-center">See More</button>
                                    </div>
                                </div>

                            </div>
                            <div class="col-12 col-md-4 col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h1 class="plan-header"><span class="badge">Premium</span></h1>
                                        <small class="plan-desc">
                                            The Premium Plan is designed for businesses or organizations that require a high-end, feature-rich website with extensive customization and advanced functionalities.
                                        </small>
                                        <div class="plan-price pt-xl-4">
                                            <h2>&#8369;85,000.00 <span>/ month</span></h2>
                                        </div>
                                        <hr>
                                        <div class="plan-include">
                                            <ul>
                                                <li><i class="fa-solid fa-check"></i> High-End Custom Design (advanced features and interactive elements)</li>
                                                <li><i class="fa-solid fa-check"></i> More than 10 Pages</li>
                                                <li><i class="fa-solid fa-check"></i> Full-Featured CMS Setup</li>
                                                <li><i class="fa-solid fa-check"></i> Premium Responsive Design</li>
                                                <li><i class="fa-solid fa-check"></i> Advanced SEO Setup</li>
                                                <li><i class="fa-solid fa-check"></i> Custom Forms and Features</li>
                                                <li><i class="fa-solid fa-check"></i> Advanced Social Media Integration</li>
                                                <li><i class="fa-solid fa-check"></i> Premium Security Measures</li>
                                                <li><i class="fa-solid fa-check"></i> Premium Domain and Hosting Assistance</li>
                                                <li><i class="fa-solid fa-check"></i> Extended Support (3-6 months)</li>
                                            </ul>
                                        </div>
                                        <button class="btn-plan d-flex justify-content-center">See More</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div id="Dynamic" class="tabcontent">
                    <div class="row">
                        <div class="col-12 col-md-4 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h1 class="plan-header"><span class="badge">Basic</span></h1>
                                    <small class="plan-desc">
                                        Ideal for simple websites with essential features.
                                    </small>
                                    <div class="plan-price pt-xl-4">
                                        <h2> &#8369;21,000.00 <span><small>/ month</small></span></h2>
                                    </div>
                                    <hr>
                                    <div class="plan-include">
                                        <ul>
                                            <li><i class="fa-solid fa-check"></i> Custom Design (pre-designed template or basic custom layout)</li>
                                            <li><i class="fa-solid fa-check"></i> Content Management System (CMS) Setup</li>
                                            <li><i class="fa-solid fa-check"></i> Responsive Design</li>
                                            <li><i class="fa-solid fa-check"></i> Basic SEO Setup</li>
                                            <li><i class="fa-solid fa-check"></i> Contact Form</li>
                                            <li><i class="fa-solid fa-check"></i> Social Media Integration</li>
                                            <li><i class="fa-solid fa-check"></i> Basic Security Measures</li>
                                            <li><i class="fa-solid fa-check"></i> Domain and Hosting Assistance</li>
                                            <li><i class="fa-solid fa-check"></i> Limited Support (1-2 months)</li>
                                        </ul>
                                    </div>
                                    <button class="btn-plan d-flex justify-content-center">See More</button>
                                </div>
                            </div>

                        </div>
                        <div class="col-12 col-md-4 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h1 class="plan-header"><span class="badge">Standard</span></h1>
                                    <small class="plan-desc">
                                        Suitable for businesses needing more advanced design and functionality.
                                    </small>
                                    <div class="plan-price pt-xl-4">
                                        <h2> &#8369;45,000.00 <span><small>/ month</small></span></h2>
                                    </div>
                                    <hr>
                                    <div class="plan-include">
                                        <ul>
                                            <li><i class="fa-solid fa-check"></i> Custom Design (unique design with enhanced elements)</li>
                                                <li><i class="fa-solid fa-check"></i> Up to 10 Dynamic Pages</li>
                                                <li><i class="fa-solid fa-check"></i> Advanced CMS Setup</li>
                                                <li><i class="fa-solid fa-check"></i> Fully Responsive Design</li>
                                                <li><i class="fa-solid fa-check"></i> Intermediate SEO Setup</li>
                                                <li><i class="fa-solid fa-check"></i> Advanced Contact Forms</li>
                                                <li><i class="fa-solid fa-check"></i> Social Media Integration (enhanced)</li>
                                                <li><i class="fa-solid fa-check"></i> Enhanced Security</li>
                                                <li><i class="fa-solid fa-check"></i> Domain and Hosting Assistance</li>
                                                <li><i class="fa-solid fa-check"></i> Extended Support (2-3 months)</li>
                                        </ul>
                                    </div>
                                    <button class="btn-plan d-flex justify-content-center">See More</button>
                                </div>
                            </div>

                        </div>
                        <div class="col-12 col-md-4 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h1 class="plan-header"><span class="badge">Premium</span></h1>
                                    <small class="plan-desc">
                                        Perfect for complex, feature-rich websites with extensive customization
                                    </small>
                                    <div class="plan-price pt-xl-4">
                                        <h2>&#8369;85,000.00 <span>/ month</span></h2>
                                    </div>
                                    <hr>
                                    <div class="plan-include">
                                        <ul>
                                            <li><i class="fa-solid fa-check"></i> High-End Custom Design (advanced features and interactive elements)</li>
                                            <li><i class="fa-solid fa-check"></i> More than 10 Dynamic Pages</li>
                                            <li><i class="fa-solid fa-check"></i> Full-Featured CMS Setup</li>
                                            <li><i class="fa-solid fa-check"></i> Premium Responsive Design</li>
                                            <li><i class="fa-solid fa-check"></i> Advanced SEO Setup</li>
                                            <li><i class="fa-solid fa-check"></i> Custom Forms and Features</li>
                                            <li><i class="fa-solid fa-check"></i> Advanced Social Media Integration</li>
                                            <li><i class="fa-solid fa-check"></i> Premium Security Measures</li>
                                            <li><i class="fa-solid fa-check"></i> Premium Domain and Hosting Assistance</li>
                                            <li><i class="fa-solid fa-check"></i> Extended Support (3-6 months)</li>
                                        </ul>
                                    </div>
                                    <button class="btn-plan d-flex justify-content-center">See More</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div id="Informative" class="tabcontent">
                    <div class="row">
                        <!-- Basic Plan -->
                        <div class="col-12 col-md-4 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h1 class="plan-header"><span class="badge">Basic</span></h1>
                                    <small class="plan-desc">
                                        Perfect for small businesses and personal websites. This plan offers a professionally designed single-page or small multi-page site with essential features. Includes a basic template customization, responsive design, and essential SEO to get you started online.
                                    </small>
                                    <div class="plan-price pt-xl-4">
                                        <h2>&#8369;27,500 <span><small>/ month</small></span></h2>
                                    </div>
                                    <hr>
                                    <div class="plan-include">
                                        <ul>
                                            <li><i class="fa-solid fa-check"></i> Responsive design</li>
                                            <li><i class="fa-solid fa-check"></i> Basic SEO setup</li>
                                            <li><i class="fa-solid fa-check"></i> Contact form</li>
                                            <li><i class="fa-solid fa-check"></i> Social media integration</li>
                                            <li><i class="fa-solid fa-check"></i> Basic analytics setup</li>
                                        </ul>
                                    </div>
                                    <button class="btn-plan d-flex justify-content-center">See More</button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Standard Plan -->
                        <div class="col-12 col-md-4 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h1 class="plan-header"><span class="badge">Standard</span></h1>
                                    <small class="plan-desc">
                                        Ideal for growing businesses needing a more robust online presence. This plan includes a custom-designed site with advanced features such as e-commerce functionality, a blog, and enhanced SEO. Perfect for those who want a professional online store or a content-rich website.
                                    </small>
                                    <div class="plan-price pt-xl-4">
                                        <h2>&#8369;66,000 <span><small>/ month</small></span></h2>
                                    </div>
                                    <hr>
                                    <div class="plan-include">
                                        <ul>
                                            <li><i class="fa-solid fa-check"></i> Custom design tailored to your brand</li>
                                            <li><i class="fa-solid fa-check"></i> Advanced SEO optimization</li>
                                            <li><i class="fa-solid fa-check"></i> Blog setup</li>
                                            <li><i class="fa-solid fa-check"></i> E-commerce functionality (up to 20 products)</li>
                                            <li><i class="fa-solid fa-check"></i> Contact form and live chat integration</li>
                                            <li><i class="fa-solid fa-check"></i> Google Analytics setup</li>
                                            <li><i class="fa-solid fa-check"></i> Newsletter signup</li>
                                        </ul>
                                    </div>
                                    <button class="btn-plan d-flex justify-content-center">See More</button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Premium Plan -->
                        <div class="col-12 col-md-4 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h1 class="plan-header"><span class="badge">Premium</span></h1>
                                    <small class="plan-desc">
                                        Designed for larger businesses or those requiring extensive features. This plan provides a fully custom site with unlimited pages and advanced functionalities, including e-commerce with unlimited products, membership features, and multilingual support. 
                                    </small>
                                    <div class="plan-price pt-xl-4">
                                        <h2>&#8369;137,500 <span>/ month</span></h2>
                                    </div>
                                    <hr>
                                    <div class="plan-include">
                                        <ul>
                                            <li><i class="fa-solid fa-check"></i> Fully custom design with advanced features</li>
                                            <li><i class="fa-solid fa-check"></i> Comprehensive SEO strategy and implementation</li>
                                            <li><i class="fa-solid fa-check"></i> Advanced e-commerce functionality (unlimited products)</li>
                                            <li><i class="fa-solid fa-check"></i> Custom interactive elements (e.g., sliders, galleries)</li>
                                            <li><i class="fa-solid fa-check"></i> Membership or subscription features</li>
                                            <li><i class="fa-solid fa-check"></i> Multilingual support</li>
                                            <li><i class="fa-solid fa-check"></i> Integration with CRM systems</li>
                                            <li><i class="fa-solid fa-check"></i> Google Analytics and advanced tracking setup</li>
                                            <li><i class="fa-solid fa-check"></i> Blog and news sections</li>
                                        </ul>
                                    </div>
                                    <button class="btn-plan d-flex justify-content-center">See More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                

                <div id="Ecommerce" class="tabcontent">
                    <div class="row">
                        <div class="col-12 col-md-4 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h1 class="plan-header"><span class="badge">Basic</span></h1>
                                    <small class="plan-desc">
                                        Designed for small e-commerce businesses or startups needing essential features to get their online store up and running.
                                    </small>
                                    <div class="plan-price pt-xl-4">
                                        <h2> &#8369;40,000.00 <span><small>/ month</small></span></h2>
                                    </div>
                                    <hr>
                                    <div class="plan-include">
                                        <ul>
                                            <li><i class="fa-solid fa-check"></i> Custom Design (pre-designed template or basic custom layout)</li>
                                            <li><i class="fa-solid fa-check"></i> Up to 5 Product Categories</li>
                                            <li><i class="fa-solid fa-check"></i> Basic E-commerce Functionality (product listings, cart, checkout)</li>
                                            <li><i class="fa-solid fa-check"></i> Content Management System (CMS) Setup</li>
                                            <li><i class="fa-solid fa-check"></i> Responsive Design</li>
                                            <li><i class="fa-solid fa-check"></i> Basic SEO Setup</li>
                                            <li><i class="fa-solid fa-check"></i> Payment Gateway Integration (basic options)</li>
                                            <li><i class="fa-solid fa-check"></i> Basic Security Measures</li>
                                            <li><i class="fa-solid fa-check"></i> Domain and Hosting Assistance</li>
                                            <li><i class="fa-solid fa-check"></i> Limited Support (1-2 months)</li>

                                        </ul>
                                    </div>
                                    <button class="btn-plan d-flex justify-content-center">See More</button>
                                </div>
                            </div>

                        </div>
                        <div class="col-12 col-md-4 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h1 class="plan-header"><span class="badge">Standard</span></h1>
                                    <small class="plan-desc">
                                        The Standard Plan is ideal for growing businesses that require more advanced e-commerce features and a more customized design.
                                    </small>
                                    <div class="plan-price pt-xl-4">
                                        <h2> &#8369;60,000.00 <span><small>/ month</small></span></h2>
                                    </div>
                                    <hr>
                                    <div class="plan-include">
                                        <ul>
                                            <li><i class="fa-solid fa-check"></i> Custom Design (unique design with enhanced elements)</li>
                                            <li><i class="fa-solid fa-check"></i> Up to 10 Product Categories</li>
                                            <li><i class="fa-solid fa-check"></i> Advanced E-commerce Functionality (product variations, discounts, inventory management)</li>
                                            <li><i class="fa-solid fa-check"></i> Advanced CMS Setup</li>
                                            <li><i class="fa-solid fa-check"></i> Fully Responsive Design</li>
                                            <li><i class="fa-solid fa-check"></i> Intermediate SEO Setup</li>
                                            <li><i class="fa-solid fa-check"></i> Payment Gateway Integration (multiple options)</li>
                                            <li><i class="fa-solid fa-check"></i> Enhanced Security</li>
                                            <li><i class="fa-solid fa-check"></i> Domain and Hosting Assistance</li>
                                            <li><i class="fa-solid fa-check"></i> Extended Support (2-3 months)</li>
                                        </ul>
                                    </div>
                                    <button class="btn-plan d-flex justify-content-center">See More</button>
                                </div>
                            </div>

                        </div>
                        <div class="col-12 col-md-4 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h1 class="plan-header"><span class="badge">Premium</span></h1>
                                    <small class="plan-desc">
                                        The Premium Plan is designed for established businesses that need a high-end e-commerce solution with extensive features and full customization.
                                    </small>
                                    <div class="plan-price pt-xl-4">
                                        <h2>&#8369;100,000.00 <span>/ month</span></h2>
                                    </div>
                                    <hr>
                                    <div class="plan-include">
                                        <ul>
                                            <li><i class="fa-solid fa-check"></i> High-End Custom Design (advanced features and interactive elements)</li>
                                            <li><i class="fa-solid fa-check"></i> Unlimited Product Categories</li>
                                            <li><i class="fa-solid fa-check"></i> Full-Featured E-commerce Functionality (advanced inventory management, custom product attributes, dynamic pricing)</li>
                                            <li><i class="fa-solid fa-check"></i> Full-Featured CMS Setup</li>
                                            <li><i class="fa-solid fa-check"></i> Premium Responsive Design</li>
                                            <li><i class="fa-solid fa-check"></i> Advanced SEO Setup</li>
                                            <li><i class="fa-solid fa-check"></i> Payment Gateway Integration (advanced options, subscription management)</li>
                                            <li><i class="fa-solid fa-check"></i> Premium Security Measures</li>
                                            <li><i class="fa-solid fa-check"></i> Premium Domain and Hosting Assistance</li>
                                            <li><i class="fa-solid fa-check"></i> Extended Support (3-6 months)</li>
                                        </ul>
                                    </div>
                                    <button class="btn-plan d-flex justify-content-center">See More</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('Layout.Social')


    </main>

    @include('Layout/Footer')
    @include('Layout/Script')


    <script>
        function openPlan(evt, planName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(planName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        document.addEventListener("DOMContentLoaded", function() {
            document.querySelector(".tablinks").click();
        });
    </script>



</body>
<script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<div class="elfsight-app-d5ccc98b-ab7f-4e86-b38a-fb71fff2a38b" data-elfsight-app-lazy></div>

</html>
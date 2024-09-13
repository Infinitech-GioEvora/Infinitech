<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proposal - Infinitech Advertising Corporation | Web Developmet</title>

    @include('Layout/Header')
</head>

<body>
    <!-- Navigation Bar -->
    @include('Layout/Navigation')

    <main>
        <section class="hero contact-layout">
            <div class="hero-overlay"></div>
            <div class="container solution-section">

                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="tagline ">
                            <h1><strong>Proposal</strong></h1>
                            <p class="sub-tagline pt-xl-5" style="font-size: 19px">We specialize in crafting bespoke
                                systems and websites that elevate your brand’s presence while championing
                                health and well-being. Our approach combines strategic analysis with cutting-edge
                                technology to deliver
                                solutions that not only enhance your brand’s impact but also foster healthier outcomes
                                for your audience.</p>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 d-flex justify-content-center">
                        <div class="left-content">
                            <img src="../assets/svg/proposal.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom-shape-divider-bottom-1726013583">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
                </svg>
            </div>
        </section>


        <section class="quote-content">
            <div class="container" data-aos="zoom-in-up" data-aos-duration="1000">
                <form class="form-quote form-quotes" action="" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <!-- Left Column -->
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="form-wrapper">
                                <h3 class="form-heading">Contact Information</h3>
                                <div class="form-group">
                                    <label class="control-label">Full Name<span class="imp">*</span></label>
                                    <input name="fq_fullname" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Position/Designation</label>
                                    <input name="fq_position" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Company Name</label>
                                    <input name="fq_company" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Location</label>
                                    <input name="fq_location" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Contact No.<span class="imp">*</span></label>
                                    <input name="fq_contactnumber" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Email Address<span class="imp">*</span></label>
                                    <input name="fq_emailaddress" type="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Describe your line of business<span
                                            class="imp">*</span></label>
                                    <textarea name="fq_description" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Project Details<span class="imp">*</span></label>
                                    <textarea name="fq_projdetails" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>


                        <div class="col-12 col-md-6 col-lg-6 d-flex justify-content-center align-items-center">
                            <div class="form-wrapper">
                                <h3 class="form-heading">PROJECT DETAILS</h3>
                                <div class="form-checkbox">
                                    <label class="control-label">Which services are you interested in <br> (check all
                                        that apply):</label>
                                    <div class="form-check">
                                        <input name="fq_services[]" type="checkbox" class="form-check-input"
                                            id="servicesChk1" value="Web Design & Development">
                                        <label class="form-check-label" for="servicesChk1">Web Design &
                                            Development</label>
                                    </div>
                                    <div class="form-check">
                                        <input name="fq_services[]" type="checkbox" class="form-check-input"
                                            id="servicesChk2" value="Website Redesign">
                                        <label class="form-check-label" for="servicesChk2">Website Redesign</label>
                                    </div>
                                    <div class="form-check">
                                        <input name="fq_services[]" type="checkbox" class="form-check-input"
                                            id="servicesChk3" value="Web Design Outsourcing">
                                        <label class="form-check-label" for="servicesChk3">Web Design
                                            Outsourcing</label>
                                    </div>
                                    <div class="form-check">
                                        <input name="fq_services[]" type="checkbox" class="form-check-input"
                                            id="servicesChk4" value="Wordpress Development">
                                        <label class="form-check-label" for="servicesChk4">Wordpress
                                            Development</label>
                                    </div>
                                    <div class="form-check">
                                        <input name="fq_services[]" type="checkbox" class="form-check-input"
                                            id="servicesChk5" value="Website Maintenance">
                                        <label class="form-check-label" for="servicesChk5">Website Maintenance</label>
                                    </div>
                                    <div class="form-check">
                                        <input name="fq_services[]" type="checkbox" class="form-check-input"
                                            id="servicesChk6" value="Web Based Applications">
                                        <label class="form-check-label" for="servicesChk6">Web Based
                                            Applications</label>
                                    </div>
                                    <div class="form-check">
                                        <input name="fq_services[]" type="checkbox" class="form-check-input"
                                            id="servicesChk7" value="Web Hosting & Domain">
                                        <label class="form-check-label" for="servicesChk7">Web Hosting &
                                            Domain</label>
                                    </div>
                                    <div class="form-check">
                                        <input name="fq_services[]" type="checkbox" class="form-check-input"
                                            id="servicesChk11" value="Search Engine Optimization">
                                        <label class="form-check-label" for="servicesChk11">Search Engine
                                            Optimization</label>
                                    </div>
                                    <div class="form-check">
                                        <input name="fq_services[]" type="checkbox" class="form-check-input"
                                            id="servicesChk8" value="Graphics Design">
                                        <label class="form-check-label" for="servicesChk8">Graphic Design</label>
                                    </div>
                                    <div class="form-check">
                                        <input name="fq_services[]" type="checkbox" class="form-check-input"
                                            id="servicesChk9" value="Professional Photography">
                                        <label class="form-check-label" for="servicesChk9">Professional
                                            Photography</label>
                                    </div>
                                    <div class="form-check">
                                        <input name="fq_services[]" type="checkbox" class="form-check-input"
                                            id="servicesChk10" value="Others">
                                        <label class="form-check-label" for="servicesChk10">Others (Please
                                            specify):</label>
                                        <input name="fq_services_others" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Attach your project brief or any pertinent file
                                        (optional):</label>
                                    <div class="file-upload-wrapper">
                                        <input name="fq_file" type="file" class="file-upload-field form-control">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="btn-wrapper">
                                <button type="submit" class="btn btn-block btn-primary">SUBMIT</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        @include('Layout.Social')
    </main>

    @include('Layout.Script')

</body>

</html>

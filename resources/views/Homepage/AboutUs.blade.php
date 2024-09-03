<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Infinitech Advertising Corporation | Web Developmet</title>

    @include('Layout/Header')
</head>


<body>
    <!-- Navigation Bar -->
    @include('Layout/Navigation')

    <main>
        <section class="hero about-layout">
            <div class="container about-section">

                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="tagline ">
                            <h1><strong>About Us</strong></h1>
                            <p class="sub-tagline pt-xl-5">Building and nurturing strong partnerships to deliver better outcomes for both Infinitech and clients.</p>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 d-flex justify-content-center" >
                        <div class="left-content">
                            <img src="../assets/svg/aboutus.svg" alt="">
                        </div>
                    </div>
                </div>
                
            </div>

        </section>


        <section class="mission ">
            <div class="about-header-img"data-aos="zoom-in-up" data-aos-duration="1000" >
                <img src="../assets/img/banner.png" alt="">
            </div>
            <div class="container" >
                <div class="about about-mission" data-aos="fade-up" data-aos-duration="1000">
                    <div class="about-content">
                        <p>Specialize in delivering comprehensive IT solutions tailored to your business needs. With a strong focus on innovation and excellence, we provide a range of services designed to enhanve your digital presence and streamline your operations.</p>
                    </div>
                </div>

                <div class="vmg" data-aos="fade-up" data-aos-duration="1000"> 
                    <div class="row d-flex justify-content-center no-gutters pt-xl-5">
                        <div class="col-sm-12 col-md-4 vmg-content text-center">
                            <span class="vmg-header"> Mission</span>
                            <p>They are committed to helping their clients reach operational excellence and sustainable growth through specialized, technology-driven strategies that solve difficult problems.</p>
                        </div>
                        <div class="col-sm-12 col-md-4 vmg-content text-center">
                            <span class="vmg-header"> Vission</span>
                            <p>Infinitech aims to be a top choice for businesses looking to enhance their digital presence, by using the latest technology and creative ideas, they want to lead the industry and help clients grow and succeed./p>
                        </div>
                        <div class="col-sm-12 col-md-4 text-center">
                            <span class="vmg-header"> Goal</span>
                            <p>To successfully adapt the latest technological advancements and continuously innovate in digital advertising strategies, ensuring the delivery of unique and measurable results for clients.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="coreValue">
            <div class="container"data-aos="fade-up" data-aos-duration="1000">
                <div class="core-values">
                    <div class="row d-flex justify-content-center no-gutters pt-xl-5" data-aos="fade-zoom-in"
                    data-aos-easing="ease-in-back"
                    data-aos-delay="300"
                    data-aos-offset="0">
                        <div class="header" style="margin-bottom:30px">Core Values</div>
                        <div class="col-sm-12 col-md-6 col-lg-6 px-0 vm-card">
                            <div class="card">
                                <div class="card-body">
                                    <span class="vm-header">Client-Centric Innovation</span>
                                    <p>Prioritize client's needs and innovate continually to create a tailored solution that drive their success.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 px-0 vm-card">
                            <div class="card">
                                <div class="card-body">
                                    <span class="vm-header">Creative Excllence</span>
                                    <p>We strive outstanding in every projects, ensuring our work is not only meets but exceeds industry standard.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 px-0 vm-card">
                            <div class="card">
                                <div class="card-body">
                                    <span class="vm-header">Integrity and Transparency</span>
                                    <p>Build trust through honesty and clear communication, ensuring our clients are fully informed and transparent in our progress.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 px-0 vm-card">
                            <div class="card">
                                <div class="card-body">
                                    <span class="vm-header">Adaptability</span>
                                    <p>We are flexible and responsive to the changing of market dynamics, easily adpating our strategies to meet new challenges and opportunity.</p>
                                </div>
                            </div>

                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-6 px-0 vm-card">
                            <div class="card">
                                <div class="card-body">
                                    <span class="vm-header">Collaboration</span>
                                    <p>We believe the power of teamwork, fostering a collborative enviroment where ideas and expertise are share freely to achieve the best outcomes.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
        <!-- Team -->
        <section id="team" class="pb-5">
            <div class="container" data-aos="fade-up" data-aos-duration="1000">
                <h5 class="section-title h1">OUR TEAM</h5>
                <div class="row no-gutters d-flex justify-content-center">
                    <!-- Team member -->
                    <div class="col-xs-12 col-sm-6 col-md-3" >
                        <div class="image-flip" >
                            <div class="mainflip flip-0">
                                <div class="frontside">
                                        <div class="card">
                                            <img src="../assets/img/infinitech-sirGel.png" alt="Avatar" >
                                            <div class="team-details" style="font-display: center">
                                                <span class="team-name d-block">Angelle Sarmiento</span>
                                                <small class="position d-block">Chief Executive Officer</small>
                                            </div>
                                        </div>
                                </div>
                                <div class="backside ">
                                    <div class="card ">
                                        <div class="card-body text-left mt-4">
                                            <h4 class="card-title">Angelle Sarmiento</h4>
                                            <h4 class="card-title">CREDENTIALS</h4>
                                                <p class="card-text"> (CFP)CompTIA A+ (IT support)</p>
                                                <p class="card-text">Cisco Certified Network Associate (CCNA)</p>
                                                <p class="card-text">AWS Certified Solutions Architect</p>
                                                <p class="card-text">Routing and switching technologies</p>
                                                <p class="card-text">Network access (VLANs, WLANs)</p>
                                                <p class="card-text">IP connectivity and services (NAT, DHCP)</p>
                                            <h5 class="credential-link text-center" ><a href="/credential-sirgel">View More</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ./Team member -->
                    <!-- Team member -->
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                            <div class="mainflip">
                                <div class="frontside">
                                    <div class="card">
                                        <img src="../assets/img/infinitech-mamKrissa.png" alt="Avatar" style="width:100%">
                                        <div class="team-details">
                                            <span class="team-name d-block">Krissa Bongon</span>
                                            <small class="position d-block">Executive Assistant</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="backside">
                                    <div class="card">
                                        <div class="card-body text-left mt-4">
                                            <h4 class="card-title">Krissa Bongon</h4>
                                            <h4 class="card-title">CREDENTIALS</h4>
                                                <p class="card-text"> (CFP)CompTIA A+ (IT support)</p>
                                                <p class="card-text">Cisco Certified Network Associate (CCNA)</p>
                                                <p class="card-text">AWS Certified Solutions Architect</p>
                                                <p class="card-text">Routing and switching technologies</p>
                                                <p class="card-text">Network access (VLANs, WLANs)</p>
                                                <p class="card-text">IP connectivity and services (NAT, DHCP)</p>
                                            <h5 class="credential-link text-center" ><a href="/credential-mamkrissa">View More</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters d-flex justify-content-center">
                    <!-- Team member -->
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                            <div class="mainflip">
                                <div class="frontside">
                                    <div class="card">
                                        <img src="../assets/img/infinitech-mamSol.png" alt="Avatar" style="width:100%">
                                        <div class="team-details">
                                            <span class="team-name d-block">Marisol Senteno</span>
                                            <small class="position d-block">Accounting Head</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="backside">
                                    <div class="card">
                                        <div class="card-body text-left mt-4">
                                            <h4 class="card-title">Marisol Senteno</h4>
                                            <h4 class="card-title">CREDENTIALS</h4>
                                                <p class="card-text"> (CFP)CompTIA A+ (IT support)</p>
                                                <p class="card-text">Cisco Certified Network Associate (CCNA)</p>
                                                <p class="card-text">AWS Certified Solutions Architect</p>
                                                <p class="card-text">Routing and switching technologies</p>
                                                <p class="card-text">Network access (VLANs, WLANs)</p>
                                                <p class="card-text">IP connectivity and services (NAT, DHCP)</p>
                                            <h5 class="credential-link text-center" ><a href="/credential-mamsol">View More</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Team member -->
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                            <div class="mainflip">
                                <div class="frontside">
                                    <div class="card">
                                        <img src="../assets/img/infinitech-mamRea.png" alt="Avatar" style="width:100%">
                                        <div class="team-details">
                                            <span class="team-name d-block">Rhea Jane Quintano</span>
                                            <small class="position d-block">Human Resource</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="backside">
                                    <div class="card">
                                        <div class="card-body text-left mt-4">
                                            <h4 class="card-title">Rhea Jane Quintano</h4>
                                            <h4 class="card-title">CREDENTIALS</h4>
                                                <p class="card-text"> (CFP)CompTIA A+ (IT support)</p>
                                                <p class="card-text">Cisco Certified Network Associate (CCNA)</p>
                                                <p class="card-text">AWS Certified Solutions Architect</p>
                                                <p class="card-text">Routing and switching technologies</p>
                                                <p class="card-text">Network access (VLANs, WLANs)</p>
                                                <p class="card-text">IP connectivity and services (NAT, DHCP)</p>
                                            <h5 class="credential-link text-center" ><a href="/credential-mamrea">View More</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Team member -->
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                            <div class="mainflip">
                                <div class="frontside">
                                    <div class="card">
                                        <img src="/assets/img/Infinitech-mamAly.png" alt="Avatar" style="width:100%">
                                        <div class="team-details">
                                            <span class="team-name d-block">Allysa Perez</span>
                                            <small class="position d-block">Admin Assistant</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="backside">
                                    <div class="card">
                                        <div class="card-body text-left mt-4">
                                            <h4 class="card-title">Allysa Perez</h4>
                                            <h4 class="card-title">CREDENTIALS</h4>
                                                <p class="card-text"> (CFP)CompTIA A+ (IT support)</p>
                                                <p class="card-text">Cisco Certified Network Associate (CCNA)</p>
                                                <p class="card-text">AWS Certified Solutions Architect</p>
                                                <p class="card-text">Routing and switching technologies</p>
                                                <p class="card-text">Network access (VLANs, WLANs)</p>
                                                <p class="card-text">IP connectivity and services (NAT, DHCP)</p>
                                            <h5 class="credential-link text-center" ><a href="credential-mamaly">View More</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="row no-gutters d-flex justify-content-center">
                    <!-- Team member -->
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                            <div class="mainflip">
                                <div class="frontside">
                                    <div class="card">
                                        <img src="../assets/img/infinitech-mamAiries.png" alt="Avatar" style="width:100%">
                                        <div class="team-details">
                                            <span class="team-name d-block">Airies Asilio</span>
                                            <small class="position d-block">Marketing Head</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="backside">
                                    <div class="card">
                                        <div class="card-body text-left mt-4">
                                            <h4 class="card-title">Airies Asilio</h4>
                                            <h4 class="card-title">CREDENTIALS</h4>
                                                <p class="card-text"> (CFP)CompTIA A+ (IT support)</p>
                                                <p class="card-text">Cisco Certified Network Associate (CCNA)</p>
                                                <p class="card-text">AWS Certified Solutions Architect</p>
                                                <p class="card-text">Routing and switching technologies</p>
                                                <p class="card-text">Network access (VLANs, WLANs)</p>
                                                <p class="card-text">IP connectivity and services (NAT, DHCP)</p>
                                            <h5 class="credential-link text-center" ><a href="/credential-mamairies">View More</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Team member -->
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                            <div class="mainflip">
                                <div class="frontside">
                                    <div class="card">
                                        <img src="../assets/img/infinitech-mamApril.png" alt="Avatar" style="width:100%">
                                        <div class="team-details">
                                            <span class="team-name d-block">April  Saludares</span>
                                            <small class="position d-block">IT Supervisor</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="backside">
                                    <div class="card">
                                        <div class="card-body text-left mt-4">
                                            <h4 class="card-title">April Saludares</h4>
                                            <h4 class="card-title">CREDENTIALS</h4>
                                                <p class="card-text"> (CFP)CompTIA A+ (IT support)</p>
                                                <p class="card-text">Cisco Certified Network Associate (CCNA)</p>
                                                <p class="card-text">AWS Certified Solutions Architect</p>
                                                <p class="card-text">Routing and switching technologies</p>
                                                <p class="card-text">Network access (VLANs, WLANs)</p>
                                                <p class="card-text">IP connectivity and services (NAT, DHCP)</p>
                                            <h5 class="credential-link text-center" ><a href="/credential-sirapan">View More</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters d-flex justify-content-center">
                    <!-- Team member -->
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                            <div class="mainflip">
                                <div class="frontside">
                                    <div class="card ">
                                        <img src="../assets/img/infinitech-sirGio.png" alt="Avatar" style="width:100%">
                                        <div class="team-details">
                                            <span class="team-name d-block">Giolo Evora</span>
                                            <small class="position d-block">Senior Web Developer</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="backside">
                                    <div class="card">
                                        <div class="card-bodytext-left mt-4">
                                            <h4 class="card-title">Giolo Evora</h4>
                                            <h4 class="card-title">CREDENTIALS</h4>
                                                <p class="card-text"> (CFP)CompTIA A+ (IT support)</p>
                                                <p class="card-text">Cisco Certified Network Associate (CCNA)</p> 
                                                <p class="card-text">AWS Certified Solutions Architect</p>
                                                <p class="card-text">Routing and switching technologies</p>
                                                <p class="card-text">Network access (VLANs, WLANs)</p>
                                                <p class="card-text">IP connectivity and services (NAT, DHCP)</p>
                                            <h5 class="credential-link text-center" ><a href="/credential-sirgio">View More</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ./Team member -->
                    <!-- Team member -->
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                            <div class="mainflip">
                                <div class="frontside">
                                    <div class="card ">
                                        <img src="../assets/img/infinitech-sirJustin.png" alt="Avatar" style="width:100%">
                                        <div class="team-details">
                                            <span class="team-name d-block">Justin De Castro</span>
                                            <small class="position d-block">Senior Web Developer</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="backside">
                                    <div class="card">
                                        <div class="card-body text-left mt-4">
                                            <h4 class="card-title">Justion De Castro</h4>
                                            <h4 class="card-title">CREDENTIALS</h4>
                                                <p class="card-text"> (CFP)CompTIA A+ (IT support)</p>
                                                <p class="card-text">Cisco Certified Network Associate (CCNA)</p>
                                                <p class="card-text">AWS Certified Solutions Architect</p>
                                                <p class="card-text">Routing and switching technologies</p>
                                                <p class="card-text">Network access (VLANs, WLANs)</p>
                                                <p class="card-text">IP connectivity and services (NAT, DHCP)</p>
                                            <h5 class="credential-link text-center" ><a href="/credential-sirjustin">View More</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Team member -->
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                            <div class="mainflip">
                                <div class="frontside">
                                    <div class="card">
                                        <img src="../assets/img/infinitech-sirMoses.png" alt="Avatar" style="width:100%">
                                        <div class="team-details">
                                            <span class="team-name d-block">Moses Alcantara</span>
                                            <small class="position d-block">Senior Web Developer</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="backside">
                                    <div class="card">
                                        <div class="card-body text-left mt-4">
                                            <h4 class="card-title">Moses Alcantara</h4>
                                            <h4 class="card-title">CREDENTIALS</h4>
                                                <p class="card-text"> (CFP)CompTIA A+ (IT support)</p>
                                                <p class="card-text">Cisco Certified Network Associate (CCNA)</p>
                                                <p class="card-text">AWS Certified Solutions Architect</p>
                                                <p class="card-text">Routing and switching technologies</p>
                                                <p class="card-text">Network access (VLANs, WLANs)</p>
                                                <p class="card-text">IP connectivity and services (NAT, DHCP)</p>
                                            <h5 class="credential-link text-center" ><a href="/credential-sirmoses">View More</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters d-flex justify-content-center">
                    <!-- Team member -->
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                            <div class="mainflip">
                                <div class="frontside">
                                    <div class="card ">
                                        <img src="../assets/img/infinitech-msKim.png" alt="Avatar" style="width:100%">
                                        <div class="team-details">
                                            <span class="team-name d-block">Kimberly Niñeria</span>
                                            <small class="position d-block">Junior Web Developer</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="backside">
                                    <div class="card">
                                        <div class="card-body text-left mt-4">
                                            <h4 class="card-title">Kimberly Niñeria</h4>
                                            <h4 class="card-title">CREDENTIALS</h4>
                                                <p class="card-text">Certified Public Accountant (CPA)</p>
                                                <p class="card-text">Chartered Financial Analyst (CFA)</p>
                                                <p class="card-text">Certified Financial Planner</p>
                                                <p class="card-text"> (CFP)CompTIA A+ (IT support)</p>
                                                <p class="card-text">Cisco Certified Network Associate (CCNA)</p>
                                                <p class="card-text">AWS Certified Solutions Architect</p>
                                            <h5 class="credential-link text-center" ><a href="/credential-mskim">View More</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Team member -->
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                            <div class="mainflip">
                                <div class="frontside">
                                    <div class="card ">
                                        <img src="../assets/img/infinitech-msAngel.png" alt="Avatar" style="width:100%" onclick="showTooltip(event)">
                                        <div class="team-details">
                                            <span class="team-name d-block">Darlene Fajarito</span>
                                            <small class="position d-block">Junior Web Developer</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="backside">
                                    <div class="card">
                                        <div class="card-body text-left mt-4">
                                            <h4 class="card-title">Darlene Fajarito</h4>
                                            <h4 class="card-title">CREDENTIALS</h4>
                                            <p class="card-text">Certified Public Accountant (CPA)</p>
                                            <p class="card-text">Chartered Financial Analyst (CFA)</p>
                                            <p class="card-text">Certified Financial Planner (CFP)</p>
                                            <p class="card-text">CompTIA A+ (IT support)</p>
                                            <p class="card-text">Cisco Certified Network Associate (CCNA)</p>
                                            <p class="card-text">AWS Certified Solutions Architect</p>
                                        <h5 class="credential-link text-center" ><a href="/credential-msdarlene">View More</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Team member -->
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                            <div class="mainflip">
                                <div class="frontside">
                                    <div class="card">
                                        <img src="../assets/img/infinitech-msLyca.png" alt="Avatar" style="width:100%">
                                        <div class="team-details">
                                            <span class="team-name d-block">Lyca Nobleza</span>
                                            <small class="position d-block">Junior Web Developer</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="backside">
                                    <div class="card">
                                        <div class="card-body text-left mt-4">
                                            <h4 class="card-title">Lyca Nobleza</h4>
                                            <h4 class="card-title">CREDENTIALS</h4>
                                                <p class="card-text">Certified Public Accountant (CPA)</p>
                                                <p class="card-text">Chartered Financial Analyst (CFA)</p>
                                                <p class="card-text">Certified Financial Planner</p>
                                                <p class="card-text"> (CFP)CompTIA A+ (IT support)</p>
                                                <p class="card-text">Cisco Certified Network Associate (CCNA)</p>
                                                <p class="card-text">AWS Certified Solutions Architect</p>
                                            <h5 class="credential-link text-center" ><a href="/credential-mslyca">View More</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters d-flex justify-content-center">
                    <!-- Team member -->
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                            <div class="mainflip">
                                <div class="frontside">
                                    <div class="card ">
                                        <img src="../assets/img/infinitech-mangJun.png" alt="Avatar" style="width:100%">
                                        <div class="team-details">
                                            <span class="team-name d-block">Anthonio Sy</span>
                                            <small class="position d-block">Company Driver</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="backside">
                                    <div class="card">
                                        <div class="card-body text-left mt-4">
                                            <h4 class="card-title">Anthony Sy</h4>
                                            <h4 class="card-title">CREDENTIALS</h4>
                                                <p class="card-text">Certified Public Accountant (CPA)</p>
                                                <p class="card-text">Chartered Financial Analyst (CFA)</p>
                                                <p class="card-text">Certified Financial Planner</p>
                                                <p class="card-text"> (CFP)CompTIA A+ (IT support)</p>
                                                <p class="card-text">Cisco Certified Network Associate (CCNA)</p>
                                                <p class="card-text">AWS Certified Solutions Architect</p>
                                            <h5 class="credential-link text-center" ><a href="/credential-mangjun">View More</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Team member -->
                </div>
            </div>
        </section>
        <section class="certificates">
            <div class="container" > 
                <div class="header" style="margin-bottom:30px" data-aos="fade-up" data-aos-duration="1000">Certificates</div>
                <div class="row d-flex justify-content-center no-gutters" >
                    <div class="col-6 col-md-4 col-lg-4 cert" style="margin-right: 10px" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                      <img src="../assets/certificates/infinitech-partnership.jpg" alt="ABIC-Realty"></a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-4 cert " style="margin-left: 10px" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                      <img src="../assets/certificates/infinitech-sil.jpg" alt="ABIC-Realty"></a>
                    </div>
                </div>
            </div>

        </section>
        @include('Layout.Social')
        
        <script src="/CardWrapper.js"></script>   
    </main>

    <!-- Footer -->
    @include('Layout/Footer')

    <!-- Script -->
    @include('Layout/Script')


</body>

</html>
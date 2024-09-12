<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solutions | Infinitech Advertising Corporation | Web Developmet</title>

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
                            <h1><strong>Solutions</strong></h1>
                            <p class="sub-tagline pt-xl-5">Elevating your brand while driving health and well-being. 
                                We blend strategic insights with impactful solutions to enhance your brand and promote healthier outcomes.</p>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 d-flex justify-content-center">
                        <div class="left-content">
                            <img src="../assets/svg/solution.svg" alt="">
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
        
        {{-- <section class="coreValue">
            <div class="container">
                <div class="core-values">
                    <div class="row d-flex justify-content-center no-gutters pt-xl-5">
                        <div class="headingstyle" data-aos="fade-up" data-aos-duration="1000">
                            <h1>Solutions</h1> 
                        </div>                       
                         <div class="col-sm-12 col-md-6 col-lg-6 px-0 vm-card">
                            <div class="card" data-aos="zoom-in-up" data-aos-duration="1000">
                                <div class="card-body clickable" data-href="https://abicmanpower.com/">
                                    <span class="vm-header">Real Estate</span>
                                    <p >We support real estate agents in enhancing their sales by designing and building websites that effectively showcasetheir property listings.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 px-0 vm-card">
                            <div class="card" data-aos="zoom-in-up" data-aos-duration="1000">
                                <div class="card-body clickable" data-href="https://abicmanpower.com/">
                                    <span class="vm-header">Website for Construction</span>
                                    <p>We aid construction companies in enhancing sales and inquiries through the creation of websites that showcase their projects.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 px-0 vm-card">
                            <div class="card" data-aos="zoom-in-up" data-aos-duration="1000">
                                <div class="card-body clickable" data-href="https://dmcicorporation.com/">
                                    <span class="vm-header">Management System</span>
                                    <p>Build trust through honesty and clear communication, ensuring our clients are fully informed and transparent in our progress.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 px-0 vm-card">
                            <div class="card" data-aos="zoom-in-up" data-aos-duration="1000">
                                <div class="card-body clickable" data-href="https://abicmanpower.com/">
                                    <span class="vm-header">Manpower System</span>
                                    <p>Build trust through honesty and clear communication, ensuring our clients are fully informed and transparent in our progress.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 px-0 vm-card">
                            <div class="card" data-aos="zoom-in-up" data-aos-duration="1000">
                                <div class="card-body clickable" data-href="https://dmcicorporation.com/">
                                    <span class="vm-header">DMCI Homes Corporate Center System</span>
                                    <p>We are flexible and responsive to the changing of market dynamics, easily adpating our strategies to meet new challenges and opportunity.</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 px-0 vm-card">
                            <div class="card" data-aos="zoom-in-up" data-aos-duration="1000">
                                <div class="card-body clickable" data-href="https://dmcicorporation.com/">
                                    <span class="vm-header">Accounting Software</span>
                                    <p>The power of teamwork, fostering a collborative enviroment where ideas and expertise are share freely to achieve the best outcomes.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <div class="custom-wrap">
            <ul class="custom-portfolio">
              <li class="custom-group">
                <figure>
                  <img src="/assets/img/dmcisolution.png" alt="Realty Management" class="custom-img"/>
                  <h3>REALTY MANAGEMENT</h3>
                  <figcaption>
                    <a href="https://dmcicorporation.com/" target="_blank">View More</a>
                  </figcaption>
                </figure>
              </li>
              <li class="custom-group">
                <figure>
                  <img src="/assets/img/manpowersolution.png" alt="Manpower Management" class="custom-img"/>
                  <h3>MANPOWER MANAGEMENT</h3>
                  <figcaption>
                    <a href="https://abicmanpower.com/" target="_blank">View More</a>
                  </figcaption>
                </figure>
              </li>
              <li class="custom-group">
                <figure>
                  <img src="/assets/img/dmcisolution.png" alt="Realty Management" class="custom-img"/>
                  <h3>REALTY MANAGEMENT</h3>
                  <figcaption>
                    <a href="https://dmcicorporation.com/" target="_blank">View More</a>
                  </figcaption>
                </figure>
              </li>
            </ul>
            <ul class="custom-portfolio">
                <li class="custom-group">
                  <figure>
                    <img src="/assets/img/dmcisolution.png" alt="Realty Management" class="custom-img"/>
                    <h3>REALTY MANAGEMENT</h3>
                    <figcaption>
                      <a href="https://dmcicorporation.com/" target="_blank">View More</a>
                    </figcaption>
                  </figure>
                </li>
                <li class="custom-group">
                  <figure>
                    <img src="/assets/img/manpowersolution.png" alt="Manpower Management" class="custom-img"/>
                    <h3>MANPOWER MANAGEMENT</h3>
                    <figcaption>
                      <a href="https://abicmanpower.com/" target="_blank">View More</a>
                    </figcaption>
                  </figure>
                </li>
                <li class="custom-group">
                  <figure>
                    <img src="/assets/img/dmcisolution.png" alt="Realty Management" class="custom-img"/>
                    <h3>REALTY MANAGEMENT</h3>
                    <figcaption>
                      <a href="https://dmcicorporation.com/" target="_blank">View More</a>
                    </figcaption>
                  </figure>
                </li>
              </ul>
        </div>
          
          
        @include('Layout.Social')

    </main>

    <!-- Footer -->
    @include('Layout/Footer')

    <!-- Script -->
    @include('Layout/Script')


</body>
</html>
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
            <div class="container contact-section">

                <div class="row">
                    <div class="col-12 col-md-6">
                        <h1 class="tagline"><strong> Solutions </strong></h1>
                    </div>

                    <div class="col-12 col-md-6 d-flex justify-content-start    ">
                        <div class="left-content">
                            <img class="pricing-svg" src="../assets/svg/solution.svg" alt="'">
                        </div>
                    </div>
                </div>
            </div>

        </section>
        
        <section class="coreValue">
            <div class="container">
                <div class="core-values">
                    <div class="row d-flex justify-content-center no-gutters pt-xl-5">
                        <div class="header" style="margin-bottom:30px">Solutions</div>
                        <div class="col-sm-12 col-md-6 col-lg-6 px-0 vm-card">
                            <div class="card">
                                <div class="card-body">
                                    <span class="vm-header">Website for Real Estate</span>
                                    <p>We assist agents in boosting sales by creating websites that highlight all their properties.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 px-0 vm-card">
                            <div class="card">
                                <div class="card-body">
                                    <span class="vm-header">Website for Construction</span>
                                    <p>We aid construction companies in enhancing sales and inquiries through the creation of websites that showcase their projects.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 px-0 vm-card">
                            <div class="card">
                                <div class="card-body">
                                    <span class="vm-header">Spa Management System</span>
                                    <p>Build trust through honesty and clear communication, ensuring our clients are fully informed and transparent in our progress.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 px-0 vm-card">
                            <div class="card">
                                <div class="card-body">
                                    <span class="vm-header">Abic Manpower System</span>
                                    <p>Build trust through honesty and clear communication, ensuring our clients are fully informed and transparent in our progress.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 px-0 vm-card">
                            <div class="card">
                                <div class="card-body">
                                    <span class="vm-header">DMCI Homes Corporate Center System</span>
                                    <p>We are flexible and responsive to the changing of market dynamics, easily adpating our strategies to meet new challenges and opportunity.</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 px-0 vm-card">
                            <div class="card">
                                <div class="card-body">
                                    <span class="vm-header">Accounting Software</span>
                                    <p>We believe the power of teamwork, fostering a collborative enviroment where ideas and expertise are share freely to achieve the best outcomes.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- Footer -->
    @include('Layout/Footer')

    <!-- Script -->
    @include('Layout/Script')


</body>

</html>
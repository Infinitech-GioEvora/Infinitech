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
            <div class="container contact-section">

                <div class="row">
                    <div class="col-12 col-md-6">
                        <h1 class="tagline"><strong>Our Pricing </strong></h1>
                    </div>

                    <div class="col-12 col-md-6 d-flex justify-content-start    ">
                        <div class="left-content">
                            <img class="pricing-svg" src="../assets/svg/pricing.svg" alt="'">
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section class="pricing-section">
            <div class="container">
                <div class="pricing-head text-center">
                    <h1 class="pricing-header">Choose your right plan!</h1>
                    <small>Select from best plans, ensuring a perfect match. Need more or less?</small> <br>
                    <small>Customize your subscription for a seamless fit!</small>
                </div>
                <div class="tab d-flex justify-content-center">
                    <button class="tablinks active" onclick="openPlan(event, 'Basic')">Basic</button>
                    <button class="tablinks" onclick="openPlan(event, 'Informative')">Informative</button>
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
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, iusto quo! Dolorum, nemo eligendi aut laudantium ipsa, totam, enim deleniti ipsum dolor iste omnis error! Aliquam repellendus vero voluptatum neque.
                                    </small>
                                    <div class="plan-price pt-xl-4"><h2> &#8369;199.00  <span><small>/  month</small></span></h2></div>
                                    <hr>
                                    <div class="plan-include">
                                        <ul>
                                            <li><i class="fa-solid fa-check"></i> Plan 1</li>
                                            <li><i class="fa-solid fa-check"></i> Plan 2</li>
                                            <li><i class="fa-solid fa-check"></i> Plan 3</li>
                                            <li><i class="fa-solid fa-check"></i> Plan 4</li>
                                            <li><i class="fa-solid fa-check"></i> Plan 5</li>
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
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, iusto quo! Dolorum, nemo eligendi aut laudantium ipsa, totam, enim deleniti ipsum dolor iste omnis error! Aliquam repellendus vero voluptatum neque.
                                    </small>
                                    <div class="plan-price pt-xl-4"><h2> &#8369;199.00  <span><small>/ month</small></span></h2></div>
                                    <hr>
                                    <div class="plan-include">
                                        <ul>
                                            <li><i class="fa-solid fa-check"></i> Plan 1</li>
                                            <li><i class="fa-solid fa-check"></i> Plan 2</li>
                                            <li><i class="fa-solid fa-check"></i> Plan 3</li>
                                            <li><i class="fa-solid fa-check"></i> Plan 4</li>
                                            <li><i class="fa-solid fa-check"></i> Plan 5</li>
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
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, iusto quo! Dolorum, nemo eligendi aut laudantium ipsa, totam, enim deleniti ipsum dolor iste omnis error! Aliquam repellendus vero voluptatum neque.
                                    </small>
                                    <div class="plan-price pt-xl-4"><h2>&#8369;199.00  <span>/ month</span></h2></div>
                                    <hr>
                                    <div class="plan-include">
                                        <ul>
                                            <li><i class="fa-solid fa-check"></i> Plan 1</li>
                                            <li><i class="fa-solid fa-check"></i> Plan 2</li>
                                            <li><i class="fa-solid fa-check"></i> Plan 3</li>
                                            <li><i class="fa-solid fa-check"></i> Plan 4</li>
                                            <li><i class="fa-solid fa-check"></i> Plan 5</li>
                                        </ul>
                                    </div>
                                    <button class="btn-plan d-flex justify-content-center">See More</button>
                                </div>
                            </div>

                        </div>
                    </div>
                   </div>
                </div>

                <div id="Informative" class="tabcontent">
                    <h3>Informative</h3>
                    <p>Paris is the capital of France.</p>
                </div>

                <div id="Ecommerce" class="tabcontent">
                    <h3>eccommerce</h3>
                    <p>Tokyo is the capital of Japan.</p>
                </div>
            </div>
        </section>


    </main>

    @include('Layout/Footer')
    @include('Layout/Script')


    <script>

        function openPlan(evt, planName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            tabactive = document.getElementsByClassName("active");
            for (i = 0; i  < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(planName).style.display = "block";  
            evt.currentTarget.className += " active";
        }
    </script>



</body>

</html>
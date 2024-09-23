<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quote - Infinitech Advertising Corporation | Web Develompent</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.13/jspdf.plugin.autotable.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>

    @include('Layout/Header')
</head>

<body>
    <!-- Navigation Bar -->
    @include('Layout/Navigation')

    <main>
        <section class="hero contact-layout">
            <div class="hero-overlay"></div>
            <div class="container contact-section">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="tagline ">
                            <h1><strong>Get a Quote</strong></h1>
                            <p class="sub-tagline pt-xl-5">We specialize in crafting bespoke
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
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                    preserveAspectRatio="none">
                    <path
                        d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                        class="shape-fill"></path>
                </svg>
            </div>
        </section>

        <section class="customize-service">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h1>Customize Your Service Features to Fit Your Budget</h1>
                        <p>At Infinitech, we provide flexible options that allow you to customize various features of
                            our services. This ensures you get exactly what you need while staying within your budget.
                            Below are the key features you can customize when availing of our services:</p>
                    </div>
                    <div class="card-body">
                        <div class="customize-service-content">
                            <div class="accordion" id="accordionExample">
                                <button id="download-btn">
                                    Download PDF
                                </button>
                                <div class="total-card">
                                    <div class="total"> <strong>Total:</strong></div>
                                    <div class="total-price">0.00</div>
                                </div>
                                <div class="tab-container">
                                    <!-- Basic Tab -->
                                    <div class="tab-price">
                                        <div class="checkbox-container">
                                            <input type="checkbox" id="basic-checkbox"
                                                onchange="toggleBasicDetails(this)">
                                            <label for="basic-checkbox">Basic</label>
                                            {{-- <i class="fa-solid fa-award"></i> --}}
                                        </div>
                                        <p>15 in 1</p>
                                        <p>Function title only</p>
                                        <button class="tablinks" onclick="openCity(event, 'addons')">Details</button>
                                    </div>

                                    <!-- Standard Tab -->
                                    <div class="tab-price">
                                        <div class="checkbox-container">
                                            <input type="checkbox" id="standard-checkbox"
                                                onchange="toggleStandardDetails(this)">
                                            <label for="standard-checkbox">Standard</label>
                                            {{-- <i class="fa-solid fa-award"></i> --}}
                                        </div>
                                        <p>25 in 1</p>
                                        <p>Function title only</p>
                                        <button class="tablinks" onclick="openCity(event, 'addons')">Details</button>
                                    </div>

                                    <!-- Advance Tab -->
                                    <div class="tab-price">
                                        <div class="checkbox-container">
                                            <input type="checkbox" id="advance-checkbox"
                                                onchange="toggleAdvanceDetails(this)">
                                            <label for="advance-checkbox">Advance</label>
                                            {{-- <i class="fa-solid fa-award"></i> --}}
                                        </div>
                                        <p>35 in 1</p>
                                        <p>Function title only</p>
                                        <button class="tablinks" onclick="openCity(event, 'addons')">Details</button>
                                    </div>

                                    <!-- Premium Tab -->
                                    <div class="tab-price">
                                        <div class="checkbox-container">
                                            <input type="checkbox" id="premium-checkbox"
                                                onchange="togglePremiumDetails(this)">
                                            <label for="premium-checkbox">Premium</label>
                                            <i class="fa-sharp fa-solid fa-crown"></i>
                                        </div>
                                        <p>45 in 1</p>
                                        <p>Function title only</p>
                                        <button class="tablinks" onclick="openCity(event, 'addons')">Details</button>
                                    </div>

                                    <!-- Vip-Pro Tab -->
                                    <div class="tab-price">
                                        <div class="checkbox-container">
                                            <input type="checkbox" id="vip-checkbox" onchange="toggleVipDetails(this)">
                                            <label for="vip-checkbox">Vip-Pro</label>
                                            <i class="fa-sharp fa-solid fa-crown"></i>
                                        </div>
                                        <p>100 in 1</p>
                                        <p>Function title only</p>
                                        <button class="tablinks" onclick="openCity(event, 'addons')">Details</button>
                                    </div>
                                </div>

                                <!-- Basic Plan Details -->
                                <div id="basic-details" class="service-details">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input basic-checkbox" type="checkbox"
                                                        value="200" onchange="updateTotal()">
                                                    <label>basic 1</label>
                                                </div>
                                            </td>
                                            <td>Description of basic 1</td>
                                            <td class="text-center">200</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input basic-checkbox" type="checkbox"
                                                        value="200" onchange="updateTotal()">
                                                    <label>basic 1</label>
                                                </div>
                                            </td>
                                            <td>Description of basic 1</td>
                                            <td class="text-center">200</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input basic-checkbox" type="checkbox"
                                                        value="200" onchange="updateTotal()">
                                                    <label>basic 1</label>
                                                </div>
                                            </td>
                                            <td>Description of basic 1</td>
                                            <td class="text-center">200</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input basic-checkbox" type="checkbox"
                                                        value="200" onchange="updateTotal()">
                                                    <label>basic 1</label>
                                                </div>
                                            </td>
                                            <td>Description of basic 1</td>
                                            <td class="text-center">200</td>
                                        </tr>
                                    </table>
                                </div>
                                <!-- Standard Plan Details -->
                                <div id="standard-details" class="service-details">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input standard-checkbox" type="checkbox"
                                                        value="200" onchange="updateTotal()">
                                                    <label>Standard 1</label>
                                                </div>
                                            </td>
                                            <td>Description of Standard 1</td>
                                            <td class="text-center">200</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input standard-checkbox" type="checkbox"
                                                        value="200" onchange="updateTotal()">
                                                    <label>Standard 1</label>
                                                </div>
                                            </td>
                                            <td>Description of Standard 1</td>
                                            <td class="text-center">200</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input standard-checkbox" type="checkbox"
                                                        value="200" onchange="updateTotal()">
                                                    <label>Standard 1</label>
                                                </div>
                                            </td>
                                            <td>Description of Standard 1</td>
                                            <td class="text-center">200</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input standard-checkbox" type="checkbox"
                                                        value="200" onchange="updateTotal()">
                                                    <label>Standard 1</label>
                                                </div>
                                            </td>
                                            <td>Description of Standard 1</td>
                                            <td class="text-center">200</td>
                                        </tr>
                                    </table>
                                </div>
                                <!-- Advance Plan Details -->
                                <div id="advance-details" class="service-details">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input advance-checkbox" type="checkbox"
                                                        value="200" onchange="updateTotal()">
                                                    <label>advance 1</label>
                                                </div>
                                            </td>
                                            <td>Description of advance 1</td>
                                            <td class="text-center">200</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input advance-checkbox" type="checkbox"
                                                        value="200" onchange="updateTotal()">
                                                    <label>Advance 1</label>
                                                </div>
                                            </td>
                                            <td>Description of Advance 1</td>
                                            <td class="text-center">200</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input advance-checkbox" type="checkbox"
                                                        value="200" onchange="updateTotal()">
                                                    <label>Advance 1</label>
                                                </div>
                                            </td>
                                            <td>Description of Advance 1</td>
                                            <td class="text-center">200</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input advance-checkbox" type="checkbox"
                                                        value="200" onchange="updateTotal()">
                                                    <label>Advance 1</label>
                                                </div>
                                            </td>
                                            <td>Description of Advance 1</td>
                                            <td class="text-center">200</td>
                                        </tr>
                                    </table>
                                </div>
                                <!-- Premium Plan Details -->
                                <div id="premium-details" class="service-details">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input premium-checkbox" type="checkbox"
                                                        value="200" onchange="updateTotal()">
                                                    <label>premium 1</label>
                                                </div>
                                            </td>
                                            <td>Description of premium 1</td>
                                            <td class="text-center">200</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input premium-checkbox" type="checkbox"
                                                        value="200" onchange="updateTotal()">
                                                    <label>premium 1</label>
                                                </div>
                                            </td>
                                            <td>Description of premium 1</td>
                                            <td class="text-center">200</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input premium-checkbox" type="checkbox"
                                                        value="200" onchange="updateTotal()">
                                                    <label>premium 1</label>
                                                </div>
                                            </td>
                                            <td>Description of premium 1</td>
                                            <td class="text-center">200</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input premium-checkbox" type="checkbox"
                                                        value="200" onchange="updateTotal()">
                                                    <label>premium 1</label>
                                                </div>
                                            </td>
                                            <td>Description of premium 1</td>
                                            <td class="text-center">200</td>
                                        </tr>
                                    </table>
                                </div>
                                <!-- Vip Plan Details -->
                                <div id="vip-details" class="service-details">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input vip-checkbox" type="checkbox"
                                                        value="200" onchange="updateTotal()">
                                                    <label>vip 1</label>
                                                </div>
                                            </td>
                                            <td>Description of vip 1</td>
                                            <td class="text-center">200</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input vip-checkbox" type="checkbox"
                                                        value="200" onchange="updateTotal()">
                                                    <label>vip 1</label>
                                                </div>
                                            </td>
                                            <td>Description of vip 1</td>
                                            <td class="text-center">200</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input vip-checkbox" type="checkbox"
                                                        value="200" onchange="updateTotal()">
                                                    <label>vip 1</label>
                                                </div>
                                            </td>
                                            <td>Description of vip 1</td>
                                            <td class="text-center">200</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input vip-checkbox" type="checkbox"
                                                        value="200" onchange="updateTotal()">
                                                    <label>vip 1</label>
                                                </div>
                                            </td>
                                            <td>Description of vip 1</td>
                                            <td class="text-center">200</td>
                                        </tr>
                                    </table>
                                </div>

                                {{-- DETAILS TAB --}}
                                {{-- Add Ons --}}
                                <div id="addons" class="tabcontent">
                                    <div class="accordion" id="accordionExample">
                                        <!-- Accordion Item -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseBasic"
                                                    aria-expanded="true" aria-controls="collapseBasic">
                                                    <div class="form-check">
                                                        <label class="form-check-label"
                                                            for="flexCheckDefaultBasic">Add Ons</label>
                                                    </div>
                                                </button>
                                            </h2>
                                            <!-- Collapsible Content -->
                                            <div id="collapseBasic" class="accordion-collapse collapse show"
                                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="service-list">
                                                        <table class="table table-bordered">
                                                            <tr>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input"
                                                                            type="checkbox" value=""
                                                                            id="flexCheckLandingPageBasic">
                                                                        <label class="form-check-label"
                                                                            for="flexCheckLandingPageBasic">Landing
                                                                            Page</label>
                                                                    </div>
                                                                </td>
                                                                <td>The main entry point of the website, designed to
                                                                    capture visitor interest and drive conversions with
                                                                    engaging visuals and a clear call-to-action.</td>
                                                                <td class="text-center">500.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input"
                                                                            type="checkbox" value=""
                                                                            id="flexCheckAnotherPage">
                                                                        <label class="form-check-label"
                                                                            for="flexCheckAnotherPage">Another
                                                                            Page</label>
                                                                    </div>
                                                                </td>
                                                                <td>A secondary page that serves additional content or
                                                                    information.</td>
                                                                <td class="text-center">300.00</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        @include('Layout.Social')
    </main>



    @include('Layout.Script')

    <script src="/Price.js"></script>

    <script>
        document.getElementById("download-btn").addEventListener("click", function() {
            var element = document.querySelector(".customize-service");

            html2pdf()
                .from(element)
                .set({
                    margin: .5,
                    filename: 'customize-service.pdf',
                    image: {
                        type: 'jpeg',
                        quality: 0.98
                    },
                    html2canvas: {
                        scale: 2,
                        logging: true,
                        dpi: 192,
                        letterRendering: true
                    },
                    jsPDF: {
                        unit: 'in',
                        format: 'letter',
                        orientation: 'portrait'
                    }
                })
                .save();
        });
    </script>

</body>
@include('Layout.Footer')

</html>

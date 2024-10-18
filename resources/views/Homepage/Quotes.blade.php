 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Quote - Infinitech Advertising Corporation | Web Develompent</title>

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
             <div class="custom-shape-divider-bottom-1727154196">
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
                                 <!-- Button to trigger modal -->
                                 <button id="send-email" class="btn btn-primary">Send Result via Email</button>

                                 <!-- Email Modal -->
                                 <div id="emailModal" style="display:none;">
                                     <input type="text" id="user-email" placeholder="Enter your email" />
                                     <button id="confirm-send-email">Send Email</button>
                                     <button id="cancel-email">Cancel</button>
                                     <div id="error-message" style="color:red; display:none;"></div>
                                 </div>

                                 <!-- Hidden form for submitting email and base64 PDF -->
                                 <form id="email-form" action="/send-email" method="POST">
                                     @csrf
                                     <input type="hidden" id="email-input" name="email">
                                     <input type="hidden" id="file-input" name="file">
                                 </form>


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
                                         <div>
                                             <p><strong> FRONT END DEVELOPMENT</strong></p>
                                         </div>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input basic-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Logo Design</label>
                                                 </div>
                                             </td>
                                             <td>Receive a single custom logo design created to reflect your brand, with
                                                 your choice of colors.
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input basic-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Company Slogan</label>
                                                 </div>
                                             </td>
                                             <td>Receive 1 powerful slogan if you choose to include it in your package,
                                                 perfectly capturing your brand's essence</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input basic-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Banner</label>
                                                 </div>
                                             </td>
                                             <td>Receive 1 custom banner designed to highlight your brand on your chosen
                                                 page.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input basic-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Theme Design</label>
                                                 </div>
                                             </td>
                                             <td> Static: Enjoy a visually striking static design that captures
                                                 attention
                                                 and effectively represents your brand.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                     </table>
                                     <table class="table table-bordered">
                                         <div>
                                             <p><strong> BACK END DEVELOPMENT</strong></p>
                                         </div>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input basic-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Dashboard</label>
                                                 </div>
                                             </td>
                                             <td>An intuitive dashboard that provides an overview of key metrics and
                                                 user activities for streamlined management.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input basic-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>User Management</label>
                                                 </div>
                                             </td>
                                             <td>Manage user accounts efficiently, setting roles and permissions to
                                                 ensure secure access.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input basic-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Settings and Configuration</label>
                                                 </div>
                                             </td>
                                             <td>Customize application settings for optimal performance and user
                                                 experience.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input basic-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Notification Management</label>
                                                 </div>
                                             </td>
                                             <td>Manage notifications to keep users informed of important updates and
                                                 alerts.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input basic-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Search and Filtering</label>
                                                 </div>
                                             </td>
                                             <td>Implement advanced search and filtering options to enhance content
                                                 discoverability.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input basic-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Feedback and User Insights</label>
                                                 </div>
                                             </td>
                                             <td>Collect and analyze user feedback to improve service offerings and user
                                                 experience.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input basic-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Login and Register</label>
                                                 </div>
                                             </td>
                                             <td>Secure login and registration processes to manage user access
                                                 effectively.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input basic-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>User Login</label>
                                                 </div>
                                             </td>
                                             <td>Streamlined user login experience for quick access to your application.
                                             </td>
                                             <td class="text-center">200</td>
                                         </tr>
                                     </table>

                                 </div>
                                 <!-- Standard Plan Details -->
                                 <div id="standard-details" class="service-details">
                                     <div>
                                         <p><strong> FRONT END DEVELOPMENT</strong></p>
                                     </div>
                                     <table class="table table-bordered">
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input standard-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Logo Design</label>
                                                 </div>
                                             </td>
                                             <td> We'll create two custom logo designs if you choose to include a logo
                                                 in
                                                 your package, with the option to select your preferred colors.</td>
                                             </td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input standard-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Company Slogan</label>
                                                 </div>
                                             </td>
                                             <td>Choose from 2 compelling slogans when you avail the package, crafted to
                                                 resonate with your brand's message.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input standard-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Banner</label>
                                                 </div>
                                             </td>
                                             <td>Receive 1 custom banner designed to highlight your brand on your chosen
                                                 page.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input standard-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Theme Design</label>
                                                 </div>
                                             </td>
                                             <td>Static: Enjoy a visually striking static design that captures attention
                                                 and effectively represents your brand.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                     </table>
                                     <table class="table table-bordered">
                                         <div>
                                             <p><strong> BACK END DEVELOPMENT</strong></p>
                                         </div>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input standard-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Dashboard</label>
                                                 </div>
                                             </td>
                                             <td>An intuitive dashboard providing an overview of key metrics and user
                                                 activities for easy management.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input standard-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>User Management</label>
                                                 </div>
                                             </td>
                                             <td>Efficiently manage user accounts, roles, and permissions to ensure
                                                 secure access to your platform.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input standard-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Settings and Configuration</label>
                                                 </div>
                                             </td>
                                             <td>Customize settings for optimal configuration tailored to your
                                                 application needs.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input standard-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Notification Management</label>
                                                 </div>
                                             </td>
                                             <td>Manage notifications effectively to keep users informed about important
                                                 updates and alerts.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input standard-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Data Import and Export</label>
                                                 </div>
                                             </td>
                                             <td>Facilitate seamless data import and export to streamline data
                                                 management processes.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input standard-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Login History</label>
                                                 </div>
                                             </td>
                                             <td>Maintain a record of user login activities to enhance security and user
                                                 management.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input standard-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Search and Filtering</label>
                                                 </div>
                                             </td>
                                             <td>Implement advanced search and filtering options to help users quickly
                                                 find relevant content.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input standard-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Feedback and User Insights</label>
                                                 </div>
                                             </td>
                                             <td>Collect and analyze user feedback to continuously improve services and
                                                 user experience.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input standard-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Login and Register</label>
                                                 </div>
                                             </td>
                                             <td>Secure login and registration processes to manage user access
                                                 effectively.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input standard-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>User Login</label>
                                                 </div>
                                             </td>
                                             <td>Simplified user login experience for quick access to your application.
                                             </td>
                                             <td class="text-center">200</td>
                                         </tr>
                                     </table>

                                 </div>
                                 <!-- Advance Plan Details -->
                                 <div id="advance-details" class="service-details">
                                     <table class="table table-bordered">
                                         <div>
                                             <p><strong> FRONT END DEVELOPMENT</strong></p>
                                         </div>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input advance-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Logo Design</label>
                                                 </div>
                                             </td>
                                             <td>Get four unique logo design options, allowing you to choose the best
                                                 fit
                                                 for your brand, with your preferred color choices.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input advance-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Company Slogan</label>
                                                 </div>
                                             </td>
                                             <td>Get 4 creative slogan options with your package, each representing your
                                                 brand identity.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input advance-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Banner</label>
                                                 </div>
                                             </td>
                                             <td>Get 2 unique banners for different pages, each crafted to enhance your
                                                 brand’s visibility.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input advance-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Theme Design</label>
                                                 </div>
                                             </td>
                                             <td>Hover Effect: Enhance user interaction with dynamic hover effects that
                                                 bring your design to life, adding a layer of engagement and
                                                 sophistication.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                     </table>
                                     <table class="table table-bordered">
                                         <div>
                                             <p><strong> BACK END DEVELOPMENT</strong></p>
                                         </div>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input advance-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Dashboard</label>
                                                 </div>
                                             </td>
                                             <td>An intuitive dashboard providing real-time insights into key metrics
                                                 and user activity.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input advance-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>User Management</label>
                                                 </div>
                                             </td>
                                             <td>Manage user profiles, roles, and permissions efficiently to ensure
                                                 secure access to your platform.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input advance-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Analytics and Reports</label>
                                                 </div>
                                             </td>
                                             <td>Comprehensive analytics and reporting tools to track performance and
                                                 user engagement.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input advance-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>System Monitoring</label>
                                                 </div>
                                             </td>
                                             <td>Real-time system monitoring to identify issues quickly and maintain
                                                 optimal performance.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input advance-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Settings and Configuration</label>
                                                 </div>
                                             </td>
                                             <td>Flexible settings for configuration to customize your application
                                                 according to specific needs.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input advance-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Notification Management</label>
                                                 </div>
                                             </td>
                                             <td>Manage user notifications efficiently to keep them informed about
                                                 important updates.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input advance-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Security Management</label>
                                                 </div>
                                             </td>
                                             <td>Implement robust security measures to protect user data and ensure
                                                 application integrity.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input advance-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Data Import and Export</label>
                                                 </div>
                                             </td>
                                             <td>Facilitate seamless data import and export processes for easier data
                                                 management.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input advance-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Login History</label>
                                                 </div>
                                             </td>
                                             <td>Maintain a record of user login history for enhanced security and
                                                 tracking purposes.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input advance-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Search and Filtering</label>
                                                 </div>
                                             </td>
                                             <td>Advanced search and filtering options to help users quickly find
                                                 relevant content.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input advance-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Feedback and User Insights</label>
                                                 </div>
                                             </td>
                                             <td>Collect valuable feedback and insights from users to continuously
                                                 improve your services.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input advance-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Login and Register</label>
                                                 </div>
                                             </td>
                                             <td>Secure login and registration processes to manage user access and data
                                                 integrity.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input advance-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>User Login</label>
                                                 </div>
                                             </td>
                                             <td>Streamlined user login experience for quick access to your application.
                                             </td>
                                             <td class="text-center">200</td>
                                         </tr>
                                     </table>

                                 </div>
                                 <!-- Premium Plan Details -->
                                 <div id="premium-details" class="service-details">
                                     <table class="table table-bordered">
                                         <div>
                                             <p><strong> FRONT END DEVELOPMENT</strong></p>
                                         </div>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input premium-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Logo Design</label>
                                                 </div>
                                             </td>
                                             <td>Enjoy six distinct logo design concepts, each tailored to your vision,
                                                 with full control over the color scheme.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input premium-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Company Slogan</label>
                                                 </div>
                                             </td>
                                             <td>Enjoy 6 unique slogan ideas when you opt for the package, reflecting
                                                 your brand’s core values.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input premium-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Banner</label>
                                                 </div>
                                             </td>
                                             <td>Different Banner on All Pages: We will design a distinct banner for
                                                 each
                                                 page, ensuring a cohesive yet personalized look across your website.
                                             </td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input premium-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Theme Design</label>
                                                 </div>
                                             </td>
                                             <td>Hover Effect: Enhance user interaction with dynamic hover effects that
                                                 bring your design to life, adding a layer of engagement and
                                                 sophistication.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input premium-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Embedded Google Map</label>
                                                 </div>
                                             </td>
                                             <td>Integrate an embedded Google Map to your website, allowing visitors to
                                                 easily locate your business. This interactive feature provides
                                                 real-time
                                                 navigation, ensuring your customers can find you effortlessly.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                     </table>
                                     <table class="table table-bordered">
                                         <div>
                                             <p><strong> BACK END DEVELOPMENT</strong></p>
                                         </div>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input premium-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Dashboard</label>
                                                 </div>
                                             </td>
                                             <td>A comprehensive dashboard providing an overview of key metrics and
                                                 performance indicators for your application.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input premium-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>User Management</label>
                                                 </div>
                                             </td>
                                             <td>Efficient management of user accounts, roles, and permissions to
                                                 streamline user access and security.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input premium-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Analytics and Reports</label>
                                                 </div>
                                             </td>
                                             <td>Advanced analytics and reporting features to track user behavior and
                                                 application performance over time.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input premium-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>System Monitoring</label>
                                                 </div>
                                             </td>
                                             <td>Real-time monitoring of system performance and health to ensure optimal
                                                 operation and quick issue resolution.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input premium-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Settings and Configuration</label>
                                                 </div>
                                             </td>
                                             <td>Flexible settings and configuration options to tailor the application
                                                 to your specific needs.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input premium-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Workflow Automation</label>
                                                 </div>
                                             </td>
                                             <td>Automate repetitive tasks and workflows to improve efficiency and
                                                 reduce manual effort.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input premium-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Notification Management</label>
                                                 </div>
                                             </td>
                                             <td>Manage notifications effectively to keep users informed of important
                                                 updates and alerts.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input premium-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Security Management</label>
                                                 </div>
                                             </td>
                                             <td>Implement robust security measures to protect user data and prevent
                                                 unauthorized access.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input premium-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Help and Support</label>
                                                 </div>
                                             </td>
                                             <td>Accessible help and support options for users to resolve issues and
                                                 answer queries.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input premium-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Multi-Language Support</label>
                                                 </div>
                                             </td>
                                             <td>Support for multiple languages to cater to a diverse user base and
                                                 enhance accessibility.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input premium-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Data Import and Export</label>
                                                 </div>
                                             </td>
                                             <td>Easy data import and export features to facilitate seamless data
                                                 transfer and management.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input premium-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Login History</label>
                                                 </div>
                                             </td>
                                             <td>Track user login history for better security and user management
                                                 insights.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input premium-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Search and Filtering</label>
                                                 </div>
                                             </td>
                                             <td>Advanced search and filtering capabilities to help users easily find
                                                 what they need.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input premium-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Feedback and User Insights</label>
                                                 </div>
                                             </td>
                                             <td>Collect feedback and insights from users to improve services and user
                                                 satisfaction.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input premium-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Login and Register</label>
                                                 </div>
                                             </td>
                                             <td>Secure login and registration features to manage user access
                                                 effectively.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input premium-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>User Login</label>
                                                 </div>
                                             </td>
                                             <td>Streamlined user login processes for a smooth user experience.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                     </table>

                                 </div>
                                 <!-- Vip Plan Details -->
                                 <div id="vip-details" class="service-details">
                                     <table class="table table-bordered">
                                         <div>
                                             <p><strong> FRONT END DEVELOPMENT</strong></p>
                                         </div>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input vip-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Logo Design</label>
                                                 </div>
                                             </td>
                                             <td>Choose from nine diverse logo design ideas, each crafted to align with
                                                 your brand, and customize the colors to suit your style.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input vip-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Company Slogan</label>
                                                 </div>
                                             </td>
                                             <td>Receive 9 distinctive slogan concepts as part of your package, each
                                                 tailored to match your brand’s voice and vision.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input vip-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Banner</label>
                                                 </div>
                                             </td>
                                             <td>Different Banner on All Pages: We will design a distinct banner for
                                                 each
                                                 page, ensuring a cohesive yet personalized look across your website.
                                             </td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input vip-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Theme Design</label>
                                                 </div>
                                             </td>
                                             <td>Hover Effect: Enhance user interaction with dynamic hover effects that
                                                 bring your design to life, adding a layer of engagement and
                                                 sophistication.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input vip-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Embedded Google Map</label>
                                                 </div>
                                             </td>
                                             <td>Integrate an embedded Google Map to your website, allowing visitors to
                                                 easily locate your business. This interactive feature provides
                                                 real-time
                                                 navigation, ensuring your customers can find you effortlessly.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                     </table>
                                     <table class="table table-bordered">
                                         <div>
                                             <p><strong> BACK END DEVELOPMENT</strong></p>
                                         </div>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input vip-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Dashboard</label>
                                                 </div>
                                             </td>
                                             <td>A comprehensive dashboard providing an overview of key metrics and
                                                 performance indicators for your application.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input vip-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>User Management</label>
                                                 </div>
                                             </td>
                                             <td>Efficient management of user accounts, roles, and permissions to
                                                 streamline user access and security.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input vip-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Analytics and Reports</label>
                                                 </div>
                                             </td>
                                             <td>Advanced analytics and reporting features to track user behavior and
                                                 application performance over time.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input vip-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>System Monitoring</label>
                                                 </div>
                                             </td>
                                             <td>Real-time monitoring of system performance and health to ensure optimal
                                                 operation and quick issue resolution.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input vip-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Settings and Configuration</label>
                                                 </div>
                                             </td>
                                             <td>Flexible settings and configuration options to tailor the application
                                                 to your specific needs.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input vip-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Workflow Automation</label>
                                                 </div>
                                             </td>
                                             <td>Automate repetitive tasks and workflows to improve efficiency and
                                                 reduce manual effort.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input vip-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Notification Management</label>
                                                 </div>
                                             </td>
                                             <td>Manage notifications effectively to keep users informed of important
                                                 updates and alerts.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input vip-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Security Management</label>
                                                 </div>
                                             </td>
                                             <td>Implement robust security measures to protect user data and prevent
                                                 unauthorized access.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input vip-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Backup and Recovery</label>
                                                 </div>
                                             </td>
                                             <td>Regular backup solutions and recovery processes to safeguard your data
                                                 against loss.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input vip-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Audit Logs</label>
                                                 </div>
                                             </td>
                                             <td>Maintain detailed audit logs for tracking changes and user activity
                                                 within the system.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input vip-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Help and Support</label>
                                                 </div>
                                             </td>
                                             <td>Accessible help and support options for users to resolve issues and
                                                 answer queries.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input vip-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Multi-Language Support</label>
                                                 </div>
                                             </td>
                                             <td>Support for multiple languages to cater to a diverse user base and
                                                 enhance accessibility.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input vip-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Data Import and Export</label>
                                                 </div>
                                             </td>
                                             <td>Easy data import and export features to facilitate seamless data
                                                 transfer and management.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input vip-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Login History</label>
                                                 </div>
                                             </td>
                                             <td>Track user login history for better security and user management
                                                 insights.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input vip-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Search and Filtering</label>
                                                 </div>
                                             </td>
                                             <td>Advanced search and filtering capabilities to help users easily find
                                                 what they need.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input vip-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Feedback and User Insights</label>
                                                 </div>
                                             </td>
                                             <td>Collect feedback and insights from users to improve services and user
                                                 satisfaction.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input vip-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Login and Register</label>
                                                 </div>
                                             </td>
                                             <td>Secure login and registration features to manage user access
                                                 effectively.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input vip-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>User Login</label>
                                                 </div>
                                             </td>
                                             <td>Streamlined user login processes for a smooth user experience.</td>
                                             <td class="text-center">200</td>
                                         </tr>
                                         <tr>   
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input vip-checkbox" type="checkbox"
                                                         value="200" onchange="updateTotal()">
                                                     <label>Account Management</label>
                                                 </div>
                                             </td>
                                             <td>Comprehensive account management features for users to control their
                                                 settings and preferences.</td>
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
                                                             <div class="addons-title">
                                                                 <p> <strong>Customizable Theme</strong></p>
                                                             </div>
                                                             <tr>
                                                                 <td>
                                                                     <div class="form-check">
                                                                         <input class="form-check-input"
                                                                             type="checkbox" value=""
                                                                             id="flexCheckDynamicDesign">
                                                                         <label class="form-check-label"
                                                                             for="flexCheckDynamicDesign">Dynamic
                                                                             Design</label>
                                                                     </div>
                                                                 </td>
                                                                 <td>A design that adapts based on user interactions and
                                                                     content, providing a personalized experience.</td>
                                                                 <td class="text-center">500.00</td>
                                                             </tr>
                                                             <tr>
                                                                 <td>
                                                                     <div class="form-check">
                                                                         <input class="form-check-input"
                                                                             type="checkbox" value=""
                                                                             id="flexCheckAnimatedDesign">
                                                                         <label class="form-check-label"
                                                                             for="flexCheckAnimatedDesign">Animated
                                                                             Design</label>
                                                                     </div>
                                                                 </td>
                                                                 <td>Design elements that include animations, enhancing
                                                                     user engagement and making the interface more
                                                                     interactive.</td>
                                                                 <td class="text-center">600.00</td>
                                                             </tr>
                                                             <tr>
                                                                 <td>
                                                                     <div class="form-check">
                                                                         <input class="form-check-input"
                                                                             type="checkbox" value=""
                                                                             id="flexCheck3DDesign">
                                                                         <label class="form-check-label"
                                                                             for="flexCheck3DDesign">3D Design</label>
                                                                     </div>
                                                                 </td>
                                                                 <td>Three-dimensional design elements that create depth
                                                                     and realism, elevating the visual appeal of your
                                                                     website.</td>
                                                                 <td class="text-center">700.00</td>
                                                             </tr>
                                                             <tr>
                                                                 <td>
                                                                     <div class="form-check">
                                                                         <input class="form-check-input"
                                                                             type="checkbox" value=""
                                                                             id="flexCheckHoverEffects">
                                                                         <label class="form-check-label"
                                                                             for="flexCheckHoverEffects">Hover
                                                                             Effects</label>
                                                                     </div>
                                                                 </td>
                                                                 <td>Interactive effects that occur when users hover
                                                                     over
                                                                     elements, enhancing engagement and usability.</td>
                                                                 <td class="text-center">400.00</td>
                                                             </tr>
                                                             <tr>
                                                                 <td>
                                                                     <div class="form-check">
                                                                         <input class="form-check-input"
                                                                             type="checkbox" value=""
                                                                             id="flexCheckTranslation">
                                                                         <label class="form-check-label"
                                                                             for="flexCheckTranslation">Translation</label>
                                                                     </div>
                                                                 </td>
                                                                 <td>Multilingual support to reach a wider audience,
                                                                     making your website accessible to non-native
                                                                     speakers.</td>
                                                                 <td class="text-center">300.00</td>
                                                             </tr>
                                                             <tr>
                                                                 <td>
                                                                     <div class="form-check">
                                                                         <input class="form-check-input"
                                                                             type="checkbox" value=""
                                                                             id="flexCheckDynamicContent">
                                                                         <label class="form-check-label"
                                                                             for="flexCheckDynamicContent">Dynamic
                                                                             Content</label>
                                                                     </div>
                                                                 </td>
                                                                 <td>Content that changes based on user behavior or
                                                                     preferences, providing a tailored browsing
                                                                     experience.</td>
                                                                 <td class="text-center">500.00</td>
                                                             </tr>
                                                             <tr>
                                                                 <td>
                                                                     <div class="form-check">
                                                                         <input class="form-check-input"
                                                                             type="checkbox" value=""
                                                                             id="flexCheckLoadingIndicator">
                                                                         <label class="form-check-label"
                                                                             for="flexCheckLoadingIndicator">Loading
                                                                             Indicator</label>
                                                                     </div>
                                                                 </td>
                                                                 <td>A visual cue that informs users that content is
                                                                     loading, improving user experience during
                                                                     transitions.</td>
                                                                 <td class="text-center">200.00</td>
                                                             </tr>
                                                             <tr>
                                                                 <td>
                                                                     <div class="form-check">
                                                                         <input class="form-check-input"
                                                                             type="checkbox" value=""
                                                                             id="flexCheckToggleSwitch">
                                                                         <label class="form-check-label"
                                                                             for="flexCheckToggleSwitch">Toggle Switch
                                                                             (Darkmode and Lightmode)</label>
                                                                     </div>
                                                                 </td>
                                                                 <td>A switch that allows users to toggle between dark
                                                                     and light modes for a customizable viewing
                                                                     experience.</td>
                                                                 <td class="text-center">250.00</td>
                                                             </tr>
                                                         </table>
                                                         <table class="table table-bordered">
                                                             <div class="addons-title">
                                                                 <p><strong>Social Media Integration</strong></p>
                                                             </div>
                                                             <tr>
                                                                 <td>
                                                                     <div class="form-check">
                                                                         <input class="form-check-input"
                                                                             type="checkbox" value=""
                                                                             id="flexCheckFacebook">
                                                                         <label class="form-check-label"
                                                                             for="flexCheckFacebook">Facebook</label>
                                                                     </div>
                                                                 </td>
                                                                 <td>Seamlessly connect your website with Facebook to
                                                                     share content, grow your audience, and increase
                                                                     engagement.</td>
                                                                 <td class="text-center">300.00</td>
                                                             </tr>
                                                             <tr>
                                                                 <td>
                                                                     <div class="form-check">
                                                                         <input class="form-check-input"
                                                                             type="checkbox" value=""
                                                                             id="flexCheckInstagram">
                                                                         <label class="form-check-label"
                                                                             for="flexCheckInstagram">Instagram</label>
                                                                     </div>
                                                                 </td>
                                                                 <td>Integrate Instagram to showcase your photos,
                                                                     videos, and stories directly on your website.</td>
                                                                 <td class="text-center">300.00</td>
                                                             </tr>
                                                             <tr>
                                                                 <td>
                                                                     <div class="form-check">
                                                                         <input class="form-check-input"
                                                                             type="checkbox" value=""
                                                                             id="flexCheckTwitter">
                                                                         <label class="form-check-label"
                                                                             for="flexCheckTwitter">Twitter</label>
                                                                     </div>
                                                                 </td>
                                                                 <td>Embed Twitter feeds and engage with your audience
                                                                     in real time directly from your website.</td>
                                                                 <td class="text-center">250.00</td>
                                                             </tr>
                                                             <tr>
                                                                 <td>
                                                                     <div class="form-check">
                                                                         <input class="form-check-input"
                                                                             type="checkbox" value=""
                                                                             id="flexCheckTiktok">
                                                                         <label class="form-check-label"
                                                                             for="flexCheckTiktok">TikTok</label>
                                                                     </div>
                                                                 </td>
                                                                 <td>Connect with TikTok to share engaging videos and
                                                                     grow your brand’s presence through popular content.
                                                                 </td>
                                                                 <td class="text-center">350.00</td>
                                                             </tr>
                                                             <tr>
                                                                 <td>
                                                                     <div class="form-check">
                                                                         <input class="form-check-input"
                                                                             type="checkbox" value=""
                                                                             id="flexCheckReddit">
                                                                         <label class="form-check-label"
                                                                             for="flexCheckReddit">Reddit</label>
                                                                     </div>
                                                                 </td>
                                                                 <td>Integrate Reddit to participate in communities and
                                                                     discussions relevant to your business.</td>
                                                                 <td class="text-center">200.00</td>
                                                             </tr>
                                                             <tr>
                                                                 <td>
                                                                     <div class="form-check">
                                                                         <input class="form-check-input"
                                                                             type="checkbox" value=""
                                                                             id="flexCheckLinkedIn">
                                                                         <label class="form-check-label"
                                                                             for="flexCheckLinkedIn">LinkedIn</label>
                                                                     </div>
                                                                 </td>
                                                                 <td>LinkedIn integration to showcase your professional
                                                                     network and build business connections directly
                                                                     from your site.</td>
                                                                 <td class="text-center">300.00</td>
                                                             </tr>
                                                             <tr>
                                                                 <td>
                                                                     <div class="form-check">
                                                                         <input class="form-check-input"
                                                                             type="checkbox" value=""
                                                                             id="flexCheckOther">
                                                                         <label class="form-check-label"
                                                                             for="flexCheckOther">Other Social Media
                                                                             Platforms</label>
                                                                     </div>
                                                                 </td>
                                                                 <td>Integrate any other social media platform to expand
                                                                     your reach and engagement with diverse audiences.
                                                                 </td>
                                                                 <td class="text-center">200.00</td>
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
     {{-- PDF --}}
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

     {{-- Email --}}
     <script>
         document.getElementById("send-email").addEventListener("click", function() {
             document.getElementById("emailModal").style.display = "block";
         });

         document.getElementById("confirm-send-email").addEventListener("click", function() {
             var userEmail = document.getElementById("user-email").value;

             if (userEmail) {
                 document.getElementById("error-message").style.display = "none";

                 var element = document.querySelector(".customize-service");

                 html2pdf().from(element).toPdf().output('blob').then(function(pdfBlob) {
                     var reader = new FileReader();
                     reader.onloadend = function() {
                         var base64data = reader.result.split(',')[1];

                         var emailInput = document.getElementById("email-input");
                         var fileInput = document.getElementById("file-input");

                         if (emailInput && fileInput) {
                             emailInput.value = userEmail;
                             fileInput.value = base64data;

                             document.getElementById("email-form").submit();
                         } else {
                             console.error("Hidden form inputs not found.");
                         }
                     };

                     reader.readAsDataURL(pdfBlob);
                 }).catch(function(error) {
                     console.error("Error creating PDF: ", error);
                     document.getElementById("error-message").textContent = "Error generating PDF.";
                 });
             } else {
                 alert("Please enter your email address.");
             }
         });

         document.getElementById("cancel-email").addEventListener("click", function() {
             document.getElementById("user-email").value = "";
             document.getElementById("emailModal").style.display = "none";
         });
     </script>






 </body>
 @include('Layout.Footer')

 </html>

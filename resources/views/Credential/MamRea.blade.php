<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credential - Infinitech Advertising Corporation</title>

    @include('Layout/Header')
    

    
    
</head>

<body>
     <main>
        <section class="hero contact-layout">
          <div class="hero-overlay"></div>
          <button id="myButton"></button>
            <div class="container contact-section">

                <div class="row">
                  <div class="col-12 col-md-12 col-lg-6">
                    <div class="right-content">
                        <div class="employee-details mb-4">
                            <h1 class="employee-name">{{ $record->firstname }} {{ $record->lastname }}</h1>
                            <h2 class="employee-position mb-4">{{ $record->position }}</h2>
                        </div>
                
                        <div class="employee-contact mb-4">
                            <div class="location">
                                <b>Office Address:</b> Unit 311, Campos Rueda Bldg., Urban Avenue, Makati City
                            </div>
                            <div class="mobile-number">
                                <b>Mobile No.:</b>
                                <a href="tel:{{ $record->phone }}">(+63){{ $record->phone }}</a>
                            </div>
                            <div class="tel">
                                <b>Telephone No.:</b> (02) 7001-6157
                            </div>
                            <div class="website">
                                <b>Website:</b>
                                <a href="https://infinitechphil.com/" target="_blank">www.infinitechphil.com</a>
                            </div>
                        </div>
                
                        <div class="contacts mb-4">
                            <form method="get" action="/download-vcard">
                                <button type="submit">
                                    <i class="fa-solid fa-id-card"></i>
                                    <span>Add to contacts</span>
                                </button>
                                <input type="hidden" name="id" value="{{ $record->employeeID }}">
                            </form>
                        </div>
                
                        <div class="employee-social mb-xl-5 d-flex">
                          <div class="social facebook" data-bs-toggle="tooltip" data-bs-placement="top"
                              data-bs-custom-class="custom-tooltip" data-bs-title="Facebook">
                              <a href="{{ $record->facebook }}" target="_blank">
                                  <i class="fa-brands fa-facebook"></i>
                              </a>
                          </div>

                          <div class="social telegram" data-bs-toggle="tooltip" data-bs-placement="top"
                              data-bs-custom-class="custom-tooltip" data-bs-title="Telegram">
                              <a href="https://t.me/+63{{ $record->telegram }}" target="_blank">
                                  <i class="fa-brands fa-telegram"></i>
                              </a>
                          </div>

                          <div class="social telegram" data-bs-toggle="tooltip" data-bs-placement="top"
                              data-bs-custom-class="custom-tooltip" data-bs-title="Wechat">
                              <a type="button" class=" btn-wechat" data-bs-toggle="modal"
                                  data-bs-target="#exampleModal">
                                  <i class="fa-brands fa-weixin"></i>
                              </a>
                          </div>

                          <div class="social viber" data-bs-toggle="tooltip" data-bs-placement="top"
                              data-bs-custom-class="custom-tooltip" data-bs-title="Viber">
                              <a href="{{ $record->viber }}" target="_blank"><i class="fa-brands fa-viber"></i></a>
                              {{-- <a href="viber://chat?number={{ $record->viber}}"><i class="fa-brands fa-viber"></i></a> --}}
                          </div>

                          <div class="social whatsapp" data-bs-toggle="tooltip" data-bs-placement="top"
                              data-bs-custom-class="custom-tooltip" data-bs-title="WhatsApp">
                              <a href="https://wa.me/{{ $record->whatsapp }}" target="_blank"><i
                                      class="fa-brands fa-whatsapp"></i></a>
                          </div>

                      </div>
                    </div>
                </div>

                    <div class="col-12 col-md-12 col-lg-6">
                      <div class="left-content">
                            <div class="slider">
                                <div class="item">
                                    <img src="/assets/img/cred/r1.png">
                                </div>
                                <div class="item">
                                    <img src="/assets/img/cred/r2.png" >
                                </div>
                                <div class="item">
                                    <img src="/assets/img/cred/r3.png">
                                </div>
                                <div class="item">
                                    <img src="/assets/img/cred/r4.png">
                                </div>
                                <div class="item">
                                    <img src="/assets/img/cred/r5.png" >
                                </div>
                                <div class="item">
                                  <img src="/assets/img/cred/r1.png">
                                </div>
                                <div class="item">
                                    <img src="/assets/img/cred/r2.png" >
                                </div>
                                <div class="item">
                                    <img src="/assets/img/cred/r3.png">
                                </div>
                                <div class="item">
                                    <img src="/assets/img/cred/r4.png">
                                </div>
                                <div class="item">
                                    <img src="/assets/img/cred/r5.png" >
                                </div>
                                <button id="next">></button>
                                <button id="prev"><</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="gallery">
          <div class="container">
            <div id="image-gallery">
              <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
                  <div class="img-wrapper">
                    <a href="https://www.viit.ac.in/images/Campus-life/Institute-Innovation-Council/Certificate-2020-21.png"><img src="https://www.viit.ac.in/images/Campus-life/Institute-Innovation-Council/Certificate-2020-21.png" class="img-responsive"></a>
                    <div class="img-overlay">
                      <i class="fa fa-plus-circle" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
                  <div class="img-wrapper">
                    <a href="https://edit.org/images/cat/diplomas-certificates-big-2020042416.jpg"><img src="https://edit.org/images/cat/diplomas-certificates-big-2020042416.jpg" class="img-responsive"></a>
                    <div class="img-overlay">
                      <i class="fa fa-plus-circle" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
                  <div class="img-wrapper">
                    <a href="https://d3s6gs1cfdg3qb.cloudfront.net/files/95633c9c3482e975719cf0adf923831bec55cc747adc5ced79043941730da2c3.jpg"><img src="https://d3s6gs1cfdg3qb.cloudfront.net/files/95633c9c3482e975719cf0adf923831bec55cc747adc5ced79043941730da2c3.jpg" class="img-responsive"></a>
                    <div class="img-overlay">
                      <i class="fa fa-plus-circle" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
                  <div class="img-wrapper">
                    <a href="https://png.pngtree.com/png-clipart/20220430/original/pngtree-diploma-certificate-template-png-image_7598348.png"><img src="https://png.pngtree.com/png-clipart/20220430/original/pngtree-diploma-certificate-template-png-image_7598348.png" class="img-responsive"></a>
                    <div class="img-overlay">
                      <i class="fa fa-plus-circle" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
                  <div class="img-wrapper">
                    <a href="https://suneducationgroup.com/wp-content/uploads/2023/12/CONTOH-POSTGRADUATE-CERTIFICATE-1024x730.jpg.webp"><img src="https://suneducationgroup.com/wp-content/uploads/2023/12/CONTOH-POSTGRADUATE-CERTIFICATE-1024x730.jpg.webp" class="img-responsive"></a>
                    <div class="img-overlay">
                      <i class="fa fa-plus-circle" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
                  <div class="img-wrapper">
                    <a href="https://www.4icu.org/i/programs-courses-degrees/master-of-education-in-ict-500x356.png"><img src="https://www.4icu.org/i/programs-courses-degrees/master-of-education-in-ict-500x356.png " class="img-responsive"></a>
                    <div class="img-overlay">
                      <i class="fa fa-plus-circle" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
                  <div class="img-wrapper">
                    <a href="https://www.4icu.org/i/programs-courses-degrees/master-of-applied-computer-science-500x356.png"><img src="https://www.4icu.org/i/programs-courses-degrees/master-of-applied-computer-science-500x356.png" class="img-responsive"></a>
                    <div class="img-overlay">
                      <i class="fa fa-plus-circle" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
                  <div class="img-wrapper">
                    <a href="https://www.4icu.org/i/programs-courses-degrees/master-of-history-500x356.png"><img src="https://www.4icu.org/i/programs-courses-degrees/master-of-history-500x356.png" class="img-responsive"></a>
                    <div class="img-overlay">
                      <i class="fa fa-plus-circle" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div><!-- End row -->
            </div><!-- End image gallery -->
          </div><!-- End container --> 
          </section>

        @include('Layout.Social')
    </main>
    <script src="/Slider.js"></script>
</body>
@include('Layout.Script')
@include('Layout.Footer')

</html>

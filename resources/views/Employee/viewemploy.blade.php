@extends('Layout.Layouts')

@section('title', 'Infinitech Advertising Corporation')@show

@section('content')
    <main>
        <section class="main-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-5 mb-4">
                        <div class="left-content text-center">
                            <img src="/profiles/{{ $record->profile }}" alt="{{ $record->profile }}">
                        </div>
                    </div>
                    <div class="col-12 col-md-7 mb-4">
                        <div class="right-content ">
                            <div class="employee-details mb-4">
                                <h1 class="employee-name">{{ $record->firstname }} {{ $record->lastname }}</h1>
                                <h2 class="employee-position mb-4">{{ $record->position }}</h2>
                                <p class="employee-desc">{{ $record->description }}</p>
                            </div>

                            <div class="employee-contact mb-4">
                                <div class="location"><b>Office Address:</b> Unit 311, Campos Rueda Bldg., Urban Avenue,
                                    Makati City
                                </div>
                                <div class="mobile-number"><b>Mobile No.:</b>{{ $record->phone }}</div>
                                <div class="tel"><b>Telephone No.:</b> (02) 7001-6157</div>
                                <div class="website"><b>Website:</b> www.infinitech.com</div>
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
                                    <a href="{{ $record->facebook }}">
                                        <i class="fa-brands fa-facebook"></i>
                                    </a>
                                </div>

                                <div class="social telegram" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-custom-class="custom-tooltip" data-bs-title="Telegram">
                                    <a href="https://t.me/+63{{ $record->telegram }}">
                                        <i class="fa-brands fa-telegram"></i>
                                    </a>
                                </div>

                                <div class="social viber" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-custom-class="custom-tooltip" data-bs-title="Wechat">
                                    <a href=""><i class="fa-brands fa-weixin"></i></a>
                                </div>

                                <div class="social viber" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-custom-class="custom-tooltip" data-bs-title="Viber">
                                    <a href="viber://chat?number=9171176331"><i class="fa-brands fa-viber"></i></a>
                                </div>

                                <div class="social viber" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-custom-class="custom-tooltip" data-bs-title="Whatsapp">
                                    <a href=""><i class="fa-brands fa-whatsapp"></i></a>
                                </div>



                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </section>
    </main>


@endsection




@section('scripts')
    @parent
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

    <script src="/JS/Admin/Schedules.js"></script>



@show

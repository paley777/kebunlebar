@extends('landing.layouts.main')

@section('container')
    <style>
        .magicpattern {
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center center;
            background-repeat: repeat;
            /* Create the parallax scrolling effect */
            background-attachment: fixed;

            background-image: url("{{ asset('storage/images/image1.png') }}");
        }
    </style>
    <style>
        /* If the screen size is 1200px wide or more, set the font-size to 80px */
        @media (min-width: 1200px) {
            .responsive-header {
                font-size: 64px;
            }

            .responsive-header1 {
                font-size: 50px;
            }

            .responsive-p {
                font-size: 24px;
            }

            .responsive-p1 {
                font-size: 22px;
            }

            .responsive-mini {
                font-size: 20px
            }

            .responsive-small {
                font-size: 16px
            }
        }

        /* If the screen size is smaller than 1200px, set the font-size to 80px */
        @media (max-width: 1199.98px) {
            .responsive-header {
                font-size: 40px;
            }

            .responsive-header1 {
                font-size: 30px;
            }

            .responsive-p {
                font-size: 16px;
            }

            .responsive-p1 {
                font-size: 14px;
            }

            .responsive-mini {
                font-size: 14px
            }
        }
    </style>
    <style>
        a:hover {
            color: #0e9313;
        }

        a {
            color: #064708;
            text-decoration: none;
        }
    </style>
    <style>
        /* Typewriter effect 1 */
        @keyframes typing {

            0%,
            1% {
                content: "";
            }

            1%,
            2% {
                content: "S";
            }

            2%,
            3% {
                content: "Se";
            }

            3%,
            4% {
                content: "Sel";
            }

            4%,
            5% {
                content: "Sela";
            }

            5%,
            6% {
                content: "Selam";
            }

            6%,
            7% {
                content: "Selamat";
            }

            7%,
            8% {
                content: "Selamat Da";
            }

            8%,
            9% {
                content: "Selamat Data";
            }

            10%,
            25% {
                content: "Selamat Datang";
            }

            52%,
            55% {
                content: "";
            }

            56%,
            57% {
                content: "W";
            }

            58%,
            59% {
                content: "We";
            }

            60%,
            61% {
                content: "Web";
            }

            62%,
            63% {
                content: "Webs";
            }

            64%,
            65% {
                content: "Webs";
            }

            66%,
            67% {
                content: "Websi";
            }

            68%,
            69% {
                content: "Website";
            }

            70%,
            71% {
                content: "Website D";
            }

            72%,
            73% {
                content: "Website De";
            }

            74%,
            75% {
                content: "Website Desa";
            }

            76%,
            77% {
                content: "Website Desa Kebun";
            }

            78%,
            79% {
                content: "Website Desa Kebun Le";
            }

            80%,
            100% {
                content: "Website Desa Kebun Lebar";
            }
        }

        @keyframes blink {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }
        }

        .typewriter {
            --caret: currentcolor;
        }

        .typewriter::before {
            content: "";
            animation: typing 13.5s infinite;
        }

        .typewriter::after {
            content: "";
            border-right: 1px solid var(--caret);
            animation: blink 0.5s linear infinite;
        }

        .typewriter.thick::after {
            border-right: 1ch solid var(--caret);
        }

        .typewriter.nocaret::after {
            border-right: 0;
        }


        @media (prefers-reduced-motion) {
            .typewriter::after {
                animation: none;
            }

            @keyframes sequencePopup {

                0%,
                100% {
                    content: "Selamat Datang!";
                }

                25% {
                    content: "E-Learning Bank Bengkulu";
                }

                50% {
                    content: "reader";
                }

                75% {
                    content: "human";
                }
            }

            .typewriter::before {
                content: "Selamat Datang!";
                animation: sequencePopup 12s linear infinite;
            }
        }
    </style>
    <section class="magicpattern test py-4 py-xl-5" style="height: 750px;">
        <div class="container h-100">
            <div class="row h-100">
                <div
                    class="col-md-10 col-xl-11 text-center d-flex d-sm-flex d-md-flex justify-content-center align-items-center mx-auto justify-content-md-start align-items-md-center justify-content-xl-center">
                    <div>
                        <h5 class="fw-semibold mb-3 responsive-mini" style="color: rgb(255,255,255);">Desa Kebun Lebar
                            Kabupaten Bengkulu Tengah
                        </h5>
                        <h3 class="fw-bolder mb-3 responsive-header typewriter thick"
                            style="text-align: center;color: rgb(255,255,255);">

                        </h3>
                        <p class="fw-semibold mb-4 responsive-p" style="color: rgb(255,255,255);">Kebun Lebar Bersatu dan
                            Maju
                        </p>
                        <a href="#scrollspyHeading2"
                            class="btn btn-warning btn-lg fs-5 fw-semibold rounded-pill shadow-sm me-2 py-2 px-4"
                            type="button" style="width: 166.475px;height: 45.375px;" data-bss-hover-animate="tada">Mulai
                            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12 3C12.5523 3 13 3.44772 13 4V17.5858L18.2929 12.2929C18.6834 11.9024 19.3166 11.9024 19.7071 12.2929C20.0976 12.6834 20.0976 13.3166 19.7071 13.7071L12.7071 20.7071C12.3166 21.0976 11.6834 21.0976 11.2929 20.7071L4.29289 13.7071C3.90237 13.3166 3.90237 12.6834 4.29289 12.2929C4.68342 11.9024 5.31658 11.9024 5.70711 12.2929L11 17.5858V4C11 3.44772 11.4477 3 12 3Z"
                                        fill="#000000"></path>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="py-1 py-xl-1 px-md-5 px-sm-0 mx-5" id="scrollspyHeading2">
        <div class="m-md-5 m-sm-4 px-md-2 px-sm-0">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <h4><a href="/berita-desa" style="text-decoration: none;">Berita <b>Terkini</b> <svg fill="#064708"
                                width="16px" height="16px" viewBox="0 0 32 32" version="1.1"
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <title>play</title>
                                    <path
                                        d="M5.92 24.096q0 1.088 0.928 1.728 0.512 0.288 1.088 0.288 0.448 0 0.896-0.224l16.16-8.064q0.48-0.256 0.8-0.736t0.288-1.088-0.288-1.056-0.8-0.736l-16.16-8.064q-0.448-0.224-0.896-0.224-0.544 0-1.088 0.288-0.928 0.608-0.928 1.728v16.16z">
                                    </path>
                                </g>
                            </svg> </a></h4>
                    <hr style="border: 1px solid green;
                    border-radius: 5px;">
                    @foreach ($newses as $news)
                        <div class="card mb-3" data-bss-hover-animate="pulse">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('images/' . $news->thumbnail) }}" class="img-fluid rounded-start">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><a
                                                href="berita-desa/read/{{ $news->id }}">{{ $news->judul }}</a></h5>
                                        <div class="row" style="text-align: justify;text-justify: inter-word;">
                                            <div class="col-4">
                                                <p><svg width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                            stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path
                                                                d="M20 10V7C20 5.89543 19.1046 5 18 5H6C4.89543 5 4 5.89543 4 7V10M20 10V19C20 20.1046 19.1046 21 18 21H6C4.89543 21 4 20.1046 4 19V10M20 10H4M8 3V7M16 3V7"
                                                                stroke="#000000" stroke-width="2" stroke-linecap="round">
                                                            </path>
                                                            <rect x="6" y="12" width="3"
                                                                height="3" rx="0.5" fill="#000000"></rect>
                                                            <rect x="10.5" y="12" width="3"
                                                                height="3" rx="0.5" fill="#000000"></rect>
                                                            <rect x="15" y="12" width="3"
                                                                height="3" rx="0.5" fill="#000000"></rect>
                                                        </g>
                                                    </svg> {{ $news->created_at }}
                                                </p>
                                            </div>
                                            <div class="col-8 float-left">
                                                <p><svg width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                            stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M16.5 7.063C16.5 10.258 14.57 13 12 13c-2.572 0-4.5-2.742-4.5-5.938C7.5 3.868 9.16 2 12 2s4.5 1.867 4.5 5.063zM4.102 20.142C4.487 20.6 6.145 22 12 22c5.855 0 7.512-1.4 7.898-1.857a.416.416 0 0 0 .09-.317C19.9 18.944 19.106 15 12 15s-7.9 3.944-7.989 4.826a.416.416 0 0 0 .091.317z"
                                                                fill="#000000"></path>
                                                        </g>
                                                    </svg> {{ $news->creator }}
                                                </p>
                                            </div>
                                        </div>
                                        <p class="card-text">{!! \Illuminate\Support\Str::limit($news->berita, 150, $end = '...') !!} <a
                                                href="berita-desa/read/0"><b>Selengkapnya ></b></a></p>
                                        <p class="card-text"><small class="text-body-secondary">Last updated
                                                {{ $news->created_at->diffForHumans() }}</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-md-4 col-sm-12">
                    <h4><a href="/pengumuman" style="text-decoration: none;">Pengumuman <svg fill="#064708"
                                width="16px" height="16px" viewBox="0 0 32 32" version="1.1"
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <title>play</title>
                                    <path
                                        d="M5.92 24.096q0 1.088 0.928 1.728 0.512 0.288 1.088 0.288 0.448 0 0.896-0.224l16.16-8.064q0.48-0.256 0.8-0.736t0.288-1.088-0.288-1.056-0.8-0.736l-16.16-8.064q-0.448-0.224-0.896-0.224-0.544 0-1.088 0.288-0.928 0.608-0.928 1.728v16.16z">
                                    </path>
                                </g>
                            </svg> </a></h4>
                    <hr style="border: 1px solid green;
                            border-radius: 5px;">
                    <div class="row g-2">
                        @foreach ($announces as $announce)
                            <div class="col-12">
                                <div class="card text-white bg-success bg-gradient" data-bss-hover-animate="pulse">
                                    <div class="card-body">
                                        <h4 class="card-title ">{{ $announce->judul }}</h4>
                                        <a href="pengumuman/read/{{ $announce->id }}" class="stretched-link"></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <h4><a href="/demografi-desa" style="text-decoration: none;">Demografi <b>Desa</b> <svg
                                fill="#064708" width="16px" height="16px" viewBox="0 0 32 32" version="1.1"
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <title>play</title>
                                    <path
                                        d="M5.92 24.096q0 1.088 0.928 1.728 0.512 0.288 1.088 0.288 0.448 0 0.896-0.224l16.16-8.064q0.48-0.256 0.8-0.736t0.288-1.088-0.288-1.056-0.8-0.736l-16.16-8.064q-0.448-0.224-0.896-0.224-0.544 0-1.088 0.288-0.928 0.608-0.928 1.728v16.16z">
                                    </path>
                                </g>
                            </svg> </a></h4>
                    <hr style="border: 1px solid green; border-radius: 5px;">
                    <div class="row g-2 mb-3">
                        <div class="col-md-3 col-6">
                            <div class="card text-white bg-success bg-gradient h-100" data-bss-hover-animate="pulse">
                                <div class="card-body">
                                    <h4 class="card-title">Jumlah Kepala Keluarga</h4>
                                    <h1 class="fw-bold mb-0">214 KK</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <h4><a href="/geografi-desa" style="text-decoration: none;">Geografi <b>Desa</b> <svg fill="#064708"
                                width="16px" height="16px" viewBox="0 0 32 32" version="1.1"
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <title>play</title>
                                    <path
                                        d="M5.92 24.096q0 1.088 0.928 1.728 0.512 0.288 1.088 0.288 0.448 0 0.896-0.224l16.16-8.064q0.48-0.256 0.8-0.736t0.288-1.088-0.288-1.056-0.8-0.736l-16.16-8.064q-0.448-0.224-0.896-0.224-0.544 0-1.088 0.288-0.928 0.608-0.928 1.728v16.16z">
                                    </path>
                                </g>
                            </svg> </a></h4>
                    <hr style="border: 1px solid green; border-radius: 5px;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3868.0348945001806!2d102.28796897934426!3d-3.5631494745581764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e314f38992607b3%3A0x86135418f4ad7acd!2sKantor%20desa%20kebun%20lebar!5e1!3m2!1sid!2sid!4v1689777045630!5m2!1sid!2sid"
                        width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.main')

@section('content')
    {{-- <div class="container" style="margin-top: 100px">
        <div class="row">
            <div class="col-12 col-lg-8 mb-4">
                <div class="bg-white rounded p-4 border">
                    <span class="tanggal">{{ $posts->created_at->format('d M Y') }}</span>
                    <h1 class="single mt-2">{{ $posts->title }}</h1>
                    <a href="/posts?kategori={{ $posts->category->slug }}"
                        class="btn btn-category mt-2">{{ $posts->category->name }}</a>
                    <hr>
                    @php
                        $categoryName = $posts->category->name;
                    @endphp

                    <div class="img rounded bg-dark mb-3"></div>

                    <style>
                        .img {
                            height: 400px;
                        }

                    </style>

                    {!! $posts->body !!}

                </div>
            </div>
            <div class="col-12 col-lg-4 single-related">
                <div class="bg-white rounded-top p-3 border border-bottom-0">
                    <h4 class="related mb-0">Postingan Terkait</h4>
                </div>

                @php
                    $i = 1;
                @endphp
                @foreach ($postRealted as $item)
                    @if ($item->category->name == $posts->category->name && $i <= 5)
                        <a href="{{ $item->slug }}"
                            class="text-dark text-decoration-none {{ $item->slug == $posts->slug ? 'd-none' : '' }}">
                            <div class="my-card d-flex align-items-center px-3 py-0 bg-white border">
                                <img src="/Assets/logo.png" alt="" width="60" height="60">
                                <div class="card-body position-relative title-related">
                                    <h5 class="card-title" id="short{{ $i }}"></h5>
                                    <small id="text{{ $i }}"
                                        class="position-absolute bg-dark rounded text-white p-2 d-none">{{ $item->title }}</small>
                                    <script>
                                        var title = "{{ $item->title }}";
                                        var result = document.getElementById('short{{ $i }}');
                                        if (title.length > 40) {
                                            title = title.substring(0, 40) + ' ...';
                                        }
                                        result.innerHTML = title;

                                        result.addEventListener('mouseover', function() {
                                            var mouseover = document.getElementById('text{{ $i }}');
                                            mouseover.classList.remove('d-none')
                                        })
                                        result.addEventListener('mouseout', function() {
                                            var mouseout = document.getElementById('text{{ $i }}');
                                            mouseout.classList.add('d-none')
                                        })
                                    </script>
                                    <small class="text-muted"><i class="bi bi-dot"></i>
                                        {{ $item->created_at->format('d M Y') }}</small>
                                </div>
                            </div>
                        </a>
                        @php
                            $i++;
                        @endphp
                    @endif
                @endforeach
            </div>
        </div>
    </div> --}}

    <style>
        body {
            background-color: white !important;
        }

    </style>
    <div class="container" style="margin-top: 100px">
        <div class="row">
            <div class="col-lg-1">
                <div class="d-flex align-items-center flex-row flex-lg-column sticky-top" style="top: 100px;">
                    <div class="share">
                        <small class="text-start">Share</small>
                        <div class="d-flex align-items-center justify-content-center flex-row flex-lg-column">
                            <div class="cursor share1 facebook">
                                <svg width="43" height="43" viewBox="0 0 43 43" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M29 9H25.1818C23.4941 9 21.8755 9.67045 20.682 10.8639C19.4886 12.0573 18.8182 13.6759 18.8182 15.3636V19.1818H15V24.2727H18.8182V34.4545H23.9091V24.2727H27.7273L29 19.1818H23.9091V15.3636C23.9091 15.0261 24.0432 14.7024 24.2819 14.4637C24.5205 14.225 24.8443 14.0909 25.1818 14.0909H29V9Z"
                                        fill="#B0B0B0" />
                                    <circle cx="21.5" cy="21.5" r="21" stroke="#B0B0B0" class="hover1" />
                                </svg>
                                {{-- <small class="text-muted">Facebook</small> --}}
                            </div>
                            <div class="cursor share2 instagram ms-1 ms-lg-0 mt-lg-2">
                                <svg width="43" height="43" viewBox="0 0 43 43" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M26.75 11H16.25C13.3505 11 11 13.3505 11 16.25V26.75C11 29.6495 13.3505 32 16.25 32H26.75C29.6495 32 32 29.6495 32 26.75V16.25C32 13.3505 29.6495 11 26.75 11Z"
                                        stroke="#B0B0B0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M25.7 20.8385C25.8296 21.7124 25.6804 22.6048 25.2735 23.389C24.8666 24.1731 24.2228 24.809 23.4337 25.2062C22.6446 25.6033 21.7504 25.7416 20.8782 25.6012C20.006 25.4609 19.2003 25.0491 18.5756 24.4244C17.9509 23.7997 17.5392 22.994 17.3988 22.1218C17.2585 21.2496 17.3967 20.3554 17.7939 19.5663C18.1911 18.7772 18.8269 18.1334 19.6111 17.7265C20.3952 17.3197 21.2877 17.1704 22.1615 17.3C23.0529 17.4322 23.8781 17.8475 24.5153 18.4847C25.1525 19.1219 25.5679 19.9471 25.7 20.8385Z"
                                        stroke="#B0B0B0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M27.2749 15.725H27.2849" stroke="#B0B0B0" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <circle cx="21.5" cy="21.5" r="21" stroke="#B0B0B0" class="hover2" />
                                </svg>
                                {{-- <small class="text-muted">Instagram</small> --}}
                            </div>
                            <div class="cursor share3 twiter ms-1 ms-lg-0 mt-lg-2">
                                <svg width="43" height="43" viewBox="0 0 43 43" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M33 13.0101C32.0424 13.6855 30.9821 14.2022 29.86 14.5401C29.2577 13.8476 28.4573 13.3567 27.567 13.134C26.6767 12.9112 25.7395 12.9673 24.8821 13.2945C24.0247 13.6218 23.2884 14.2045 22.773 14.9638C22.2575 15.7231 21.9877 16.6224 22 17.5401V18.5401C20.2426 18.5856 18.5013 18.1959 16.931 17.4055C15.3607 16.6151 14.0103 15.4487 13 14.0101C13 14.0101 9 23.0101 18 27.0101C15.9405 28.408 13.4872 29.109 11 29.0101C20 34.0101 31 29.0101 31 17.5101C30.9991 17.2315 30.9723 16.9537 30.92 16.6801C31.9406 15.6735 32.6608 14.4028 33 13.0101V13.0101Z"
                                        stroke="#B0B0B0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <circle cx="21.5" cy="21.5" r="21" stroke="#B0B0B0" class="hover3" />
                                </svg>
                                {{-- <small class="text-muted">Twiter</small> --}}
                            </div>
                        </div>
                    </div>
                    <div class="comment ms-3 ms-lg-0">
                        <small>Comment</small>
                        <div class="d-flex align-items-center justify-content-start flex-row flex-lg-column">
                            <div class="cursor share4 comment mt-lg-2">
                                <svg width="43" height="43" viewBox="0 0 43 43" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M30.75 20.8542C30.7536 22.2291 30.4324 23.5853 29.8125 24.8125C29.0775 26.2831 27.9477 27.52 26.5494 28.3847C25.1512 29.2494 23.5398 29.7077 21.8958 29.7084C20.521 29.7119 19.1647 29.3907 17.9375 28.7709L12 30.75L13.9792 24.8125C13.3593 23.5853 13.0381 22.2291 13.0417 20.8542C13.0423 19.2102 13.5006 17.5988 14.3653 16.2006C15.23 14.8024 16.4669 13.6725 17.9375 12.9375C19.1647 12.3177 20.521 11.9964 21.8958 12H22.4167C24.5879 12.1198 26.6386 13.0362 28.1762 14.5738C29.7138 16.1114 30.6302 18.1622 30.75 20.3334V20.8542Z"
                                        stroke="#B0B0B0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <circle cx="21.5" cy="21.5" r="21" stroke="#B0B0B0" class="hover4" />
                                </svg>
                                {{-- <small class="text-muted">Comments</small> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 mt-3 mt-lg-0">
                <span class="tanggal">{{ $posts->created_at->format('d M Y') }}</span>
                <h1 class="single mt-2">{{ $posts->title }}</h1>
                <a href="/posts?kategori={{ $posts->category->slug }}"
                    class="btn btn-category mt-2">{{ $posts->category->name }}</a>
                <hr>
                @php
                    $categoryName = $posts->category->name;
                @endphp

                <img src="/Assets/logo.png" alt="{{ $posts->title }}" width="100%">

                {!! $posts->body !!}
            </div>
            <div class="col-lg-3">
                <div class="bg-white rounded-top p-3 border border-bottom-0">
                    <h4 class="related mb-0">Postingan Terkait</h4>
                </div>

                @php
                    $i = 1;
                @endphp
                @foreach ($postRealted as $item)
                    @if ($item->category->name == $posts->category->name && $i <= 5)
                        <a href="{{ $item->slug }}"
                            class="text-dark text-decoration-none {{ $item->slug == $posts->slug ? 'd-none' : '' }}">
                            <div class="my-card d-flex align-items-center px-3 py-0 bg-white border">
                                {{-- <img src="/Assets/logo.png" alt="" width="40" height="40"> --}}
                                <div class="card-body position-relative title-related py-2 px-0">
                                    <h5 class="card-title" id="short{{ $i }}"></h5>
                                    <small id="text{{ $i }}"
                                        class="position-absolute bg-dark rounded text-white p-2 d-none">{{ $item->title }}</small>
                                    <script>
                                        var title = "{{ $item->title }}";
                                        var result = document.getElementById('short{{ $i }}');
                                        if (title.length > 40) {
                                            title = title.substring(0, 40) + ' ...';
                                        }
                                        result.innerHTML = title;

                                        result.addEventListener('mouseover', function() {
                                            var mouseover = document.getElementById('text{{ $i }}');
                                            mouseover.classList.remove('d-none')
                                        })
                                        result.addEventListener('mouseout', function() {
                                            var mouseout = document.getElementById('text{{ $i }}');
                                            mouseout.classList.add('d-none')
                                        })
                                    </script>
                                    <small class="text-muted"><i class="bi bi-dot"></i>
                                        {{ $item->created_at->format('d M Y') }}</small>
                                </div>
                            </div>
                        </a>
                        @php
                            $i++;
                        @endphp
                    @endif
                @endforeach
            </div>
        </div>
    </div>

@endsection

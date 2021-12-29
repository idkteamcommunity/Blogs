@extends('layouts.main')

@section('content')
    <div class="container" style="margin-top: 100px">
        <div class="row">
            <div class="col-12 col-lg-8 mb-4">
                <div class="bg-white rounded p-4 border">
                    <span class="tanggal">{{ $posts->created_at->format('d M Y') }}</span>
                    <h1 class="single mt-2">{{ $posts->title }}</h1>
                    <a href="/posts?kategori={{ $posts->category->slug }}"
                        class="btn btn-category mt-2">{{$posts->category->name }}</a>
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
                    @if ($item->category->name == $posts->category->name && $i <= 5) <a
                            href="{{ $item->slug }}" class="text-dark text-decoration-none">
                            <div class="single card  border">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="..." class="rounded-start" width="30" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body title-related">
                                            <h5 class="card-title">{{ $item->title }}</h5>
                                            <small class="text-muted"><i class="bi bi-dot"></i>
                                                {{ $posts->created_at->format('d M Y') }}</small>
                                        </div>
                                    </div>
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

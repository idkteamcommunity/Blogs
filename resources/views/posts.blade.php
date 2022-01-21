@extends('layouts.main')

@section('content')
    <div class="container-fluid sticky-top">
        <form action="/blog">
            <div class="row justify-content-center mt-4">
                <div class="col-12 col-md-8">
                    <div class="input-group form-search rounded overflow-hidden shadow" style="top: 10px">
                        <button type="button" id="filter-button"
                            class="input-group-text filter-text bg-white p-3 pe-0 py-sm-4 ps-sm-4"><i
                                class="bi bi-filter"></i>
                            Filter
                            <span class="ms-3 line-filter">|</span>
                        </button>
                        <input type="text" name="search" class="form-control" value="{{ request('search') }}">
                        <button type="submit" class="btn btn-idk p-3 px-5 rounded-0"><i class="bi bi-search"></i></button>
                    </div>
                    <div class="row mt-3 d-none" id="filters-value">
                        <div class="col-12 col-md-8 col-lg-6">
                            <div class="bg-white p-3 rounded shadow">
                                <div class="close" id="close"><i class="bi bi-x-lg"></i></div>
                                <div class="d-flex">
                                    <div class="kategori">
                                        <h4 class="kategori-text">Kategori</h4>
                                        <select class="select form-select" aria-label="Default select example border-none"
                                            name="kategori">
                                            <option selected value="">Semua</option>
                                            @foreach ($categories as $category)
                                                <option @if (request('kategori') == $category->slug) selected @endif value="{{ $category->slug }}">
                                                    {{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="urutkan ms-4">
                                        <h4 class="urutkan-text">Urutkan</h4>
                                        <select class="select form-select" aria-label="Default select example border-none"
                                            name="urutan">
                                            <option selected value="desc">Terbaru</option>
                                            <option @if (request('urutan') == 'asc') selected @endif value="asc">Terlama
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="container-fluid mt-5">
        @if (request('search'))
            <h4 class="allPost">Hasil dari <span class="text-success">{{ request('search') }}</span></h4>
        @else
            <h4 class="allPost">Semua Postingan</h4>
        @endif
        <div class="row mt-3">
            @php
                $i = 0;
            @endphp
            @foreach ($posts as $post)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="posts card rounded overflow-hidden">
                        {{-- <div class="img bg-secondary"></div>
                        <style>
                            .img {
                                height: 180px;
                            }

                        </style> --}}
                        <img src="/Assets/sampel.jpg" class="img-fluid" alt="{{ $post->title }}">
                        <div class="card-body">
                            <div class="info-post mb-1">
                                <a href="/blog?kategori={{ $post->category->slug }}"
                                    class="btn btn-category">{{ $post->category->name }}</a>
                                <span class="tanggal ms-2">{{ $post->created_at->format('d/m/Y') }}</span>
                            </div>
                            <a href="{{ $post->slug }}" class="card-title">{{ $post->title }}</a>
                            <p class="card-text mt-1" id="excerpt{{ $i }}"></p>
                            <script>
                                var excerptBody = "{{ $post->excerpt }}";
                                var result = document.getElementById('excerpt{{ $i }}');
                                if (excerptBody.length > 80) {
                                    excerptBody = excerptBody.substring(0, 80) + ' ...';
                                }
                                result.innerHTML = excerptBody;
                            </script>
                        </div>
                    </div>
                </div>
                @php
                    $i++;
                @endphp
            @endforeach
        </div>
    </div>
@endsection

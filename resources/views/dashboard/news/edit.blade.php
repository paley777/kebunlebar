@extends('dashboard.layouts.main')

@section('container')
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
        form i {
            cursor: pointer;
        }
    </style>
    <div class=" px-md-5 px-sm-0 mx-5">
        <div class="mx-md-5 mx-sm-4 my-4 px-md-2 px-sm-0">
            <div class="card text-bg-light mb-3">
                <div class="card-body">
                    <a href="/dashboard">
                        <svg fill="#000000" width="18px" height="18px" viewBox="-4.5 0 32 32" version="1.1"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <title>home</title>
                                <path
                                    d="M19.469 12.594l3.625 3.313c0.438 0.406 0.313 0.719-0.281 0.719h-2.719v8.656c0 0.594-0.5 1.125-1.094 1.125h-4.719v-6.063c0-0.594-0.531-1.125-1.125-1.125h-2.969c-0.594 0-1.125 0.531-1.125 1.125v6.063h-4.719c-0.594 0-1.125-0.531-1.125-1.125v-8.656h-2.688c-0.594 0-0.719-0.313-0.281-0.719l10.594-9.625c0.438-0.406 1.188-0.406 1.656 0l2.406 2.156v-1.719c0-0.594 0.531-1.125 1.125-1.125h2.344c0.594 0 1.094 0.531 1.094 1.125v5.875z">
                                </path>
                            </g>
                        </svg></a> / <a href="/dashboard/news">Manajemen Berita</a> / Ubah Data
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card text-bg-success bg-gradient mb-3 bg-opacity-100">
                        <div class="card-header fw-semibold">Dashboard Sistem Informasi Desa Kebun Lebar</div>
                        <div class="card-body">
                            <h4 class=" responsive-p1 fw-semibold mb-3">Manajemen Berita</h4>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="card shadow-sm bg-light bg-gradient mb-3">
                        <div class="card-body">
                            <div class="d-flex">
                                <h4 class="card-title fw-semibold responsive-p1 me-3">Ubah Data</h4>
                            </div>
                            <hr>
                            <form class="row g-2 responsive-small fw-semibold" method="post"
                                action="/dashboard/news/{{ $news->id }}" enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-md-5 position-relative">
                                        <label for="validationCustom01" class="form-label ">Judul Berita<span
                                                class="text-danger">*</span></label>
                                        <input type="text" id="validationCustom01" class="form-control responsive-small"
                                            name="judul" value="{{ old('judul', $news->judul) }}"
                                            placeholder="Isi Judul Berita" required>
                                    </div>
                                    <div class="col-md-4 position-relative">
                                        <label for="validationCustom01" class="form-label">Penulis Berita<span
                                                class="text-danger">*</span></label>
                                        <input type="text" id="validationCustom01" class="form-control responsive-small"
                                            name="creator" value="{{ old('creator', $news->creator) }}"
                                            placeholder="Isi Penulis Berita" readonly>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="validationCustom01" class="form-label">Kategori Berita<span
                                                class="text-danger">*</span></label>
                                        <select class="form-select" name="kategori" aria-label="Default select example"
                                            required>
                                            <option selected value="">Pilih Kategori</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->nama }}">{{ $category->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-9 position-relative">
                                        <label for="validationCustom01" class="form-label">Thumbnail dan Header Berita<span
                                                class="text-danger">*</span></label>
                                        <input type="file" id="validationCustom01" class="form-control responsive-small"
                                            name="thumbnail" accept="image/*" placeholder="Isi Thumbnail Berita"
                                            onchange="showPreview(event);" id="file-ip-1">
                                    </div>
                                    <div class="col-md-3 position-relative">
                                        <label for="validationCustom01" class="form-label">Preview Thumbnail<span
                                                class="text-danger">*</span></label>
                                        <div class="preview">
                                            <img src="{{ asset('images/' . $news->thumbnail) }}" id="file-ip-1-preview"
                                                style="max-width: 150px; height:auto;">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-12">
                                        <label for="validationCustom01" class="form-label ">Isi Berita<span
                                                class="text-danger">*</span></label>
                                        <textarea class="ckeditor form-control" name="berita" required>{{ old('berita', $news->berita) }}</textarea>
                                    </div>
                                </div>
                                <p>
                                    (Wajib terisi untuk kolom dengan tanda "<span class="text-danger">*</span>").
                                </p>
                                <button class="btn btn-outline-primary responsive-small fw-semibold" type="submit">
                                    Simpan Data <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path d="M20 4L3 9.31372L10.5 13.5M20 4L14.5 21L10.5 13.5M20 4L10.5 13.5"
                                                stroke="#0275d8" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </g>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function showPreview(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-ip-1-preview");
                preview.src = src;
                preview.style.display = "block";
            }
        }
    </script>
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>
@endsection

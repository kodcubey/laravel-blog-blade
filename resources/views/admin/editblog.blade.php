@extends('adminlayout')
@section('content')
    <a href="/admin-blog-yaz"><i class="fa fa-arrow-left" aria-hidden="true"></i> Geri Dön</a>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <h1 class="text-center mb-4">Blog İçerik Güncelle</h1>
    <form action="/admin-edit-post-action" class="d-flex flex-column">
        <input class="form-control" type="text" name="title" value="{{ $blogItems[0]->title }}"
            placeholder="Blog Başlığınızı girin" id="" required>
        <input class="form-control my-3" type="text" value="{{ $blogItems[0]->subtitle }}" name="subtitle"
            placeholder="Blog Alt Başlığınızı Girin" id="" required>
        <textarea name="editor" id="editor" rows="10" cols="80" required>
            {{ $blogItems[0]->content }}
        </textarea>
        <input type="hidden" name="id" value="{{ $blogItems[0]->id }}" />
        <button type="submit" class="btn btn-success mt-3"><strong class="text-uppercase">Güncelle</strong></button>
    </form>
@endsection

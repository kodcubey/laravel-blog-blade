@extends('adminlayout')
@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <h1 class="text-center mb-3 text-uppercase">Hakkımda</h1>
    <form action="/admin-hakkimda-update">
        <textarea name="editor" id="editor" rows="10" cols="80" required>
            {{ $aboutData[0]->content }}
        </textarea>
        <button type="submit" class="btn btn-success mt-3">Kaydet</button>
    </form>
@endsection

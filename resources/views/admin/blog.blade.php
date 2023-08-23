@extends('adminlayout')
@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <h1 class="text-center mb-4 text-uppercase">Blog İçerik Yazısı</h1>
    <div class="row">
        <div class="col-md-4">
            <form action="/admin-add-post-action" class="d-flex flex-column">
                <input class="form-control" type="text" name="title" placeholder="Blog Başlığınızı girin" id=""
                    required>
                <input class="form-control my-3" type="text" name="subtitle" placeholder="Blog Alt Başlığınızı Girin"
                    id="" required>
                <textarea name="editor" id="editor" rows="10" cols="80" required></textarea>
                <button type="submit" class="btn btn-success mt-3"><strong class="text-uppercase">Kaydet</strong></button>
            </form>
        </div>
        <div class="col-md-8">
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Blog Başlık</th>
                        <th>Blog Alt Başlık</th>
                        <th>İşlemler</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($allPosts as $item)
                        <tr>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->subtitle }}</td>
                            <td>
                                <a href="admin-edit-post/{{ $item->id }}" class="btn btn-primary">Düzenle</a>
                                <a href="admin-delete-post/{{ $item->id }}" class="btn btn-danger">Sil</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Blog Başlık</th>
                        <th>Blog Alt Başlık</th>
                        <th>İşlemler</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection

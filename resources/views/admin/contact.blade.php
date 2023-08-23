@extends('adminlayout')
@section('content')
    <h1 class="text-center text-uppercase mb-3">İletişimden Gelen Mesajlar</h1>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Adı ve Soyadı</th>
                <th>Mail</th>
                <th>Mesaj İçeriği</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contactData as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->message }}</td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Adı ve Soyadı</th>
                <th>Mail</th>
                <th>Mesaj İçeriği</th>
            </tr>
        </tfoot>
    </table>
@endsection

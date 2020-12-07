@extends('layouts.customer')
<INPUT border="1" type="button" onclick="history.back()" class="disp-img2">
<div class="ab">
<div class="abc">
<input type="button" onclick="location.href='../company'" value="完了">
</div>
</div>
@section('content')
    <table border="2" align="center">
    <tr><th class="a">ユーザーid</th><th>店名</th><th>店情報</th><th>紹介文</th><th>アレルギー情報</th><th>店の種類</th><th>地方</th><th>エリア</th><th>宗教情報</th><th>リンク</th><th>住所</th><th>写真</th></tr>
    @foreach ($items as $item)
        <tr>
            <td>{{ $item->user_id}}</td>
            <td>{{ $item->store_name}}</td>
            <td>{{ $item->store_information}}</td>
            <td>{{ $item->store_introduction}}</td>
            <td>{{ $item->allergies}}</td>
            <td>{{ $item->store_stype}}</td>
            <td>{{ $item->rural_code}}</td>
            <td>{{ $item->area}}</td>
            <td>{{ $item->religion}}</td>
            <td><a href="{{ $item->url }}">{{ $item->url}}</a></td>
            <td>{{ $item->street_address}}</td>
            <td><img src="{{ $item->photo_pass}}" width="200" height="130"></td>
        </tr>
    @endforeach
    </table>
@endsection


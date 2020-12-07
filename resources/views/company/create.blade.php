@extends('layouts.customer')
<INPUT border="1" type="button" onclick="history.back()" class="disp-img2">

@section('content')
<form action="confirm" method="post">
  @csrf
    <table border="2" align="center">
    <tr><th class="a">ユーザーid</th><th>店名</th><th>店情報</th><th>紹介文</th><th>アレルギー情報</th><th>店の種類</th><th>地方</th><th>エリア</th><th>宗教情報</th><th>リンク</th><th>住所</th><th>写真</th></tr>
    
        <tr>
            <td>{{ $data['user_id']}}</td>
            <td>{{ $data['store_name']}}</td>
            <td>{{ $data['store_information']}}</td>
            <td>{{ $data['store_introduction']}}</td>
            <td>{{ $data['allergies']}}</td>
            <td>{{ $data['store_stype']}}</td>
            <td>{{ $data['rural_code']}}</td>
            <td>{{ $data['area']}}</td>
            <td>{{ $data['religion']}}</td>
            <td><a href="{{ $data['url']}}">{{ $data['url']}}</a></td>
            <td>{{ $data['street_address']}}</td>
            <td><img src="{{ $data['read_temp_path']}}" width="200" height="130"></td>
        </tr>
    
    </table>
  <input type="submit" name="action" value="送信"/>
</form>
@endsection 


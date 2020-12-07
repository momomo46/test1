@extends('layouts.information')

@section('content')
   <form action="/kanrisyaDB/remove" method="post">
   <table>
      @csrf
      <input type="hidden" name="user_id" value="{{$item->user_id}}">
      <th>店名</th><td>{{$item->store_name}}</td>
      <th>店情報</th><td>{{$item->store_information}}</td>
      <th>店紹介</th><td>{{$item->store_introduction}}</td>
      <th>アレルギー</th><td>{{$item->allergies}}</td>
      <th>店の種類</th><td>{{$item->store_stype}}</td>
      <th>都道府県</th><td>{{$item->rural}}</td>
      <th>エリア</th><td>{{$item->area}}</td>
      <th>宗教情報</th><td>{{$item->religion}}</td>
      <th>URL</th><td>{{$item->url}}</td>
      <th>住所</th><td>{{$item->street_address}}</td>
      <th>写真</th><td>{{$item->photo_pass}}</td>
      <th></th><td><input type="submit" value="削除"></td></tr>
   </table>
   </form>
@endsection	

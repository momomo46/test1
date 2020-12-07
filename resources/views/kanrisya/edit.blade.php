@extends('layouts.information')

@section('content')
   <form action="/indexDB" method="post">
   <table>
      @csrf
      <input type="hidden" name="user_id" value="{{$item->user_id}}">
      <tr><th>店名</th><td><input type="text" name="store_name"
         value="{{$item->store_name}}"></td></tr>
      <tr><th>店情報</th><td><input type="text" name="store_information"
         value="{{$item->store_information}}"></td></tr>
      <tr><th>紹介文</th><td><input type="text" name="store_introduction"
         value="{{$item->store_introduction}}"></td></tr>
      <tr><th>アレルギー情報</th><td><input type="text" name="allergies"
         value="{{$item->allergies}}"></td></tr>
      <tr><th>店の種類</th><td><input type="text" name="store_stype"
         value="{{$item->store_stype}}"></td></tr>
      <tr><th>地方</th><td><input type="text" name="rural_code"
         value="{{$item->rural_code}}"></td></tr>
      <tr><th>エリア</th><td><input type="text" name="area"
         value="{{$item->area}}"></td></tr>
      <tr><th>宗教情報</th><td><input type="text" name="religion"
         value="{{$item->religion}}"></td></tr>
      <tr><th>リンク</th><td><input type="text" name="url"
         value="{{$item->url}}"></td></tr>
      <tr><th>住所</th><td><input type="text" name="street_address"
         value="{{$item->street_address}}"></td></tr>
      <tr><th>写真</th><td><input type="text" name="photo_pass"
         value="{{$item->photo_pass}}"></td></tr>
      <tr><th></th><td><input type="submit"
         value="更新"></td></tr>
   </table>
   </form>
   @endsection

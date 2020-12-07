@extends('layouts.kekkaDBapp')
<style>
  .pagination { font-size:10pt; }
  .pagination li { display:inline-block }
</style>
<table class="migi">
<tr><th>検索</th><th>交通</th></tr>
<tr>
<td><INPUT border="1" type="button" onclick="" class="disp-img5"></td>
<td><INPUT border="1" type="button" onclick="" class="disp-img7"></td>
</tr>
</table>
<div class="title0" font-size="20px">
  <div class="title" font-size="20px">
    宿泊
  </div>
</div>


@section('content2')
<div class="sen"><hr size="1"></div>
<p id="srchBrdCrmbs">
  <a href="http://localhost:8000/syukuhaku">北海道</a>
  &nbsp;>
  <span class="grpLocationLocus">
    <a href="http://localhost:8000/syukuhakuarea">札幌</a>
  </span>
  &nbsp;>&nbsp; 宿泊結果    
</p>
@endsection
@section('content3')
<div class="saikensaku">
<input type="text"  style= "width:900px;height:50px;"; name="syukuhaku" placeholder="🔍再検索">
<tr><th></th><td>
      <input class="touroku" type="submit" onclick="location.href=''" value="検索"></td></tr>
</div>
<div class="sen"><hr size="1"></div>
<div class="sapporo">札幌</div>

@endsection
@section('content')
@foreach ($items as $item)
    <table align="right"  border="2">
    @csrf
    <tr>
        <td rowspan="10" style="border-right-style: hidden;"><img src="{{ $item->photo_pass}}" width="500" height="400" align="center"></td>
        </tr>
        <tr>
          <td  height="100px;" 
          style="border-top-color: black; color:blue; font-size: 100px;" align="left" >
          {{ $item->store_name}}</td>
        </tr>
        <tr>
        <td class="info" height="90px;" style="border-top-style: hidden;"align="left">{{ $item->store_information}}
          </td>
        </tr>
        <tr>
          <td class="info2" height="90px;" style="border-top-style: hidden;" align="left">{{ $item->store_introduction}}</td>
        </tr>
        <tr>
          <td class="info3" height="70px;" style="border-top-style: hidden;" align="left">{{ $item->allergies}}</td>
        </tr>
        <tr>
          <td class="info4" height="45px;" style="border-top-style: hidden;" align="left">{{ $item->rural_code}}</td>
        </tr>
        <tr>
          <td class="info5" height="45px;" style="border-top-style: hidden;" align="left">{{ $item->area}}</td>
        </tr>
        <tr>  
          <td class="info6" height="70px;" style="border-top-style: hidden;" align="left">{{ $item->religion}}</td>
        </tr>
        <tr>
          <td class="info7" height="45px;" style="border-top-style: hidden;" align="left"><a href="{{ $item->url}}">{{ $item->url}}</a></td>
        </tr>
          <td class="info8" height="45px;" style="border-top-style: hidden;" align="left">{{ $item->street_address}}</td>
        <div class=pagi>
          {{  $items->links() }}
        </div>
    </table>
    @endforeach
@endsection

@section('content4')
<head>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
  <header>
    <div class="menu-drawer">
      <input type="checkbox" id="chk" />
      <label class="btn" for="chk"></label>
      <label class="other" for="chk"></label>
      <div class="content">
        <h2><i class="fas fa-list-ul"></i>メニュー</h2>
        <div class="menu">
          <a href="http://localhost:8000/"><i class="fas fa-microphone-alt">
          </i>言語を変更する</a>
          <a href="http://localhost:8000/"><i class="fas fa-envelope">
          </i>Q&A</a>
          <a href="http://localhost:8000/"><i class="fas fa-phone">
          </i>お問い合わせ</a>
        </div>
      </div>
    </div>
  </header>
</body>
@extends('layout')

@section('content')
<h1>内容確認</h1>
<div class="contact_form">
  <form action="/process" method="POST">
    <table>
      @csrf
      <tr>
        <th>お名前</th>
        <td>
          {{$inputs['fullname']}}
        </td>
      </tr>
      <input type="hidden" name="fullname" value="{{$inputs['fullname']}}">
      <tr>
        <th>性別</th>
        <td>
          {{$inputs['gender']}}
        </td>
      </tr>
      <input type="hidden" name="gender" value="{{$inputs['gender']}}">
      <tr>
        <th>メールアドレス</th>
        <td>
          {{$inputs['email']}}
        </td>
      </tr>
      <input type="hidden" name="email" value="{{$inputs['email']}}">
      <tr>
        <th>郵便番号</th>
        <td>
          〒{{$inputs['postcode']}}
        </td>
      </tr>
      <input type="hidden" name="postcode" value="{{$inputs['postcode']}}">
      <tr>
        <th>住所</th>
        <td>
          {{$inputs['address']}}
        </td>
      </tr>
      <input type="hidden" name="address" value="{{$inputs['address']}}">
      <tr>
        <th>建物名</th>
        <td>
          {{$inputs['building_name']}}
        </td>
      </tr>
      <input type="hidden" name="building_name" value="{{$inputs['building_name']}}">
      <tr>
        <th>ご意見</th>
        <td>
          {{$inputs['opinion']}}
        </td>
      </tr>
      <input type="hidden" name="opinion" value="{{$inputs['opinion']}}">
    </table>
    <button>送信</button>
    <a href="/">修正する</a>
  </form>
</div>
@endsection
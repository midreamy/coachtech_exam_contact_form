@extends('layout')

@section('content')
<h1>お問い合わせ</h1>
<div class="contact_form">
  <form action="/confirm" method="POST">
    <table>
      @csrf
      <tr>
        <th>お名前<span>※</span></th>
        <td>
          <input type="text" name="fullname">
          <p>例）山田　太郎</p>
        </td>
      </tr>
      <tr>
        @if($errors->has('fullname'))
        <p>{{$errors->first('fullname')}}</p>
        @endif
      </tr>
      <tr>
        <th>性別<span>※</span></th>
        <td>
          <input type="radio" name="gender" value="1" checked>男性
          <input type="radio" name="gender" value="2">女性
        </td>
      </tr>
      <tr>
        @if($errors->has('gender'))
        <p>{{$errors->first('gender')}}</p>
        @endif
      </tr>
      <tr>
        <th>メールアドレス<span>※</span></th>
        <td>
          <input type="email" name="email">
          <p>例）test@example.com</p>
        </td>
      </tr>
      <tr>
        @if($errors->has('email'))
        <p>{{$errors->first('email')}}</p>
        @endif
      </tr>
      <tr>
        <th>郵便番号<span>※</span></th>
        <td>
          〒<input type="text" name="postcode" pattern="\d{3}-\d{4}">
          <p>例）123-4567</p>
        </td>
      </tr>
      <tr>
        @if($errors->has('postcode'))
        <p>{{$errors->first('postcode')}}</p>
        @endif
      </tr>
      <tr>
        <th>住所<span>※</span></th>
        <td>
          <input type="text" name="address">
          <p>例）東京都渋谷区千駄ヶ谷1-2-3</p>
        </td>
      </tr>
      <tr>
        @if($errors->has('address'))
        <p>{{$errors->first('address')}}</p>
        @endif
      </tr>
      <tr>
        <th>建物名</th>
        <td>
          <input type="text" name="building_name">
          <p>例）千駄ヶ谷マンション101</p>
        </td>
      </tr>
      <tr>
        <th>ご意見<span>※</span></th>
        <td>
          <textarea name="opinion" cols="30" rows="10"></textarea>
        </td>
      </tr>
      <tr>
        @if($errors->has('opinion'))
        <p>{{$errors->first('opinion')}}</p>
        @endif
      </tr>
    </table>
    <button>確認</button>
  </form>
</div>
@endsection
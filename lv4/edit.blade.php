@extends('layouts.app')
@section('content')
<h1 class="page-header">マイページ</h1>
<form action="/me" method="post">
  @csrf
  <div class="form-group">
    <label>名前</label>
    <input type="text" name="name"class="form-control" value="" required maxlength="255"/>
  </div>
  <div class="form-group">
    <label>メールアドレス</label>
    <input type="text" name="email" class="form-control" value="" required maxlength="255"/>
  </div>
  <div class="form-group">
    <label>年齢</label>
    <input type="number" name="age" min="0" max="120" class="form-control age" value=""/>
  </div>
  <div class="form-group">
    <label>お気に入りの格言</label>
    <input type="text" name="maxim" class="form-control" value="" maxlength="30" />
  </div>
  <div class="text-right">
    <input type="submit" value="更新" class="btn btn-primary btn-right"/>
  </div>
</form>
@endsection

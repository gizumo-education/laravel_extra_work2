@extends('layouts.app')
@section('content')
<h1 class="page-header">ユーザー一覧</h1>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">名前</th>
      <th scope="col">メールアドレス</th>
      <th scope="col">年齢</th>
      <th scope="col">お気に入りの格言</th>
    </tr>
  <thead>
  <tbody>
    {{-- <tr class="@if (Auth::id() === ?? ) table-primary @endif"> --}}
    <tr>
      <th scope="row">1</th>
      <td>Hoge</td>
      <td>Hoge@hoge.com</td>
      <td>20</td>
      <td>ほげ</td>
    </tr>
  </tbody>
</table>
@endsection

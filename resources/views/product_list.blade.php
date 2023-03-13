

@extends('layout')
@section('title', '商品一覧')
@section('content')
<div class="row"> 
  <div class="col-md-8 col-md-offset-2">
      <h2>商品一覧</h2>
      <table class="table table-striped">
          <tr>
              <th>id</th>
              <th>商品画像</th>
              <th>商品名</th>
              <th>価格</th>
              <th>在庫数</th>
              <th>メーカー名</th>
              <th></th>
              <th></th>
          </tr>
          <tr>
              <td>test</td>
              <td>test</td>
              <td>test</td>
              <td>test</td>
              <td>test</td>
              <td>test</td>
              <td>詳細表示</td>
              <td>削除</td>
          </tr>
      </table>
  </div>
</div> 
@endsection('content')
<html>
   <head>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <title>商品詳細: {{$product->product_name}} ({{$product->product_id}})</title>
   </head>
   <body>
      <div class="mx-auto" style="width:90%;">
         <h3>商品詳細</h3>
         <table class="table table-striped">
            <form method="POST" action="/products/update">
               @csrf {{--忘れずに--}}
               <tr>
                  <th>ID</th>
                  <td>{{ $product->product_id }} <input type="hidden" name="product_id" value="{{ $product->product_id }}"></td>
               </tr>
               <tr>
                  <th>商品名</th>
                  <td><input type="text" name="product_name" value="{{ $product->product_name }}"></td>
               </tr>
               <tr>
                  <th>金額</th>
                  <td><input type="number" name="price" value="{{ $product->price }}"></td>
               </tr>
               <tr>
                  <th>担当者</th>
                  <td><input type="text" name="user_id" value="{{ $product->user->name }}"></td>
               </tr>
               <tr>
                  <th></th>
                  <td><input type="submit" value="更新" class="btn btn-primary"></td>
               </tr>
            </form>
         </table>

         {{-- 削除 --}}
         <form method="POST" action="/products/delete">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->product_id }}">
            <div class="float-end">
               <input type="submit" value="削除" class="btn btn-danger">
            </div>
         </form>
         <a href="/products" class="btn btn-dark">一覧へ戻る</a>
      </div>
   </body>
</html>
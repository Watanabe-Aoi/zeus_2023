<html>
   <head>
      <title>商品一覧</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   </head>
   <body>
      <div class="mx-auto" style="width:90%">
         <h2>商品一覧</h2>
         <table class="table table-striped">
            <thead>
               <tr>
                  <th>ID</th>
                  <th>商品名</th>
                  <th>金額</th>
                  <th>(税額)</th>
                  <th>担当者</th>
                  <th>{{--見た目統一の為--}}</th>
               </tr>
            </thead>
            {{-- ↓　実値　↓ --}}
            <tbody>
               @foreach ($products as $product)
                  <form method="GET" action="/products/edit">
                     @csrf
                     <input type="hidden" name="product_id" value="{{ $product->product_id }}">
                     <tr>
                        <td>{{ $product->product_id }}</td>
                        <td>{{ $product->product_name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>({{ $product->tax }})</td>                 {{--アクセサ--}}
                        <td>{{ $product->user->name_title }}</td>    {{--アクセサ--}}
                        <td><input type="submit" value="詳細"></td>  {{--詳細ページへ--}}
                     </tr>
                  </form>
               @endforeach
   
               <form method="POST" action="insert">
                  @csrf
                  <tr>
                     <td>
                        <input type="text" name="product_id" maxlength="3" placeholder="IDを入力" required>
                        @error('product_id')
                           <p>{{ $message }}</p>
                        @enderror
                     </td>
                     <td>
                        <input type="text" name="product_name" maxlength="20" placeholder="商品名を入力">
                        @error('product_name')
                           <p>{{ $message }}</p>
                        @enderror
                     </td>
                     <td>
                        <input type="number" name="price" max="9999999" placeholder="価格を入力">
                        @error('price')
                           <p>{{ $message }}</p>
                        @enderror
                     </td>
                     <td><input type="submit" value="追加" class="btn btn-primary"></td>
                  </tr>
               </form>
            </tbody>
         </table>
      </div>
   </body>
</html>
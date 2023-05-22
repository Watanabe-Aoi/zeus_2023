<html>
    <body>
        {{-- <a href="/hello/ja">日本語であいさつ</a>
        <a href="/hello/en">英語であいさつ</a>
        <a href="/hello/fr">フランス語であいさつ</a>        --}}
        @error ('lang')
            {{$message}}
        @enderror
        <form method="POST" action="greet">
            @csrf
            言語を入力してください<input type="text" name="lang" value="{{old('lang')}}">
            <input type="submit" value="送信">
        </form>

        <!-- コントローラー→ミドルウェア→ビュー -->
        <!--                　↑ここの処理 -->
        <p>
            ここが本文のコンテンツです。
        </p>
        <p>
            これは<middleware>google.com</middleware>へのリンクです。
        </p>
        <p>
            これは<middleware>yahoo.jp</middleware>へのリンクです。
        </p>
    </body>
</html>
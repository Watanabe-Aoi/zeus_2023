<html>
    <body>
        {{-- メッセージ --}}
        {{ $msg }}

        {{-- エラー表示 --}}
        @if (count($errors) > 0)
            <p>入力項目に問題があります。再入力してください。</p>
        @endif
        
        {{-- 情報入力フォーム --}}
        <form method="POST" action="/register">
            <table>
                @csrf
                @error('name')
                    <tr><th>ERROR</th><td>{{ $message }}</td></tr>
                @enderror
                <tr><th>名前: </th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
                @if ($errors->has('mail'))
                    <tr><th>ERROR</th><td>{{$errors->first('mail')}}</td></tr>
                @endif
                <tr><th>メール: </th><td><input type="text" name="mail" value="{{old('mail')}}"></td></tr>
                @if ($errors->has('age'))
                    <tr><th>ERROR</th><td>{{$errors->first('age')}}</td></tr>
                @endif
                <tr><th>年齢: </th><td><input type="text" name="age" value="{{old('age')}}"></td></tr>

                {{-- 送信ボタン --}}
                <tr><th></th><td><input type="submit" value="送信"></td></tr>
            </table>
        </form>
    </body>
</html>
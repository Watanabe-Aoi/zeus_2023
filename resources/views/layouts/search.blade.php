<html>
   <head>
      <style>
         footer{
         }
      </style>
   </head>
   <body>
      <div id="header">
         <form method="POST" action="search">
            <input type="text" name="query">
            <input type="submit" value="検索">
         </form>
      </div>

      <article>
         @yield('result')
      </article>

      <footer>
         @yield('footer')
      </footer>
   </body>
</html>
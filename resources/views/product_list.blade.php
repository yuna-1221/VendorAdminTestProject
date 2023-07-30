<!DOCTYPE html>
<html lang="ja">
    <head>
      <meta charset="UTF-8"> 
    </head>
    <body>
        <h1>商品一覧画面</h1>
        <form>
          @csrf
          <div class="search">
            <input type="text" placeholder="検索キーワード" name="keyword">
            <select name="maker_list">
            <option value="" selected hidden>メーカー名</option>
              <option value="Coca-Cola">Coca-Cola</option>
              <option value="サントリー">サントリー</option>
              <option value="キリン">キリン</option>
            </select>
            <input type="submit" value="検索">
          </div>
        </form>
    </body>
</html>

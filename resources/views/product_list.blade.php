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
            @foreach ($companies as $company)
              <option value={{ $company->id}}>{{ $company -> company_name }}</option>
            @endforeach
            </select>
            <input type="submit" value="検索">
          </div>
          <table>
            <tr>
              <th>ID</th>
              <th>商品画像</th>
              <th>商品名</th>
              <th>価格</th>
              <th>在庫数</th>
              <th>メーカー名</th>
              <th><input type="submit" value="新規登録" name="signUp"></th>
            </tr>
            @foreach($productsList as $productsListView)
            <tr>
              <td>{{ $productsListView->id }}</td>
              <td>{{ $productsListView->img_path }}</td>
              <td>{{ $productsListView->product_name }}</td>
              <td>{{ $productsListView->price }}</td>
              <td>{{ $productsListView->stock }}</td>
              <td>{{ $productsListView->company_name }}</td>
              <td><input type="submit" value="詳細" name="detail"><input type="submit" value="削除" name="delite"></td>
            </tr>
            @endforeach
          </table>
        </form>
    </body>
</html>

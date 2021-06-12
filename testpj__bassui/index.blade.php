<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
  <style>

  </style>
</head>

<body>
  <form action="/test" method="POST">
    @csrf
    <table>
      <tr>
        <th>氏名</th>
      </tr>
      <tr>
        <td>
          <input type="text" name="name">
        </td>
      </tr>
      <tr>
        <th>メールアドレス</th>
      </tr>
      <tr>
        <td>
          <input type="text" name="email">
        </td>
      </tr>
    </table>
    <input type="submit" name="send">
  </form>
</body>

</html>
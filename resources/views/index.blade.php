<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
</head>

<body>
  <h1>{{$txt}}</h1>
  <form action="/" method="POST">
    @csrf
    <tr>
        <th>名前</th>
        <td>
          <input type="text" name="name">
        </td>
      </tr>
      <tr>
        <th>役職</th>
        <td>
          <input type="text" name="role">
        </td>
      </tr>
      <tr>
        <th>メール</th>
        <td>
          <input type="email" name="email">
        </td>
      </tr>
      <tr>
        <th>年齢</th>
        <td>
          <input type="text" name="age">
        </td>
      </tr>
      <tr>
        <th>登録日</th>
        <td>
          <input type="text" name="registered_at">
        </td>
      </tr>
    </table>
    <input type="submit" value="送信">
  </form>
</body>
</html>

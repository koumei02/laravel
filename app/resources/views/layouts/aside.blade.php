<!-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<body>
    <div class="w-33 p-3" style="background-color: #eee;">
        <a href="">タイムライン</a>
        <a href="">食事記録</a>
        <a href="">体重・体脂肪記録</a>
    </div>
</body> -->

<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>左サイドバー</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .sidebar {
      position: fixed;
      top: 0;
      left: 0;
      bottom: 0;
      width: 20vw;
      background-color: #f8f9fa;
      padding: 2rem;
      overflow-y: auto;
      z-index: 1;
      border-right : 1px solid;
    }
  </style>
</head>

<body>
  <div class="sidebar">
    <h5 class="mb-3">メニュー</h5>
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link" href="#">タイムライン</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">食事記録</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('auto.create')}}">体重・体脂肪率記録</a>
      </li> 
    </ul>
  </div>
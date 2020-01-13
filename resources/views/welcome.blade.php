<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Laravel Developer Test</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <ul class="pages">
    <li class="chat page">
      <div class="chatArea">
        <ul class="messages"></ul>
      </div>
      <input class="inputMessage" placeholder="Type here..."/>
    </li>
    <li class="login page">
      <div class="form">
        <h3 class="title">What's your nickname?</h3>
        <input class="usernameInput" type="text" maxlength="14" />
      </div>
    </li>
  </ul>

  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script type="text/javascript" src="{!! asset('main.js') !!}"></script>
  <script src="http://localhost:8080/socket.io/socket.io.js"></script>
  <!--<script src="/public/main.js"></script>
  <script src="/socket.io/socket.io.js"></script> -->
</body>
</html>


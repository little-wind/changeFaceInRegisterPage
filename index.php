<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>更换系统默认头像</title>
  <link rel="stylesheet" href="css/register.css">
  <script src="js/face.js"></script>
</head>
<body>
  <div id="register">
    <h2>会员注册</h2>
    <form class="register-form" action="#" mehtod="post">
      <h3>请认真填写以下资料</h3>

      <label for="username">
        <span>用户名：</span>
        <input id="username" type="text" name="username" placehoder="用户名">
      </label>

      <label for="password">
        <span>密码；</span>
        <input id="password" type="password" name="password" placeholder="登录密码">
      </label>

      <label for="confirmPassword">
        <span>确认密码：</span>
        <input id="confirmPassword" type="password" name="confirmPassword" placeholder="确认密码">
      </label>

      <label>
        <span>头像：</span>
        <img id="faceImg" src="face/m01.gif" alt="头像图片">
      </label>

      <label for="email">
        <span>电子邮件：</span>
        <input id="email" type="email" name="email" placeholder="电子邮件">
      </label>

      <label>
        <span>&nbsp;</span>
        <input class="button" type="button" value="注册">
      </label>
    </form>
  </div>
</body>
</html>
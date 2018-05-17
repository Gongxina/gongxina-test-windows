<!DOCTYPE html>
<html lang="zh-hans">
  <head>
    <meta charset="utf-8">
    <title>php</title>
  </head>
  <body>
    <?php if ($_SERVER['REQUEST_METHOD']==='GET'): ?>
    <form  action="<? php $_SERVER['SCRIPT_NAME'];?>" method="post">
      <input type="text" name="username" placeholder="用户名">
      <input type="email" name="email" placeholder="email">
      <button type="submit">提交</button>
    </form>
    <?php endif; ?>
    <?php if ($_SERVER['REQUEST_METHOD']==='POST'): ?>
      <?php
      if(strlen($_POST['username'])&&strlen($_POST['email'])){
        echo "您好：". $_POST['username'].',您的邮件地址是：'. $_POST['email'];
      }else {
        echo "请输入正确的用户名和邮箱。";
      }
       ?>
    <?php endif; ?>
  </body>
</html>

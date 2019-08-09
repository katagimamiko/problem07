<h1>ログイン画面</h1>
<body>
<?php echo validation_errors(); ?>
<form action="login" method="post">
<p>メールアドレス
<input type="text" name="mail" value="<?php echo set_value('mail'); ?>"></p>
<p>パスワード
<input type="text" name="password" value="<?php echo set_value('password'); ?>"></p>
<p><input type="submit" value="ログイン"></p>
</form>
</body>

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


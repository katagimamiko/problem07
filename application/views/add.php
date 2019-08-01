<h1>社員情報登録画面</h1>
<body>
<h1>社員情報登録</h1>
<form action="add" method="post">
<p>氏
<input type="text" name="lastname"></p>
<p>名
<input type="text" name="firstname"></p>
<p>生年月日
<select name="year">
    <option value="">--</option>
    <?php foreach(range(1920,date('Y')) as $year): ?>
    <option value="<?=$year?>"><?=$year?></option>
    <?php endforeach; ?>
</select>年  
<select name="month">
    <option value="">--</option>
    <?php foreach(range(1,12) as $month): ?>
    <option value="<?=str_pad($month,2,0,STR_PAD_LEFT)?>"><?=$month?></option>
    <?php endforeach; ?>
</select>月
<select name="day">
    <option value="">--</option>
    <?php foreach(range(1,31) as $day): ?>
    <option value="<?=str_pad($day,2,0,STR_PAD_LEFT)?>"><?=$day?></option>
    <?php endforeach; ?>
</select>日
<p>出身地
<input type="text" name="home"></p>
<p><input type="submit" value="登録"></p>
</form>
</body>


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


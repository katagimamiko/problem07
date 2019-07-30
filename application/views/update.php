<h1>社員情報更新画面 
    <?php echo "社員ID：" . $id;?>
</h1> 
<body>
<h1>社員情報更新</h1>
<form action="http://local.problem07.com/member/update_submit/<?php echo $id ?>" method="post">
    <input type="hidden" name="id" value="<?php echo $id ?>">
<p>氏
    <input type="text" name="lastname" value="<?php echo $member['氏'] ?>"></p>
<p>名
<input type="text" name="firstname" value="<?php echo $member['名'] ?>"></p>
<p>生年月日
<select name="year" value="<?php echo date('Y',strtotime($member['生年月日'])); ?>">
    <option value="">--</option>
    <?php foreach(range(1920,date('Y')) as $year): ?>
    <option value="<?=$year?>"<?php if($year==date('Y',strtotime($member['生年月日']))){echo 'selected';}?>><?=$year?></option>
    <?php endforeach; ?>
</select>年
<select name="month" value="<?php echo date('n',strtotime($member['生年月日'])); ?>">
    <option value="">--</option>
    <?php foreach(range(1,12) as $month): ?>
    <option value="<?=str_pad($month,2,0,STR_PAD_LEFT)?>"<?php if($month==date('n',strtotime($member['生年月日']))){echo 'selected';}?>><?=$month?></option>
    <?php endforeach; ?>
</select>月
<select name="day" value="<?php echo date('j',strtotime($member['生年月日'])); ?>">
    <option value="">--</option>
    <?php foreach(range(1,31) as $day): ?>
    <option value="<?=str_pad($day,2,0,STR_PAD_LEFT)?>"<?php if($day==date('j',strtotime($member['生年月日']))){echo 'selected';}?>><?=$day?></option>
    <?php endforeach; ?>
</select>日
<p>出身地
<input type="text" name="home" value="<?php echo $member['出身'] ?>"></p>
<p><input type="submit" value="更新"></p>
</form>
</body>

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


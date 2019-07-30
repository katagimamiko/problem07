<html>
<h1>社員一覧画面</h1>
<a href="http://local.problem07.com/member/add" target="_blank">新規登録</a>
<body>
 <table border="1">
    <tr>
    <th>ID</th>
    <th>氏名</th>
    <th>出身</th>
    <th>削除</th>
    <th>登録日時</th>
    <th>更新日時</th>
    </tr>
    <tr>
<?php
foreach ($members as $row) {
?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><a href="http://local.problem07.com/member/update/<?php echo $row['id'] ?>" target="_blank"><?php echo $row['last_name'].$row['first_name'].
    "(".floor ((date('Ymd') - str_replace("-", "", $row['birthday']))/10000).")"; ?></a></td>
    <td><?php echo $row['home']; ?></td>
    <td><a href="/member/delete/<?php echo $row['id'] ?>"accesskey=""onClick="return confirm('削除します。\nよろしいですか？');"><?php echo '削除'; ?></a></td>
    <td><?php echo $row['created_at']; ?></td>
    <td><?php echo $row['changed_at']; ?></td>
    <?php echo '<br>'; ?>
</tr>
<?php
}
?>
  </table>
</body>
</html>
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


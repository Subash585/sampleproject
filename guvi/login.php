<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
      
        <title></title>
    </head>
    <body>
      <?php


if (! empty($_POST["login-btn"])) {
    require_once __DIR__ . '/Model/Member.php';
    $member = new Member();
    $loginResult = $member->loginMember();
}
        if(!empty($loginResult)){?>
            <div class="error-msg"><?php echo $loginResult;?></div>
	 }?>
?>
?>
        
        
        
    </body>
</html>

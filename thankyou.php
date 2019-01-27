<?php
mb_language("japanese");
mb_internal_encoding("UTF-8");
$to = htmlspecialchars($_POST['email'], ENT_QUOTES);
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$gender = htmlspecialchars($_POST['gender'], ENT_QUOTES);
$address01 = htmlspecialchars($_POST['zip01'], ENT_QUOTES);
$address02 = htmlspecialchars($_POST['pref01'], ENT_QUOTES);
$address03 = htmlspecialchars($_POST['addr01'], ENT_QUOTES);
$email = htmlspecialchars($_POST['email'], ENT_QUOTES);
$freetext = htmlspecialchars($_POST['freetext'], ENT_QUOTES);
$subject = 'お問い合わせ有難うございました';
$body = "名前：".$name."\n"."性別：".$gender."\n"."送付先：".$address01.$address02.$address03."\n"."メール：".$email."\n"."コメント：".$freetext;
$success = mb_send_mail($to,$subject,$body,"From:form-mail");
?>
<?php
	include 'header.php';
?>
<?php
	include 'main.php';
?>
<main>
    <h2 class="subpage">申し込み有難うございました</h2>
    <p>下記にてご入力頂きました送付先にお送りいたします。<br>
    1週間以内に到着予定です。</p>   
</main>
<?php
	include 'footer.php';
?>
         
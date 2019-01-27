<?php
mb_language("japanese");
mb_internal_encoding("UTF-8");
$to = htmlspecialchars($_POST['email'], ENT_QUOTES);
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$gender = htmlspecialchars($_POST['gender'], ENT_QUOTES);
$age = htmlspecialchars($_POST['age'], ENT_QUOTES);
$tel = htmlspecialchars($_POST['tel'], ENT_QUOTES);
$email = htmlspecialchars($_POST['email'], ENT_QUOTES);
$freetext = htmlspecialchars($_POST['freetext'], ENT_QUOTES);
$subject = 'ご応募有難うございました';
$body = "名前：".$name."\n"."性別：".$gender."\n"."年齢：".$age."歳"."\n"."電話番号：".$tel."\n"."メール：".$email."\n"."コメント：".$freetext;
$success = mb_send_mail($to,$subject,$body,"From:form-mail");
?>
<?php
	include 'header.php';
?>
<?php
	include 'main.php';
?>
<main>
    <h2 class="subpage">応募有難うございました</h2>
    <p>下記にてご入力頂きましたメールアドレス宛に採用案内をお送りいたしました。</p>
    <p>24時間以内にメールが届かない場合は、恐れ入りますがお問い合わせをお願いいたします。</p>                   
</main>
<?php
	include 'footer.php';
?>
         
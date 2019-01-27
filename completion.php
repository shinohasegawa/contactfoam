<?php
mb_language("japanese");
mb_internal_encoding("UTF-8");
$to = htmlspecialchars($_POST['email'], ENT_QUOTES);
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$gender = htmlspecialchars($_POST['gender'], ENT_QUOTES);
$datehour = htmlspecialchars($_POST['datehour'], ENT_QUOTES);
$email = htmlspecialchars($_POST['email'], ENT_QUOTES);
$freetext = htmlspecialchars($_POST['freetext'], ENT_QUOTES);
$subject = '施設見学会予約の件';
$body = "名前：".$name."\n"."性別：".$gender."\n"."日時：".$datehour."\n"."メール：".$email."\n"."コメント：".$freetext;
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
    <p>下記にてご入力頂きましたメールアドレス宛に施設見学会のご案内をお送りいたしました。</p>
    <p>５分以内にメールが届かない場合は、恐れ入りますがお問い合わせまたは再度申込みを御願い致します。</p>                   
</main>
<?php
	include 'footer.php';
?>
         
       
         


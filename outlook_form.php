
<?php 
require_once("EmailFormFieldValidator.class.php");
$errors = [];
  if(isset($_POST['submit'])){
    $validation = new EmailFormFieldValidator($_POST);
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Signaturen Generator</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="checkbox.js" defer></script>
</head>
<body>
<nav class="backTo">
    <a style="font-size: 20px;" href="overview.html">&#11013;&nbsp;Client Übersicht</a>
</nav>
<section>
<div class="intro">
<h2>Outlook Email Signaturen Generator</h2>
<hr class="underline">
<h4>FYI</h4>
<ul>
    <li><b>Bild:</b>&nbsp;Namenskonvention <b>Vorname_Nachname</b></li>
    <li><b>Kontaktlink:</b> Standard Link (https://stackfuel.com/de/kontakt/)</li>
    <li><b>ZURZEIT KEIN BANNER AUF LAGER!</b></li>
</ul>
</div>
<div class="bg-form">
    <div class="logo-box">
        <img width="200" src="./images/logo_white1_stack.png" alt="logo">
    </div>
    <form action="outlook_Gen.php" method="POST">
        <input type="text" name="name" placeholder="Name" required>
        <input type="text" name="jobtitel" placeholder="Jobtitel" required>
        <input type="text" name="abteilung" placeholder="Abteilung" required>
        <input type="text" name="profilePicture" placeholder="Bild   *optional">
        <input type="text" name="handy" placeholder="Handynummer  *optional">
        <input type="text" name="telefon" placeholder="Telefonnummer  *optional">
        <input type="text" name="email" placeholder="Email">
        <div class="error">
            <?php echo $errors['email'] ?? ''?>
        </div>
        <input type="text" name="btnLink" placeholder="Kontaktlink" required>
        <input type="text" name="abschiedsgruss" placeholder="Abschiedsgruss  *optional">
        <div class="divider"></div>
        <hr>
            <h3>Banner</h3>
            <div class="banner-container">
                <span>Yes</span><input class="yes" type="checkbox" name="bannerYes" required></p>
                <span>No</span><input class="no" type="checkbox" name="bannerNo" required></p>
            </div>
        <input class="btn-submit" type="submit" value="Generieren">
    </form>
</div>
</section>
    

</body>
</html>
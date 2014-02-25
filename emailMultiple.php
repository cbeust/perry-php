<?

include_once "_common.php";

$start = $_GET["start"];
$count = $_GET["count"];

$count = 3;

for ($i = $start; $i < $start + $count; $i++) {
  $englishFile = cbGetEnglishFiles($i);
  $title = $i . ' - ' . cbFindGermanTitle($i);
  echo "Sending " . $i . " Title:" . $title . "<p>\n";
  cbSendEmailWithAttachment($englishFile[0], $title);
  sleep(10);
}

?>

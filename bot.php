<?php
include_once("class.tg.php");
include_once("db.php");

$update = json_decode(file_get_contents('php://input'), true);
$message = $update["message"];
$cid = $message["chat"]["id"];
$text = $message["text"];
$mid = $message["message_id"];
$name = $message["chat"]["first_name"];
$user = $message["from"]["username"];
$fname = $message["from"]["first_name"];
$flastname = $message["from"]["last_name"];
$fromid = $message["from"]["id"];
$cqu = $update["callback_query"];
$cid2 = $cqu["message"]["chat"]["id"];
$fid2 = $cqu["message"]["from"]["id"];
$mid2 = $cqu["message"]["message_id"];
$data = $cqu["data"];
$cqid = $cqu["id"];
$TG = new BotTG();

define("ADMIN_ID", 1529728024);

$redeem60 = count(file('s60.txt'));
$redeem325 = count(file('s325.txt'));
$redeem660 = count(file('s660.txt'));
$redeem1800 = count(file('s1800.txt'));
$redeem3850 = count(file('s3850.txt'));
$redeem8100 = count(file('s8100.txt'));

if (!isset($connection)) {
  echo "Connection failed";
  die();
}

if (isset($cid)) {
  $connection->query("INSERT INTO `message_history`(`c_id`,`c_message`) VALUES('$cid','$text')");
} else {
  $cid = $cid2;
  $connection->query("INSERT INTO `message_history`(`c_id`,`c_message`) VALUES('$cid','$text')");
}
$mysql = $connection->query("SELECT * FROM `users` WHERE `id_tg`=$cid");
$r = $mysql->fetch_assoc();
if (($text == "/admin" && $cid == ADMIN_ID) || $data == "adminback") {
  $TG->sendm($cid, "<b>Redeem soni:
💣 60UC -  $redeem60 💣
💣 325UC - $redeem325 💣
💣 660UC - $redeem660 💣
💣 1800UC - $redeem1800 💣
💣 3850UC - $redeem3850 💣
💣 8100UC - $redeem8100 💣 </b>", [
    'inline_keyboard' => [
      [['text' => "🔰 REDEEM CODE", 'callback_data' => "redeem_codes"]],
    ]
  ]);
}
if ($data == "redeem_codes") {
  $TG->sendm($cid, "Qancha kerak ⤵️", [
    'inline_keyboard' => [
      [['text' => "1️⃣", 'callback_data' => 'redeemgive||1'], ['text' => "2️⃣", 'callback_data' => 'redeemgive||2'], ['text' => "3️⃣", 'callback_data' => 'redeemgive||3']],
      [['text' => "4️⃣", 'callback_data' => 'redeemgive||4'], ['text' => "5️⃣", 'callback_data' => 'redeemgive||5'], ['text' => "6️⃣", 'callback_data' => 'redeemgive||6']],
      [['text' => "7️⃣", 'callback_data' => 'redeemgive||7'], ['text' => "8️⃣", 'callback_data' => 'redeemgive||8'], ['text' => "9️⃣", 'callback_data' => 'redeemgive||9']],
      [['text' => "🔟", 'callback_data' => 'redeemgive||10'], ['text' => "1️⃣5️⃣", 'callback_data' => 'redeemgive||15']],
      [['text' => "2️⃣0️⃣", 'callback_data' => 'redeemgive||20']],
      [['text' => "5️⃣0️⃣", 'callback_data' => 'redeemgive||50']],
      [['text' => "100", 'callback_data' => 'redeemgive||100']],
    ]
  ]);
}
if (stripos("$data", "redeemgive||") !== false) {
  $ex = explode('||', $data);
  $TG->editm(
    $cid,
    $mid2,
    "Redeemni tanglang",
    [
      'inline_keyboard' => [
        [['text' => "60UC", 'callback_data' => 'promo||60||' . $ex[1]]],
        [['text' => "325UC", 'callback_data' => 'promo||325||' . $ex[1]]],
        [['text' => "385UC", 'callback_data' => 'promo||385||' . $ex[1]]],
        [['text' => "900UC", 'callback_data' => 'promo||900||' . $ex[1]]],
        [['text' => "660UC", 'callback_data' => 'promo||660||' . $ex[1]]],
        [['text' => "1800UC", 'callback_data' => 'promo||1800||' . $ex[1]]],
        [['text' => "3850UC", 'callback_data' => 'promo||3850||' . $ex[1]]],
        [['text' => "8100UC", 'callback_data' => 'promo||8100||' . $ex[1]]]
      ]
    ]
  );
}
if (stripos("$data", "promo||") !== false) {
  $TG->deletem($cid, $mid2);
  $ex = explode('||', $data);
  for ($i = 0; $i < $ex[2]; $i++) {
    $file = file_get_contents("s" . $ex[1] . ".txt");
    $exp = explode('
', $file);
    $t = str_replace($exp[0] . '
', '', $file);
    file_put_contents("s" . $ex[1] . ".txt", $t);
    $text .= "<code>$exp[0]</code>\n";
  }
  $TG->sendm($cid, $text . "<b>💚 Code Type: $ex[1]
🎁 Quantity: $ex[2]</b>", [
    'inline_keyboard' => [
      [['text' => "🔰 REDEEM CODE", 'callback_data' => "redeem_codes"]]
    ]
  ]);
}
?>
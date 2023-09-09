<?php
include("class.tg.php");
include("db.php");
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
$TG = new tgBot();

if (isset($cid)) {
  mysqli_query($connection, "INSERT INTO `message_history`(`c_id`,`c_message`) VALUES('$cid','$text')");
} else {
  $cid = $cid2;
  mysqli_query($connection, "INSERT INTO `message_history`(`c_id`,`c_message`) VALUES('$cid','$data')");
}
$mysql = mysqli_query($connection, "SELECT * FROM `users` WHERE `id_tg`=$cid");
$r = mysqli_fetch_assoc($mysql);
if ($text == "/admin" and ($cid == "1529728024" or $cid == "285927787" or $cid == "2129288549" or $cid == "621875094" or $cid == "1352408855" or $cid == "5524513567") or $data == "adminback") {
  $redeem60 = count(file('s60.txt'));
  $redeem325 = count(file('s325.txt'));
  $redeem660 = count(file('s660.txt'));
  $redeem1800 = count(file('s1800.txt'));
  $redeem3850 = count(file('s3850.txt'));
  $redeem8100 = count(file('s8100.txt'));
  if ($cid == "285927787" or $cid == "1") {
    $mysql = mysqli_query($connection, "SELECT * FROM `pb` WHERE `date`='today'");
    $row = mysqli_fetch_assoc($mysql);
    $usdt = 0.84 * $row[60] + 4.18 * $row[325] + 8.3 * $row[660] + 21 * $row[1800] + 42 * $row[3850] + 81 * $row[8100];
    $TG->sendm($cid, "<b>количество кодов:
💣 60UC -  $redeem60 💣
💣 325UC - $redeem325 💣
💣 660UC - $redeem660 💣
💣 1800UC - $redeem1800 💣
💣 3850UC - $redeem3850 💣
💣 8100UC - $redeem8100 💣
Куплено: 
💣 60UC -  $row[60] 💣
💣 325UC - $row[325] 💣
💣 660UC - $row[660] 💣
💣 1800UC - $row[1800] 💣
💣 3850UC - $row[3850] 💣
💣 8100UC - $row[8100] 💣
" . $usdt . " USDT

</b>", [
      'inline_keyboard' => [
        [['text' => "🔰 REDEEM CODE", 'callback_data' => "redeem_codes77"]]
      ]
    ]);
  } elseif ($cid == "621875094") {
    $mysql = mysqli_query($connection, "SELECT * FROM `pb` WHERE `date`='maksimum'");
    $row = mysqli_fetch_assoc($mysql);
    $sum = 87.54 / 100 * $row[60] + 87.54 / 20 * $row[325] + 87.54 / 10 * $row[660] + 87.54 / 4 * $row[1800] + 87.54 / 2 * $row[3850] + 87.54 * $row[8100];
    $TG->sendm($cid, "<b>Kodlar:
💣 60UC -  $redeem60 💣
💣 325UC - $redeem325 💣
💣 660UC - $redeem660 💣
💣 1800UC - $redeem1800 💣
💣 3850UC - $redeem3850 💣
💣 8100UC - $redeem8100 💣
Sotib olingan: 
💣 60UC -  $row[60] 💣
💣 325UC - $row[325] 💣
💣 660UC - $row[660] 💣
💣 1800UC - $row[1800] 💣
💣 3850UC - $row[3850] 💣
💣 8100UC - $row[8100] 💣
Sotib olinga ($): $sum
</b>", [
      'inline_keyboard' => [
        [['text' => "🔰 REDEEM CODE", 'callback_data' => "redeem_codesmak"]]
      ]
    ]);
  } elseif ($cid == "5524513567") {
    $mysql = mysqli_query($connection, "SELECT * FROM `pb` WHERE `date`='cocoe'");
    $row = mysqli_fetch_assoc($mysql);
    $sum = 87.54 / 100 * $row[60] + 87.54 / 20 * $row[325] + 87.54 / 10 * $row[660] + 87.54 / 4 * $row[1800] + 87.54 / 2 * $row[3850] + 87.54 * $row[8100];
    $TG->sendm($cid, "<b>Kodlar:
💣 60UC -  $redeem60 💣
💣 325UC - $redeem325 💣
💣 660UC - $redeem660 💣
💣 1800UC - $redeem1800 💣
💣 3850UC - $redeem3850 💣
💣 8100UC - $redeem8100 💣
Sotib olingan: 
💣 60UC -  $row[60] 💣
💣 325UC - $row[325] 💣
💣 660UC - $row[660] 💣
💣 1800UC - $row[1800] 💣
💣 3850UC - $row[3850] 💣
💣 8100UC - $row[8100] 💣
Sotib olinga ($): $sum
</b>", [
      'inline_keyboard' => [
        [['text' => "🔰 REDEEM CODE", 'callback_data' => "redeem_codesmak2"]]
      ]
    ]);
  } elseif ($cid == "1352408855") {
    $mysql = mysqli_query($connection, "SELECT * FROM `pb` WHERE `date`='ph'");
    $row = mysqli_fetch_assoc($mysql);
    $sum = 87.54 / 100 * $row[60] + 87.54 / 20 * $row[325] + 87.54 / 10 * $row[660] + 87.54 / 4 * $row[1800] + 87.54 / 2 * $row[3850] + 87.54 * $row[8100];
    $TG->sendm($cid, "<b>Kodlar:
💣 60UC -  $redeem60 💣
💣 325UC - $redeem325 💣
💣 660UC - $redeem660 💣
💣 1800UC - $redeem1800 💣
💣 3850UC - $redeem3850 💣
💣 8100UC - $redeem8100 💣
Sotib olingan: 
💣 60UC -  $row[60] 💣
💣 325UC - $row[325] 💣
💣 660UC - $row[660] 💣
💣 1800UC - $row[1800] 💣
💣 3850UC - $row[3850] 💣
💣 8100UC - $row[8100] 💣
Sotib olinga ($): $sum
</b>", [
      'inline_keyboard' => [
        [['text' => "🔰 REDEEM CODE", 'callback_data' => "redeem_codesph"]]
      ]
    ]);
  } else {
    $sum = 87.54 / 100 * $redeem60 + 87.54 / 20 * $redeem325 + 87.54 / 10 * $redeem660 + 87.54 / 4 * $redeem1800 + 87.54 / 2 * $redeem3850 + 87.54 * $redeem8100;
    $TG->sendm($cid, "<b>Redeem soni:
💣 60UC -  $redeem60 💣
💣 325UC - $redeem325 💣
💣 660UC - $redeem660 💣
💣 1800UC - $redeem1800 💣
💣 3850UC - $redeem3850 💣
💣 8100UC - $redeem8100 💣 </b>
Narxi: 
<b>💣 60UC -  " . 87.54 / 100 * $redeem60 . " 💣
💣 325UC - " . 87.54 / 20 * $redeem325 . " 💣
💣 660UC - " . 87.54 / 10 * $redeem660 . " 💣
💣 1800UC - " . 87.54 / 4 * $redeem1800 . " 💣
💣 3850UC - " . 87.54 / 2 * $redeem3850 . " 💣
💣 8100UC - " . 87.54 * $redeem8100 . " 💣
Umumiy: " . $sum . "</b>", [
      'inline_keyboard' => [
        [['text' => "🎡 INFO ADMINS", 'callback_data' => "infoadmins"]],
        [['text' => "🔰 REDEEM CODE", 'callback_data' => "redeem_codes"]],
        [['text' => "☑️ Dollar Kurs", 'callback_data' => "admin_bankdollar"]]
      ]
    ]);
  }
}
if ($data == "infoadmins") {
  $TG->editm($cid, $mid2, "<b>Adminni tanglang 👇</b>", [
    'inline_keyboard' => [
      [['text' => "🥷 PROSTI BRO", 'callback_data' => "info||prostibro"]],
      [['text' => "🥷 MAKSIMUMTV", 'callback_data' => "info||maksimumtv"]],
      [['text' => "🥷 COCOE", 'callback_data' => "info||cocoe"]],
      [['text' => "🥷 PUBG HUBB", 'callback_data' => "info||pubghubb"]],
      [['text' => "🔙 Ortga", 'callback_data' => "adminback"]],
    ]
  ]);
}
if (stripos("$data", "info||") !== false) {
  $ex = explode('||', $data);
  if ($ex[1] == "prostibro") {
    $mysql = mysqli_query($connection, "SELECT * FROM `pb` WHERE `date`='today'");
    $row = mysqli_fetch_assoc($mysql);
    $dollar = 87.54 / 100 * $row[60] + 87.54 / 20 * $row[325] + 87.54 / 10 * $row[660] + 87.54 / 4 * $row[1800] + 87.54 / 2 * $row[3850] + 87.54 * $row[8100];
    $rub = 56 * $row[60] + 278 * $row[325] + 555 * $row[660] + 1385 * $row[1800] + 2765 * $row[3850] + 5520 * $row[8100];
    $TG->editm($cid, $mid2, "<b> 🔥 Prosti Bro
💣 60UC -  $row[60] 💣
💣 325UC - $row[325] 💣
💣 660UC - $row[660] 💣
💣 1800UC - $row[1800] 💣
💣 3850UC - $row[3850] 💣
💣 8100UC - $row[8100] 💣
($): $dollar 
(₽): $rub
(UZS): " . number_format($rub * 173, 0, "", "'") . "
</b>", [
      'inline_keyboard' => [
        [['text' => "⚠️ Restart", 'callback_data' => "restsure||prostibro"]],
        [['text' => "🔏 History", 'callback_data' => "history||maksimumtv"]],
        [['text' => "🔙 Ortga", 'callback_data' => "adminback"]]
      ]
    ]);
  } elseif ($ex[1] == "maksimumtv") {
    $mysql = mysqli_query($connection, "SELECT * FROM `pb` WHERE `date`='maksimum'");
    $row = mysqli_fetch_assoc($mysql);
    $dollar = 87.54 / 100 * $row[60] + 87.54 / 20 * $row[325] + 87.54 / 10 * $row[660] + 87.54 / 4 * $row[1800] + 87.54 / 2 * $row[3850] + 87.54 * $row[8100];
    $TG->editm($cid, $mid2, "<b> 💚 MaksimumTV
💣 60UC -  $row[60] 💣
💣 325UC - $row[325] 💣
💣 660UC - $row[660] 💣
💣 1800UC - $row[1800] 💣
💣 3850UC - $row[3850] 💣
💣 8100UC - $row[8100] 💣
Umumiy qiymat ($): 
  $dollar 
</b>", [
      'inline_keyboard' => [
        [['text' => "⚠️ Restart", 'callback_data' => "restsure||maksimumtv"]],
        [['text' => "🔏 History", 'callback_data' => "history||maksimumtv"]],
        [['text' => "🔙 Ortga", 'callback_data' => "adminback"]]
      ]
    ]);
  } elseif ($ex[1] == "cocoe") {
    $mysql = mysqli_query($connection, "SELECT * FROM `pb` WHERE `date`='cocoe'");
    $row = mysqli_fetch_assoc($mysql);
    $dollar = 87.54 / 100 * $row[60] + 87.54 / 20 * $row[325] + 87.54 / 10 * $row[660] + 87.54 / 4 * $row[1800] + 87.54 / 2 * $row[3850] + 87.54 * $row[8100];
    $TG->editm($cid, $mid2, "<b> 💚 COCOE
💣 60UC -  $row[60] 💣
💣 325UC - $row[325] 💣
💣 660UC - $row[660] 💣
💣 1800UC - $row[1800] 💣
💣 3850UC - $row[3850] 💣
💣 8100UC - $row[8100] 💣
Umumiy qiymat ($): 
  $dollar 
</b>", [
      'inline_keyboard' => [
        [['text' => "⚠️ Restart", 'callback_data' => "restsure||cocoe"]],
        [['text' => "🔏 History", 'callback_data' => "history||cocoe"]],
        [['text' => "🔙 Ortga", 'callback_data' => "adminback"]]
      ]
    ]);
  } elseif ($ex[1] == "pubghubb") {
    $mysql = mysqli_query($connection, "SELECT * FROM `pb` WHERE `date`='ph'");
    $row = mysqli_fetch_assoc($mysql);
    $dollar = 87.54 / 100 * $row[60] + 87.54 / 20 * $row[325] + 87.54 / 10 * $row[660] + 87.54 / 4 * $row[1800] + 87.54 / 2 * $row[3850] + 87.54 * $row[8100];
    $TG->editm($cid, $mid2, "<b> 🔞 PUBG HUBB
    💣 60UC -  $row[60] 💣
💣 325UC - $row[325] 💣
💣 660UC - $row[660] 💣
💣 1800UC - $row[1800] 💣
💣 3850UC - $row[3850] 💣
💣 8100UC - $row[8100] 💣
Umumiy qiymat ($): 
  $dollar 
</b>", [
      'inline_keyboard' => [
        [['text' => "⚠️ Restart", 'callback_data' => "restsure||pubghubb"]],
        [['text' => "🔏 History", 'callback_data' => "history||pubghubb"]],
        [['text' => "🔙 Ortga", 'callback_data' => "adminback"]]
      ]
    ]);
  }
}
if (stripos("$data", "restsure||") !== false) {
  $ex = explode('||', $data);
  $TG->editm(
    $cid,
    $mid2, "🥷 Person who need restart: <b>" . strtoupper($ex[1]) . "</b>
🔀 Are you sure?",
    [
      'inline_keyboard' => [
        [['text' => "💚 YES", 'callback_data' => 'rest||' . $ex[1]]],
        [['text' => "✖️ NO", 'callback_data' => 'adminback']]
      ]
    ]
  );
}
if (stripos("$data", "rest||") !== false) {
  $ex = explode('||', $data);
  if ($ex[1] == "prostibro") {
    mysqli_query($connection, "UPDATE `pb` SET `60` = '0', `325` = '0', `660` = '0', `1800` = '0', `3850` = '0', `8100` = '0' WHERE `date` = 'today';");
  } elseif ($ex[1] == "maksimumtv") {
    mysqli_query($connection, "UPDATE `pb` SET `60` = '0', `325` = '0', `660` = '0', `1800` = '0', `3850` = '0', `8100` = '0' WHERE `date` = 'maksimum';");
  } elseif ($ex[1] == "cocoe") {
    mysqli_query($connection, "UPDATE `pb` SET `60` = '0', `325` = '0', `660` = '0', `1800` = '0', `3850` = '0', `8100` = '0' WHERE `date` = 'cocoe';");
  } elseif ($ex[1] == "pubghubb") {
    mysqli_query($connection, "UPDATE `pb` SET `60` = '0', `325` = '0', `660` = '0', `1800` = '0', `3850` = '0', `8100` = '0' WHERE `date` = 'ph';");
  }
  $TG->editm($cid, $mid2, "Bor restarted successfully ✅", [
    'inline_keyboard' => [
      [['text' => "🔙 Ortga", 'callback_data' => "adminback"]]
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

if ($data == "redeem_codes77") {
  $TG->sendm($cid, "Количество  ⤵️", [
    'inline_keyboard' => [
      [['text' => "1️⃣", 'callback_data' => 'redeemgiv1e||1'], ['text' => "2️⃣", 'callback_data' => 'redeemgiv1e||2'], ['text' => "3️⃣", 'callback_data' => 'redeemgiv1e||3']],
      [['text' => "4️⃣", 'callback_data' => 'redeemgiv1e||4'], ['text' => "5️⃣", 'callback_data' => 'redeemgiv1e||5'], ['text' => "6️⃣", 'callback_data' => 'redeemgiv1e||6']],
      [['text' => "7️⃣", 'callback_data' => 'redeemgiv1e||7'], ['text' => "8️⃣", 'callback_data' => 'redeemgiv1e||8'], ['text' => "9️⃣", 'callback_data' => 'redeemgiv1e||9']],
      [['text' => "🔟", 'callback_data' => 'redeemgiv1e||10']]
    ]
  ]);
}
if ($data == "redeem_codesmak") {
  $TG->sendm($cid, "Количество  ⤵️", [
    'inline_keyboard' => [
      [['text' => "1️⃣", 'callback_data' => 'redeemgiv2e||1'], ['text' => "2️⃣", 'callback_data' => 'redeemgiv2e||2'], ['text' => "3️⃣", 'callback_data' => 'redeemgiv2e||3']],
      [['text' => "4️⃣", 'callback_data' => 'redeemgiv2e||4'], ['text' => "5️⃣", 'callback_data' => 'redeemgiv2e||5'], ['text' => "6️⃣", 'callback_data' => 'redeemgiv2e||6']],
      [['text' => "7️⃣", 'callback_data' => 'redeemgiv2e||7'], ['text' => "8️⃣", 'callback_data' => 'redeemgiv2e||8'], ['text' => "9️⃣", 'callback_data' => 'redeemgiv2e||9']],
    ]
  ]);
}
if ($data == "redeem_codesmak2") {
  $TG->sendm($cid, "Количество  ⤵️", [
    'inline_keyboard' => [
      [['text' => "1️⃣", 'callback_data' => 'redeemgiv4e||1'], ['text' => "2️⃣", 'callback_data' => 'redeemgiv4e||2'], ['text' => "3️⃣", 'callback_data' => 'redeemgiv4e||3']],
      [['text' => "4️⃣", 'callback_data' => 'redeemgiv4e||4'], ['text' => "5️⃣", 'callback_data' => 'redeemgiv4e||5'], ['text' => "6️⃣", 'callback_data' => 'redeemgiv4e||6']],
      [['text' => "7️⃣", 'callback_data' => 'redeemgiv4e||7'], ['text' => "8️⃣", 'callback_data' => 'redeemgiv4e||8'], ['text' => "9️⃣", 'callback_data' => 'redeemgiv4e||9']],
    ]
  ]);
}
if ($data == "redeem_codesph") {
  $TG->sendm($cid, "Количество  ⤵️", [
    'inline_keyboard' => [
      [['text' => "1️⃣", 'callback_data' => 'redeemgiv3e||1'], ['text' => "2️⃣", 'callback_data' => 'redeemgiv3e||2'], ['text' => "3️⃣", 'callback_data' => 'redeemgiv3e||3']],
      [['text' => "4️⃣", 'callback_data' => 'redeemgiv3e||4'], ['text' => "5️⃣", 'callback_data' => 'redeemgiv3e||5'], ['text' => "6️⃣", 'callback_data' => 'redeemgiv3e||6']],
      [['text' => "7️⃣", 'callback_data' => 'redeemgiv3e||7'], ['text' => "8️⃣", 'callback_data' => 'redeemgiv3e||8'], ['text' => "9️⃣", 'callback_data' => 'redeemgiv3e||9']],
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
if (stripos("$data", "redeemgiv1e||") !== false) {
  $ex = explode('||', $data);
  $TG->editm(
    $cid,
    $mid2,
    "Выберите промокод",
    [
      'inline_keyboard' => [
        [['text' => "60UC", 'callback_data' => 'sure1||60||' . $ex[1]]],
        [['text' => "325UC", 'callback_data' => 'sure1||325||' . $ex[1]]],
        [['text' => "660UC", 'callback_data' => 'sure1||660||' . $ex[1]]],
        [['text' => "1800UC", 'callback_data' => 'sure1||1800||' . $ex[1]]],
        [['text' => "3850UC", 'callback_data' => 'sure1||3850||' . $ex[1]]],
        [['text' => "8100UC", 'callback_data' => 'sure1||8100||' . $ex[1]]]
      ]
    ]
  );
}
if (stripos("$data", "sure1||") !== false) {
  $TG->deletem($cid, $mid2);
  $ex = explode('||', $data);
  $file = file_get_contents("s" . $ex[1] . ".txt");
  if ($file == "") {
    $TG->answerCallbackQuery($cqid, "@Method_UZ");
  } else {
    $TG->sendm(
      $cid,
      "💚 Code Type: $ex[1]
🎁 Quantity: $ex[2]
🔀 Are you sure?",
      [
        'inline_keyboard' => [
          [['text' => "💚 YES", 'callback_data' => 'promo1||' . $ex[1] . '||' . $ex[2]]],
          [['text' => "✖️ NO", 'callback_data' => 'adminback']]
        ]
      ]
    );
  }
}
if (stripos("$data", "redeemgiv2e||") !== false) {
  $ex = explode('||', $data);
  $TG->editm(
    $cid,
    $mid2,
    "Redeemni tanglang",
    [
      'inline_keyboard' => [
        [['text' => "60UC", 'callback_data' => 'sure2||60||' . $ex[1]]],
        [['text' => "325UC", 'callback_data' => 'sure2||325||' . $ex[1]]],
        [['text' => "660UC", 'callback_data' => 'sure2||660||' . $ex[1]]],
        [['text' => "1800UC", 'callback_data' => 'sure2||1800||' . $ex[1]]],
        [['text' => "3850UC", 'callback_data' => 'sure2||3850||' . $ex[1]]],
        [['text' => "8100UC", 'callback_data' => 'sure2||8100||' . $ex[1]]]
      ]
    ]
  );
}
if (stripos("$data", "sure2||") !== false) {
  $TG->deletem($cid, $mid2);
  $ex = explode('||', $data);
  $file = file_get_contents("s" . $ex[1] . ".txt");
  if ($file == "") {
    $TG->answerCallbackQuery($cqid, "Qolmagan😭 @Method_UZ ga aytsangiz qo'shib qo'yadi");
  } else {
    $TG->sendm(
      $cid,
      "💚 Code Type: $ex[1]
🎁 Quantity: $ex[2]
🔀 Are you sure?",
      [
        'inline_keyboard' => [
          [['text' => "💚 YES", 'callback_data' => 'promo2||' . $ex[1] . '||' . $ex[2]]],
          [['text' => "✖️ NO", 'callback_data' => 'adminback']]
        ]
      ]
    );
  }
}
if (stripos("$data", "redeemgiv4e||") !== false) {
  $ex = explode('||', $data);
  $TG->editm(
    $cid,
    $mid2,
    "Redeemni tanglang",
    [
      'inline_keyboard' => [
        [['text' => "60UC", 'callback_data' => 'sure4||60||' . $ex[1]]],
        [['text' => "325UC", 'callback_data' => 'sure4||325||' . $ex[1]]],
        [['text' => "660UC", 'callback_data' => 'sure4||660||' . $ex[1]]],
        [['text' => "1800UC", 'callback_data' => 'sure4||1800||' . $ex[1]]],
        [['text' => "3850UC", 'callback_data' => 'sure4||3850||' . $ex[1]]],
        [['text' => "8100UC", 'callback_data' => 'sure4||8100||' . $ex[1]]]
      ]
    ]
  );
}
if (stripos("$data", "sure4||") !== false) {
  $TG->deletem($cid, $mid2);
  $ex = explode('||', $data);
  $file = file_get_contents("s" . $ex[1] . ".txt");
  if ($file == "") {
    $TG->answerCallbackQuery($cqid, "Qolmagan😭 @Method_UZ ga aytsangiz qo'shib qo'yadi");
  } else {
    $TG->sendm(
      $cid,
      "💚 Code Type: $ex[1]
🎁 Quantity: $ex[2]
🔀 Are you sure?",
      [
        'inline_keyboard' => [
          [['text' => "💚 YES", 'callback_data' => 'promo4||' . $ex[1] . '||' . $ex[2]]],
          [['text' => "✖️ NO", 'callback_data' => 'adminback']]
        ]
      ]
    );
  }
}
if (stripos("$data", "redeemgiv3e||") !== false) {
  $ex = explode('||', $data);
  $TG->editm(
    $cid,
    $mid2,
    "Redeemni tanglang",
    [
      'inline_keyboard' => [
        [['text' => "60UC", 'callback_data' => 'sure3||60||' . $ex[1]]],
        [['text' => "325UC", 'callback_data' => 'sure3||325||' . $ex[1]]],
        [['text' => "660UC", 'callback_data' => 'sure3||660||' . $ex[1]]],
        [['text' => "1800UC", 'callback_data' => 'sure3||1800||' . $ex[1]]],
        [['text' => "3850UC", 'callback_data' => 'sure3||3850||' . $ex[1]]],
        [['text' => "8100UC", 'callback_data' => 'sure3||8100||' . $ex[1]]]
      ]
    ]
  );
}
if (stripos("$data", "sure3||") !== false) {
  $TG->deletem($cid, $mid2);
  $ex = explode('||', $data);
  $file = file_get_contents("s" . $ex[1] . ".txt");
  if ($file == "") {
    $TG->answerCallbackQuery($cqid, "Qolmagan😭 @Method_UZ ga aytsangiz qo'shib qo'yadi");
  } else {
    $TG->sendm(
      $cid,
      "💚 Code Type: $ex[1]
🎁 Quantity: $ex[2]
🔀 Are you sure?",
      [
        'inline_keyboard' => [
          [['text' => "💚 YES", 'callback_data' => 'promo3||' . $ex[1] . '||' . $ex[2]]],
          [['text' => "✖️ NO", 'callback_data' => 'adminback']]
        ]
      ]
    );
  }
}
if (stripos("$data", "promo1||") !== false and $cid == "285927787") {
  $TG->deletem($cid, $mid2);
  $ex = explode('||', $data);
  $time = date("H:i:s", strtotime('2 hour'));
  $date = date("mdY", strtotime('2 hour'));
  for ($i = 0; $i < $ex[2]; $i++) {
    $file = file_get_contents("s" . $ex[1] . ".txt");
    $exp = explode('
', $file);
    $t = str_replace($exp[0] . '
', '', $file);
    file_put_contents("s" . $ex[1] . ".txt", $t);
    mysqli_query($connection, "INSERT INTO `pb_history`(`date`,`time`,`code`,`code_type`) VALUES 
('$date','$time','$exp[0]','$ex[1]')");
    $text .= "<code>$exp[0]</code>\n";
  }
  $TG->sendm($cid, $text . "<b>💚 Code Type: $ex[1]
🎁 Quantity: $ex[2]</b>", [
    'inline_keyboard' => [
      [['text' => "🔰 REDEEM CODE", 'callback_data' => "redeem_codes77"]]
    ]
  ]);
  $mysql = mysqli_query($connection, "SELECT * FROM `pb` WHERE `date`='today'");
  $row = mysqli_fetch_assoc($mysql);
  $p = $row[$ex[1]] + $ex[2];
  mysqli_query($connection, "UPDATE `pb` SET `$ex[1]` = '$p' WHERE `date` = 'today';");
}
if (stripos("$data", "promo2||") !== false) {
  $TG->deletem($cid, $mid2);
  $ex = explode('||', $data);
  $time = date("H:i:s", strtotime('2 hour'));
  $date = date("mdY", strtotime('2 hour'));
  for ($i = 0; $i < $ex[2]; $i++) {
    $file = file_get_contents("s" . $ex[1] . ".txt");
    $exp = explode('
', $file);
    $t = str_replace($exp[0] . '
', '', $file);
    file_put_contents("s" . $ex[1] . ".txt", $t);
    mysqli_query($connection, "INSERT INTO `mkv_history`(`date`,`time`,`code`,`code_type`) VALUES 
('$date','$time','$exp[0]','$ex[1]')");
    $text .= "<code>$exp[0]</code>\n";
  }
  $TG->sendm($cid, $text . "<b>💚 Code Type: $ex[1]
🎁 Quantity: $ex[2]</b>");
  $mysql = mysqli_query($connection, "SELECT * FROM `pb` WHERE `date`='maksimum'");
  $row = mysqli_fetch_assoc($mysql);
  $p = $row[$ex[1]] + $ex[2];
  mysqli_query($connection, "UPDATE `pb` SET `$ex[1]` = '$p' WHERE `date` = 'maksimum';");
}
if (stripos("$data", "promo4||") !== false) {
  $TG->deletem($cid, $mid2);
  $ex = explode('||', $data);
  $time = date("H:i:s", strtotime('2 hour'));
  $date = date("mdY", strtotime('2 hour'));
  for ($i = 0; $i < $ex[2]; $i++) {
    $file = file_get_contents("s" . $ex[1] . ".txt");
    $exp = explode('
', $file);
    $t = str_replace($exp[0] . '
', '', $file);
    file_put_contents("s" . $ex[1] . ".txt", $t);
    mysqli_query($connection, "INSERT INTO `coc_history`(`date`,`time`,`code`,`code_type`) VALUES 
('$date','$time','$exp[0]','$ex[1]')");
    $text .= "<code>$exp[0]</code>\n";
  }
  $TG->sendm($cid, $text . "<b>💚 Code Type: $ex[1]
🎁 Quantity: $ex[2]</b>");
  $mysql = mysqli_query($connection, "SELECT * FROM `pb` WHERE `date`='cocoe'");
  $row = mysqli_fetch_assoc($mysql);
  $p = $row[$ex[1]] + $ex[2];
  mysqli_query($connection, "UPDATE `pb` SET `$ex[1]` = '$p' WHERE `date` = 'cocoe';");
}
if (stripos("$data", "promo3||") !== false) {
  $TG->deletem($cid, $mid2);
  $ex = explode('||', $data);
  $time = date("H:i:s", strtotime('2 hour'));
  $date = date("mdY", strtotime('2 hour'));
  for ($i = 0; $i < $ex[2]; $i++) {
    $file = file_get_contents("s" . $ex[1] . ".txt");
    $exp = explode('
', $file);
    $t = str_replace($exp[0] . '
', '', $file);
    file_put_contents("s" . $ex[1] . ".txt", $t);
    mysqli_query($connection, "INSERT INTO `ph_history`(`date`,`time`,`code`,`code_type`) VALUES 
('$date','$time','$exp[0]','$ex[1]')");
    $text .= "<code>$exp[0]</code>\n";
  }
  $TG->sendm($cid, $text . "<b>💚 Code Type: $ex[1]
🎁 Quantity: $ex[2]</b>");
  $mysql = mysqli_query($connection, "SELECT * FROM `pb` WHERE `date`='ph'");
  $row = mysqli_fetch_assoc($mysql);
  $p = $row[$ex[1]] + $ex[2];
  mysqli_query($connection, "UPDATE `pb` SET `$ex[1]` = '$p' WHERE `date` = 'ph';");
}
if (stripos("$data", "promo||") !== false) {
  $TG->deletem($cid, $mid2);
  $ex = explode('||', $data);
  for ($i = 0; $i < $ex[2]; $i++) {
    if ($ex[1] == 385) {
      $file = file_get_contents("s" . '60' . ".txt");
      $exp = explode('
', $file);
      $t = str_replace($exp[0] . '
', '', $file);
      file_put_contents("s" . '60' . ".txt", $t);
      $text .= "<code>$exp[0]</code>\n";
      $file = file_get_contents("s" . '325' . ".txt");
      $exp = explode('
', $file);
      $t = str_replace($exp[0] . '
', '', $file);
      file_put_contents("s" . '325' . ".txt", $t);
      $text .= "<code>$exp[0]</code>\n";
    } elseif ($ex[1] == 900) {
      for ($i = 0; $i < 4; $i++) {
        $file = file_get_contents("s" . '60' . ".txt");
        $exp = explode('
', $file);
        $t = str_replace($exp[0] . '
', '', $file);
        file_put_contents("s" . '60' . ".txt", $t);
        $text .= "<code>$exp[0]</code>\n";
      }
      $file = file_get_contents("s" . '660' . ".txt");
      $exp = explode('
', $file);
      $t = str_replace($exp[0] . '
', '', $file);
      file_put_contents("s" . '660' . ".txt", $t);
      $text .= "<code>$exp[0]</code>\n";
    } else {
      $file = file_get_contents("s" . $ex[1] . ".txt");
      $exp = explode('
', $file);
      $t = str_replace($exp[0] . '
', '', $file);
      file_put_contents("s" . $ex[1] . ".txt", $t);
      $text .= "<code>$exp[0]</code>\n";
    }
  }
  $TG->sendm($cid, $text . "<b>💚 Code Type: $ex[1]
🎁 Quantity: $ex[2]</b>", [
    'inline_keyboard' => [
      [['text' => "🔰 REDEEM CODE", 'callback_data' => "redeem_codes"]]
    ]
  ]);
  if ($cid == "2129288549") {
    $TG->sendm('1529728024', "<b>💚 Code Type: $ex[1]
🎁 Quantity: $ex[2]
🥷 Lazikko
🔀 Codes:
$text</b>");
  }
}
if ($data == "admin_bankdollar") {
  $TG->editm($cid, $mid2, "<b>Yuklanmoqda...</b>");
  $rbk = file_get_contents('https://bank.uz/uz/currency');
  $rbk = explode('Sotish', $rbk);
  $rbk = explode('Sotib olish', $rbk[1]);
  $rbk = str_replace("\n", '', $rbk[0]);
  $rbk = explode('<spanclass="medium-text">', $rbk);
  $rbk = strip_tags(preg_replace('/\s+/', ' ', $rbk[0]));
  $rbk = str_replace("   ", "", $rbk);
  for ($i = 0; $i < 31; $i++) {
    $ex = explode("so'm", $rbk);
    $text .= "$ex[$i]so'm\n";
  }
  $text = join("\n", array_map("trim", explode("\n", $text)));
  $TG->editm($cid2, $mid2, "<b>" . trim($text) . "</b>", [
    'inline_keyboard' => [
      [['text' => "🔙 Ortga", 'callback_data' => "adminback"]]
    ]
  ]);
}
?>
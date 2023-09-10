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

if($text == "/start"){
  $TG->sendMessage($cid, "Hello $name, I am a telegram bot. I can help you to manage your telegram account.");
}

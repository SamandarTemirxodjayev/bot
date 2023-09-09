<?php
class tgBot
{
  private function bot($method, array $datas = [])
  {
    $url = "https://api.telegram.org/bot" . "6143070233:AAGBG7klyx1UsIfXESf0GU2F8HDv669GP7U" . "/" . $method;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
    $res = curl_exec($ch);
    if (curl_error($ch)) {
      var_dump(curl_error($ch));
    } else {
      return json_decode($res);
    }
  }
  public function sendm($id, $message, $keyboard = "")
  {
    if ($keyboard == !"") {
      return $this->bot('sendMessage', ['chat_id' => $id, 'text' => $message, 'parse_mode' => 'html', 'reply_markup' => json_encode($keyboard)]);
    } else {
      return $this->bot('sendMessage', ['chat_id' => $id, 'text' => $message, 'parse_mode' => "html"]);
    }
  }
  public function deletem($id, $mid)
  {
    return $this->bot("deleteMessage", ["chat_id" => $id, "message_id" => $mid]);
  }
  public function senddice($id, $dice)
  {
    return $this->bot("sendDice", ["chat_id" => $id, "emoji" => $dice]);
  }
  public function editm($id, $mid, $text, $keyboard = "")
  {
    if ($keyboard == !"") {
      return $this->bot("editMessageText", ["chat_id" => $id, "message_id" => $mid, "text" => $text, "parse_mode" => "html", "reply_markup" => json_encode($keyboard)]);
    } else {
      return $this->bot("editMessageText", ["chat_id" => $id, "message_id" => $mid, 'text' => $text, "parse_mode" => "html"]);
    }
  }
  public function answerCallbackQuery($mid, $text)
  {
    return $this->bot("answerCallbackQuery", ["callback_query_id" => $mid, "text" => $text, 'show_alert' => true]);
  }
  public function step($id, $value)
  {
    include("inc/db.php");
    $result = mysqli_query($connection, "SELECT * FROM `step` WHERE id_tg=$id");
    $food = mysqli_fetch_assoc($result);
    if ($food['id_tg'] == !"") {
      return mysqli_query($connection, "UPDATE step SET value='$value' WHERE id_tg='$id'");
    } else {
      return mysqli_query($connection, "INSERT INTO `step`(`id_tg`,`value`) VALUES ('$id','$value')");
    }
  }
  public function ustep($id)
  {
    include("inc/db.php");
    return mysqli_query($connection, "DELETE FROM `step` WHERE `step`.`id_tg` = $id");
  }
  public function sendp($id, $url, $message, $keyboard = "")
  {
    if ($keyboard == !"") {
      return $this->bot('sendPhoto', ['chat_id' => $id, 'photo' => $url, 'caption' => $message, 'parse_mode' => "html", 'reply_markup' => json_encode($keyboard)]);
    } else {
      return $this->bot('sendPhoto', ['chat_id' => $id, 'photo' => $url, 'caption' => $message, 'parse_mode' => "html"]);
    }
  }
}
function bot($method, $datas = [])
{
  $url = "https://api.telegram.org/bot" . "6143070233:AAGBG7klyx1UsIfXESf0GU2F8HDv669GP7U" . "/" . $method;
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
  $res = curl_exec($ch);
  if (curl_error($ch)) {
    var_dump(curl_error($ch));
  } else {
    return json_decode($res);
  }
}
?>
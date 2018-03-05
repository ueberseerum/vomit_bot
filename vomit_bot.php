<?php
 
$botToken = "530147369:AAH9l96aBE-NG1Iqxd0s5NkGmZSD7UT-KM0";
$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);

$chatId = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];

switch($message) {
        case "/test":
                sendMessage($chatId, "Test: ".$chatId);
                break;
        case "/shop":
                sendMessage($chatId, "/t_01");
                sendMessage($chatId, "/t_02");
                sendMessage($chatId, "/t_03");
                sendMessage($chatId, "/t_04");
                sendMessage($chatId, "/t_05");
                sendMessage($chatId, "/t_06");
                sendMessage($chatId, "/t_07");
                sendMessage($chatId, "/t_08");
                sendMessage($chatId, "/t_09");
                sendMessage($chatId, "/t_19");
                sendMessage($chatId, "/t_20");
                sendMessage($chatId, "/t_21");
                sendMessage($chatId, "/t_22");
                sendMessage($chatId, "/t_23");
                sendMessage($chatId, "/t_501");
                sendMessage($chatId, "/t_tch");
                break;
        default:
                break;
}
 
function sendMessage ($chatId, $message) {
        $url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".urlencode($message);
        file_get_contents($url);
}
?>

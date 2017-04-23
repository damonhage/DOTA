<?php

$api_key = "F9CAC192F951218EB42DC5E383FED159";
$steam_id = "76561198126044756";
$api_url = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=$api_key&steamids=$steamid";

#http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=API_KEY_HERE&steamids=STEAM_ID(s)_HERE

$json = json_decode(file_get_contents($api_url),(true));

#$json["response"]["players"][0][];

#echo $json["response"]["players"][0]["personaname"];


?>

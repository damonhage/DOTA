<?php


#include 'steamapi.php';
$api_key = "F9CAC192F951218EB42DC5E383FED159";
$steam_id = "76561198126044756";
#$steam_id = "Deaql";
$profile_url = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=$api_key&steamids=$steam_id";


#$api_url = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=$api_key&steamids=76561197960435530";



$profile_string = file_get_contents($profile_url);

#var_dump(json_decode($json_string));
#var_dump(json_decode($profile_string, true));



$profile = json_decode($profile_string, true);
#echo json_encode($json);


#echo $json['response']['players'][0]['steamid'];
$community = $profile['response']['players'][0]['communityvisibilitystate'];
$profile_State = $profile['response']['players'][0]['profilestate'];
$last_Log_Off = $profile['response']['players'][0]['lastlogoff'];
$comment_Permission = $profile['response']['players'][0]['commentpermission'];
$profile_URL = $profile['response']['players'][0]['profileurl'];
$avatar = $profile['response']['players'][0]['avatar'];
$avatar_Medium = $profile['response']['players'][0]['avatarmedium'];
$avatar_Full = $profile['response']['players'][0]['avatarfull'];
$persona_State = $profile['response']['players'][0]['personastate'];
$real_Name = $profile['response']['players'][0]['realname'];
$primary_Clan_ID = $profile['response']['players'][0]['primaryclanid'];
$time_Created = $profile['response']['players'][0]['timecreated'];
$persona_State_Flags = $profile['response']['players'][0]['personastateflags'];
$game_Extra_Info = $profie['response']['players'][0]['gameextrainfo'];
$game_ID = $profile['response']['players'][0]['gameid'];
$loc_Country_Code = $profile['response']['players'][0]['loccountrycode'];
$loc_State_Code = $profile['response']['players'][0]['locstatecode'];
$loc_City_ID = $profile['response']['players'][0]['loccityid'];



#echo '<br>' . $community;

echo 'Steam ID: '.$steam_id.'<br>';
echo 'Community Visibility State: '.$community.'<br>';
echo 'Profile State: '.$profile_State.'<br>';
echo 'Last Log Off: '.$last_Log_Off.'<br>';
echo 'Comment Permission: '.$comment_Permission.'<br>';
echo 'Profile URL: '.$profile_URL.'<br>';
echo 'Avatar: '.$avatar.'<br>';
echo 'Avatar Medium: '.$avatar_Medium.'<br>';
echo 'Avatar Full: '.$avatar_Full.'<br>';
echo 'Persona State: '.$persona_State.'<br>';
echo 'Real Name: '.$real_Name.'<br>';
echo 'Primary Clan ID: '.$primary_Clan_ID.'<br>';
echo 'Time Created: '.$time_Created.'<br>';
echo 'Persona State Flags: '.$persona_State_Flags.'<br>';
echo 'Game Extra Info: '.$game_Extra_Info.'<br>';
echo 'Game ID: '.$game_ID.'<br>';
echo 'Local Country Code: '.$loc_Country_Code.'<br>';
echo 'Local State Code: '.$loc_State_Code.'<br>';
echo 'Local City ID: '.$loc_City_ID.'<br>';
echo '<br>';

$friend_url = "http://api.steampowered.com/ISteamUser/GetFriendList/v0001/?key=$api_key&steamid=$steam_id&relationship=friend";

$friend_string = file_get_contents($friend_url);

$friend = json_decode($friend_string, true);

#var_dump($friend);

echo "Friends List for $steam_id by Steam ID: <br>";

foreach ($friend['friendslist']['friends'] as $fri)
{
	echo 'Steam ID: ' . $fri['steamid'] .'<br>';
}

?>

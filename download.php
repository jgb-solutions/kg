<?php

$url = $_GET['url'];

if ( !empty( $url ) )
{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS,$vars);  //Post Fields
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	$headers = array();
	$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8';
	$headers[] = 'Accept-Encoding: gzip, deflate';
	$headers[] = 'Accept-Language: en-US,en;q=0.5';
	$headers[] = 'Cache-Control: no-cache';
	$headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=utf-8';
	$headers[] = 'User-Agent: Mozilla/5.0 (Linux; U; Android 4.0.3; ko-kr; LG-L160L Build/IML74K) AppleWebkit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30';

	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

	$server_output = curl_exec ($ch);

	curl_close ($ch);

	// print  $server_output ;
	$Word = $server_output;

	$Pattern = '/((https?:\/\/)?(\w+?\.)+?(\w+?\/)+\w+?.(mp3|ogg))/im';
	preg_match_all($Pattern,$Word,$Matches);
	// print_r($Matches[0][0]);
	// echo $Matches[0];
	echo "<a href='{$Matches[0][0]}' download>Download</a>";
}
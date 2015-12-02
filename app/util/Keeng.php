<?php

class Keeng
{
	public static function getLink( $url )
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$headers = array();
		$headers[] = 'Cache-Control: no-cache';
		$headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=utf-8';
		$headers[] = 'User-Agent: Mozilla/5.0 (Linux; U; Android 4.0.3; ko-kr; LG-L160L Build/IML74K) AppleWebkit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30';

		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		$html = curl_exec( $ch );

		curl_close( $ch );

		$pattern = '/((https?:\/\/)?(\w+?\.)+?(\w+?\/)+\w+?.(mp3))/im';
		preg_match_all($pattern, $html, $matches);

		if ( $matches[0] )
		{
			return $matches[0][0];
		}

		return false;
	}

	public static function getTitle( $url )
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$headers = array();
		$headers[] = 'Cache-Control: no-cache';
		$headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=utf-8';
		$headers[] = 'User-Agent: Mozilla/5.0 (Linux; U; Android 4.0.3; ko-kr; LG-L160L Build/IML74K) AppleWebkit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30';

		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		$html = curl_exec( $ch );

		curl_close( $ch );

		if ( strlen( $html ) > 0 )
		{
			preg_match("/\<title\>(.*)\<\/title\>/", $html, $title );
			return $title[1];
		}

		return false;
	}

	public static function getMeta( $url )
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$headers = array();
		$headers[] = 'Cache-Control: no-cache';
		$headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=utf-8';
		$headers[] = 'User-Agent: Mozilla/5.0 (Linux; U; Android 4.0.3; ko-kr; LG-L160L Build/IML74K) AppleWebkit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30';

		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		$html = curl_exec( $ch );

		curl_close( $ch );

		if ( strlen( $html ) > 0 )
		{
			$r = array();

			preg_match("/\<title\>(.*)\<\/title\>/", $html, $title );

			$r['title'] = $title[1];

			$pattern = '/((https?:\/\/)?(\w+?\.)+?(\w+?\/)+\w+?.(mp3))/im';

			preg_match_all($pattern, $html, $matches);

			if ( $matches[0] )
			{
				$r['link'] = $matches[0][0];
			}

			return $r;
		}

		return false;
	}
}
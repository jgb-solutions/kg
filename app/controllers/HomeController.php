<?php

class HomeController extends BaseController
{
	public function index()
	{
		$count = MP3::sum('count');
		return View::make('index')
					->with('count', $count);
	}

	public function ajax()
	{
		$action = Input::get('action');

		return $this->$action();
	}

	public function download()
	{
		$url = Input::get('url');

		$mp3 = MP3::whereUrl( $url )->first();

		if ( $mp3 )
		{
			$mp3->count += 1;
			$mp3->save();

			$count = MP3::sum('count');

			$response = [
				'success' 	=> true,
				'link' 		=> $mp3->link,
				'count' 	=> $count,
				'title'		=> $mp3->title
			];

			return $response;
		}

		if ( !empty( $url ) )
		{
			$meta = Keeng::getMeta( $url );
			// return $meta;

			if ( $meta )
			{

				$mp3 		= new MP3;
				$mp3->title = $meta['title'];
				$mp3->url 	= $url;
				$mp3->link 	= $meta['link'];
				$mp3->count = 1;
				$mp3->save();

				$count = MP3::sum('count');

				$response = [
					'success' 	=> true,
					'url' 		=> $url,
					'link' 		=> $meta['link'],
					'count' 	=> $count,
					'title' 	=> $meta['title']
				];

				return $response;
			}

			return ['success' => false];
		}
	}

	public function sendMail()
	{
		$data['name'] 			= Input::get('name');
		$data['email'] 			= Input::get('email');
		$data['mailMessage'] 	= Input::get('message');
		// return $data['email'];

		// Mail::send('mail', $data, function( $message ) use ($data)
		// {
		// 	$message->to( Config::get('site.email'), Config::get('site.name') )
		// 			->subject('Ou gen yon nouvo imel KG.')
		// 			->replyTo( $data['email'] );
		// });

		Mail::queue('mail', $data, function( $message ) use ($data)
		{
			$message->to( Config::get('site.email'), Config::get('site.name') )
					->subject('Ou gen yon nouvo imel KG.')
					->replyTo( $data['email'] );
		});

		if ( count(Mail::failures()) > 0 )
		{
			return 0;
		}

		return 1;
	}
}
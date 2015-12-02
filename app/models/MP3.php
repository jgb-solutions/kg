<?php

class MP3 extends Eloquent
{
	protected $table = 'mp3s';
	protected $fillable = array('title', 'url', 'count');
}
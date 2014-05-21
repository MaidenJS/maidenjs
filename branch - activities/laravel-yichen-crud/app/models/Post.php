<?php

class Post extends Eloquent {
	protected $fillable = array();

	protected $guarded = array();

    public static $rules = array(
    	'author' => 'required',
    	'title' => 'required',
    	'body' => 'required'
    	);
}
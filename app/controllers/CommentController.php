<?php

class CommentController extends BaseController
{
    public function __construct() {
        parent::__construct();
        $this->beforeFilter('auth');
    }
    public function getIndex()
    {
    	$comments = Comment::all();
        return View::make('comment_index')->with('comments',$comments);
    }
    public function getCreate()
    {
        return View::make('comment_add');
    }
    public function postCreate()
    {
        $rules = array(
        'comment_text' => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);
        if($validator->fails()) {
        return Redirect::to('/create_comment')
        ->with('flash_message', 'Comment failed.')
        ->withInput()
        ->withErrors($validator);
        }
        $comment = new comment();
        $comment->subject = Input::get('subject');
        $comment->comment_text = Input::get('comment_text');
        $comment->user_id = Auth::id();
        $comment->save(); 
        return Redirect::action('CommentController@getIndex')->with('flash_message', 'Thank you!'); 
    }
}
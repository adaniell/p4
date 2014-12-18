<?php

class TaskController extends BaseController
{
    public function __construct() {
        parent::__construct();
        $this->beforeFilter('auth');
    }


    public function getIndex()
    {
        $id = Auth::user()->id;
        $tasks = Task::where('user_id','=',$id)->get();
        return View::make('all', compact('tasks'));
    }

    public function getCreate()
    {
        return View::make('task_add');
    }

    public function postCreate()
    {
        $rules = array(
        'title' => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);
        if($validator->fails()) {
        return Redirect::to('/create')
        ->with('flash_message', 'Task creation failed.')
        ->withInput()
        ->withErrors($validator);
        }

        $task = new Task();
        $task->title = Input::get('title');
        $task->description = Input::get('description');
        $task->complete = Input::has('complete');
        $task->user_id = Auth::id();
        $task->save(); 
        return Redirect::action('TaskController@getIndex'); 
    }

    public function getEdit($task_id)
    {
        try {
            $task = Task::findOrFail($task_id);
        }
        catch(Exception $e) {
            return Redirect::to('/all')->with('flash_message', 'Task not found, please try again.');
        }
        return View::make('task_edit')->with('task', $task); 
    }

    public function postEdit($task_id)
    {
        try {
            $task = Task::findOrFail($task_id);
        }
        catch(Exception $e) {
            return Redirect::to('/all')->with('flash_message', 'Task not found, please try again.');
        }
        $task->title = Input::get('title');
        $task->description = Input::get('description');
        $task->complete = Input::has('complete');
        $task->user_id = Auth::id();
        $task->save();  
        return Redirect::action('TaskController@getIndex')->with('flash_message', 'Task updated.');
    }

    public function getDelete($task_id)
    {
        try {
            $task = Task::findOrFail($task_id);
        }
        catch(Exception $e) {
            return Redirect::to('/all')->with('flash_message', 'Task not found, please try again.');
        }
        return View::make('task_delete')->with('task', $task);
    }

    public function postDelete($task_id)
    {
        try {
            $task = Task::findOrFail($task_id);
        }
        catch(Exception $e) {
            return Redirect::to('/all')->with('flash_message', 'Task not found, please try again.');
        }

        $task->delete();

        return Redirect::action('TaskController@getIndex')
        ->with('flash_message', 'Task deleted.');
    }

    public function getComplete()
    {
        $id = Auth::user()->id;
        $tasks = Task::where('user_id','=',$id)
        ->where('complete', '=', TRUE)
        ->get();
        return View::make('all', compact('tasks'));
    }

    public function getInComplete()
    {
        $id = Auth::user()->id;
        $tasks = Task::where('user_id','=',$id)
        ->where('complete', '=', FALSE)
        ->get();
        return View::make('all', compact('tasks'));
    }
}
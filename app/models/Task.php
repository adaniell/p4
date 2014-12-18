<?php
class Task extends Eloquent
{
    protected $fillable = array('title', 'description', 'complete', 'due_date');
    public function user()
    {
        return $this->belongsTo('User');
    }
}
<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'user_id','title','detail'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'foreign_key');
    }

    protected $dates = ['created_at', 'updated_at'];


    public function saveNews($data)
    {
        $this->user_id= auth()->user()->id;
        $this->title = $data['title'];
        $this->detail = $data['detail'];
        $this->save();
        return 1;
    }
}

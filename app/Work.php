<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'status',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');

    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }


    public function syncUsers($users)
    {
        $userIds = collect($users)->map(function ($user){
            return User::find($user) ? $user : null;
        });
        return $this->users()->sync($userIds);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
    protected $fillable = ['name', 'body', 'user_id', 'published_at'];
    
    public function getNameFormatedAttribute()
    {
        if (request()->has('search')) {
            return str_replace(request('search'), '<mark>'.request('search').'</mark>', $this->attributes['name']);
        } else {
            return $this->attributes['name'];
        }
    }
    public function getPublicationDateAttribute()
    {
        if (! is_null($this->attributes['published_at'])) {
            return Carbon::parse($this->attributes['published_at'])->diffForHumans();
        }
    }

    public function scopeRechercher($q, $search)
    {
        $q->where('articles.name', 'like', "%$search%")
                ->orWhere('body', 'like', "%$search%")
                // ->orWhereHas('user', function ($q) use ($search) {
                //     $q->where('name', 'like', "%$search");
                // });
        ->leftJoin('users', 'users.id', '=', 'articles.user_id')
                ->orWhere('users.name', 'like', "%$search")
                ->select('articles.*');
    }


    public function user() // changeable
    {
        return $this->belongsTo(User::class, 'user_id'); // article apartient à un user
    }
}

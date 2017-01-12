<?php

namespace App;



use Illuminate\Database\Eloquent\Model;

class UserProfiles extends Model
{

    protected $table = 'user_profiles';
    public $timestamps = false;
    protected $fillable = [
        'first_name','last_name', 'country','city', 'phone','facebook_url','twitter_url',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }


}

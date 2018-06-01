<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'password', 'email', 'highscore', 'game_money', 'money', 'fbId',
        'xp', 'level', 'guestName',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be guarded.
     *
     * @var array
     */
    protected $guarded = [
    ];

    // the user will be able to login using either email or fbId or a guest account
    public function findForPassport($identifier) {
        return $this->orWhere('email', $identifier)->orWhere('fbId', $identifier)->orWhere('guestName', $identifier)->first();
    }

    # Here we specify that the user has tokens so that passport knows how to handle logging the user in. We then specify the fields the user has in the database and how they should be managed. For example laravel should not expose the fields entered in the ```$hidden``` object we defined.
    # We then add the method ```findForPassport($identifier)``` so that passport knows what types of fields we consider to be relevant to logging users in. This means that for example we consider the ```email``` to be something unique in our database users table so we want to use it as an identifier for people who logged in using an email. The same goes for the ```fbId``` and so on.

    // Accounts
    public function account()
    {
        return $this->belongsTo(Account::class);
    }
}

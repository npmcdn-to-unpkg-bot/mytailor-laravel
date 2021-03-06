<?php

namespace MyTailor;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;
use Laracasts\Commander\Events\EventGenerator;
use MyTailor\Modules\Users\Registration\Events\UserRegistered;
class User extends Authenticatable
{
    use EventGenerator;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $dates = ['last_login_at'];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function profile()
    {
        return $this->hasOne(Profile::class, 'id', 'profile_id')
                    ->select(['id','username','avatar']); //Profile is your profile model
    }

    /**
     * A shot is owned by a publisher.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function shots() {

        return $this->morphMany(Shot::class, 'publishable');
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class)->withTimestamps();
    }

    /**
     * does our user have role of $name or not
     *
     * @param $name
     * @return bool
     */
    public function hasRole($name = [])
    {
        foreach($this->roles as $role){

            if(in_array($role->name, $name)) return true;
        }

        return false;
    }

    /**
     * @param $role
     */
    public function assignRole($role){
        return $this->roles()->attach($role);
    }

    /**
     * @param $role
     * @return int
     */
    public function revokeRole($role){
        return $this->roles()->detach($role);
    }

    public static function register($userData, $role)
    {
        $profile = new Profile();
        $profile->avatar = $userData->avatar;
        $profile->username = $userData->username;
        $profile->save();

        $user = new User();
        $user->email = $userData->email;
        $user->password = bcrypt($userData->password);
        $user->profile_id = $profile->id;
        $user->save();
        $user->assignRole(4);


        $user->raise(new UserRegistered($user));

        return $user;
    }



}

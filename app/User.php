<?php

namespace App;

use App\Models\Group;
use App\Models\Site;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable, HasRoles;

    protected $fillable = ['name', 'email', 'mobile', 'real_name', 'home', 'avatar', 'qq', 'github', 'wakatime', 'group_id'];

    protected $hidden = ['password', 'remember_token'];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    public function getIsSuperAdminAttribute()
    {
        return $this->id == 1;
    }
    public function getAvatarAttribute()
    {
        return $this->avatar ?? url('/images/avatar.jpg');
    }
    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function sites()
    {
        return $this->belongsToMany(Site::class, 'admin_site')->withTimestamps();
    }

    public function scopeSearch($query, string $name)
    {
        $name = "%{$name}%";
        return $query->orWhere('id', 'like', $name)->orWhere('email', 'like', $name)->orWhere('mobile', 'like', $name);
    }
}

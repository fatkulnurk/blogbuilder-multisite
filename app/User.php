<?php

namespace App;

use App\Model\BlogOwner;
use App\Model\Meme;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Model\UserDetail;
use App\Model\Blog;
use App\Model\Chatroom;
use App\Model\File;
use App\Model\Message;
use App\Model\Page;
use App\Model\PostComment;
use App\Model\Post;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'roles',
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
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Scope
    public function scopeSearch($query, $key)
    {
        $query->with('userDetail')
            ->orWhere('name','like', '%'.$key.'%')
            ->whereHas('userDetail', function ($userProfile) use ($key){
                $userProfile->orWhere('first_name', 'like', '%'.$key.'%')
                    ->orWhere('middle_name', 'like', '%'.$key.'%')
                    ->orWhere('last_name', 'like', '%'.$key.'%');
            });
    }

    // Relationship

    public function userDetail()
    {
        return $this->hasOne(UserDetail::class, 'user_id', 'id');
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class, 'user_id', 'id');
    }

    public function chatsroom()
    {
        return $this->hasMany(Chatroom::class, 'user_id', 'id');
    }

    public function files()
    {
        return $this->hasMany(File::class, 'user_id', 'id');
    }

    public function messagesFrom()
    {
        return $this->hasMany(Message::class, 'from_user_id', 'id');
    }

    public function messagesTo()
    {
        return $this->hasMany(Message::class, 'to_user_id', 'id');
    }

    public function pages()
    {
        return $this->hasMany(Page::class, 'user_id', 'id');
    }

    public function posts()
    {
        return $this->hasMany(Post::class, 'user_id', 'id');
    }

    public function updatePosts()
    {
        return $this->hasMany(Post::class, 'update_user_id', 'id');
    }

    public function comments()
    {
        return $this->hasMany(PostComment::class, 'user_id', 'id');
    }

    public function ownerBlog()
    {
        return $this->belongsToMany(Blog::class, 'blog_owner', 'blog_id', 'user_id')
            ->withPivot('role')
            ->withTimestamps();
    }

    public function userRoles()
    {
        return $this->belongsToMany(Role::class,'user_roles', 'user_id', 'role_id');
    }



    /*
    * Method untuk menambahkan role (hak akses) baru pada user
    */
    public function putRole($role)
    {
        if (is_string($role))
        {
            $role = Role::whereRoleName($role)->first();
        }
        return $this->userRoles()->attach($role);
    }

    /*
    * Method untuk menghapus role (hak akses) pada user
    */
    public function forgetRole($role)
    {
        if (is_string($role))
        {
            $role = Role::whereRoleName($role)->first();
        }
        return $this->userRoles()->detach($role);
    }

    /*
    * Method untuk mengecek apakah user yang sedang login punya hak akses untuk mengakses page sesuai rolenya
    */
    public function hasRole($roleName)
    {
        $roles = $this->userRoles;
        foreach ($roles as $role)
        {
            if ($role->role_name === $roleName) return true;
        }
        return false;
    }

    public function meme()
    {
        return $this->hasMany(Meme::class, 'user_id', 'id');
    }
}

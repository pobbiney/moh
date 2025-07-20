<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class User
 * 
 * @property int $id
 * @property string $name
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class User extends  Authenticatable
{
	use HasFactory, Notifiable;
	protected $table = 'users';

	protected $casts = [
		'email_verified_at' => 'datetime'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'name',
		'email',
		'email_verified_at',
		'password',
		'remember_token',
		'staff_id',
        'user_cat'
	];

	public function getUserCategory (){

		return UserCat::find($this->user_cat)->cat_name;
	}

	public function getRegionName ($id){

		return Region::find($id)->name;
	}

	public function getDistrictName ($id){

		return District::find($id)->name;
	}

	public function getUserName ($id){

		if(User::where('id',$id)->get()->count() > 0){

			return User::find($id)->name;

		}else{

			return 'Not Available';
		}

		
	}
}

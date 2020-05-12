<?php

declare (strict_types=1);
namespace App\Model;

use Fx\HyperfHttpAuth\Contract\Authenticatable;
use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $username 
 * @property string $email 
 * @property string $password 
 */

class User extends Model implements Authenticatable
{
    use \Fx\HyperfHttpAuth\Authenticatable;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = ['id' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}
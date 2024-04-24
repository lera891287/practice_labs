<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Builder;

/**
 * Models\Groups
 *
 * @property int $id
 * @property string|null $name_group
 * @property string|null $number
 *
 * @method static UserFactory factory(...$parameters)
 * @method static Builder|Groups whereName($value)
 * @method static Builder|Groups whereNumber($value)
 */

class Groups extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'groups';
    protected $fillable = [
        'name_group',
        'number',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name_group' => 'string',
        'number' => 'integer',
    ];

    public function students(): HasMany
    {
        return $this->hasMany(Students::class,'groups_id','id');
    }
}

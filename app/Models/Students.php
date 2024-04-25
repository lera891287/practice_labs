<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * Models\Students
 *
 * @property int $id
 * @property string|null $name
 *
 * @method static UserFactory factory(...$parameters)
 * @method static Builder|Students whereName($value)
 * @method static Builder|Students whereGroupsId($value)
 */

class Students extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'students';
    protected $fillable = [
        'name',
        'groups_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'groups_id' => 'integer',
    ];

    public function enducations(): BelongsToMany
    {
        return $this->belongsToMany(Enducations::class);
    }

    public function groups(): BelongsTo
    {
        return $this->belongsTo(Groups::class, 'groups_id','id');
    }
    public function studentsEn(): HasOne
    {
        return $this->hasOne(EnducationsStudents::class);
    }
//    public function studentsEn(): HasOne
//    {
//        return $this->hasOne(EnducationsStudents::class);
//    }
}

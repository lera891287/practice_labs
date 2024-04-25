<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * Models\Groups
 *
 * @property int $id
 * @property string|null $name_disciplins
 *
 * @method static UserFactory factory(...$parameters)
 * @method static Builder|Enducations whereNameDisciplins($value)
 * @method static Builder|Enducations whereGrad($value)
 */

class Enducations extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name_disciplins',
        'grad'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'grad' => 'integer'
    ];

    public function students(): BelongsToMany
    {
        return $this->belongsToMany(Students::class);
    }

    public function studentsEn(): HasOne
    {
        return $this->hasOne(EnducationsStudents::class);
    }
//    public function studentsEn(): BelongsToMany
//    {
//        return $this->belongsToMany(Students::class);
//    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Models\EnducationsStudents
 *
 * @property int $id
 * @property string|null $grad
 *
 * @method static UserFactory factory(...$parameters)
 * @method static Builder|EnducationsStudents whereGrad($value)
 * @method static Builder|EnducationsStudents whereEnducationsId($value)
 * @method static Builder|EnducationsStudents whereStudentsId($value)
 */

class EnducationsStudents extends Model
{

    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'enducations_students';
    protected $fillable = [
        'enducations_id',
        'students_id',
        'grad',
    ];



}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(string[] $array)
 * @method static whereNotIn(string $string, int[] $array)
 * @method static find(mixed $tag)
 * @method static simplePaginate(int $int)
 */
class Tag extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function datasets()
    {
        return $this->belongsToMany(Dataset::class);
    }
}

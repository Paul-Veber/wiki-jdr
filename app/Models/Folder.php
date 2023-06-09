<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Folder extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'text',
        'folder_id',
    ];

    protected $hidden = [
        'folder_id'
    ];

    /**
 *  get folders in folder
 **/
    public function folders(): HasMany
    {
        return $this->hasMany(Folder::class);
    }

    /**
     * get documents in folder
     **/
    public function documents(): HasMany
    {
        return $this->hasMany(Document::class);
    }
}

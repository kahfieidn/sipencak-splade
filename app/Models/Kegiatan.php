<?php

namespace App\Models;

use App\Models\SubKegiatan;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kegiatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'program_id',
        'kode',
        'nama_kegiatan',
        'status',
    ];

    public function program()
    {
        return $this->hasOne(Program::class, 'id', 'program_id');
    }

    public function sub_kegiatan()
    {
        return $this->hasMany(SubKegiatan::class);
    }


    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = Str::uuid()->toString();
            }
        });
    }

    public function getIncrementing()
    {
        return false;
    }

    public function getKeyType()
    {
        return 'string';
    }


}

<?php

namespace App\Models;

use App\Models\Kegiatan;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubKegiatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'kegiatan_id',
        'kode',
        'nama_sub_kegiatan',
        'pagu',
    ];



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

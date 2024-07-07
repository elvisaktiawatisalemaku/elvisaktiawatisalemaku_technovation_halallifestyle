<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;  // Import Storage Facade

class Section extends Model  // Perbaiki nama kelas menjadi PascalCase
{
    use HasFactory;

    protected $fillable = ['title', 'thumbnail', 'content', 'post_as'];

    protected static function boot()
    {
        parent::boot();

        static::updating(function ($model) {
            // Cek jika 'thumbnail' diubah dan tidak null
            if ($model->isDirty('thumbnail') && $model->getOriginal('thumbnail') !== null) {
                // Hapus file yang lama dari disk
                Storage::disk('public')->delete($model->getOriginal('thumbnail'));
            }
        });
    }
}
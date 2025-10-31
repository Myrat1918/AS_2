<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    // Разрешаем массовое заполнение этих полей
    protected $fillable = [
        'title',
        'content',
        'slug',
        'category_id',
        'user_id',
    ];

    // Отношение с пользователем
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Отношение с категорией
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}

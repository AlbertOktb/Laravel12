<?php

namespace App\Service;

use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostService
{
    public static function create(array $data):Post
    {
        // Формируем slug из названия поста
        $slug = Str::slug($data['title']);

        // Формируем дату (если указана, иначе используем текущую)
        $date = date('Y-m-d');

        // Создаем название папки: YYYY-MM-DD_slug
        $folder = "/images/photos/{$date}_{$slug}";

        if(isset($data['image'])){
            // Сохраняем изображение в папку с названием поста
            $data['image_path']=Storage::disk('public')->put($folder, $data['image']);
            unset($data['image']);
        }
        return  Post::create($data);
    }
}

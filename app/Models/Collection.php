<?php

namespace App\Models;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Collection extends Admin implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = ['name', 'status', 'ordering'];

    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(368)
            ->height(232)
            ->sharpen(10);

        $this->addMediaConversion('webp')
            ->format('webp')
            ->width(100)
            ->height(60)
            ->sharpen(10);
    }

    public function listItems($params = null, $options = null)
    {
        $result = null;
        if ($options['task'] == "admin-list-items") {
            $result = self::all();
        }

        return $result;
    }
}

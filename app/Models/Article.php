<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use App\Helpers\Template;

class Article extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = ['name', 'description', 'content', 'category_article_id', 'status', 'ordering'];


    public function getNameShortAttribute()
    {
        $string = $this->name;
        $length = 30;
        return Template::stringShorten($string, $length);
    }

    public function getDescriptionShortAttribute()
    {
        $string = $this->description;
        $length = 50;
        return Template::stringShorten($string, $length);
    }

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

    public function storeItem($params = null, $options = null)
    {
        return self::create($params);
    }

    public function updateItem($params = null, $options = null)
    {
        $item = self::find($params['id']);
        $item->fill($params);
        $item->save();
        return $item;
    }

    public function deleteItem($params = null, $options = null)
    {
        $item = self::find($params['id']);
        $item->delete();
    }
}

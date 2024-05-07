<?php

namespace App\Models;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Article extends Admin implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $module = 'articles';

    protected $fillable = ['name', 'description', 'content', 'category_article_id', 'status', 'ordering'];

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

    // public function changeItem($params = null, $options = null)
    // {
    //     if ($options['task'] == 'change-ordering') {
    //         self::where('id', $params['id'])->update(['ordering' => $params['currentOrdering']]);
    //         // $modifiedBy = session('userInfo')['username'];
    //         // $modified = date('Y-m-d H:i:s');
    //         // self::where('id', $params['id'])->update(['ordering' => $ordering, 'modified_by' => $modifiedBy, 'modified' => $modified]);
    //         $result = [
    //             // 'id' => $params['id'],
    //             // 'modified' => Template::showItemHistory($modifiedBy, $modified),
    //             'message' => config('zvn.notify.success.update'),
    //         ];
    //         return $result;
    //     }

    //     if ($options['task'] == 'change-status') {
    //         $status = ($params['currentStatus'] == 1) ? 0 : 1;
    //         self::where('id', $params['id'])->update(['status' => $status]);
    //         $result = [
    //             'statusObj' => [
    //                 'name' => config('zvn.template.status.' . $status . '.name'),
    //                 'class' => config('zvn.template.status.' . $status . '.class')
    //             ],
    //             'link' => route('admin.articles.change-status', ['status' => $status, 'id' => $params['id']]),
    //             'message' => config('zvn.notify.success.update'),
    //         ];
    //         // $modifiedBy = session('userInfo')['username'];
    //         // $modified = date('Y-m-d H:i:s');
    //         // self::where('id', $params['id'])->update(['status' => $status, 'modified' => $modified, 'modified_by' => $modifiedBy]);
    //         // $result = [
    //         //     'id' => $params['id'],
    //         //     'modified' => Template::showItemHistory($modifiedBy, $modified),
    //         //     'status' => [
    //         //         'name' => config('zvn.template.status.' . $status . '.name'),
    //         //         'class' => config('zvn.template.status.' . $status . '.class')
    //         //     ],
    //         //     'link' => route($params['controllerName'] . '/status', ['status' => $status, 'id' => $params['id']]),
    //         //     'message' => config('zvn.notify.success.update'),
    //         // ];
    //         return $result;
    //     }

    //     if ($options['task'] == 'change-category') {
    //         self::where('id', $params['id'])->update(['category_article_id' => $params['currentCategory']]);
    //         $result = [
    //             // 'id' => $params['id'],
    //             // 'modified' => Template::showItemHistory($modifiedBy, $modified),
    //             'message' => config('zvn.notify.success.update'),
    //         ];
    //         return $result;
    //     }
    // }
}

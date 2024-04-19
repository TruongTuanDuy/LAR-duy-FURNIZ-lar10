<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Article extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $crudNotAccepted = [
        '_token',
        '_method',
        'thumb_current',
        'thumb',
    ];

    public function listItems($params = null, $options = null)
    {

        $result = null;
        if ($options['task'] == "admin-list-items") {
            $query = $this->select('id', 'name', 'description', 'category_article_id', 'status', 'ordering', 'created_at', 'created_by', 'updated_at', 'updated_by');

            $result =  $query->get();
        }

        return $result;
    }

    public function updateItem($params = null, $options = null)
    {
        $params = array_diff_key($params, array_flip($this->crudNotAccepted));
        // $params['updated_by']   = "duytruong";
        $params['updated_at']   = date('Y-m-d H:i:s');
        self::where('id', $params['id'])->update($params);
    }

    public function storeItem($params = null, $options = null)
    {
        // dd($params);
        $params = array_diff_key($params, array_flip($this->crudNotAccepted));
        // $params['created_by']   = "duytruong";
        $params['created_at']   = date('Y-m-d H:i:s');
        self::insert($params);
    }

    public function deleteItem($params = null, $options = null)
    {
        self::where('id', $params['id'])->delete();
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryArticle extends Model
{
    use HasFactory;

    protected $crudNotAccepted = [
        '_token',
        '_method',
        'thumb_current',
        'thumb',
    ];
    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->table               = 'collections';
    //     // $this->folderUpload        = 'collection';
    //     // $this->fieldSearchAccepted = ['id', 'name'];
    //     // $this->crudNotAccepted     = ['_token'];
    // }

    public function listItems($params = null, $options = null)
    {

        $result = null;
        if ($options['task'] == "admin-list-items") {
            $query = $this->select('id', 'name', 'status', 'ordering', 'created_at', 'created_by', 'updated_at', 'updated_by');

            $result =  $query->get();
        }

        if ($options['task'] == "admin-list-items-category") {
            $query = $this->select('id', 'name')->orderBy('name', 'asc');

            $result =  $query->pluck('name', 'id')->toArray();
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

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Collection extends Model
{
    use HasFactory;

    // protected $fillable = ['name'];
    protected $guarded = [];

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

        return $result;
    }

    public function deleteItem($params = null, $options = null)
    {
        if ($options['task'] == 'delete-item') {
            self::where('id', $item)->delete();
        }
    }
}

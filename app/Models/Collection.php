<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Helpers\Template;

class Collection extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'status', 'ordering'];

    public function getNameShortAttribute()
    {
        $string = $this->name;
        $length = 30;
        return Template::stringShorten($string, $length);
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
        self::create($params);
    }

    public function updateItem($params = null, $options = null)
    {
        $item = self::find($params['id']);
        $item->fill($params);
        $item->save();
    }

    public function deleteItem($params = null, $options = null)
    {
        $item = self::find($params['id']);
        $item->delete();
    }
}

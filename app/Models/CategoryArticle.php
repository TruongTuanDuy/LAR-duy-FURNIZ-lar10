<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Helpers\Template;

class CategoryArticle extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'status', 'ordering'];
    // protected $guarded = [];

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
            // $query = $this->select('id', 'name', 'status', 'ordering', 'created_at', 'created_by', 'updated_at', 'updated_by');
            // $result =  $query->get();
            $result = self::all();
        }

        if ($options['task'] == "admin-list-items-category") {
            $query = $this->select('id', 'name')->orderBy('name', 'asc');

            $result =  $query->pluck('name', 'id')->toArray();
        }
        return $result;
    }

    public function storeItem($params = null, $options = null)
    {
        // self::insert($params);
        self::create($params);
    }

    public function updateItem($params = null, $options = null)
    {
        // return $this->where('id', $params['id'])->update($params);
        $item = self::find($params['id']);
        $item->fill($params);
        $item->save();
    }

    public function deleteItem($params = null, $options = null)
    {
        // self::where('id', $params['id'])->delete();
        $item = self::find($params['id']);
        $item->delete();
    }
}

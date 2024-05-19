<?php

namespace App\Models;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ArticleCategory extends Admin
{
    use HasFactory;

    protected $module = 'articleCategories';

    protected $fillable = ['name', 'status', 'ordering'];
    // protected $guarded = [];

    public function listItems($params = null, $options = null)
    {
        $result = null;
        if ($options['task'] == "admin-list-items") {
            // $query = $this->select('id', 'name', 'status', 'ordering', 'created_at', 'created_by', 'updated_at', 'updated_by');
            // $result =  $query->get();
            $result = self::all();
        }

        if ($options['task'] == "admin-list-items-in-select-box") {
            $query = $this->select('id', 'name')->orderBy('name', 'asc');

            $result =  $query->pluck('name', 'id')->toArray();
        }
        return $result;
    }
}

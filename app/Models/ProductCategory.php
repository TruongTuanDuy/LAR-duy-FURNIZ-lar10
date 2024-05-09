<?php

namespace App\Models;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Kalnoy\Nestedset\NodeTrait;
use App\Helpers\Template;

class ProductCategory extends Admin
{
    use HasFactory;
    use NodeTrait;

    protected $module = 'productCategories';

    protected $fillable = [
        'name',
        'status',
        'created_by',
        'updated_by',
        'parent_id',
        '_lft',
        '_rgt'
    ];

    // public function getNameShortAttribute()
    // {
    //     $string = $this->name;
    //     $length = 30;
    //     return Template::stringShorten($string, $length);
    // }

    public function listItems($params = null, $options = null)
    {
        $result = null;

        if ($options['task'] == "admin-list-items") {
            $result = self::withDepth()->having('depth', '>', 0)->defaultOrder()->get()->toFlatTree();
        }

        if ($options['task'] == "admin-list-items-in-select-box") {
            $query = self::select('id', 'name')->withDepth()->defaultOrder();
            if (isset($params['id'])) {
                $node = self::find($params['id']);
                $query->where('_lft', '<', $node->_lft)->orWhere('_lft', '>', $node->_rgt);
            }
            $nodes = $query->get()->toFlatTree();

            foreach ($nodes as $value) {
                $result[$value['id']] = str_repeat('|---', $value['depth']) . Template::stringShorten($value['name'], 50);
            }
        }
        return $result;
    }

    public function storeItem($params = null, $options = null)
    {
        // $params['created_by']   = "duytruong";
        $parent = self::find($params['parent_id']);
        self::create($params, $parent);
    }
}

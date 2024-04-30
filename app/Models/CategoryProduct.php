<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;
use App\Helpers\Template;

class CategoryProduct extends Model
{
    use HasFactory;
    use NodeTrait;

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

    public function updateItem($params = null, $options = null)
    {
        // $params['updated_by']   = "duytruong";
        $parent = self::find($params['parent_id']);
        $query = $current = self::find($params['id']);
        $query->update($params);
        if ($current->parent_id != $params['parent_id']) $query->prependToNode($parent)->save();
    }

    public function deleteItem($params = null, $options = null)
    {
        $node = self::find($params['id']);
        $node->delete();
    }
}

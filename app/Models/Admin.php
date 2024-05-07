<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Helpers\Template;

class Admin extends Model
{
    protected $module = '';

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

    // Change Item Ajax
    public function changeItem($params = null, $options = null)
    {
        if ($options['task'] == 'change-ordering') {
            self::where('id', $params['id'])->update(['ordering' => $params['currentOrdering']]);
            // $modifiedBy = session('userInfo')['username'];
            // $modified = date('Y-m-d H:i:s');
            // self::where('id', $params['id'])->update(['ordering' => $ordering, 'modified_by' => $modifiedBy, 'modified' => $modified]);
            $result = [
                // 'id' => $params['id'],
                // 'modified' => Template::showItemHistory($modifiedBy, $modified),
                'message' => config('zvn.notify.success.update'),
            ];
            return $result;
        }

        if ($options['task'] == 'change-status') {
            $status = ($params['currentStatus'] == 1) ? 0 : 1;
            self::where('id', $params['id'])->update(['status' => $status]);
            $result = [
                'statusObj' => [
                    'name' => config('zvn.template.status.' . $status . '.name'),
                    'class' => config('zvn.template.status.' . $status . '.class')
                ],
                'link' => route("admin.{$this->module}.change-status", ['status' => $status, 'id' => $params['id']]),
                'message' => config('zvn.notify.success.update'),
            ];
            // $modifiedBy = session('userInfo')['username'];
            // $modified = date('Y-m-d H:i:s');
            // self::where('id', $params['id'])->update(['status' => $status, 'modified' => $modified, 'modified_by' => $modifiedBy]);
            // $result = [
            //     'id' => $params['id'],
            //     'modified' => Template::showItemHistory($modifiedBy, $modified),
            //     'status' => [
            //         'name' => config('zvn.template.status.' . $status . '.name'),
            //         'class' => config('zvn.template.status.' . $status . '.class')
            //     ],
            //     'link' => route($params['controllerName'] . '/status', ['status' => $status, 'id' => $params['id']]),
            //     'message' => config('zvn.notify.success.update'),
            // ];
            return $result;
        }

        if ($options['task'] == 'change-category') {
            self::where('id', $params['id'])->update(['category_article_id' => $params['currentCategory']]);
            $result = [
                // 'id' => $params['id'],
                // 'modified' => Template::showItemHistory($modifiedBy, $modified),
                'message' => config('zvn.notify.success.update'),
            ];
            return $result;
        }
    }

    public function storeItem($params = null, $options = null)
    {
        return self::create($params);
    }

    public function updateItem($params = null, $current)
    {
        $current->fill($params);
        $current->save();
        return $current;
    }

    public function deleteItem($current)
    {
        $current->delete();
    }
}

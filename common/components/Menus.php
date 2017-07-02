<?php

namespace common\components;

use Yii;
use yii\base\Component;
use yii\helpers\Url;

class Menus extends Component
{
    public function getMenuItems($position = 'backend_top')
    {
        $menuItems = [
            [
                'label' => 'Shop',
                'visible' => Yii::$app->user->can('backend/shop'),
                'items' => [
                    ['label' => 'Products', 'url' => ['/products'], 'visible' => Yii::$app->user->can('backend/products')],
                ],
            ],
        ];

        return $menuItems;
    }

}

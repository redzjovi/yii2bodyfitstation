<?php

use yii\db\Schema;
use yii\db\Migration;

class m170702_014953_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_product_images_product_id',
            '{{%product_images}}','product_id',
            '{{%products}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_product_images_product_id', '{{%product_images}}');
    }
}

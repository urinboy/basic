<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%menu}}`.
 */
class m240708_034518_create_menu_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%menu}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->notNull(),
            'parent_id' => $this->integer()->defaultValue(0)->null(),
            'order' => $this->integer()->notNull(),
            'link' => $this->string(255)->notNull(),
            'position' => $this->integer()->defaultValue(1),
            'status' => $this->integer()->defaultValue(1),
        ]);

        // Adding foreign key for parent_id
        $this->addForeignKey(
            'fk-menu-parent_id',
            '{{%menu}}',
            'parent_id',
            '{{%menu}}',
            'id',
            'CASCADE',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
         // Dropping foreign key for parent_id
        $this->dropForeignKey(
            'fk-menu-parent_id',
            '{{%menu}}'
        );

        $this->dropTable('{{%menu}}');
    }
}

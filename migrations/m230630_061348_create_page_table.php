<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%page}}`.
 * @noinspection PhpUnused
 */
class m230630_061348_create_page_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp(): void
    {
        $this->createTable('{{%page}}', [
            'id'          => $this->primaryKey(),
            'title'       => $this->string('25'),
            'link'        => $this->string('25'),
            'description' => $this->text(),
            'body'        => $this->text(),
            'create_at'   => $this->integer(),
            'update_at'   => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown(): void
    {
        $this->dropTable('{{%page}}');
    }
}

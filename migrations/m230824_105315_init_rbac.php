<?php

use yii\db\Migration;

/**
 * Class m230824_105315_init_rbac
 * @noinspection PhpUnused
 */
class m230824_105315_init_rbac extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp(): void
    {
        $auth = Yii::$app->authManager;

        $allowCpanel              = $auth->createPermission('allowCpanel');
        $allowCpanel->description = 'Доступ к панели администрирования';
        $auth->add($allowCpanel);

        $allowCpanelUser    = $auth->createPermission('allowCpanelUser');
        $allowCpanelUser->description = 'Доступ к модулю пользователи';
        $auth->add($allowCpanelUser);

        $allowCpanelBlog    = $auth->createPermission('allowCpanelBlog');
        $allowCpanelBlog->description = 'Доступ к блоку Блог';
        $auth->add($allowCpanelBlog);

        $allowCpanelCatalog = $auth->createPermission('allowCpanelCatalog');
        $allowCpanelCatalog->description = 'Доступ к блоку Каталог';
        $auth->add($allowCpanelCatalog);

        $allowCpanelSaleMap = $auth->createPermission('allowCpanelSaleMap');
        $allowCpanelSaleMap->description = 'Доступ к блоку Карта продаж';
        $auth->add($allowCpanelSaleMap);

        $admin = $auth->createRole('admin');
        $admin->description = 'Администратор';
        $auth->add($admin);
        $auth->addChild($admin, $allowCpanel);
        $auth->addChild($admin, $allowCpanelUser);
        $auth->addChild($admin, $allowCpanelBlog);
        $auth->addChild($admin, $allowCpanelCatalog);
        $auth->addChild($admin, $allowCpanelSaleMap);

        $auth->assign($admin, 1);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown(): void
    {
        $auth = Yii::$app->authManager;
        $auth->removeAll();
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230824_105315_init_rbac cannot be reverted.\n";

        return false;
    }
    */
}

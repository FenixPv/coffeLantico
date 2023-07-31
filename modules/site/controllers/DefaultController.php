<?php

namespace app\modules\site\controllers;

use yii\web\Controller;

/**
 * Default controller for the `site` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex(): string
    {
        return $this->render('index');
    }

    /**
     * @return string
     * @noinspection PhpUnused
     */
    public function actionHistory(): string
    {
        return $this->render('history');
    }

    /**
     * @return string
     * @noinspection PhpUnused
     */
    public function actionPerfectoCoffee(): string
    {
        return $this->render('perfecto-coffee');
    }
}

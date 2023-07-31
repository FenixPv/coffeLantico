<?php

namespace app\modules\cpanel\models;

//use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "page".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $link
 * @property string|null $description
 * @property string|null $body
 * @property int|null $create_at
 * @property int|null $update_at
 */
class Page extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName(): string
    {
        return 'page';
    }

    /**
     * {@inheritdoc}
     */
    public function rules(): array
    {
        return [
            [['description', 'body'], 'string'],
            [['create_at', 'update_at'], 'integer'],
            [['title', 'link'], 'string', 'max' => 25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels(): array
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'link' => 'Ссылка',
            'description' => 'Описание',
            'body' => 'Тело',
            'create_at' => 'Создано',
            'update_at' => 'Изменено',
        ];
    }
}

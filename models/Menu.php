<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property int $id
 * @property string $title
 * @property int|null $parent_id
 * @property int $order
 * @property string $link
 * @property int|null $position
 * @property int|null $status
 *
 * @property Menu[] $menus
 * @property Menu $parent
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'order', 'link'], 'required'],
            [['parent_id', 'order', 'position', 'status'], 'integer'],
            [['title', 'link'], 'string', 'max' => 255],
            [['parent_id'], 'exist', 'skipOnError' => true, 'targetClass' => Menu::class, 'targetAttribute' => ['parent_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('models', 'ID'),
            'title' => Yii::t('models', 'Sarlavha'),
            'parent_id' => Yii::t('models', 'Parent ID'),
            'order' => Yii::t('models', 'Tartib raqami'),
            'link' => Yii::t('models', 'URL manzil'),
            'position' => Yii::t('models', 'Pozitsiyasi'),
            'status' => Yii::t('models', 'Statusi'),
        ];
    }

    /**
     * Gets query for [[Menus]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMenus()
    {
        return $this->hasMany(Menu::class, ['parent_id' => 'id']);
    }

    /**
     * Gets query for [[Parent]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getParent()
    {
        return $this->hasOne(Menu::class, ['id' => 'parent_id']);
    }
}

<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "flow_category".
 *
 * @property integer $category_id
 * @property string $category_name
 * @property integer $sort_no
 * @property integer $dept_id
 * @property integer $parent_id
 * @property integer $have_child
 */
class FlowCategory extends \common\base\BaseActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'flow_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sort_no', 'dept_id', 'parent_id', 'have_child'], 'integer'],
            [['category_name'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'category_id' => Yii::t('app', 'Category ID'),
            'category_name' => Yii::t('app', 'Category Name'),
            'sort_no' => Yii::t('app', 'Sort No'),
            'dept_id' => Yii::t('app', 'Dept ID'),
            'parent_id' => Yii::t('app', 'Parent ID'),
            'have_child' => Yii::t('app', 'Have Child'),
        ];
    }
}

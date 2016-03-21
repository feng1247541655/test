<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "flow_form".
 *
 * @property integer $form_id
 * @property string $form_name
 * @property string $submit_template
 * @property string $print_template
 * @property integer $dept_id
 * @property string $script
 * @property string $css
 * @property integer $item_max
 * @property integer $sort_no
 * @property integer $category_id
 */
class FlowForm extends \common\base\BaseActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'flow_form';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['submit_template', 'print_template', 'script', 'css'], 'string'],
            [['dept_id', 'item_max', 'sort_no', 'category_id'], 'integer'],
            [['form_name'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'form_id' => Yii::t('app', 'Form ID'),
            'form_name' => Yii::t('app', 'Form Name'),
            'submit_template' => Yii::t('app', 'Submit Template'),
            'print_template' => Yii::t('app', 'Print Template'),
            'dept_id' => Yii::t('app', 'Dept ID'),
            'script' => Yii::t('app', 'Script'),
            'css' => Yii::t('app', 'Css'),
            'item_max' => Yii::t('app', 'Item Max'),
            'sort_no' => Yii::t('app', 'Sort No'),
            'category_id' => Yii::t('app', 'Category ID'),
        ];
    }
}

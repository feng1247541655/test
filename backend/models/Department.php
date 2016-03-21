<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "department".
 *
 * @property integer $dept_id
 * @property string $dept_name
 * @property string $tel_no
 * @property string $fax_no
 * @property string $dept_address
 * @property integer $dept_sort
 * @property integer $dept_parent
 * @property string $manager
 * @property string $assistant
 * @property string $leader1
 * @property string $leader2
 * @property string $dept_func
 */
class Department extends \common\base\BaseActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'department';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dept_sort', 'dept_parent'], 'integer'],
            [['dept_func'], 'string'],
            [['dept_name'], 'string', 'max' => 100],
            [['tel_no', 'fax_no'], 'string', 'max' => 50],
            [['dept_address', 'manager', 'assistant', 'leader1', 'leader2'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'dept_id' => Yii::t('app', 'Dept ID'),
            'dept_name' => Yii::t('app', 'Dept Name'),
            'tel_no' => Yii::t('app', 'Tel No'),
            'fax_no' => Yii::t('app', 'Fax No'),
            'dept_address' => Yii::t('app', 'Dept Address'),
            'dept_sort' => Yii::t('app', 'Dept Sort'),
            'dept_parent' => Yii::t('app', 'Dept Parent'),
            'manager' => Yii::t('app', 'Manager'),
            'assistant' => Yii::t('app', 'Assistant'),
            'leader1' => Yii::t('app', 'Leader1'),
            'leader2' => Yii::t('app', 'Leader2'),
            'dept_func' => Yii::t('app', 'Dept Func'),
        ];
    }
}

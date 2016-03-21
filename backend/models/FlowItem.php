<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "flow_item".
 *
 * @property integer $flow_id
 * @property string $flow_name
 * @property integer $form_id
 * @property integer $sort_no
 * @property integer $flow_type
 * @property integer $flow_doc
 * @property string $flow_desc
 * @property integer $free_other
 * @property integer $flow_status
 * @property integer $category_id
 * @property integer $tag_id
 * @property string $tag_name
 * @property string $auto_name
 * @property string $auto_field
 * @property integer $auto_len
 * @property integer $free_preset
 * @property integer $is_auto
 * @property string $auto_task
 * @property string $model_id
 * @property string $model_name
 * @property string $attachment_id
 * @property string $attachment_name
 * @property string $view_user
 * @property integer $view_priv
 * @property integer $is_version
 */
class FlowItem extends \common\base\BaseActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'flow_item';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['form_id', 'sort_no', 'flow_type', 'flow_doc', 'free_other', 'flow_status', 'category_id', 'tag_id', 'auto_len', 'free_preset', 'is_auto', 'view_priv', 'is_version'], 'integer'],
            [['flow_desc', 'auto_name', 'auto_field', 'auto_task', 'model_id', 'model_name', 'attachment_id', 'attachment_name', 'view_user'], 'string'],
            [['flow_name', 'tag_name'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'flow_id' => Yii::t('app', 'Flow ID'),
            'flow_name' => Yii::t('app', 'Flow Name'),
            'form_id' => Yii::t('app', 'Form ID'),
            'sort_no' => Yii::t('app', 'Sort No'),
            'flow_type' => Yii::t('app', 'Flow Type'),
            'flow_doc' => Yii::t('app', 'Flow Doc'),
            'flow_desc' => Yii::t('app', 'Flow Desc'),
            'free_other' => Yii::t('app', 'Free Other'),
            'flow_status' => Yii::t('app', 'Flow Status'),
            'category_id' => Yii::t('app', 'Category ID'),
            'tag_id' => Yii::t('app', 'Tag ID'),
            'tag_name' => Yii::t('app', 'Tag Name'),
            'auto_name' => Yii::t('app', 'Auto Name'),
            'auto_field' => Yii::t('app', 'Auto Field'),
            'auto_len' => Yii::t('app', 'Auto Len'),
            'free_preset' => Yii::t('app', 'Free Preset'),
            'is_auto' => Yii::t('app', 'Is Auto'),
            'auto_task' => Yii::t('app', 'Auto Task'),
            'model_id' => Yii::t('app', 'Model ID'),
            'model_name' => Yii::t('app', 'Model Name'),
            'attachment_id' => Yii::t('app', 'Attachment ID'),
            'attachment_name' => Yii::t('app', 'Attachment Name'),
            'view_user' => Yii::t('app', 'View User'),
            'view_priv' => Yii::t('app', 'View Priv'),
            'is_version' => Yii::t('app', 'Is Version'),
        ];
    }
}

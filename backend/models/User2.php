<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $auth_key
 * @property string $password
 * @property string $password_reset_token
 * @property string $nick_name
 * @property string $english_name
 * @property integer $dept_id
 * @property integer $sex
 * @property string $birthday
 * @property string $tel_dept
 * @property string $fax_dept
 * @property string $add_home
 * @property string $post_home
 * @property string $tel_home
 * @property string $mobile
 * @property string $email
 * @property string $qq
 * @property integer $ichat
 * @property string $avatar
 * @property string $last_visit_time
 * @property string $last_pass_time
 * @property integer $online
 * @property integer $status
 * @property integer $on_status
 * @property integer $attend_status
 * @property integer $mobile_hidden
 * @property integer $user_sort
 * @property integer $not_login
 * @property string $remark
 * @property string $my_status
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $reset_password
 */
class User2 extends \common\base\BaseActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dept_id', 'sex', 'ichat', 'online', 'status', 'on_status', 'attend_status', 'mobile_hidden', 'user_sort', 'not_login', 'created_at', 'updated_at', 'reset_password'], 'integer'],
            [['birthday', 'last_visit_time', 'last_pass_time'], 'safe'],
            [['remark'], 'string'],
            [['username', 'tel_dept', 'fax_dept', 'post_home', 'tel_home', 'mobile', 'qq'], 'string', 'max' => 50],
            [['auth_key'], 'string', 'max' => 32],
            [['password', 'password_reset_token'], 'string', 'max' => 255],
            [['nick_name', 'english_name', 'email'], 'string', 'max' => 100],
            [['add_home', 'avatar', 'my_status'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'username' => Yii::t('app', 'Username'),
            'auth_key' => Yii::t('app', 'Auth Key'),
            'password' => Yii::t('app', 'Password'),
            'password_reset_token' => Yii::t('app', 'Password Reset Token'),
            'nick_name' => Yii::t('app', 'Nick Name'),
            'english_name' => Yii::t('app', 'English Name'),
            'dept_id' => Yii::t('app', 'Dept ID'),
            'sex' => Yii::t('app', 'Sex'),
            'birthday' => Yii::t('app', 'Birthday'),
            'tel_dept' => Yii::t('app', 'Tel Dept'),
            'fax_dept' => Yii::t('app', 'Fax Dept'),
            'add_home' => Yii::t('app', 'Add Home'),
            'post_home' => Yii::t('app', 'Post Home'),
            'tel_home' => Yii::t('app', 'Tel Home'),
            'mobile' => Yii::t('app', 'Mobile'),
            'email' => Yii::t('app', 'Email'),
            'qq' => Yii::t('app', 'Qq'),
            'ichat' => Yii::t('app', 'Ichat'),
            'avatar' => Yii::t('app', 'Avatar'),
            'last_visit_time' => Yii::t('app', 'Last Visit Time'),
            'last_pass_time' => Yii::t('app', 'Last Pass Time'),
            'online' => Yii::t('app', 'Online'),
            'status' => Yii::t('app', 'Status'),
            'on_status' => Yii::t('app', 'On Status'),
            'attend_status' => Yii::t('app', 'Attend Status'),
            'mobile_hidden' => Yii::t('app', 'Mobile Hidden'),
            'user_sort' => Yii::t('app', 'User Sort'),
            'not_login' => Yii::t('app', 'Not Login'),
            'remark' => Yii::t('app', 'Remark'),
            'my_status' => Yii::t('app', 'My Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'reset_password' => Yii::t('app', 'Reset Password'),
        ];
    }
}

<?php

namespace backend\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\web\IdentityInterface;

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
 */ 
class User extends \common\base\BaseActiveRecord implements IdentityInterface
{
    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 200;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user}}';
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
            [['add_home', 'avatar', 'my_status'], 'string', 'max' => 200],
            [['username','password','nick_name',],'required'],
            ['sex','default','value'=>1,],
            ['mobile_hidden','default','value'=>1],
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

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * Finds user by password reset token
     *
     * @param string $token password reset token
     * @return static|null
     */
    public static function findByPasswordResetToken($token)
    {
        if (!static::isPasswordResetTokenValid($token)) {
            return null;
        }

        return static::findOne([
            'password_reset_token' => $token,
            'status' => self::STATUS_ACTIVE,
        ]);
    }

    /**
     * Finds out if password reset token is valid
     *
     * @param string $token password reset token
     * @return boolean
     */
    public static function isPasswordResetTokenValid($token)
    {
        if (empty($token)) {
            return false;
        }

        $timestamp = (int) substr($token, strrpos($token, '_') + 1);
        $expire = Yii::$app->params['user.passwordResetTokenExpire'];
        return $timestamp + $expire >= time();
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password);
    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = Yii::$app->security->generatePasswordHash($password);
    }

    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    /**
     * Generates new password reset token
     */
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    /**
     * Removes password reset token
     */
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }    





}

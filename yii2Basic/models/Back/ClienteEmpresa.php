<?php

namespace app\models\Back;

use Yii;
use amnah\yii2\user\components\User;//linha adicionada para fazer o import da class user do modulo amnah para criar o CRUD

/**
 * This is the model class for table "cliente_empresa".
 *
 * @property integer $id
 * @property string $morada
 * @property string $nif
 * @property string $conta_corrente
 * @property integer $user_id
 *
 * @property User $user
 */
class ClienteEmpresa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cliente_empresa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['morada', 'nif', 'user_id'], 'required'],
            [['nif', 'conta_corrente'], 'number'],
            [['user_id'], 'integer'],
            [['morada'], 'string', 'max' => 100],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'morada' => 'Morada',
            'nif' => 'Nif',
            'conta_corrente' => 'Conta Corrente',
            'user_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}

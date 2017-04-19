<?php

namespace app\models\Back;

use Yii;

/**
 * This is the model class for table "tipo_operacao".
 *
 * @property integer $id
 * @property string $descricao
 */
class Tipoperacao extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipo_operacao';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'descricao'], 'required'],
            [['id'], 'integer'],
            [['descricao'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'descricao' => 'Descricao',
        ];
    }
}

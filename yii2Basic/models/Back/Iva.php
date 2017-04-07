<?php

namespace app\models\Back;

use Yii;

/**
 * This is the model class for table "iva".
 *
 * @property integer $id
 * @property string $descricao
 * @property string $valor
 *
 * @property Artigo[] $artigos
 */
class Iva extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'iva';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['descricao', 'valor'], 'required'],
            [['valor'], 'number'],
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
            'valor' => 'Valor',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArtigos()
    {
        return $this->hasMany(Artigo::className(), ['iva_id' => 'id']);
    }
}

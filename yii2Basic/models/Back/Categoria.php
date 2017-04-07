<?php

namespace app\models\Back;

use Yii;

/**
 * This is the model class for table "categoria".
 *
 * @property integer $id
 * @property string $descricao
 * @property integer $familia_id
 *
 * @property Artigo[] $artigos
 * @property Familia $familia
 */
class Categoria extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'categoria';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'descricao', 'familia_id'], 'required'],
            [['id', 'familia_id'], 'integer'],
            [['descricao'], 'string', 'max' => 45],
            [['id'], 'unique'],
            [['familia_id'], 'exist', 'skipOnError' => true, 'targetClass' => Familia::className(), 'targetAttribute' => ['familia_id' => 'id']],
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
            'familia_id' => 'Familia ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArtigos()
    {
        return $this->hasMany(Artigo::className(), ['categoria_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFamilia()
    {
        return $this->hasOne(Familia::className(), ['id' => 'familia_id']);
    }
}

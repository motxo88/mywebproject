<?php

namespace app\models\Back;

use Yii;

/**
 * This is the model class for table "artigo".
 *
 * @property integer $id
 * @property string $nome
 * @property string $preco
 * @property integer $categoria_id
 * @property integer $iva_id
 *
 * @property Categoria $categoria
 * @property Iva $iva
 */
class Artigo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'artigo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'preco', 'categoria_id', 'iva_id'], 'required'],
            [['preco'], 'number'],
            [['categoria_id', 'iva_id'], 'integer'],
            [['nome'], 'string', 'max' => 45],
            [['categoria_id'], 'exist', 'skipOnError' => true, 'targetClass' => Categoria::className(), 'targetAttribute' => ['categoria_id' => 'id']],
            [['iva_id'], 'exist', 'skipOnError' => true, 'targetClass' => Iva::className(), 'targetAttribute' => ['iva_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'preco' => 'Preco',
            'categoria_id' => 'Categoria ID',
            'iva_id' => 'Iva ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategoria()
    {
        return $this->hasOne(Categoria::className(), ['id' => 'categoria_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIva()
    {
        return $this->hasOne(Iva::className(), ['id' => 'iva_id']);
    }
}

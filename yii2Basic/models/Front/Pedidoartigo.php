<?php

namespace app\models\Front;

use Yii;

/**
 * This is the model class for table "pedido_artigo".
 *
 * @property integer $id
 * @property string $quantidade
 * @property string $valor
 * @property integer $artigo_id
 * @property integer $pedido_id
 */
class Pedidoartigo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pedido_artigo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'quantidade', 'valor', 'artigo_id', 'pedido_id'], 'required'],
            [['id', 'artigo_id', 'pedido_id'], 'integer'],
            [['quantidade', 'valor'], 'number'],
            [['id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'quantidade' => 'Quantidade',
            'valor' => 'Valor',
            'artigo_id' => 'Artigo ID',
            'pedido_id' => 'Pedido ID',
        ];
    }
}

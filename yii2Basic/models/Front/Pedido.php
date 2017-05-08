<?php

namespace app\models\Front;

use Yii;

/**
 * This is the model class for table "pedido".
 *
 * @property integer $id
 * @property string $timestamp
 * @property string $valor_total
 * @property string $pago
 * @property integer $user_id
 * @property integer $mesa_id
 * @property integer $cliente_empresa_id
 */
class Pedido extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pedido';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['timestamp', 'valor_total', 'pago', 'user_id', 'mesa_id'], 'required'],
            [['timestamp'], 'safe'],
            [['valor_total'], 'number'],
            [['user_id', 'mesa_id', 'cliente_empresa_id'], 'integer'],
            [['pago'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'timestamp' => 'Timestamp',
            'valor_total' => 'Valor Total',
            'pago' => 'Pago',
            'user_id' => 'User ID',
            'mesa_id' => 'Mesa ID',
            'cliente_empresa_id' => 'Cliente Empresa ID',
        ];
    }
}

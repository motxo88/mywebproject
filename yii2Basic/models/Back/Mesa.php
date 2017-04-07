<?php

namespace app\models\Back;

use Yii;

/**
 * This is the model class for table "mesa".
 *
 * @property integer $id
 * @property string $designacao
 * @property string $estado
 */
class Mesa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mesa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['designacao', 'estado'], 'required'],
            [['designacao'], 'string', 'max' => 45],
            [['estado'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'designacao' => 'Designacao',
            'estado' => 'Estado',
        ];
    }
}

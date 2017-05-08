<?php

namespace app\models\Front;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Front\Pedido;

/**
 * PedidoSearch represents the model behind the search form about `app\models\Front\Pedido`.
 */
class PedidoSearch extends Pedido
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'mesa_id', 'cliente_empresa_id'], 'integer'],
            [['timestamp', 'pago'], 'safe'],
            [['valor_total'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Pedido::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'timestamp' => $this->timestamp,
            'valor_total' => $this->valor_total,
            'user_id' => $this->user_id,
            'mesa_id' => $this->mesa_id,
            'cliente_empresa_id' => $this->cliente_empresa_id,
        ]);

        $query->andFilterWhere(['like', 'pago', $this->pago]);

        return $dataProvider;
    }
}

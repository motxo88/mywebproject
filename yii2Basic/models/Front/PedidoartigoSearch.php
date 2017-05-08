<?php

namespace app\models\Front;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Front\Pedidoartigo;

/**
 * PedidoartigoSearch represents the model behind the search form about `app\models\Front\Pedidoartigo`.
 */
class PedidoartigoSearch extends Pedidoartigo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'artigo_id', 'pedido_id'], 'integer'],
            [['quantidade', 'valor'], 'number'],
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
        $query = Pedidoartigo::find();

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
            'quantidade' => $this->quantidade,
            'valor' => $this->valor,
            'artigo_id' => $this->artigo_id,
            'pedido_id' => $this->pedido_id,
        ]);

        return $dataProvider;
    }
}

<?php

namespace app\models\Back;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Back\ClienteEmpresa;

/**
 * ClienteEmpresaSearch represents the model behind the search form about `app\models\Back\ClienteEmpresa`.
 */
class ClienteEmpresaSearch extends ClienteEmpresa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id'], 'integer'],
            [['morada'], 'safe'],
            [['nif', 'conta_corrente'], 'number'],
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
        $query = ClienteEmpresa::find();

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
            'nif' => $this->nif,
            'conta_corrente' => $this->conta_corrente,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'morada', $this->morada]);

        return $dataProvider;
    }
}

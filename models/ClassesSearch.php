<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Classes;

/**
 * ClassesSearch represents the model behind the search form about `app\models\Classes`.
 */
class ClassesSearch extends Classes
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'classtypeid', 'previousclassid', 'nextclassid', 'teacherid', 'assistantid'], 'integer'],
            [['name', 'startdate', 'daysofweek', 'enddate', 'studytime', 'finishtime', 'code'], 'safe'],
            [['fee'], 'number'],
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
        $query = Classes::find();

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
            'startdate' => $this->startdate,
            'fee' => $this->fee,
            'classtypeid' => $this->classtypeid,
            'previousclassid' => $this->previousclassid,
            'nextclassid' => $this->nextclassid,
            'enddate' => $this->enddate,
            'teacherid' => $this->teacherid,
            'assistantid' => $this->assistantid,
            'studytime' => $this->studytime,
            'finishtime' => $this->finishtime,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'daysofweek', $this->daysofweek])
            ->andFilterWhere(['like', 'code', $this->code]);

        return $dataProvider;
    }
}

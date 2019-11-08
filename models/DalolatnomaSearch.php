<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Dalolatnoma;

/**
 * DalolatnomaSearch represents the model behind the search form of `app\models\Dalolatnoma`.
 */
class DalolatnomaSearch extends Dalolatnoma
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'yuk', 'ortiqcha_yuk', 'qurol', 'giyohvand', 'osimlik', 'radio', 'antika', 'transport', 'bosma', 'soliq', 'vaqtincha'], 'integer'],
            [['familiya', 'ism', 'sharif', 'qaysi_tartib', 'doimiy_yashash_joyi', 'fuqoroligi', 'qayerdan', 'qayerga', 'passport_seriya', 'passport_raqam', 'safardan_maqsad', 'valyuta1', 'valyuta2', 'valyuta3', 'qimmatbaxo_metal1', 'qimmatbaxi_metal2', 'nomi1', 'nomi2', 'nomi3', 'nomi4', 'nomi5', 'vaqt', 'status'], 'safe'],
            [['valyuta_qiymati1', 'valyuta_qiymati2', 'valyuta_qiymati3', 'qimmatbaxo_metal_qiymati1', 'qimmatbaxo_metal_qiymati2', 'narxi1', 'narxi2', 'narxi3', 'narxi4', 'narxi5', 'summa'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Dalolatnoma::find();

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
            'yuk' => $this->yuk,
            'ortiqcha_yuk' => $this->ortiqcha_yuk,
            'valyuta_qiymati1' => $this->valyuta_qiymati1,
            'valyuta_qiymati2' => $this->valyuta_qiymati2,
            'valyuta_qiymati3' => $this->valyuta_qiymati3,
            'qimmatbaxo_metal_qiymati1' => $this->qimmatbaxo_metal_qiymati1,
            'qimmatbaxo_metal_qiymati2' => $this->qimmatbaxo_metal_qiymati2,
            'qurol' => $this->qurol,
            'giyohvand' => $this->giyohvand,
            'osimlik' => $this->osimlik,
            'radio' => $this->radio,
            'antika' => $this->antika,
            'transport' => $this->transport,
            'bosma' => $this->bosma,
            'soliq' => $this->soliq,
            'vaqtincha' => $this->vaqtincha,
            'narxi1' => $this->narxi1,
            'narxi2' => $this->narxi2,
            'narxi3' => $this->narxi3,
            'narxi4' => $this->narxi4,
            'narxi5' => $this->narxi5,
            'summa' => $this->summa,
            'vaqt' => $this->vaqt,
        ]);

        $query->andFilterWhere(['like', 'familiya', $this->familiya])
            ->andFilterWhere(['like', 'ism', $this->ism])
            ->andFilterWhere(['like', 'sharif', $this->sharif])
            ->andFilterWhere(['like', 'qaysi_tartib', $this->qaysi_tartib])
            ->andFilterWhere(['like', 'doimiy_yashash_joyi', $this->doimiy_yashash_joyi])
            ->andFilterWhere(['like', 'fuqoroligi', $this->fuqoroligi])
            ->andFilterWhere(['like', 'qayerdan', $this->qayerdan])
            ->andFilterWhere(['like', 'qayerga', $this->qayerga])
            ->andFilterWhere(['like', 'passport_seriya', $this->passport_seriya])
            ->andFilterWhere(['like', 'passport_raqam', $this->passport_raqam])
            ->andFilterWhere(['like', 'safardan_maqsad', $this->safardan_maqsad])
            ->andFilterWhere(['like', 'valyuta1', $this->valyuta1])
            ->andFilterWhere(['like', 'valyuta2', $this->valyuta2])
            ->andFilterWhere(['like', 'valyuta3', $this->valyuta3])
            ->andFilterWhere(['like', 'qimmatbaxo_metal1', $this->qimmatbaxo_metal1])
            ->andFilterWhere(['like', 'qimmatbaxi_metal2', $this->qimmatbaxi_metal2])
            ->andFilterWhere(['like', 'nomi1', $this->nomi1])
            ->andFilterWhere(['like', 'nomi2', $this->nomi2])
            ->andFilterWhere(['like', 'nomi3', $this->nomi3])
            ->andFilterWhere(['like', 'nomi4', $this->nomi4])
            ->andFilterWhere(['like', 'nomi5', $this->nomi5])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}

<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dalolatnoma".
 *
 * @property int $id
 * @property string $familiya
 * @property string $ism
 * @property string $sharif
 * @property string $qaysi_tartib
 * @property string $doimiy_yashash_joyi
 * @property string $fuqoroligi
 * @property string $qayerdan
 * @property string $qayerga
 * @property string $passport_seriya
 * @property string $passport_raqam
 * @property string $safardan_maqsad
 * @property int $yuk
 * @property int $ortiqcha_yuk
 * @property string $valyuta1
 * @property string $valyuta2
 * @property string $valyuta3
 * @property double $valyuta_qiymati1
 * @property double $valyuta_qiymati2
 * @property double $valyuta_qiymati3
 * @property string $qimmatbaxo_metal1
 * @property string $qimmatbaxi_metal2
 * @property double $qimmatbaxo_metal_qiymati1
 * @property double $qimmatbaxo_metal_qiymati2
 * @property int $qurol
 * @property int $giyohvand
 * @property int $osimlik
 * @property int $radio
 * @property int $antika
 * @property int $transport
 * @property int $bosma
 * @property int $soliq
 * @property int $vaqtincha
 * @property string $nomi1
 * @property string $nomi2
 * @property string $nomi3
 * @property string $nomi4
 * @property string $nomi5
 * @property double $narxi1
 * @property double $narxi2
 * @property double $narxi3
 * @property double $narxi4
 * @property double $narxi5
 * @property double $summa
 * @property string $vaqt
 * @property string $status
 */
class Dalolatnoma extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dalolatnoma';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['familiya', 'ism', 'sharif', 'qaysi_tartib', 'doimiy_yashash_joyi', 'fuqoroligi', 'qayerdan', 'qayerga', 'passport_seriya', 'passport_raqam', 'safardan_maqsad', 'yuk', 'vaqt', 'status'], 'required'],
            [['yuk', 'ortiqcha_yuk', 'qurol', 'giyohvand', 'osimlik', 'radio', 'antika', 'transport', 'bosma', 'soliq', 'vaqtincha'], 'integer'],
            [['valyuta_qiymati1', 'valyuta_qiymati2', 'valyuta_qiymati3', 'qimmatbaxo_metal_qiymati1', 'qimmatbaxo_metal_qiymati2', 'narxi1', 'narxi2', 'narxi3', 'narxi4', 'narxi5', 'summa'], 'number'],
            [['vaqt'], 'safe'],
            [['familiya', 'ism', 'sharif', 'qaysi_tartib', 'doimiy_yashash_joyi', 'fuqoroligi', 'qayerdan', 'qayerga', 'passport_seriya', 'passport_raqam', 'safardan_maqsad', 'valyuta1', 'valyuta2', 'valyuta3', 'qimmatbaxo_metal1', 'qimmatbaxi_metal2', 'nomi1', 'nomi2', 'nomi3', 'nomi4', 'nomi5', 'status'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'familiya' => 'Familiya',
            'ism' => 'Ism',
            'sharif' => 'Sharif',
            'qaysi_tartib' => 'Qaysi Tartib',
            'doimiy_yashash_joyi' => 'Doimiy Yashash Joyi',
            'fuqoroligi' => 'Fuqoroligi',
            'qayerdan' => 'Qayerdan',
            'qayerga' => 'Qayerga',
            'passport_seriya' => 'Passport Seriya',
            'passport_raqam' => 'Passport Raqam',
            'safardan_maqsad' => 'Safardan Maqsad',
            'yuk' => 'Yuk',
            'ortiqcha_yuk' => 'Ortiqcha Yuk',
            'valyuta1' => 'Valyuta',
            'valyuta2' => 'Valyuta',
            'valyuta3' => 'Valyuta',
            'valyuta_qiymati1' => 'Valyuta Qiymati',
            'valyuta_qiymati2' => 'Valyuta Qiymati',
            'valyuta_qiymati3' => 'Valyuta Qiymati',
            'qimmatbaxo_metal1' => 'Qimmatbaxo Metal',
            'qimmatbaxi_metal2' => 'Qimmatbaxi Metal',
            'qimmatbaxo_metal_qiymati1' => 'Qimmatbaxo Metal Qiymati',
            'qimmatbaxo_metal_qiymati2' => 'Qimmatbaxo Metal Qiymati',
            'qurol' => 'Qurol , o\'q-dorilar, portlovchi moddalar, radioaktiv materiallar',
            'giyohvand' => 'Giyohvand, moddalar, psioptropnye, zahar ',
            'osimlik' => 'Osimlik va hayvonot dunyosi ob\'ektlari, ularning tarkibi va ulardan tayyorlangan mahsulotlar',
            'radio' => 'Yuqori chastotali radioelektron qurilmalar va kommunikatsiyalar',
            'antika' => 'Antika va san\'at',
            'transport' => 'Transport vositalari',
            'bosma' => 'Bosma nashrlar va boshqa ma\'lumotlar tashuvchilari',
            'soliq' => 'Soliqqa tortiladigan tovarlar',
            'vaqtincha' => 'Vaqtinchalik kiritilgan(eksport) qilinadigan tovarlar',
            'nomi1' => 'Nomi',
            'nomi2' => 'Nomi',
            'nomi3' => 'Nomi',
            'nomi4' => 'Nomi',
            'nomi5' => 'Nomi',
            'narxi1' => 'Narxi',
            'narxi2' => 'Narxi',
            'narxi3' => 'Narxi',
            'narxi4' => 'Narxi',
            'narxi5' => 'Narxi',
            'summa' => 'Summa',
            'vaqt' => 'Vaqt',
            'status' => 'Status',
        ];
    }
}

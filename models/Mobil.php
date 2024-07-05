<?php
namespace app\models;

use Yii;
use yii\behaviors\BlameableBehavior;

/**
 * This is the model class for table "mobil".
 *
 * @property int $id_user
 * @property int $id
 * @property string $nama_mobil
 * @property string|null $kondisi
 * @property integer|null $harga
 * @property integer|null $tahun
 *
 * @property User $user
 */
class Mobil extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mobil';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_mobil'], 'required'],
            [['harga', 'tahun'], 'integer'],
            [['nama_mobil'], 'string', 'max' => 100],
            [['kondisi'], 'string', 'max' => 50],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['id_user' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_user' => 'User ID',
            'id' => 'ID',
            'nama_mobil' => 'Nama Mobil',
            'kondisi' => 'Kondisi',
            'harga' => 'Harga',
            'tahun' => 'Tahun',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'id_user']);
    }

    public function behaviors()
    {
        return [
            'blameable' => [
                'class' => BlameableBehavior::class,
                'createdByAttribute' => 'id_user',
                'updatedByAttribute' => false,
            ],
        ];
    }
}

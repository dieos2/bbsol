<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "testemunho".
 *
 * @property integer $id
 * @property string $texto
 * @property string $data
 * @property integer $id_user
 * @property integer $status
 *
 * @property User $idUser
 * @property Status $status0
 */
class Testemunho extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'testemunho';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['texto', 'data', 'id_user', 'status'], 'required'],
            [['texto'], 'string'],
            [['data'], 'safe'],
            [['id_user', 'status'], 'integer'],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
            [['status'], 'exist', 'skipOnError' => true, 'targetClass' => Status::className(), 'targetAttribute' => ['status' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'texto' => 'Texto',
            'data' => 'Data',
            'id_user' => 'Id User',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus0()
    {
        return $this->hasOne(Status::className(), ['id' => 'status']);
    }
}

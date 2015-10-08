<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "offer".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $start_date
 * @property integer $end_date
 * @property string $start_city
 * @property string $end_city
 * @property string $latitude_start
 * @property string $longitude_start
 * @property string $description
 * @property string $contact_info
 * @property integer $active
 * @property integer $created_date
 * @property integer $modified_date
 *
 * @property User $user
 */
class Offer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'offer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'start_date', 'end_date', 'start_city', 'end_city', 'contact_info'], 'required'],
            [['user_id', 'start_date', 'end_date', 'active', 'created_date', 'modified_date'], 'integer'],
            [['start_city', 'end_city', 'latitude_start', 'longitude_start', 'description', 'contact_info'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'start_city' => 'Start City',
            'end_city' => 'End City',
            'latitude_start' => 'Latitude Start',
            'longitude_start' => 'Longitude Start',
            'description' => 'Description',
            'contact_info' => 'Contact Info',
            'active' => 'Active',
            'created_date' => 'Created Date',
            'modified_date' => 'Modified Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}

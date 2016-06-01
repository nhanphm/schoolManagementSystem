<?php

namespace app\models;

use Yii;
use yii\web\NotFoundHttpException;

/**
 * This is the model class for table "classes".
 *
 * @property integer $id
 * @property string $name
 * @property string $startdate
 * @property string $daysofweek
 * @property string $fee
 * @property integer $classtypeid
 * @property integer $previousclassid
 * @property integer $nextclassid
 * @property string $enddate
 * @property integer $teacherid
 * @property integer $assistantid
 * @property string $studytime
 * @property string $finishtime
 * @property string $code
 */
class Classes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'classes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'name', 'startdate', 'classtypeid', 'teacherid', 'studytime', 'finishtime'], 'required'],
            [['id', 'classtypeid', 'previousclassid', 'nextclassid', 'teacherid', 'assistantid'], 'integer'],
            [['startdate', 'enddate', 'studytime', 'finishtime'], 'safe'],
            [['fee'], 'number'],
            [['name', 'daysofweek', 'code'], 'string', 'max' => 31],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'startdate' => 'Startdate',
            'daysofweek' => 'Daysofweek',
            'fee' => 'Fee',
            'classtypeid' => 'Classtypeid',
            'previousclassid' => 'Previousclassid',
            'nextclassid' => 'Nextclassid',
            'enddate' => 'Enddate',
            'teacherid' => 'Teacherid',
            'assistantid' => 'Assistantid',
            'studytime' => 'Studytime',
            'finishtime' => 'Finishtime',
            'code' => 'Code',
        ];
    }
    
    public function getPreClass()
   {
        if (($models=Classes::findOne($this->previousclassid)) !== null) {
            return $models->name;
        } else {
            return "NULL";
            //throw new NotFoundHttpException('The requested page does not exist.');
        }
      //return $this->findOne($this->previousclassid)->name;
   }

}

<?php

/**
 * User: Yuan
 * Date: 2016-6-15
 * Time: 22:51
 */
class RecommendList extends CActiveRecord
{
    public function tableName() {
        return '{{Recommend_List}}';
    }





    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     *
     * @param string $className
     *        	active record class name.
     * @return OpenMessage the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model ( $className );
    }
}
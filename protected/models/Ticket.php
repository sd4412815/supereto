<?php

/**
 * This is the model class for table "{{open_message}}".
 *
 * The followings are the available columns in table '{{open_message}}':
 * @property integer $id
 * @property string $om_datetime
 * @property integer $om_status
 * @property string $om_content
 * @property string $om_contactor
 * @property integer $om_type
 */
class Ticket extends CActiveRecord {
	public $u_safe_pwd;
	/**
	 *
	 * @return string the associated database table name
	 */
	public function tableName() {
		return '{{ticket}}';
	}

	/**
	 *
	 * @return array validation rules for model attributes.
	 */
	public function rules() {
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array (
				array (
						't_account_number,t_ticket_number,t_account_id,t_ticket_time',
						'required'
				),
			array ('t_account_number','required','message'=>'接收人编号不能为空','on'=>'Ticket'),
			array ('t_ticket_number','required','message'=>'门票数量不能为空','on'=>'Ticket'),
			array ('t_account_number', 'length','min'=>10, 'max'=>10,'message'=>'帮助编号位数不正确','on'=>'Ticket'),
		);
	}

	public function checkSafePwd($attribute,$params){
			if (! $this->hasErrors ()) {
					$this->_identity = new UserIdentity ( $this->u_tel, $this->u_safe_pwd);
					// $isBoss = $this->scenario=="boss"?true:false;
					if ( $this->_identity->authenticate () != 0){
							$this->addError ( 'password', '安全密码错误,请重试！' );
					}
			}
	}
	/**t
	 *
	 * @return array relational rules.
	 */
	public function relations() {
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array ();
	}

	/**
	 *
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels() {
		return array (
				'id' => 'ID',
				'om_datetime' => '留言时间',
				'om_status' => '留言状态',
				'om_content' => '问题描述',
				'om_contactor' => '联系方式',
				'om_type' => '问题分类'
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 *         based on the search/filter conditions.
	 */
	public function search() {
		// @todo Please modify the following code to remove attributes that should not be searched.
		$criteria = new CDbCriteria ();

		$criteria->compare ( 'id', $this->id );
		$criteria->compare ( 'om_datetime', $this->om_datetime, true );
		$criteria->compare ( 'om_status', $this->om_status );
		$criteria->compare ( 'om_content', $this->om_content, true );
		$criteria->compare ( 'om_contactor', $this->om_contactor, true );
		$criteria->compare ( 'om_type', $this->om_type );

		return new CActiveDataProvider ( $this, array (
				'criteria' => $criteria
		) );
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

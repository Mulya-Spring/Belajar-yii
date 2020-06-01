<?php

/**
 * This is the model class for table "kelas".
 *
 * The followings are the available columns in table 'kelas':
 * @property integer $id_kelas
 * @property string $nama_kelas
 * @property string $tahun_angkatan
 * @property integer $jumlah_siswa
 * @property integer $id_guru
 * @property string $status
 *
 * The followings are the available model relations:
 * @property Siswa $siswa
 * @property Guru $idKelas
 */
class Kelas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'kelas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_kelas, nama_kelas, tahun_angkatan, jumlah_siswa, id_guru, status', 'required'),
			array('id_kelas, jumlah_siswa, id_guru', 'numerical', 'integerOnly'=>true),
			array('nama_kelas', 'length', 'max'=>50),
			array('status', 'length', 'max'=>1),
			/*
			//Example username
			array('username', 'match', 'pattern' => '/^[A-Za-z0-9_]+$/u',
                 'message'=>'Username can contain only alphanumeric 
                             characters and hyphens(-).'),
          	array('username','unique'),
          	*/
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_kelas, nama_kelas, tahun_angkatan, jumlah_siswa, id_guru, status', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'siswa' => array(self::HAS_ONE, 'Siswa', 'id_pendaftaran'),
			'idKelas' => array(self::BELONGS_TO, 'Guru', 'id_kelas'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_kelas' => 'Id Kelas',
			'nama_kelas' => 'Nama Kelas',
			'tahun_angkatan' => 'Tahun Angkatan',
			'jumlah_siswa' => 'Jumlah Siswa',
			'id_guru' => 'Id Guru',
			'status' => 'Status',
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
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_kelas',$this->id_kelas);
		$criteria->compare('nama_kelas',$this->nama_kelas,true);
		$criteria->compare('tahun_angkatan',$this->tahun_angkatan,true);
		$criteria->compare('jumlah_siswa',$this->jumlah_siswa);
		$criteria->compare('id_guru',$this->id_guru);
		$criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Kelas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function beforeSave() 
    {
        $userId=0;
		if(null!=Yii::app()->user->id) $userId=(int)Yii::app()->user->id;
		
		if($this->isNewRecord)
        {           
                        						
        }else{
                        						
        }

        
        	// NOT SURE RUN PLEASE HELP ME -> 
        	//$from=DateTime::createFromFormat('d/m/Y',$this->tahun_angkatan);
        	//$this->tahun_angkatan=$from->format('Y-m-d');
        	
        return parent::beforeSave();
    }

    public function beforeDelete () {
		$userId=0;
		if(null!=Yii::app()->user->id) $userId=(int)Yii::app()->user->id;
         $this->status=0; 
                         $this->save(); 

        return false;
    }

    public function afterFind()    {
         
        	// NOT SURE RUN PLEASE HELP ME -> 
        	//$from=DateTime::createFromFormat('Y-m-d',$this->tahun_angkatan);
        	//$this->tahun_angkatan=$from->format('d/m/Y');
        	
        parent::afterFind();
    }
	
		
	public function defaultScope()
    {
    	/*
    	//Example Scope
    	return array(
	        'condition'=>"deleted IS NULL ",
            'order'=>'create_time DESC',
            'limit'=>5,
        );
        */
        $scope=array();

        
        return $scope;
    }
}

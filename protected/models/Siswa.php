<?php

/**
 * This is the model class for table "siswa".
 *
 * The followings are the available columns in table 'siswa':
 * @property integer $id_pendaftaran
 * @property string $nis
 * @property string $nama_siswa
 * @property string $jenis_kelamin
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $agama
 * @property string $alamat
 * @property string $wali_siswa
 * @property integer $no_hp
 * @property string $id_kelas
 * @property string $angkatan
 * @property string $id_user
 * @property string $status
 *
 * The followings are the available model relations:
 * @property Kelas $idPendaftaran
 */
class Siswa extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'siswa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_pendaftaran, nis, nama_siswa, jenis_kelamin, tempat_lahir, tanggal_lahir, agama, alamat, wali_siswa, no_hp, id_kelas, angkatan, id_user, status', 'required'),
			array('id_pendaftaran, no_hp', 'numerical', 'integerOnly'=>true),
			array('nis', 'length', 'max'=>16),
			array('nama_siswa, wali_siswa', 'length', 'max'=>30),
			array('jenis_kelamin, status', 'length', 'max'=>1),
			array('tempat_lahir', 'length', 'max'=>50),
			array('agama', 'length', 'max'=>25),
			array('alamat', 'length', 'max'=>100),
			array('id_kelas, id_user', 'length', 'max'=>5),
			/*
			//Example username
			array('username', 'match', 'pattern' => '/^[A-Za-z0-9_]+$/u',
                 'message'=>'Username can contain only alphanumeric 
                             characters and hyphens(-).'),
          	array('username','unique'),
          	*/
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_pendaftaran, nis, nama_siswa, jenis_kelamin, tempat_lahir, tanggal_lahir, agama, alamat, wali_siswa, no_hp, id_kelas, angkatan, id_user, status', 'safe', 'on'=>'search'),
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
			'idPendaftaran' => array(self::BELONGS_TO, 'Kelas', 'id_pendaftaran'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_pendaftaran' => 'Id Pendaftaran',
			'nis' => 'Nis',
			'nama_siswa' => 'Nama Siswa',
			'jenis_kelamin' => 'Jenis Kelamin',
			'tempat_lahir' => 'Tempat Lahir',
			'tanggal_lahir' => 'Tanggal Lahir',
			'agama' => 'Agama',
			'alamat' => 'Alamat',
			'wali_siswa' => 'Wali Siswa',
			'no_hp' => 'No Hp',
			'id_kelas' => 'Id Kelas',
			'angkatan' => 'Angkatan',
			'id_user' => 'Id User',
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

		$criteria->compare('id_pendaftaran',$this->id_pendaftaran);
		$criteria->compare('nis',$this->nis,true);
		$criteria->compare('nama_siswa',$this->nama_siswa,true);
		$criteria->compare('jenis_kelamin',$this->jenis_kelamin,true);
		$criteria->compare('tempat_lahir',$this->tempat_lahir,true);
		$criteria->compare('tanggal_lahir',$this->tanggal_lahir,true);
		$criteria->compare('agama',$this->agama,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('wali_siswa',$this->wali_siswa,true);
		$criteria->compare('no_hp',$this->no_hp);
		$criteria->compare('id_kelas',$this->id_kelas,true);
		$criteria->compare('angkatan',$this->angkatan,true);
		$criteria->compare('id_user',$this->id_user,true);
		$criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Siswa the static model class
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
        	//$from=DateTime::createFromFormat('d/m/Y',$this->tanggal_lahir);
        	//$this->tanggal_lahir=$from->format('Y-m-d');
        	
        	// NOT SURE RUN PLEASE HELP ME -> 
        	//$from=DateTime::createFromFormat('d/m/Y',$this->angkatan);
        	//$this->angkatan=$from->format('Y-m-d');
        	
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
        	//$from=DateTime::createFromFormat('Y-m-d',$this->tanggal_lahir);
        	//$this->tanggal_lahir=$from->format('d/m/Y');
        	
        	// NOT SURE RUN PLEASE HELP ME -> 
        	//$from=DateTime::createFromFormat('Y-m-d',$this->angkatan);
        	//$this->angkatan=$from->format('d/m/Y');
        	
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

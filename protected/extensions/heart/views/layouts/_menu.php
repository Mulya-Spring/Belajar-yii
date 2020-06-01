<?php
$currController 	= Yii::app()->controller->id;
$currControllers	= explode('/', $currController);
$currAction			= Yii::app()->controller->action->id;
$currRoute 			= Yii::app()->controller->getRoute();
$currRoutes			= explode('/', $currRoute);

$menu=
	array(
		array('label'=>'Home', 'url'=>array('/site/index'), 'icon'=>'fa fa-home','active'=>($currController=='site' and $currAction=='index' )),

		array('label'=>'Admin', 'url'=>'#', 'icon'=>'fa fa-gear', 'visible'=>!Yii::app()->user->isGuest, 'active'=> false ,'items'=>array(
			array('label'=>'Generator Code', 'url'=>array('/gii/heart'), 'icon'=>'fa fa-refresh fa-fw', 'visible'=>!Yii::app()->user->isGuest),
                        array('label'=>'Agama', 'url'=>array('#'),'active'=>($currController=='site' and $currAction=='contact' )),
                        array('label'=>'User', 'url'=>array('/users/index', 'view'=>'users'),'active'=>($currController=='users' and $currAction=='index' )),
			//'---',
			//array('label'=>'NAV HEADER'),
		)),

        array('label'=>'Peserta Didik', 'url'=>'#', 'icon'=>'fa fa-heart' , 'active'=>false, 'items'=>array(
				array('label'=>'Data Siswa', 'url'=>array('/siswa/index', 'view'=>'siswa'),'active'=>($currController=='siswa' and $currAction=='index' )),
				array('label'=>'Kelas', 'url'=>array('/kelas/index', 'view'=>'kelas'),'active'=>($currController=='kelas' and $currAction=='index' )),
                                array('label'=>'Tagihan', 'url'=>array('#'),'active'=>($currController=='tagihan' and $currAction=='tagihan' )),
                                array('label'=>'Tabungan', 'url'=>array('#'),'active'=>($currController=='tabungan' and $currAction=='tabungan' )),
			//'---',
			//array('label'=>'NAV HEADER'),
		)),

        array('label'=>'Guru', 'url'=>'#', 'icon'=>'fa fa-user' , 'active'=>false, 'items'=>array(
			array('label'=>'Data Guru', 'url'=>array('/guru/index', 'view'=>'guru'),'active'=>($currController=='guru' and $currAction=='index' )),
			array('label'=>'Jadwal', 'url'=>array('#'),'active'=>($currController=='jadwal' and $currAction=='jadwal' )),
			//'---',
			//array('label'=>'NAV HEADER'),
		)),

		array('label'=>'Pages', 'url'=>'#', 'icon'=>'fa fa-star' , 'active'=>($currController=='site' and $currAction!='index') , 'items'=>array(
			array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about'),'active'=>($currController=='site' and $currAction=='page' )),
			array('label'=>'Contact', 'url'=>array('/contact/create'),'active'=>($currController=='contact' and $currAction=='create' )),
			//'---',
			//array('label'=>'NAV HEADER'),
		)),
                
	);	
?>	
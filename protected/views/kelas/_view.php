<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_kelas')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_kelas),array('view','id'=>$data->id_kelas)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_kelas')); ?>:</b>
	<?php echo CHtml::encode($data->nama_kelas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tahun_angkatan')); ?>:</b>
	<?php echo CHtml::encode($data->tahun_angkatan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah_siswa')); ?>:</b>
	<?php echo CHtml::encode($data->jumlah_siswa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_guru')); ?>:</b>
	<?php echo CHtml::encode($data->id_guru); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />


</div>
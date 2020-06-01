<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_user')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_user),array('view','id'=>$data->id_user)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_user')); ?>:</b>
	<?php echo CHtml::encode($data->nama_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sandi')); ?>:</b>
	<?php echo CHtml::encode($data->sandi); ?>
	<br />


</div>
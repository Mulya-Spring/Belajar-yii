<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldRow($model,'id_pendaftaran',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'nis',array('class'=>'span5','maxlength'=>16)); ?>

		<?php echo $form->textFieldRow($model,'nama_siswa',array('class'=>'span5','maxlength'=>30)); ?>

		<?php echo $form->textFieldRow($model,'jenis_kelamin',array('class'=>'span5','maxlength'=>1)); ?>

		<?php echo $form->textFieldRow($model,'tempat_lahir',array('class'=>'span5','maxlength'=>50)); ?>

		<?php echo $form->datepickerRow($model,'tanggal_lahir',
								array(
					                'options' => array(
					                    'language' => 'id',
					                    'format' => 'yyyy-mm-dd', 
					                    'weekStart'=> 1,
					                    'autoclose'=>'true',
					                    'keyboardNavigation'=>true,
					                ), 
					            ),
					            array(
					                'prepend' => '<i class="icon-calendar"></i>'
					            )
			);; ?>

		<?php echo $form->textFieldRow($model,'agama',array('class'=>'span5','maxlength'=>25)); ?>

		<?php echo $form->textFieldRow($model,'alamat',array('class'=>'span5','maxlength'=>100)); ?>

		<?php echo $form->textFieldRow($model,'wali_siswa',array('class'=>'span5','maxlength'=>30)); ?>

		<?php echo $form->textFieldRow($model,'no_hp',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'id_kelas',array('class'=>'span5','maxlength'=>5)); ?>

		<?php echo $form->datepickerRow($model,'angkatan',
								array(
					                'options' => array(
					                    'language' => 'id',
					                    'format' => 'yyyy-mm-dd', 
					                    'weekStart'=> 1,
					                    'autoclose'=>'true',
					                    'keyboardNavigation'=>true,
					                ), 
					            ),
					            array(
					                'prepend' => '<i class="icon-calendar"></i>'
					            )
			);; ?>

		<?php echo $form->textFieldRow($model,'id_user',array('class'=>'span5','maxlength'=>5)); ?>

		<?php echo $form->textFieldRow($model,'status',array('class'=>'span5','maxlength'=>1)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>

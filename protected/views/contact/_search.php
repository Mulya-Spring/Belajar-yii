<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

			<?php echo $form->textFieldRow($model,'nama',array('class'=>'span5','maxlength'=>50)); ?>

		<?php echo $form->textFieldRow($model,'subjek',array('class'=>'span5','maxlength'=>100)); ?>

		<?php echo $form->textFieldRow($model,'body',array('class'=>'span5','maxlength'=>100)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
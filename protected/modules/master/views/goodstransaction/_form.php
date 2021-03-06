<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'goods-transaction-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'qty'); ?>
		<?php echo $form->textField($model,'qty'); ?>
		<?php echo $form->error($model,'qty'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_time'); ?>
		<?php echo $form->textField($model,'date_time'); ?>
		<?php echo $form->error($model,'date_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'decsription'); ?>
		<?php echo $form->textArea($model,'decsription',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'decsription'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'goods_id'); ?>
		<?php echo $form->textField($model,'goods_id'); ?>
		<?php echo $form->error($model,'goods_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'in'); ?>
		<?php echo $form->textField($model,'in',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'in'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'out'); ?>
		<?php echo $form->textField($model,'out',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'out'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'balance_history'); ?>
		<?php echo $form->textField($model,'balance_history',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'balance_history'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type_order'); ?>
		<?php echo $form->textField($model,'type_order'); ?>
		<?php echo $form->error($model,'type_order'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shipping_id'); ?>
		<?php echo $form->textField($model,'shipping_id'); ?>
		<?php echo $form->error($model,'shipping_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
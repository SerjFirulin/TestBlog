
<?php
/* @var $this PostsController */
/* @var $model Post */
?>
<h1>View Posts #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$model,
    'attributes'=>array(
        'id',
        'title',
        'content',
        'updated_at',
        'created_at',
    ),
)); ?>

<?php
$this->breadcrumbs=array(
	'Usuários'=>array('index'),
	$model->username,
);

$this->menu=array(
	array('label'=>'Listar Usuários', 'url'=>array('index')),
	array('label'=>'Criar Usuário', 'url'=>array('create')),
	array('label'=>'Atualizar Usuário', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Remover Usuário', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>Yii::t('zii','Are you sure you want to delete this item?'))),
	array('label'=>'Gerenciamento de Usuários', 'url'=>array('admin')),
);
?>

<h1>Visualizar Usuário [<?php echo $model->username; ?>]</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'password',
		'email',
	),
)); ?>

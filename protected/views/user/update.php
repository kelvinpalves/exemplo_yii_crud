<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Usuários', 'url'=>array('index')),
	array('label'=>'Criar Usuário', 'url'=>array('create')),
	array('label'=>'Visualizar Usuário', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerenciamento de Usuário', 'url'=>array('admin')),
);
?>

<h1>Atualizar Usuário <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
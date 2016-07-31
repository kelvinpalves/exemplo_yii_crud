<?php
$this->breadcrumbs=array(
	'Usuários'=>array('index'),
	'Criar',
);

$this->menu=array(
	array('label'=>'Listar Usuários', 'url'=>array('index')),
	array('label'=>'Gerenciamento de Usuários', 'url'=>array('admin')),
);
?>

<h1>Criar Usuário</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
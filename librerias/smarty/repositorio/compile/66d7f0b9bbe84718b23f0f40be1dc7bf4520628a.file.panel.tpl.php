<?php /* Smarty version Smarty-3.1.11, created on 2016-05-17 11:18:52
         compiled from "templates/plantillas/modulos/tipoprendas/tallas/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54757899057374242e66087-58599825%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66d7f0b9bbe84718b23f0f40be1dc7bf4520628a' => 
    array (
      0 => 'templates/plantillas/modulos/tipoprendas/tallas/panel.tpl',
      1 => 1463416306,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54757899057374242e66087-58599825',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_57374242ea7198_97419111',
  'variables' => 
  array (
    'tipo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57374242ea7198_97419111')) {function content_57374242ea7198_97419111($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Tallas</h1>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<a href="tipoPrendas" class="btn btn-success">Regresar</a>
	</div>
</div>
<br />

<ul id="panelTabs" class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#listas">Lista</a></li>
  <li><a data-toggle="tab" href="#add">Agregar o Modificar</a></li>
</ul>

<div class="tab-content">
	<div id="listas" class="tab-pane fade in active">
		<div id="dvLista">
			
		</div>
	</div>
	
	<div id="add" class="tab-pane fade">
		<form role="form" id="frmAdd" class="form-horizontal" onsubmit="javascript: return false;">
			<div class="box">
				<div class="box-body">			
					<div class="form-group">
						<label for="txtNombre" class="col-lg-2">Nombre</label>
						<div class="col-lg-3">
							<input class="form-control" id="txtNombre" name="txtNombre">
						</div>
					</div>
					<div class="form-group">
						<label for="txtAdicional" class="col-lg-2">Adicional</label>
						<div class="col-lg-3">
							<input class="form-control" id="txtAdicional" name="txtAdicional">
							<small class="text-muted">Este se le suma al precio de la prenda
						</div>
					</div>
				</div>
				<div class="box-footer">
					<button type="reset" id="btnReset" class="btn btn-default">Cancelar</button>
					<button type="submit" class="btn btn-info pull-right">Guardar</button>
					<input type="hidden" id="id"/>
					<input type="hidden" id="tipo" value="<?php echo $_smarty_tpl->tpl_vars['tipo']->value;?>
"/>
				</div>
			</div>
		</form>
	</div>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.11, created on 2016-06-17 23:30:12
         compiled from "templates/plantillas/modulos/infracciones/panelRegistro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18101457755764c013cb3773-50674229%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbec137b51d9dd288b875be4f8bc9343cf120098' => 
    array (
      0 => 'templates/plantillas/modulos/infracciones/panelRegistro.tpl',
      1 => 1466224211,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18101457755764c013cb3773-50674229',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5764c013cf5f11_77755101',
  'variables' => 
  array (
    'areas' => 0,
    'row' => 0,
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5764c013cf5f11_77755101')) {function content_5764c013cf5f11_77755101($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Library/WebServer/Documents/condominios/librerias/smarty/plugins/modifier.date_format.php';
?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Registro de infracciones</h1>
	</div>
</div>

<ul id="panelTabs" class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#listas">Lista</a></li>
  <li><a data-toggle="tab" href="#add">Agregar / Modificar</a></li>
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
						<label for="txtFecha" class="col-lg-2">Fecha</label>
						<div class="col-lg-3">
							<div class="input-group date">
								<input class="form-control" id="txtFecha" name="txtFecha" value="<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>
">
								<span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="txtHora" class="col-lg-2">Hora</label>
						<div class="col-lg-3">
							<div class="input-group bootstrap-timepicker timepicker">
								<input class="form-control" id="txtHora" name="txtHora" value="<?php echo smarty_modifier_date_format(time(),"%I:%M %p");?>
">
								<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="txtDepartamento" class="col-lg-2">Departamento</label>
						<div class="col-lg-6">
							<input class="form-control" id="txtDepartamento" name="txtDepartamento" value="" identificador="" disabled="true">
						</div>
						<div class="col-lg-1">
							<a class="btn btn-default" data-toggle="modal" href="#winDepartamentos"><i class="fa fa-search" aria-hidden="true"></i></a>
						</div>
					</div>
					<div class="form-group">
						<label for="selArea" class="col-lg-2">Área / Reglamento</label>
						<div class="col-lg-3">
							<select class="form-control" id="selArea" name="selArea">
								<option value="">Selecciona de la lista
								<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['areas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['idArea'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>

								<?php } ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="txtInciso" class="col-lg-2">Inciso</label>
						<div class="col-lg-2">
							<input class="form-control" id="txtInciso" name="txtInciso" value="">
						</div>
					</div>
					<div class="form-group">
						<label for="txtServidor" class="col-lg-2">Servidor</label>
						<div class="col-lg-2">
							<input class="form-control" id="txtServidor" name="txtServidor" value="">
						</div>
					</div>
					<div class="form-group">
						<label for="txtCamara" class="col-lg-2">Cámara</label>
						<div class="col-lg-2">
							<input class="form-control" id="txtCamara" name="txtCamara" value="">
						</div>
					</div>
					<div class="form-group">
						<label for="txtDescripción" class="col-lg-2">Descripción</label>
						<div class="col-lg-8">
							<textarea class="form-control" id="txtDescripcion" name="txtDescripcion"></textarea>
						</div>
					</div>
				</div>
				<div class="box-footer">
					<button type="reset" id="btnReset" class="btn btn-default">Cancelar</button>
					<button type="submit" class="btn btn-info pull-right">Guardar</button>
					<input type="hidden" id="id"/>
				</div>
			</div>
		</form>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/infracciones/winDepartamentos.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>
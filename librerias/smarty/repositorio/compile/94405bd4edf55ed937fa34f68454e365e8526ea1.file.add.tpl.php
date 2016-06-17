<?php /* Smarty version Smarty-3.1.11, created on 2016-05-19 12:59:46
         compiled from "templates/plantillas/modulos/estudiantes/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:108640278856e3a3b81f0cf5-28355239%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94405bd4edf55ed937fa34f68454e365e8526ea1' => 
    array (
      0 => 'templates/plantillas/modulos/estudiantes/add.tpl',
      1 => 1460381119,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '108640278856e3a3b81f0cf5-28355239',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56e3a3b81f5bb4_64922450',
  'variables' => 
  array (
    'nivel' => 0,
    'row' => 0,
    'anio' => 0,
    'anio2' => 0,
    'estados' => 0,
    'gruposSanguineos' => 0,
    'cuidados' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e3a3b81f5bb4_64922450')) {function content_56e3a3b81f5bb4_64922450($_smarty_tpl) {?><form role="form" id="frmAdd" class="form-horizontal" onsubmit="javascript: return false;">
	<div class="box">
		<div class="box-body">
			<h2>Generales</h2>
			<div class="form-group">
				<label for="selNivel" class="col-lg-2">Nivel</label>
				<div class="col-lg-3">
					<select class="form-control" id="selNivel" name="idNivel">
						<option value="">Selecciona
						<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nivel']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['idNivel'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>

						<?php } ?>
					</select>
				</div>
				<label for="selIngreso" class="col-lg-2">Año de ingreso</label>
				<div class="col-lg-2">
					<select id="selIngreso" name="selIngreso" class="form-control">
						<?php while ($_smarty_tpl->tpl_vars['anio']->value>$_smarty_tpl->tpl_vars['anio2']->value){?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['anio']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['anio']->value--;?>

						<?php }?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="selIngreso" class="col-lg-2">Matrícula</label>
				<div class="col-lg-2">
					<input class="form-control" id="txtMatricula" name="txtMatricula" disabled="true">
				</div>
			</div>
			<hr />
			<h2>Personales</h2>
			<div class="form-group">
				<label for="txtCURP" class="col-lg-2">CURP</label>
				<div class="col-lg-3">
					<input class="form-control" id="txtCURP" name="txtCURP" placeholder="CURP">
				</div>
			</div>
			<div class="form-group">
				<label for="txtNombre" class="col-lg-2">Nombre</label>
				<div class="col-lg-3">
					<input class="form-control" id="txtNombre" name="txtNombre" placeholder="Nombre">
				</div>
				<div class="col-lg-3">
					<input class="form-control" id="txtApp" name="txtApp" placeholder="Apellido paterno">
				</div>
				<div class="col-lg-3">
					<input class="form-control" id="txtApm" name="txtApm" placeholder="Apellido materno">
				</div>
			</div>
			<div class="form-group">
				<label for="selSexo" class="col-lg-2">Sexo</label>
				<div class="col-lg-2">
					<select id="selSexo" name="selSexo" class="form-control">
						<option value="H">Hombre
						<option value="M">Mujer
					</select>
				</div>
				
				<label for="txtNacimiento" class="col-lg-2 col-lg-offset-2">Fecha de nacimiento</label>
				<div class="col-lg-2">
					<input class="form-control" id="txtNacimiento" name="txtNacimiento" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask>
				</div>
			</div>
			<div class="form-group">
				<label for="selEstadoNacimiento" class="col-lg-2">Lugar de nacimiento</label>
				<div class="col-lg-8">
					<select id="selEstadoNacimiento" name="selEstadoNacimiento" class="form-control">
						<option value=""></option>
					<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['estados']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['idEstado'];?>
" curp="<?php echo $_smarty_tpl->tpl_vars['row']->value['cve_curp'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>

					<?php } ?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="txtEstatura" class="col-lg-2">Estatura</label>
				<div class="col-lg-2">
					<input class="form-control" id="txtEstatura" name="txtEstatura">
				</div>
				<label for="txtPeso" class="col-lg-offset-2 col-lg-2">Peso</label>
				<div class="col-lg-2">
					<input class="form-control" id="txtPeso" name="txtPeso">
				</div>
			</div>
			<div class="form-group">
				<label for="selSanguineo" class="col-lg-2">Grupo sanguineo</label>
				<div class="col-lg-2">
					<select id="selSanguineo" name="selSanguineo" class="form-control">
						<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gruposSanguineos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['idSanguineo'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['abbr'];?>

						<?php } ?>
					</select>
				</div>
			</div>
			<hr />
			<h2>Responsables</h2>
			<div class="form-group">
				<label for="txtPapa" class="col-lg-2">Papá</label>
				<div class="col-lg-1">
					<a href="#" class="btn btn-success responsable" tipo="1"><i class="fa fa-search"></i> Buscar</a>
				</div>
				<div class="col-lg-8">
					<input class="form-control" id="txtPapa" name="txtPapa" placeholder="Escribe el nombre del papá" disabled>
				</div>
			</div>
			<div class="form-group">
				<label for="txtMama" class="col-lg-2">Mamá</label>
				<div class="col-lg-1">
					<a href="#" class="btn btn-success responsable" tipo="2"><i class="fa fa-search"></i> Buscar</a>
				</div>
				<div class="col-lg-8">
					<input class="form-control" id="txtMama" name="txtMama" placeholder="Escribe el nombre de la mamá" disabled>
				</div>
			</div>
			<div class="form-group">
				<label for="txtTutor" class="col-lg-2">Tutor</label>
				<div class="col-lg-1">
					<a href="#" class="btn btn-success responsable" tipo="3"><i class="fa fa-search"></i> Buscar</a>
				</div>
				<div class="col-lg-8">
					<input class="form-control" id="txtTutor" name="txtTutor" placeholder="Escribe el nombre del tutor" disabled>
				</div>
			</div>
			<hr />
			<h2>Domicilio</h2>
			<div class="form-group">
				<label for="txtDireccion" class="col-lg-2">Dirección</label>
				<div class="col-lg-10">
					<textarea id="txtDireccion" name="txtDireccion" class="form-control"></textarea>
				</div>
			</div>
			<div class="form-group">
				<label for="txtNoExt" class="col-lg-2">Número exterior</label>
				<div class="col-lg-2">
					<input class="form-control" id="txtNoExt" name="txtNoExt">
				</div>
				<label for="txtNoInt" class="col-lg-2 col-lg-offset-2">Número interior</label>
				<div class="col-lg-2">
					<input class="form-control" id="txtNoInt" name="txtNoInt">
				</div>
			</div>
			<div class="form-group">
				<label for="txtColonia" class="col-lg-2">Colonia</label>
				<div class="col-lg-10">
					<input class="form-control" id="txtColonia" name="txtColonia" placeholder="Colonia">
				</div>
			</div>
			<div class="form-group">
				<label for="txtCodigoPostal" class="col-lg-2">Código postal</label>
				<div class="col-lg-3">
					<input class="form-control" id="txtCodigoPostal" name="txtCodigoPostal">
				</div>
				<label for="txtDelegacion" class="col-lg-offset-1 col-lg-2">Delegación o Municipio</label>
				<div class="col-lg-4">
					<input class="form-control" id="txtDelegacion" name="txtDelegacion">
				</div>
			</div>
			<hr />
			<h2>Cuidados</h2>
			<div class="row">
				<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cuidados']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
				<div class="col-xs-12 col-sm-4 col-md-3">
					<div class="checkbox">
							<label><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['idCuidado'];?>
" class="cuidados" name="cuidados"><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</label>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
		<div class="box-footer">
			<button type="reset" id="btnReset" class="btn btn-default">Cancelar</button>
			<button type="submit" class="btn btn-info pull-right">Guardar</button>
			<input type="hidden" id="id"/>
		</div>
	</div>
</form><?php }} ?>
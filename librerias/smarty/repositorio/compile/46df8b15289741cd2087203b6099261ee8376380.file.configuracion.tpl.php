<?php /* Smarty version Smarty-3.1.11, created on 2016-06-23 09:37:22
         compiled from "templates/plantillas/modulos/configuracion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19535459195769f84a7c79c8-48838192%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46df8b15289741cd2087203b6099261ee8376380' => 
    array (
      0 => 'templates/plantillas/modulos/configuracion.tpl',
      1 => 1466603771,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19535459195769f84a7c79c8-48838192',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5769f84a842ad0_48555831',
  'variables' => 
  array (
    'costoMantenimiento' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5769f84a842ad0_48555831')) {function content_5769f84a842ad0_48555831($_smarty_tpl) {?><div class="box">
	<div class="box-header">
		<h3>Configuración del sistema </h3>
	</div>
	<div class="box-body">
		<div class="form-group">
			<label for="txtCostoMantenimiento" class="col-lg-2">Costo de mantenimiento</label>
			<div class="col-lg-3">
				<input class="form-control text-right" id="txtCostoMantenimiento" name="txtCostoMantenimiento" value="<?php echo $_smarty_tpl->tpl_vars['costoMantenimiento']->value;?>
" clave="costoMantenimiento">
			</div>
		</div>
	</div>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.11, created on 2016-05-24 11:58:34
         compiled from "templates/plantillas/modulos/grupos/winImpresion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:785017705570048ec773b84-64141506%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b989cb04daae3eb499ffad0fe652159deee3f38' => 
    array (
      0 => 'templates/plantillas/modulos/grupos/winImpresion.tpl',
      1 => 1464027116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '785017705570048ec773b84-64141506',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_570048ec81c734_72336989',
  'variables' => 
  array (
    'anio' => 0,
    'anio2' => 0,
    'mes' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_570048ec81c734_72336989')) {function content_570048ec81c734_72336989($_smarty_tpl) {?><div id="winImpresion" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" data-toogle="modal">
    <div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1>Impresión de asistencias</h1>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-xs-12">
						<div class="form-group">
							<label for="txtFecha" class="col-xs-4 col-lg-4">Asistencias de</label>
							<div class="col-xs-4 col-sm-4">
								<select id="selAnio" name="selAnio" class="form-control">
									<?php while ($_smarty_tpl->tpl_vars['anio']->value>$_smarty_tpl->tpl_vars['anio2']->value){?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['anio']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['anio']->value--;?>

									<?php }?>
								</select>
							</div>
							<div class="col-xs-4 col-sm-4">
								<select id="selMes" name="selMes" class="form-control">
									<option value="1" <?php if ($_smarty_tpl->tpl_vars['mes']->value==1){?>selected<?php }?>>Enero</option>
									<option value="2" <?php if ($_smarty_tpl->tpl_vars['mes']->value==2){?>selected<?php }?>>Febrero</option>
									<option value="3" <?php if ($_smarty_tpl->tpl_vars['mes']->value==3){?>selected<?php }?>>Marzo</option>
									<option value="4" <?php if ($_smarty_tpl->tpl_vars['mes']->value==4){?>selected<?php }?>>Abril</option>
									<option value="5" <?php if ($_smarty_tpl->tpl_vars['mes']->value==5){?>selected<?php }?>>Mayo</option>
									<option value="6" <?php if ($_smarty_tpl->tpl_vars['mes']->value==6){?>selected<?php }?>>Junio</option>
									<option value="7" <?php if ($_smarty_tpl->tpl_vars['mes']->value==7){?>selected<?php }?>>Julio</option>
									<option value="8" <?php if ($_smarty_tpl->tpl_vars['mes']->value==8){?>selected<?php }?>>Agosto</option>
									<option value="9" <?php if ($_smarty_tpl->tpl_vars['mes']->value==9){?>selected<?php }?>>Septiembre</option>
									<option value="10" <?php if ($_smarty_tpl->tpl_vars['mes']->value==10){?>selected<?php }?>>Octubre</option>
									<option value="11" <?php if ($_smarty_tpl->tpl_vars['mes']->value==11){?>selected<?php }?>>Novimiebre</option>
									<option value="12" <?php if ($_smarty_tpl->tpl_vars['mes']->value==12){?>selected<?php }?>>Diciembre</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				
			</div>
			<div class="modal-footer">
				<button class="btn btn-success" id="btnImprimir">Generar</button>
				<button class="btn btn-warning" id="btnVacio">Generar vacío</button>
			</div>
		</div>
    </div>
</div><?php }} ?>
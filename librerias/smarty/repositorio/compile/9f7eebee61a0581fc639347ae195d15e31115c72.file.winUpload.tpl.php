<?php /* Smarty version Smarty-3.1.11, created on 2016-05-19 12:59:46
         compiled from "templates/plantillas/modulos/estudiantes/winUpload.tpl" */ ?>
<?php /*%%SmartyHeaderCode:171818738756f34928dcdb41-55951201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f7eebee61a0581fc639347ae195d15e31115c72' => 
    array (
      0 => 'templates/plantillas/modulos/estudiantes/winUpload.tpl',
      1 => 1460381119,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171818738756f34928dcdb41-55951201',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56f34928dd3966_83540124',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f34928dd3966_83540124')) {function content_56f34928dd3966_83540124($_smarty_tpl) {?><div id="winFotografia" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" data-toogle="modal">
    <div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1>Subir fotografía</h1>
			</div>
			<div class="modal-body">
				<form id="upload" method="post" action="?mod=cestudiantes&action=uploadfile" enctype="multipart/form-data">
					<input type="hidden" id="fotoEstudiante" name="fotoEstudiante">
					<input type="file" name="upl" multiple accept="image/jpg,image/jpeg"/>
					<ul class="elementos list-group">
					</ul>
				</form>
			</div>
		</div>
    </div>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.14, created on 2013-09-24 15:07:18
         compiled from "C:\wamp\www\shop\themes\TUSHIMA\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:802352411d65404aa8-31652905%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3511de0a6f445fdc0d88b54722977e14c7c349a' => 
    array (
      0 => 'C:\\wamp\\www\\shop\\themes\\TUSHIMA\\footer.tpl',
      1 => 1380006383,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '802352411d65404aa8-31652905',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52411d654632a7_18943468',
  'variables' => 
  array (
    'content_only' => 0,
    'page_name' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_FOOTER' => 0,
    'PS_ALLOW_MOBILE_DEVICE' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52411d654632a7_18943468')) {function content_52411d654632a7_18943468($_smarty_tpl) {?>

		<?php if (!$_smarty_tpl->tpl_vars['content_only']->value){?>
				</div>

<!-- Right -->
				<div id="right_column" class="column">
                                        <?php if ((isset($_smarty_tpl->tpl_vars['page_name']->value)&&$_smarty_tpl->tpl_vars['page_name']->value=='index')){?><?php }elseif((isset($_smarty_tpl->tpl_vars['page_name']->value)&&$_smarty_tpl->tpl_vars['page_name']->value=='category')){?><?php }elseif((isset($_smarty_tpl->tpl_vars['page_name']->value)&&$_smarty_tpl->tpl_vars['page_name']->value=='product')){?><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>
<?php }?>
				</div>
			</div>

<!-- Footer -->
			<div id="footer" class="clearfix">
				<?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>

				<?php if ($_smarty_tpl->tpl_vars['PS_ALLOW_MOBILE_DEVICE']->value){?>
					<div id="browseMobile"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true);?>
?mobile_theme_ok"><?php echo smartyTranslate(array('s'=>'Browse the mobile site'),$_smarty_tpl);?>
</a></div>
				<?php }?>
			</div>
		</div>
	<?php }?>
	</body>
</html>
<?php }} ?>
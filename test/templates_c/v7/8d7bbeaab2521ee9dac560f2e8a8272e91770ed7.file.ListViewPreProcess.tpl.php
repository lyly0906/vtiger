<?php /* Smarty version Smarty-3.1.7, created on 2017-06-20 02:39:09
         compiled from "D:\programs\phpStudy\WWW\vtiger\includes\runtime/../../layouts/v7\modules\EmailTemplates\ListViewPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3074959488acd57cb02-67521875%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d7bbeaab2521ee9dac560f2e8a8272e91770ed7' => 
    array (
      0 => 'D:\\programs\\phpStudy\\WWW\\vtiger\\includes\\runtime/../../layouts/v7\\modules\\EmailTemplates\\ListViewPreProcess.tpl',
      1 => 1497408806,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3074959488acd57cb02-67521875',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59488acd5f1e0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59488acd5f1e0')) {function content_59488acd5f1e0($_smarty_tpl) {?>



<?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/Topbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="container-fluid app-nav">
    <div class="row">
        <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("partials/SidebarHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModuleHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>
</div>
</nav>
     <div id='overlayPageContent' class='fade modal overlayPageContent content-area overlay-container-60' tabindex='-1' role='dialog' aria-hidden='true'>
        <div class="data">
        </div>
        <div class="modal-dialog">
        </div>
    </div>
<div class="main-container main-container-<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
">
    <br>
    <div class="listViewPageDiv full-width" id="listViewContent">
<?php }} ?>
<?php
/* Smarty version 3.1.39, created on 2021-07-25 10:31:06
  from '/home/vagrant/code/sample-mvc/views/home/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60fd3d6a6bd968_38917279',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49a270fb3994b78ae02e1d1f27f9a84e71726b68' => 
    array (
      0 => '/home/vagrant/code/sample-mvc/views/home/index.tpl',
      1 => 1627209023,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60fd3d6a6bd968_38917279 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104656871060fd3d6a6bb326_47335283', 'main_section');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/main_layout.tpl');
}
/* {block 'main_section'} */
class Block_104656871060fd3d6a6bb326_47335283 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main_section' => 
  array (
    0 => 'Block_104656871060fd3d6a6bb326_47335283',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2 class="title"><?php echo $_smarty_tpl->tpl_vars['section_name']->value;?>
</h2>
<?php
}
}
/* {/block 'main_section'} */
}

<?php
/* Smarty version 3.1.39, created on 2021-07-25 10:32:56
  from '/home/vagrant/code/sample-mvc/views/article/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60fd3dd898a956_87372929',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96616d0476cdd1f42278893dcb5c1ad428db2b83' => 
    array (
      0 => '/home/vagrant/code/sample-mvc/views/article/index.tpl',
      1 => 1627209171,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60fd3dd898a956_87372929 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_71110337560fd3dd89803f2_91642674', 'main_section');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/main_layout.tpl');
}
/* {block 'main_section'} */
class Block_71110337560fd3dd89803f2_91642674 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main_section' => 
  array (
    0 => 'Block_71110337560fd3dd89803f2_91642674',
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

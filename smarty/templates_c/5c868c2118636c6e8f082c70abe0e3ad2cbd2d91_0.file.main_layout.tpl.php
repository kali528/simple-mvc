<?php
/* Smarty version 3.1.39, created on 2021-07-25 10:29:59
  from '/home/vagrant/code/sample-mvc/views/layouts/main_layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60fd3d277169d9_02944121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c868c2118636c6e8f082c70abe0e3ad2cbd2d91' => 
    array (
      0 => '/home/vagrant/code/sample-mvc/views/layouts/main_layout.tpl',
      1 => 1627208985,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60fd3d277169d9_02944121 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="en">

<head>
  <title>Hello, world!</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="../themes/material-kit-master/assets/css/material-kit.css?v=2.0.7" rel="stylesheet" />
</head>

<body>
  <nav class="navbar navbar-color-on-scroll navbar-transparent fixed-top navbar-expand-lg" color-on-scroll="100">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="https://demos.creative-tim.com/material-kit/index.html">
          Material Kit </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="material-icons">apps</i> Template
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('../themes/material-kit-master/assets/img/bg3.jpg')">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <div class="brand text-center">
            <h1>Your title here</h1>
            <h3 class="title text-center">Subtitle</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
    <div class="container">
      <div class="section text-center">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_204467799260fd3d27713e10_18496581', 'main_section');
?>

      </div>
    </div>
  </div>
  <footer class="footer footer-default">
    <div class="container">
      <nav class="float-left">
        <ul>
          <li>
            <a href="https://www.creative-tim.com/">
              Creative Tim
            </a>
          </li>
        </ul>
      </nav>
      <div class="copyright float-right">
        &copy;
        <?php echo '<script'; ?>
>
          document.write(new Date().getFullYear())
        <?php echo '</script'; ?>
>, made with <i class="material-icons">favorite</i> by
        <a href="https://www.creative-tim.com/" target="blank">Creative Tim</a> for a better web.
      </div>
    </div>
  </footer>
</body>

</html><?php }
/* {block 'main_section'} */
class Block_204467799260fd3d27713e10_18496581 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main_section' => 
  array (
    0 => 'Block_204467799260fd3d27713e10_18496581',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'main_section'} */
}

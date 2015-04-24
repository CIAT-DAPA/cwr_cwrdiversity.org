<?php /* Smarty version Smarty-3.1.8, created on 2015-04-23 09:17:34
         compiled from "/home/cwr-user/cwrdiversity.org/CWR-Checklist/templates/advanced-search-details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57069537254b3edecb67f90-30386253%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '723fc4e886c7fa1c6f78d38209a208c0dccfe865' => 
    array (
      0 => '/home/cwr-user/cwrdiversity.org/CWR-Checklist/templates/advanced-search-details.tpl',
      1 => 1429643071,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57069537254b3edecb67f90-30386253',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54b3edecda6617_42287028',
  'variables' => 
  array (
    'countryCode' => 0,
    'taxa_left' => 0,
    'taxa_right' => 0,
    'cwrName' => 0,
    'taxa' => 0,
    'taxon' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b3edecda6617_42287028')) {function content_54b3edecda6617_42287028($_smarty_tpl) {?><!-- JAVASCRIPTS -->
<script type="text/javascript" src="<?php echo @SMARTY_JS_URI;?>
/jquery-ui/jquery-ui-1.10.0.custom.min.js"></script>
<script type="text/javascript" src="<?php echo @SMARTY_JS_URI;?>
/jquery.jnotify/jquery.jnotify.min.js"></script>
<!-- Tooltips from: http://vadikom.com/tools/poshy-tip-jquery-plugin-for-stylish-tooltips -->
<script type="text/javascript" src="<?php echo @SMARTY_JS_URI;?>
/poshytip-1.1/jquery.poshytip.min.js"></script>
<script type="text/javascript" src="<?php echo @SMARTY_JS_URI;?>
/advanced-search-details.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo @SMARTY_CSS_URI;?>
/jquery-ui-1.8.17.custom.css" />
<link rel="stylesheet" type="text/css" href="<?php echo @SMARTY_CSS_URI;?>
/jquery.jnotify.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo @SMARTY_JS_URI;?>
/poshytip-1.1/tip-green/tip-green.css" />
<link rel="stylesheet" type="text/css" href="<?php echo @SMARTY_CSS_URI;?>
/advanced-search-details.css" />
<link rel="stylesheet" type="text/css" href="<?php echo @SMARTY_CSS_URI;?>
/general.css" />
<!-- Header Title -->
<script type="text/javascript">
    document.title =  "Advanced Search Results" ;
</script>

<div id="fullwidth" class="post">
    <div id="advanced-search-details">
        <div class="post">
            <p id="title">
                Advanced Search Results
            </p>
            <div class="go-back"> 
                <a href="<?php echo @SMARTY_URL_CHECKLIST;?>
">
                    <img src="<?php echo @SMARTY_IMG_URI;?>
/arrow_return.png">
                    Back
                </a>
            </div>
            <div id="count-box">        
                <p id="count-taxa" class="text-aling-right">
                    <?php if (isset($_smarty_tpl->tpl_vars['countryCode']->value)){?>
                        <img src="<?php echo @SMARTY_IMG_URI;?>
/countries/<?php echo $_smarty_tpl->tpl_vars['countryCode']->value;?>
.png"/>
                    <?php }?>
                    Total <?php echo count($_smarty_tpl->tpl_vars['taxa_left']->value)+count($_smarty_tpl->tpl_vars['taxa_right']->value);?>
 Results
                </p>
            </div>
            <?php if (!isset($_smarty_tpl->tpl_vars['cwrName']->value)){?>
                    <div class="text-aling-left">
                        <form action="download.php" method="post" class="right download">
                            <img src="<?php echo @SMARTY_IMG_URI;?>
/save.png" class="left"/>
                            <?php  $_smarty_tpl->tpl_vars["taxon"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["taxon"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['taxa']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["taxon"]->key => $_smarty_tpl->tpl_vars["taxon"]->value){
$_smarty_tpl->tpl_vars["taxon"]->_loop = true;
?>
                                <input type="hidden" name="term[]" value=<?php echo $_smarty_tpl->tpl_vars['taxon']->value->getId();?>
>
                            <?php } ?>
                            <input id="download-taxa" type="submit" value="Download" />
                        </form>
                    </div>
           <!-- <p id="count-taxa" class="text-aling-left">
                
            </p>-->
            <?php }?>
            <div id="taxa-list">
                <div class="wrapper more-top">
                    <ul>
                        <?php  $_smarty_tpl->tpl_vars['taxon'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['taxon']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['taxa_left']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['taxon']->key => $_smarty_tpl->tpl_vars['taxon']->value){
$_smarty_tpl->tpl_vars['taxon']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['taxon']->value->getMainCrop()==0){?>
                                <li><a href="cwr-details.php?specie_id=<?php echo $_smarty_tpl->tpl_vars['taxon']->value->getId();?>
"> <?php echo $_smarty_tpl->tpl_vars['taxon']->value->generateScientificName(true,true);?>
 </a></li>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['taxon']->value->getMainCrop()==1){?>
                                <li><a href="genepool-details.php?id[]=<?php echo $_smarty_tpl->tpl_vars['taxon']->value->getId();?>
"> <?php echo $_smarty_tpl->tpl_vars['taxon']->value->generateScientificName(true,true);?>
 </a></li>
                            <?php }?>
                        <?php } ?>
                    </ul>
                </div>
                <div class="wrapper less-top">
                    <ul>
                        <?php  $_smarty_tpl->tpl_vars['taxon'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['taxon']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['taxa_right']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['taxon']->key => $_smarty_tpl->tpl_vars['taxon']->value){
$_smarty_tpl->tpl_vars['taxon']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['taxon']->value->getMainCrop()==0){?>
                                <li><a href="cwr-details.php?specie_id=<?php echo $_smarty_tpl->tpl_vars['taxon']->value->getId();?>
"> <?php echo $_smarty_tpl->tpl_vars['taxon']->value->generateScientificName(true,true);?>
 </a></li>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['taxon']->value->getMainCrop()==1){?>
                                <li><a href="genepool-details.php?id[]=<?php echo $_smarty_tpl->tpl_vars['taxon']->value->getId();?>
"> <?php echo $_smarty_tpl->tpl_vars['taxon']->value->generateScientificName(true,true);?>
 </a></li>
                            <?php }?>
                        <?php } ?>
                    </ul>
                </div>
                <?php if (count($_smarty_tpl->tpl_vars['taxa_left']->value)==0&&count($_smarty_tpl->tpl_vars['taxa_right']->value==0)){?>
                    <div>No data</div>
                <?php }?>
                <br />
                <div class="cwrchecklist-citation auto">
                    <h2 class="blue" >CWR Inventory Citation</h2>
                    Vincent, H. et al. (2013) <a href="http://linkinghub.elsevier.com/retrieve/pii/S0006320713002851" target="_blank"> A prioritized crop wild relative inventory to help underpin global food security.</a> <em>Biological Conservation</em> 167: 265–275. 
                </div>
            </div>
        </div>

    </div>
</div><?php }} ?>
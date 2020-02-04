<?php
/* Smarty version 3.1.33, created on 2019-10-07 03:49:33
  from '/Users/razib/Documents/valet/business-suite/apps/app/views/xhr_project_details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9aee0d89d6d1_81989669',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ba7f37c294a39372192590795427c17043b707a' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/app/views/xhr_project_details.tpl',
      1 => 1569342700,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9aee0d89d6d1_81989669 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-12">
                <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
storage/docs/<?php echo $_smarty_tpl->tpl_vars['project']->value->app_icon;?>
" style="max-width: 64px;">
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label>Version being submitted</label>
                    <input class="form-control" name="version">
                </div>
                <div class="form-group">
                    <label>Keywords (ENG)</label>
                    <textarea class="form-control" rows="4"></textarea>
                </div>

                <div class="form-group">
                    <label>Keywords (CHS)</label>
                    <textarea class="form-control" rows="4"></textarea>
                </div>

            </div>
        </div>
    </div>

    <div class="col-md-8">



        <div class="form-group">
            <label>App Description (ENG / OV)<sup>*</sup></label>
            <textarea class="form-control" rows="8" name="app_description_eng" disabled><?php echo $_smarty_tpl->tpl_vars['project']->value->app_description_eng;?>
</textarea>
        </div>

        <div class="form-group">
            <label>App Description (CHS)<sup>*</sup></label>
            <textarea class="form-control" rows="8" name="app_description_chs" disabled><?php echo $_smarty_tpl->tpl_vars['project']->value->app_description_chs;?>
</textarea>
        </div>

        <div class="form-group">
            <label>Version Release Notes (ENG)<sup>*</sup></label>
            <textarea class="form-control" rows="8" name="app_description_eng"></textarea>
        </div>

        <div class="form-group">
            <label>Version Release Notes (CHS)<sup>*</sup></label>
            <textarea class="form-control" rows="8" name="app_description_eng"></textarea>
        </div>

        <div class="form-group">
            <label>Document</label>
            <input type="file">
            <span class="help-block">Please upload APK, screenshots,
basic info for app verification prior to store
submission, and any updated power of attorney
documents (where previous PoA has expired).  </span>
        </div>



        <input type="hidden" name="app_icon" id="app_icon" value="">
        <input type="hidden" name="app_id" id="app_id" value="<?php echo $_smarty_tpl->tpl_vars['project']->value->uuid;?>
">


    </div>
</div>

<div class="form-group">
    <button class="btn btn-primary" id="btnSubmit" type="submit">Submit</button>
</div><?php }
}

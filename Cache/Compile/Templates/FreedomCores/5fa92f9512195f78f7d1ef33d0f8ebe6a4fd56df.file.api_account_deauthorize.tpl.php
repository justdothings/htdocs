<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-02 13:38:00
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/developer/api_account_deauthorize.tpl" */ ?>
<?php /*%%SmartyHeaderCode:208716937557500c88c814c1-93650810%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fa92f9512195f78f7d1ef33d0f8ebe6a4fd56df' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/developer/api_account_deauthorize.tpl',
      1 => 1464860660,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208716937557500c88c814c1-93650810',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57500c88c9d9c6_21451793',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57500c88c9d9c6_21451793')) {function content_57500c88c9d9c6_21451793($_smarty_tpl) {?><div id="accountdeauthorize_accordion" class="endpoint_accordion">
    <h3>
        <span class="method_type">GET</span>
        <span class="endpoint_name">ACCOUNT</span>
        <span class="method_uri">/API/ACCOUNT/DEAUTHORIZE/</span>
    </h3>
    <ul>
        <li class="method get">
            <form id="accountdeauthorize_submission_form" class="method_form" style="overflow: hidden; display: block;">
                <input name="dataName" id="dataName" type="hidden" value="accountdeauthorize">
                <input name="methodName" id="methodName" type="hidden" value="account">
                <input name="httpMethod" id="httpMethod" type="hidden" value="GET">
                <input name="methodUri" id="methodUri" type="hidden" value="/api/account/deauthorize/">
                <table class="method_table_parameters" style="margin: 10px;">
                    <thead style="text-align: left;">
                    <tr>
                        <th><?php echo $_smarty_tpl->getConfigVariable('Developer_Form_Parameter');?>
</th>
                        <th><?php echo $_smarty_tpl->getConfigVariable('Developer_Form_Value');?>
</th>
                        <th><?php echo $_smarty_tpl->getConfigVariable('Developer_Form_Description');?>
</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="type-pathReplace required ">
                        <td class="name">
                            :username
                        </td>
                        <td class="parameter">
                            <input type="text" name="params[:username]" id="username" class="input" placeholder="required" required>
                        </td>
                        <td class="description">
                            <p><?php echo $_smarty_tpl->getConfigVariable('Developer_Description_Username');?>
</p>
                        </td>
                    </tr>
                    <tr class="type-pathReplace required ">
                        <td class="name">
                            :password
                        </td>
                        <td class="parameter">
                            <input type="password" name="params[:password]" id="password" value="" class="input" placeholder="required" required>
                        </td>
                        <td class="description">
                            <p><?php echo $_smarty_tpl->getConfigVariable('Developer_Description_Password');?>
</p>
                        </td>
                    </tr>
                    <tr class="type-query  ">
                        <td class="name">
                            locale
                        </td>
                        <td class="parameter">
                            <select id="locale" class="input" name="params[locale]" placeholder="">
                                <option value="en_US" selected="selected">
                                    en_US
                                </option>
                                <option value="pt_BR">
                                    pt_BR
                                </option>
                                <option value="es_MX">
                                    es_MX
                                </option>
                                <option value="ru_RU">
                                    ru_RU
                                </option>
                            </select>
                        </td>
                        <td class="description">
                            <p><?php echo $_smarty_tpl->getConfigVariable('Developer_Data_Locale');?>
</p>
                        </td>
                    </tr>
                    <tr class="type-query  ">
                        <td class="name">
                            jsonp
                        </td>
                        <td class="parameter">
                            <input type="text" class="input" id="jsonp" name="params[jsonp]" value="" placeholder="">
                        </td>
                        <td class="description">
                            <p><?php echo $_smarty_tpl->getConfigVariable('Developer_Data_JSONP');?>
</p>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <button class="get-results" style="margin: 10px;" type="submit" onclick="return PerformJsonRequest($(this).parent('form'), 'account');"><?php echo $_smarty_tpl->getConfigVariable('Developer_Form_TryIt');?>
</button>
                <button class="clear-results" style="margin: 10px; display: none;" type="submit"><?php echo $_smarty_tpl->getConfigVariable('Developer_Form_Reset');?>
</button>

                <div class="request_result" id="accountdeauthorize_response">

                </div>
            </form>


        </li>
    </ul>
</div><?php }} ?>

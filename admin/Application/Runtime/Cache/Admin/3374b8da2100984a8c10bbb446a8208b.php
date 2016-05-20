<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>重庆火锅国际供应链股份有限公司 - <?php echo ($meta_titles); ?> </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="http://www.wap.com/Admin/Public/Css/general.css" rel="stylesheet" type="text/css" />
<link href="http://www.wap.com/Admin/Public/Css/main.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="http://www.wap.com/Admin/Public/Css/showpage.css" />
 
</head>
<body>
    
             
        <h1>
            <span class="action-span"><a href="<?php echo U('index');?>">想成为代理商</a></span>
            <span class="action-span1"><a href="<?php echo U('Agent/index');?>">重庆火锅国际供应链股份有限公司 管理中心</a></span>
            <span id="search_id" class="action-span1"> - <?php echo ($meta_title); ?> </span>
        </h1>
        <div style="clear:both"></div>
        <div class="main-div">
            <form method="post" action="<?php echo U();?>" enctype="multipart/form-data" >
                <table cellspacing="1" cellpadding="3" width="100%">
                    <tr>
                        <td class="label">姓名</td>
                        <td>
                            <input type="text" name="name" maxlength="60" value="<?php echo ($row["name"]); ?>" />
                            <span class="require-field">*</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="label">手机号</td>
                        <td>
                            <input type="text" name="tel" maxlength="60" value="<?php echo ($row["tel"]); ?>" />
                            <span class="require-field">*</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="label">邮箱</td>
                        <td>
                            <input type="text" name="email" maxlength="60" value="<?php echo ($row["email"]); ?>" />
                            <span class="require-field">*</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="label">留言</td>
                        <td>
                            <textarea  name="intro" cols="60" rows="4"  ><?php echo ($row["intro"]); ?></textarea>
                        </td>
                    </tr>
                   
                    <tr>
                        <td colspan="2" align="center"><br />
                            <input type="hidden" name='id' value="<?php echo ($row["id"]); ?>" />
                            <input type="submit" class="button" value=" 确定 " />
                            <input type="reset" class="button" value=" 重置 " />
                        </td>
                    </tr>
                </table>
            </form>
        </div>

             
              
                 <div id="footer">
            版权所有 &copy; 2015-2016 ，重庆火锅国际供应链股份有限公司,并保留所有权利。</div>
                </body>
              </html>
            
    </body>
</html>

    <script type="text/javascript" src="http://www.wap.com/Admin/Public/Js/jquery.min.js"></script>
    <script type='text/javascript'>
        $(function(){
            $(':input[name=status]').val([<?php echo ((isset($row["status"]) && ($row["status"] !== ""))?($row["status"]):1); ?>]);
            $(':input[name=is_help]').val([<?php echo ((isset($row["is_help"]) && ($row["is_help"] !== ""))?($row["is_help"]):1); ?>]);
        });
    </script>
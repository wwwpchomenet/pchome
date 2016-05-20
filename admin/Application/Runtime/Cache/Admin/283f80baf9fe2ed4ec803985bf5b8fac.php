<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>重庆火锅国际供应链股份有限公司 - <?php echo ($meta_titles); ?> </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="http://www.wap.com/Admin/Public/Css/general.css" rel="stylesheet" type="text/css" />
<link href="http://www.wap.com/Admin/Public/Css/main.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="http://www.wap.com/Admin/Public/Css/showpage.css" />
 
    <link rel="stylesheet" type="text/css" href="http://www.wap.com/Admin/Public/Css/page.css" />

</head>
<body>
    
             
    <h1>
        <span class="action-span"><a href="<?php echo U('add');?>">添加我想成为代理商</a></span>
        <span class="action-span1"><a href="<?php echo U('Index/main');?>">重庆火锅国际供应链股份有限公司 管理中心</a></span>
        <span id="search_id" class="action-span1"> - <?php echo ($meta_title); ?> </span>
    </h1>
    <div style="clear:both"></div>
    <div class="form-div">
        <form action="<?php echo U('');?>" name="searchForm">
            <img src="http://www.wap.com/Admin/Public/Images/icon_search.gif" width="26" height="22" border="0" alt="search" />
            <input type="text" name="keyword" size="15" value="<?php echo I('keyword');?>"/>
            <input type="submit" value=" 搜索 " class="button" />
        </form>
    </div>
    <form method="post" action="" name="listForm">
        <div class="list-div" id="listDiv">
            <table cellpadding="3" cellspacing="1">
                <tr>
                    <th>姓名</th>
                    <th>电话</th>
                    <th>邮箱</th>
                    <th>留言</th>
                    <th>操作</th>
                </tr>
                <?php if(is_array($rows)): foreach($rows as $key=>$row): ?><tr>
                        <td class="first-cell"><?php echo ($row["name"]); ?></td>
                        <td align="center"><?php echo ($row["tel"]); ?></td>
                        <td align="center"><?php echo ($row["email"]); ?></td>
                        <td align="center"><?php echo ($row["intro"]); ?></td>
                        
                        <td align="center">
                            <a href="<?php echo U('edit',array('id'=>$row['id']));?>" title="编辑">编辑</a> |
                            <a href="<?php echo U('delete',array('id'=>$row['id']));?>" title="编辑">移除</a> 
                        </td>
                    </tr><?php endforeach; endif; ?>
                <tr>
                    <td align="right" nowrap="true" colspan="6">
                        <div class='page'>
                            <?php echo ($page_html); ?>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </form>

             
              
                 <div id="footer">
            版权所有 &copy; 2015-2016 ，重庆火锅国际供应链股份有限公司,并保留所有权利。</div>
                </body>
              </html>
            
    </body>
</html>
<?php
require 'php-excel.class.php';

$conn=mysql_connect(localhost,root,123456);
mysql_select_db("zhchsh") or die(mysql_error());
mysql_query("set names gbk");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK">
<title>�����ڵ�������excel��</title>
</head>
<body>
   <form id="form91" name="form91" method="post" action="ok.php"> 
   <table width="900" border="1"  height="40" align="center"> <tr>
      <td width="200" > ��ѡ��Ҫ��������ʼʱ��:</td> 
       <td width="95">   <select name="s_t" id="s_t">     
      <?php
	  //date('Y-m-d',strtotime($row->addtime))  date('Y-m-d',strtotime(addtime))
         $sq0=mysql_query("select distinct(date_format(time,'%Y-%m-%d')) as st from  list order by id desc ");//�󶨲��ظ���¼
	     $b=mysql_fetch_object($sq0);
		 do
		  {
			  echo "<option value='$b->st'>$b->st</option><br/>";
		  }while($b=mysql_fetch_object($sq0)) ;
         ?>     
     </select>
    </td>     
    <td width="183" align="center"><font size="2">������Ҫ�����Ľ�ֹʱ�䣺</font></td> 
       <td width="109"> <select name="l_t" id="l_t">       
       <?php
	  //date('Y-m-d',strtotime($row->addtime))  date('Y-m-d',strtotime(addtime))
         $sql0=mysql_query("select distinct(date_format(time,'%Y-%m-%d')) as lt from  list order by id desc ");//�󶨲��ظ���¼
	     $bb=mysql_fetch_object($sql0);
		  do
		  {
			  echo "<option value='$bb->lt'>$bb->lt</option><br/>";
		  }while($bb=mysql_fetch_object($sql0)) ;
         ?>          
     </select></td>
       <td width="181" align="right"><input name="sub" type="submit"  id="button" value="������ʱ�䷶Χ��¼��excel" /></td>
	   	   </tr>
   </table>  
 </form>
</body>
</html>


<?
	/****************************************************************/
	/* Name	: Mall													*/
	/* File	: product_list.php										*/
	/* Use	: ��ǰ�� �����ϴ� ������	 							*/
	/****************************************************************/

	// �ʿ��� ������ ����ִ� config.php�� include ��Ų��.
	include "../include/session.php";
    include "../include/dbConnect.php";

	// Mysql Server�� �����Ѵ�.
	$conn = mysql_pconnect( $set_host, $set_user, $set_password );
	mysql_select_db( $set_dbname );

	// ������ �Ķ���͸� �����Ѵ�.
	$pro_category = $HTTP_GET_VARS[category];
	if ( isset( $HTTP_GET_VARS[start] ) )
		$pro_start = $HTTP_GET_VARS[start];
	else
		$pro_start = 0;

	// ī�װ� ������ �о�´�.
	$category_query = "select * from category where id=$pro_category";
	$category_res = mysql_query( $category_query );
	$category = mysql_fetch_array( $category_res );

	// ���� ī�װ� ��ũ
	$level = $category[level]; // �ش� ī�װ��� ������ �ν��Ѵ�.
	$upper = $category[upper];
	$upper_link = " <a href='product_list.php?category=".$category[id]."'>".$category[name]."</a> >";
	for ( $i = 0; $i < $level; $i++ ){
		$upper_query = "select id, name, upper from category where id=$upper";
		$upper_res = mysql_query( $upper_query );
		$upper_data = mysql_fetch_array( $upper_res );
		$upper_link = " <a href='product_list.php?category=".$upper_data[0]."'>".$upper_data[1]."</a> >".$upper_link;
		$upper = $upper_data[upper];
	}


	// ���� ī�װ� ��ũ
	if ( $level < 5 ) {
		$sub_query = " select id, name from category where level = '$level' + 1 and upper='$pro_category'";
		$sub_res = mysql_query ( $sub_query );
		$sub_rows = mysql_num_rows ( $sub_res );
		if ( $sub_rows > 0 ) {
			for ( $i = 1; $i <= $sub_rows; $i++ ){
				$sub = mysql_fetch_array ( $sub_res );
				$tr .= "<tr>
	<td width='15' class='text'>&nbsp;</td>
	<td width='150' class='text'> <a href='product_list.php?category=".$sub[id]."'>".$sub[name]."</a></td>
</tr>\n";
			}
			$sub_link = "<table border='0' cellspacing='5' cellpadding='5'>\n $tr </table>\n"; 
		}
	}
	else 
		$sub_link = "&nbsp;";

	// ��ǰ������ �о�´�.
	$query = " select id, name, maker, small, price2, number, category1, category2, category3, category4, category5, level from product where on_use = 'on' and ( category1='$pro_category' or category2 = '$pro_category' or category3='$pro_category' or category4='$pro_category' or category5='$pro_category' ) order by id asc limit $pro_start, $set_product_num";
	$res = mysql_query( $query );
	$rows = mysql_num_rows( $res );

	// ��ǰ��� ���
	if ( $rows > 0 ) {
		for ( $k = 0; $k < $rows; $k++ ){
			$info = mysql_fetch_array( $res );
			$product = "		<td>
			<table width='80' border='0' cellspacing='0' cellpadding='0' height='64'>
                 <tr> 
                    <td>
						<a href='product_info.php?id=$info[id]'><img src='images/small/".StripSlashes( $info[small] )."' width='76' border='0'></a>
					</td>
                 </tr>
				 <tr>
					<td>
						".StripSlashes( $info[name] )."
					</td>
				</tr>
			</table>
		</td>
";
		// ��ǰ�� �ٴ� ��°����� ���� <tr>�� �ٿ��ش�.
			if ( ( ($k % $set_product_num_rows) == 0 ) and ($k > 1 ) ) {
				$product_row .="	<tr>\n ".$product."	</tr>\n";
				$product = "";
			}
		}
		// <td>�� ������ ��ǰ�� �ٴ� ��°����� ���� ������� �̸� �����ش�.
		if ( ( $k % $set_product_num_rows ) > 0 )
			$product_row .="	<tr>\n ".$product."			<td colspan=".($set_product_num_rows - ( $k % $set_product_num_rows ) )."> &nbsp;</td>
	</tr>\n";
	}
	else
		$product_row = "	<tr height='200'>
		<td> ��ǰ�� �����ϴ�. </td>
	</tr>
";

	// �������� ����Ѵ�.
	echo "<html>
<head>
	<title> ��ǰ ��� </title>
</head>
<style>
	td.top { background-color:#4444aa; font-size:9pt; color:white; text-align:left; font-weight:bold; }
	td.text { background-color:#111188; font-size:9pt; color:white; text-align:left; text-indent:10}
	td { background-color:#F9F9FF; font-size:9pt; text-align:left;}
	a:active ,a:link ,a:visited	{ font-size:9pt; color:white; text-decoration:none; font-weight:bold; }
	a.sub:active ,a.sub:link, a.sub:visited	{ font-size:9pt; color:white; text-decoration:none; font-weight:bold;}
	p, br, body, td, select, input, form, textarea, option{font: 9pt gulim, ����; color: 333366;}
	.2daybox{border: 1 solid black; background-color: white; border-color: 333366;}
	.2daybutton{ font-size:9pt; border-left:1px solid; border-right:1px solid; border-bottom:1px solid; border-top:1px solid }
</style>
<body>
<table border='0' cellpadding='3' cellspacing='1' align='center' width='550' bgcolor='black'>
<tr>
	<td class='top'>
$upper_link
	</td>
</tr>
<tr height='20'>
	<td>
$sub_link
	</td>
</tr>
<tr>
	<td>
		<table border='0' cellpadding='3' cellspacing='0'>
$product_row
		</table>
	</td>
</tr>
</table>
</body>
</html>";

	
?>

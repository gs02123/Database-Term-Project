<?
	/****************************************************************/
	/* Name	: Mall													*/
	/* File	: config.php											*/
	/* Use	: Configuration  										*/
	/****************************************************************/

	//  ��ǰ �̹����� �ش� ���θ� ���丮�� ������ ���� ������ ����Ǹ� ������ ���丮�� 
	// �ܺλ������ ���� ������ �־�� �Ѵ�.
	// images/big : (ū�׸�)
	// images/small : (�����׸�) 

	// Mysql���� ����
	$set_host 	= "localhost";	// Mysql Server�� Host
	$set_user 	= "root";	// Mysql�� �����ϱ� ���� User ID
	$set_password 	= "ksy1127";		// Mysql Server�� �����ϱ� ���� ��ȣ
	$set_dbname 	= "myProject";		// �Խ����� ���̺��� �����ϴ� DB �̸�

	// ������ ����
	$set_admin_ID = "admin";
	$set_admin_pass = "1111";

	// ������ �α����� ���� ����
	session_start();
	
	// ���θ� ���� ����
	$set_product_num = "12";		// �������� ��ǰ ��� ����
	$set_product_num_rows = "4";		// �ٴ� ��ǰ ��� ����
	$set_sub_link_num = "5";		// �ٴ� ������ũ ��� ����

	// �ͽ��÷η��� ĳ���� ���� �������� �ٲ� ������ ���� �ʴ� ���� ���� ���� ���
	header ("Cache-Control: no-cache, must-revalidate");
	header ("Pragma: no-cache");

	// �α��� üũ �Լ�
	function auth(){
		if ( session_is_registered("userID") )
			return 1;
		else
			return 0;
	}


?>

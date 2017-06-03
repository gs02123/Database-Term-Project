<?
	/****************************************************************/
	/* Name	: Mall													*/
	/* File	: config.php											*/
	/* Use	: Configuration  										*/
	/****************************************************************/

	//  상품 이미지는 해당 쇼핑몰 디렉토리에 다음과 같은 구조로 저장되며 각각의 디렉토리는 
	// 외부사용자의 쓰기 권한이 있어야 한다.
	// images/big : (큰그림)
	// images/small : (작은그림) 

	// Mysql관련 설정
	$set_host 	= "localhost";	// Mysql Server의 Host
	$set_user 	= "root";	// Mysql에 접속하기 위한 User ID
	$set_password 	= "ksy1127";		// Mysql Server에 접속하기 위한 암호
	$set_dbname 	= "myProject";		// 게시판의 테이블이 존재하는 DB 이름

	// 관리자 설정
	$set_admin_ID = "admin";
	$set_admin_pass = "1111";

	// 관리자 로그인을 위한 세션
	session_start();
	
	// 쇼핑몰 관련 설정
	$set_product_num = "12";		// 페이지당 상품 출력 갯수
	$set_product_num_rows = "4";		// 줄당 상품 출력 갯수
	$set_sub_link_num = "5";		// 줄당 하위링크 출력 갯수

	// 익스플로러에 캐쉬가 남아 페이지가 바뀌어도 갱신이 되지 않는 것을 막기 위한 헤더
	header ("Cache-Control: no-cache, must-revalidate");
	header ("Pragma: no-cache");

	// 로그인 체크 함수
	function auth(){
		if ( session_is_registered("userID") )
			return 1;
		else
			return 0;
	}


?>

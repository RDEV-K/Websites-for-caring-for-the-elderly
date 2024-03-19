<?php
		$pageNum = 1;
		if(isset($_REQUEST['p']))
		{
			$pageNum = $_REQUEST['p'];
			settype($pageNum, 'integer');
		}
		if($pageNum==""){
			$pageNum=1;
		}
		$offset = ($pageNum - 1) * $recordsPerPage;
		$numrows=@mysql_num_rows($result_get);
		$maxPage = ceil($numrows/$recordsPerPage);
		$nav = '';
		for($page1 = 1; $page1 <= $maxPage; $page1++)
		{
			if ($page1 == $pageNum){
			//$nav .= "&nbsp;$page1&nbsp;";

				}

			else{
				//$nav .= "&nbsp;&nbsp;<a style=\"color:#000000\" href=\"#\" onClick=\"res_page($page1);\">$page1</a>&nbsp;";
				}
		}
			if ($pageNum > 1){
				
				$page1 = $pageNum - 1;

				$prev = "&nbsp;&nbsp;<a style=\"color:#000000\" href=\"$link_nam$page1\"><img src=\"images/back_btn.gif\" width=\"49\" height=\"14\" alt=\"\" border=\"0\" style=\"color:#000000; cursor:pointer;\"></a>&nbsp;&nbsp;";

				//$first = "&nbsp;&nbsp;<a style=\"color:#000000\"href=\"#\" onClick=\"res_page(1);\">First</a>&nbsp;";
				}
			else{

				$prev  = "&nbsp;&nbsp;<img src=\"images/back_btn.gif\" width=\"49\" height=\"14\" alt=\"\" border=\"0\" style=\"color:#000000; \" >&nbsp;&nbsp;";
			//$first = '<strong>   </strong>';
				}	

			if ($pageNum < $maxPage){
				$page1 = $pageNum + 1;

				$next = "&nbsp;&nbsp;<a style=\"color:#000000\"  href=\"$link_nam$page1\"><img src=\"images/next_btn.gif\"  width=\"46\" height=\"14\" alt=\"\" border=\"0\" style=\"color:#000000; cursor:pointer;\"></a>&nbsp;&nbsp;";

				//$last = "&nbsp;&nbsp;<a style=\"color:#000000\" href=\"#\" onClick=\"res_page($maxPage);\">Last</a>";
			}else{

				$next = "&nbsp;&nbsp;<img src=\"images/next_btn.gif\" width=\"46\" height=\"14\" alt=\"\" border=\"0\" style=\"color:#000000; \" >&nbsp;&nbsp;";
				}

			//$last = '<strong>  </strong>';
			 $sql_get =$sql_get." limit $offset,$recordsPerPage";
			$result_get=mysql_query($sql_get)or die("Could not get data ".mysql_error());
			$num1=@mysql_num_rows($result_get);
			if($_REQUEST['p']==1){$num=1;}else if($_REQUEST['p']>1){$num=($recordsPerPage*($_REQUEST['p']))-4;}else{$num=1;}
	?>		
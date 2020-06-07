<?php

	$pagenumber=10;



	$total_page=ceil($totalCnt/$pageSize);
	$total_block=ceil($total_page/$pagenumber);
	$block=ceil(($pageNum+1)/$pagenumber);

	$first_page=($block-1)*$pagenumber;
	$last_page=$block*$pagenumber;

	$prev=$first_page;
	$next=$last_page+1;
	$go_page=$first_page+1;



	//echo($pageNum);

	if($total_block<=$block)
		$last_page=$total_page;


	if($totalCnt>0){
		echo("<div class='paging'>");

		if($block>1){
			echo("
				 <span class='prev'>
				 <a href='javascript:page_go(1);'><img src='../../images/btn_first.gif' alt='처음' /></a><a href=javascript:page_go($prev);> <img src='../../images/btn_prev.gif' alt='이전' /> </a>
				 </span>
			");
		}else{
			echo("
				 <span class='prev'>
				 <a href='javascript:page_go(1);'><img src='../../images/btn_first.gif' alt='처음' /></a><a href='#'><img src='../../images/btn_prev.gif' alt='이전' /></a>
				 </span>
			");
		}
		for($go_page;$go_page<=$last_page;$go_page++){
			if($pageNum==$go_page)
				echo("<a href=javascript:page_go($go_page);  class='on'>$go_page</a>");
			else
				echo("<a href=javascript:page_go($go_page);>$go_page</a>");

		}

		if($block<$total_block){
			echo("
				 <span class='next'>
				 <a href=javascript:page_go($next);> <img src='../../images/btn_next.gif' alt='다음' /> </a><a href='javascript:page_go($total_page);'> <img src='../../images/btn_end.gif' alt='마지막' /> </a>
				 </span>
				");
		}else{
			echo("
				 <span class='next'>
				 <a href='#'><img src='../../images/btn_next.gif' alt='다음' /></a><a href='javascript:page_go($total_page);'> <img src='../../images/btn_end.gif' alt='마지막' /> </a>
				 </span>
				");

		}
		echo("</div>");
	}
?>

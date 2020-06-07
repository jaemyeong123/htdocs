<table class="list_board3">
                <colgroup>
                    <col width="10%"/>
                    <col width="*"/>
					<col width="10%"/>
					<col width="50%"/>
                </colgroup>
<?php
	$x=0;
	foreach($listReply as $row){
	  ?>
		<tr>
			<td class="lt lPad20">작성자</td>
			<td class="lt last">
				<?=$row->RGST_ID?>
			</td>
			<td class="lt lPad20">작성일</td>
			<td class="lt last">
				<?=$row->RGST_DT?>
			</td>
		</tr> 
		<tr>
			<td class="lt lPad20">
            <a href="javascript:modifyReply('<?=$row->COMMON_REPLY_SEQ?>');" class="btn02 sPad">수정</a>
            <a href="javascript:removeReply('<?=$row->COMMON_REPLY_SEQ?>');" class="btn04 sPad">삭제</a>
            </td>
			<td class="lt last"  colspan="3">
				<textarea name="reply_<?=$row->COMMON_REPLY_SEQ?>" id="reply_<?=$row->COMMON_REPLY_SEQ?>" style='width:100%;height:150px;' class='textarea'><?=$row->CONTENT?></textarea>
					
			</td> 
		</tr>  

		<?php
		$x++;
	}
		?>
 </table>		

<div class="table-responsive">

  <div class="row table_title">
    <div class="col-lg-6"> &nbsp;<i class="fa fa-check" aria-hidden="true"></i> &nbsp;검색결과 : <strong><?=$result_list_count?></strong> 건</div>
    <div class="col-lg-6 text-right"> &nbsp;  <a class="btn btn-denger" href="javascript:void(0)" onclick="default_select_del()">선택삭제</a> <a class="btn btn-success" href="/<?=mapping('notice')?>/notice_reg">등록</a></div>
  </div>

  <form name="form_default" id="form_default" method="post">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th width="50"><input type="checkbox" onclick="chk_box(this.checked)"></th>
          <th width="50">No</th>
          <th width="*">제목</th>
          <th width="150">조회수</th>
          <th width="100">상태</th>
          <th width="150">날짜</th>
        </tr>
      </thead>
      <tbody>

        <?php
          if(!empty($result_list)){
            foreach($result_list as $row){
        ?>

          <tr>
            <td>
              <input type="checkbox"  name="checkbox" value="<?=$row->notice_idx?>">
            </td>
            <td>
              <?=$no--?>
            </td>
            <td class="text-left">
              <a href="/<?=mapping('notice')?>/notice_detail?notice_idx=<?=$row->notice_idx?>"><?=$row->title?></a>
            </td>
            <td>
              <?=number_format($row->view_cnt)?>
            </td>
            <td>
              <?php if($row->notice_state == "N"){ ?>
                <label class="switch">
                  <input type="checkbox" onchange="notice_state_mod_up(<?=$row->notice_idx?>, 'Y');">
                  <span class="check_slider"></span>
                </label>
              <?php }else if($row->notice_state == "Y"){ ?>
                <label class="switch">
                  <input type="checkbox" onchange="notice_state_mod_up(<?=$row->notice_idx?>, 'N');" checked>
                  <span class="check_slider"></span>
                </label>
              <?php } ?>
            </td>
            <td>
              <?=$row->ins_date?>
            </td>
          </tr>

        <?php
            }
          }else{
        ?>
        <tr>
          <td colspan="15">
            <?=no_contents('0')?>
          </td>
        </tr>
        <?php } ?>

      </tbody>
    </table>
  </form>

	<?=$paging?>


</div>

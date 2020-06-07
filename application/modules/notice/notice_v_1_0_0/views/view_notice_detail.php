<!-- container-fluid : s -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="page-header">
    <h1>공지사항 관리</h1>
  </div>

  <!-- body : s -->
  <div class="bg_wh mt20">
    <div class="table-responsive">
      <section>
        <form name="form_default" id="form_default" method="post">
          <table class="table table-bordered td_left">
            <colgroup>
            	<col style="width:15%">
            	<col style="width:35%">
            	<col style="width:15%">
            	<col style="width:35%">
            </colgroup>
            <tbody>

              <tr>
                <th><span class="text-danger">*</span> 제목</th>
                <td colspan="3">
                  <input class="form-control" type="text" name="title" id="title" value="<?=$result->title?>">
                </td>
              </tr>

              <tr>
                <th><span class="text-danger">*</span> 내용</th>
                <td colspan="3">
                  <textarea name="contents" id="contents" style="width:100%; height:100px;"placeholder="내용" class="input_default"><?=$result->contents?></textarea>
                </td>
              </tr>

              <tr>
                <th>
                  이미지
                  <input type="button" class="btn btn-xs btn-default" value="파일업로드" onclick="file_upload_click('img','image','1','150');" style="margin-bottom:10px">
                </th>
                <td colspan="3">
                  <div>
                    <ul class="img_hz" id="img">
                      <?php if($result->img != ""){ ?>
                        <li id="id_file_img_0" style="display:inline-block;">
                          <img src="/images/btn_del.gif" style="width:15px "onclick="file_upload_remove('img_0')"/><br>
                          <img src="<?=$result->img?>" style="width:150px">
                          <input type="hidden" name="img_path[]" id="img_path[]" value="<?=$result->img?>"/>
                        </li>
                      <?php } ?>
                    </ul>
                  </div>
                </td>
              </tr>

              <tr>
                <th>활성화</th>
                <td colspan="3">
                  <?php if($result->notice_state == "N"){ ?>
                    <label class="switch">
                      <input type="checkbox" onchange="notice_state_mod_up(<?=$result->notice_idx?>, 'Y');">
                      <span class="check_slider"></span>
                    </label>
                  <?php }else if($result->notice_state == "Y"){ ?>
                    <label class="switch">
                      <input type="checkbox" onchange="notice_state_mod_up(<?=$result->notice_idx?>, 'N');" checked>
                      <span class="check_slider"></span>
                    </label>
                  <?php } ?>
                </td>
              </tr>

            </tbody>
          </table>
          <input type="hidden" name="notice_idx" id="notice_idx" value="<?=$result->notice_idx?>">
        </form>
      </section>

      <div class="text-right" style="float:right;">
        <a class="btn btn-gray" href="/<?=mapping('notice')?>/notice_list">목록</a>
        <a class="btn btn-danger" href="javascript:void(0)" onClick="notice_del('<?=$result->notice_idx?>')">삭제</a>
        <a class="btn btn-info" href="javascript:void(0)" onclick="default_mod('<?=$result->notice_idx?>')">수정</a>
      </div>

    </div>
  </div>
  <!-- body : e -->
</div>
<!-- container-fluid : e -->
<script>


  // 공지사항 수정
  function default_mod() {

    $.ajax({
      url      : "/<?=mapping('notice')?>/notice_mod_up",
      type     : 'POST',
      dataType : 'json',
      async    : true,
      data     : $("#form_default").serialize(),
      success : function(result) {
        if(result.code == '-1') {
          alert(result.code_msg);
        }else {
          alert("공지사항이 수정되었습니다.");
          location.href = '/<?=mapping('notice')?>/notice_list';
        }
      }
    });
  }

  // 공지사항 상태 수정
  function notice_state_mod_up(notice_idx, notice_state){

    var formData = {
      "notice_idx" : notice_idx,
      "notice_state" : notice_state
    };

    $.ajax({
      url      : "/<?=mapping('notice')?>/notice_state_mod_up",
      type     : 'POST',
      dataType : 'json',
      async    : true,
      data     : formData,
      success: function(result){
        if(result.code == "-1"){
          alert(result.code_msg);
        }
      }
    });
  }

  function notice_del(notice_idx){

    if(!confirm("공지사항을 삭제하시겠습니까?")){
      return;
    }

    $.ajax({
      url      : "/<?=mapping('notice')?>/notice_del",
      type     : 'POST',
      dataType : 'json',
      async    : true,
      data     : {
        "notice_idx" : notice_idx
      },
      success: function(result) {
        if(result.code == '-1') {
          alert(result.code_msg);
        }else{
          alert(result.code_msg);
          location.href = '/<?=mapping('notice')?>/notice_list';
        }
      }
    });
  }
</script>

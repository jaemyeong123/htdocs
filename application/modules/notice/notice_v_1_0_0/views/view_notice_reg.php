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
                <th> <span class="text-danger">*</span> 제목</th>
                <td colspan="3">
                  <input name="title" id="title" type="text" class="form-control" style="width:500px">
                </td>
              </tr>

              <tr>
                <th><span class="text-danger">*</span> 내용</th>
                <td colspan="3">
                  <textarea name="contents" id="contents" style="width:100%; height:100px;" placeholder="내용" class="input_default"></textarea>
                </td>
              </tr>

              <tr>
                <th>
                  이미지
                  <input type="button" class="btn btn-xs btn-default" value="파일업로드" onclick="file_upload_click('img','image','1','150');" style="margin-bottom:10px">
                </th>
                <td colspan="3">
                  <div class="view_img mg_btm_20">
                    <ul class="img_hz" id="img"></ul>
                  </div>
                </td>
              </tr>

            </tbody>
          </table>
        </form>
      </section>

      <div class="row">
        <div class="col-lg-12 text-right">
          <a href="/<?=mapping('notice')?>" class="btn btn-gray">취소</a>
          <a href="javascript:void(0)" onclick="default_reg();" class="btn btn-success">등록</a>
        </div>
      </div>

    </div>
  </div>
  <!-- body : e -->

</div>
<script>
  function default_reg(){

    $.ajax({
      url      : "/<?=mapping('notice')?>/notice_reg_in",
      type     : 'POST',
      dataType : 'json',
      async    : true,
      data     : $("#form_default").serialize(),
      success: function(result){
        if(result.code == '-1'){
          alert(result.code_msg);
          $("#"+result.focus_id).focus();
          return;
        }
        // 0:실패 1:성공
        if(result.code == 0) {
          alert("등록 실패!");
        } else {
          alert("등록 성공!");
          location.href ='/<?=mapping('notice')?>/notice_list';
        }
      }
    });
  }

</script>

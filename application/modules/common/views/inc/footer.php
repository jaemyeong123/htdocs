<script>
//상단카테고리
function new_alarm_count(){
  var form_data = {
  };

  $.ajax({
    url      : "/<?=mapping('alarm')?>/new_alarm_count",
    type     : "POST",
    dataType : "json",
    async    : true,
    data     : form_data,
    success  : function(result) {
      //alert(result.code);
      if(result.code == "1") {
        if(result.new_alarm_count>0){
          $('#span_new_alarm').css("display","block");
        }else{
          $('#span_new_alarm').css("display","none");
        }

      }

    }
  });
}
new_alarm_count();
</script>

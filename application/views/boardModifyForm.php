
<html>
    <head>
        <!-- 문서 제목 -->
        <title>php 게시판</title>

        <!-- 링크  -->
        <link href="reset.css" type="text/css" rel="stylesheet">

        <!-- 스타일 -->
        <style>
            * {box-sizing:border-box;}
        </style>

        <!-- 스크립트 -->
        <script>
        </script>
    </head>
    <body>
        <!-- header 영역 -->
        <div class="header" style="height:200px;border-bottom:1px solid #E6E6E6;"></div>

        <!-- contents 영역 -->
        <div class="contents" style="height:800px;width:1600px;">
            <!-- 좌측 contents -->
            <div class="left-content" style="float:left;box-sizing:border-box;height:800px;width:400px;">
                <!-- 좌측 content wrapper -->
                <div class="content-wrapper" style="box-shadow: 5px 15px 30px 0.5px #E6E6E6;margin-left: 20px;margin-top: 50px;box-sizing:border-box;height:400px;width:350;"></div>
            </div>

            <!-- 우측 contents -->
            <div class="right-content" style="float:left;box-sizing:border-box;height:800px;width:1200px;">

                <!-- 우측 content wrapper -->
                <div class="content-wrapper" style="box-shadow: 5px 15px 30px 0.5px #E6E6E6;margin-left: 25px;box-sizing:border-box;height:600px;width:1100px;">
                    <!-- 리스트 wrapper -->
                    <div class="content-list" style="margin-left: 50px;margin-top: 50px;box-sizing:border-box;height:600px;width:1000px;">

                        <!-- 게시판 이름 -->
                        <div style="font-size:1.7em;font-weight:bold;line-height:100px;height:100px;width:1000px;margin-bottom: 10px;box-sizing:border-box;border-bottom:2px solid #E6E6E6;">게시글 작성</div>

                        <!-- 게시글 작성 form -->
                        <form action="boardModify" method="post" style="width:100%;height:100%;">
                            <input type="hidden" name="board_id" value="<?=$boardRow->board_id ?>">
                            <div style="width:800px;height:100px;margin-left:50px;">
                                <div style="font-size:1.3em;text-align:center;line-height:100px;float:left;width:200px;height:100px;">제목</div>
                                <input type="text" name="title" value="<?=$boardRow->title?>" style="font-size:1.3em;float:left;width:600px;height:60px;margin:20px 0;"></input>
                            </div>
                            <div style="font-size:1.3em;width:800px;height:250px;margin-left:50px;">
                                <div style="text-align:center;line-height:250px;float:left;width:200px;height:250px;">내용</div>
                                <textarea name="content" style="font-size:1.3em;float:left;width:600px;height:250px;"><?=$boardRow->content?></textarea>
                            </div>
                            <div style="width:800px;height:100px;margin-left:50px;display:flex;align-items:center;justify-content:center;">
                                <input type="submit" value="수정완료" style="font-size:1.3em;padding:auto 0;width:160px;height:50px;border:0;outline: 0;border-radius:5px;background-color:#0B3861;color:#FFFFFF;">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer 영역 -->
        <div class="footer" style="height:300px;background-color:#585858;"></div>

    </body>
</html>

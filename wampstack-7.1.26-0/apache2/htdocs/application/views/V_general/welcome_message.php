
  <div class="top">

    <h1><a href="/admin/contents"><span>X</span> speaking 관리자</a></h1>
    <div class="menu-left">
    <li><input type="button" value="컨텐츠" onclick="location.href='./contents'"></li>
    <li><input type="button" class="menu-left-button" value="클래스"  onclick="location.href='./class_web'"></li>
      <li><input type="button"  value="회원관리"  onclick="location.href='./member'"></li>
    </div>

    <div class="menu-right">
      <li class="menu-right-text">홍성빈 님</li>
      <div class="menu-right-button">
      <li><input type="button" class="menu-right-memberupdate"value="회원수정"></li>
      <li><input type="button" class="menu-right-logout" onclick="location.href='/admin'" value="로그아웃"></li>
    </div>
</div>
  </div>
  <div class="bottom-all">

    <div class="left">


      <li>
        <span class="bold1"><a href="#">모두 반</a></span>
        <ul>
      <?php
      foreach($get_db_class_list as $value){
      ?>
          <li><a href="#"><?=$value->c_name?></a></li>
      <?php
       }
      ?>

        </ul>
      </li>


      <form action=""><input type="submit" name="cuntents" value="컨텐츠 관리"></form>
    </div>


    <div class="body-all">
      <div class="right-box">
        <div class="top-button">
          <div class="check-box-div">
            <input class="check-box" type="checkbox" name="checkAll"></div>
            <div class="right-box-top-button">
          <div class="top-button-form">
            <input class="insert" type="submit" name="insert" value="추가">
            </div>
          <div class="top-button-form">
            <input class="update" type="submit" name="update" value="수정">
            </div>
          <div class="top-button-form">
            <input class="delete" type="submit" name="delete" value="삭제">
            </div>
    </div>
          <div class="search-box">
            <form class="search-box-form" method="get">
              <input type="text" id="search-box-input" placeholder="  검 색">
              <button id="search-box-button">&#128269;</button>
            </form>

          </div>

        </div>
        <table>
          <tr class="top-tr">
            <th>선택</th>
            <th>NO</th>
            <th>Class이름</th>
            <th>레벨</th>
            <th>진행 과제</th>
            <th>회원수</th>
            <th>등록일</th>
            <th>등록한ID</th>
            <th></th>
          </tr>
            <?php
            $index2=0;
            foreach($get_db_class_contents_list as $value2){
              $index2++;
            
            
            ?>
          <tr class="bottom-tr">
            <td><input class="checkbox2" type="checkbox" name="checkbox2" /></td>
            <td><?=$value2->cl_cl_no?></td>
            <td><?=$value2->cl_name?></td>
            <td><?=$value2->lv_name?></td>
            <td><?=$value2->ct_name?></td>
            <td>22222</td>
            <td><?=$value2->cl_time?></td>
            <td>김태환</td>
            <td class="bottom-tr-td-button">
              <input class="down-update" type="submit" name="" value="수정">
              <input class="down-delete" type="submit" name="" value="삭제">
            </td>
          </tr>
            <?php
            
            }
            ?>
        </table>

        <div class="bottom-bar">

        </div>
        <div class="class-add">
            <div class="class-head"><span>추가</span></div>
            <div class="class-body">
            <div class="class-box">
              <span>class 이름:</span>
               <hr>
               <form action="" method="GET"><input class="long-text" type="text" placeholder="이름을 입력하세요"></form>
              </div>
            <div class="class-box">
              <span>진행 과제:</span>
               <hr>
               <form action=""><select name="" id="">
                 <option>Xspeaking All New basic Book</option>
                </select></form>
              </div>
            </div>
              <div class="class-button"><input class="class-left-btn" type="submit" value="추가" >
                <input class="class-right-btn" type="button" value="취소"></div>
          </div>
      </div>

     <div class="class-add-1">
            <div class="class-head"><span>삭 제</span></div>
            <div class="class-body">
            <div class="class-box">
              <span>정말 삭제 하시겠습니까?</span>
               </div>
              <div class="class-button"><input class="class-left-btn" type="submit" value="삭제" >
                <input class="class-right-btn" type="button" value="취소"></div>
          </div>
    
      </div>

    </div>


<script>
    $('.insert').on("click",function(){
    $('.class-add').css("display","inline");
    $('.class-head span').text('추가');
    $('.class-head').css('background','#caa717');
    $('.class-left-btn').css('background','#caa717');
    })
    
        $('.class-right-btn').on("click",function(){
    $('.class-add').css("display","none");
    })
    
    $('.update').on("click",function(){
    $('.class-add').css("display","inline");
    $('.class-head span').text('수정');
    $('.class-head').css('background','#7ab5f9');
    $('.class-left-btn').css('background','#7ab5f9');
    $('.class-left-btn').value('수정');
    })
    
        $('.class-right-btn').on("click",function(){
    $('.class-add').css("display","none");
    })

    $('.delete').on("click",function(){
    $('.class-add-1').css("display","inline");
    $('.class-head span').text('삭제');
    $('.class-head').css('background','#dbdbdb');
    $('.class-left-btn').css('background','#dbdbdb');
    })
    
        $('.class-right-btn').on("click",function(){
    $('.class-add-1').css("display","none");
    })
    
    function checkAll(){
      if($(".check-box").is(:checked)){
        $("input[name=checkbox2]").prop("checked",true);
      }
      else{
        $("input[name=checkbox2]").prop("checked",false);
      }
    }
</script>
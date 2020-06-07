<div class="mt60"></div>
<footer>
  <ul>
    <li class="<?php if($this->uri->segment(1)==null || $this->uri->segment(1)==mapping("main")) echo "active";?>"><a href="/<?=mapping('main')?>">
      <span><img src="/images/menu_1.png"></span>
      홈</a></li>
    <li class="<?php if($this->uri->segment(1)==mapping("counsel")) echo "active";?>"><a href="/<?=mapping('counsel')?>">
      <span><img src="/images/menu_2.png"></span>
      일반상담</a></li>
    <li class="<?php if($this->uri->segment(1)==mapping("dutch_auction_consult")) echo "active";?>"><a href="/<?=mapping('dutch_auction_consult')?>">
      <span><img src="/images/menu_3.png"></span>
      역경매상담</a></li>
    <li class="<?php if($this->uri->segment(1)==mapping("point")) echo "active";?>"><a href="/<?=mapping('point')?>">
      <span><img src="/images/menu_4.png"></span>
      적립금</a></li>
    <li class="<?php if($this->uri->segment(1)==mapping("mypage")) echo "active";?>"><a href="/<?=mapping('mypage')?>">
      <span><img src="/images/menu_5.png"></span>
      마이페이지</a></li>
  </ul>
</footer>

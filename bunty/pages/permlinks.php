<?php
function links($link){
$link=implode("",explode("'",$link));
	  $link=implode("",explode('"',$link));
	  $link=implode("",explode('&',$link));
	  $link=implode("",explode(':',$link));
	  $link=implode("",explode('`',$link));
	  $link=implode("",explode('#',$link));
	  $link=implode("",explode('$',$link));
	  $link=implode("",explode('(',$link));
	  $link=implode("",explode(')',$link));
	  $link=implode("",explode('=',$link));
	  $link=implode("",explode('+',$link));
	  $link=implode("",explode(';',$link));
	  $link=implode("",explode('/',$link));
	  $link=implode("",explode('?',$link));
	  $link=implode("",explode('.',$link));
	  $link=implode("",explode(',',$link));
	  $link=implode("",explode('<',$link));
	  $link=implode("",explode('>',$link));
	  $link=implode("",explode('{',$link));
	  $link=implode("",explode('}',$link));
	  $link=implode("",explode('[',$link));
	  $link=implode("",explode(']',$link));
	  $link=implode("",explode('|',$link));
	  $link=strtolower(implode("-",explode(' ',$link)));
	  return $link;
}
?>
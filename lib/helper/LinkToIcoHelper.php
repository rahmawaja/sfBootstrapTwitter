<?php

function link_to_ico($text, $route, $ico, $isTwitter = false){
      if($isTwitter){
            return "<a href='".url_for($route)."' rel='tooltip' data-original-title='$text'><i class='$ico'></i></a>";
      }else{
            return "<a href='".url_for($route)."' rel='tooltip' data-original-title='$text'><span class='ui-icon $ico'></span></a>";
      }
}

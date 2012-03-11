<?php 
function link_to_ico($text, $route, $ico, $param = array()){
      $param = array_merge(array("rel" => "tooltip", "data-original-title" => $text), $param);
      $isTwitter = substr($ico, 0, 2) == "ui" ? false : true;

      $icon = $isTwitter ? "<i class='$ico'></i>" : "<span class='ui-icon $ico'></span>";

      return link_to($icon, $route, $param);
}
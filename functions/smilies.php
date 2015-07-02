<?php
/**
 * Output smilies for comment form
 *
 * @return unknown_type
 */
function philnaCommentSmilies(){
  global $wpsmiliestrans;
  $path = get_template_directory_uri().'/images/smilies/';
  $output = '';
  $smilies = array_unique($wpsmiliestrans);
  $startimg = '<a id="smiliebtn" href="javascript:void(0);"><img src="'.$path.'33.gif'.'" alt="" title="'.__('Add a smiley?', YHL).'"/></a>';
  foreach ($smilies as $title=>$smilies){
    $output .= '<a title=" '.$title.' " href="#" rel="nofollow"><img src="'.$path.$smilies.'" alt=""/></a>';
  }
  $output = '<div id="smiles" class="hide"><div id="smiles_list" class="clearfix">'.$output.'</div></div>'."\n";

  echo $startimg,$output;
}

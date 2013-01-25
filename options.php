<?
/*
    Browser detection configuration
    Listed in array. Just add , "browser kind" => "address to go to"
*/
//                           browser   => "http://webaddress.here"
$browserRedirectList = array(
                              "webOS"      => "",
                              "iPhone"     => "",
                              "iPad"       => "",
                              "iPod"       => "",
                              "Android"    => "",
                              "KindleFire" => "",
                              "OTHER"      => ""); 
                              
// overrides: if not in the above list, default to OTHER
if (!$browserRedirectList[$Browser]) {
   $Browser = "OTHER";
}
?>
?>
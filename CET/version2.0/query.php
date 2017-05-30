<?
function cet($name,$id){
  $name = urlencode(mb_convert_encoding($name, 'GB2312', 'utf-8'));
  $post = 'id=' . $id . '&name=' . $name;
  $url = "http://cet.99sushe.com/getscore";
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_REFERER, "http://cet.99sushe.com/");
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_NOBODY, false);
  $str = curl_exec($ch);
  curl_close($ch);
  $str = iconv("GB2312", "UTF-8", $str);
  if (strlen($str) < 10) {
      return false;
  }
  return explode(',', $str);
}
?>

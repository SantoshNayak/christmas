<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<?php

$rand = rand(1,10);

if($rand == 1)
{
$img = "img/0.jpg";
$name = "Hawas ka pujari.. yeh tere liye santa k taraf se..";
}
if($rand == 2)
{
$img = "img/1.jpeg";
$name = "Special Tea for you from santa.. ;-)";
}
if($rand == 3)
{
$img = "img/2.jpg";
$name = "Jaa simran jaa munh dho k aa..fir gift lena";
}
if($rand == 4)
{
$img = "img/3.jpg";
$name = "Khayega na.. khas tere liye hai";
}
if($rand == 5)
{
$img = "img/4.jpg";
$name = "Ho jaye 2 peg!! khas tere liye";
}
if($rand == 6)
{
$img = "img/5.jpg";
$name = "kuch mitha ho jaye";
}
if($rand == 7)
{
$img = "img/6.jpg";
$name = "khas tumhare liye ";
}
if($rand == 8)
{
$img = "img/7.jpg";
$name = "khas tumhare liye";
}
if($rand == 9)
{
$img = "img/8.jpg";
$name = "Have a loveful life ahead";
}
if($rand == 10)
{
$img = "img/9.jpg";
$name = "This new home is for you";
}
if($rand == 11)
{
$img = "img/9.jpg";
$name = "This new home is for you";
}


echo ' <head>
  <link rel="stylesheet" href="style.css" media="all,handheld">
  <title>'.$name.'</title>
  <meta name="keywords" content="eidi,eid,eidulfitar">
  <meta name="description" content="'.$name.'">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="og:image" content="'.$_SERVER['HTTP_HOST'].'/'.$img.'">
 </head>';
 
 echo ' <body>
 <div>

 <h2 >What Santa has for you on this christmas</h2>
 <center>'.$name.'</center>
  
  
  <br>
 <img src="'.$img.'" alt="'.$img.'" title="'.$img.'" />
  <br>
<center><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Wish friend below -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-7962001766479415"
     data-ad-slot="5484066750"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></center>
 
 </div>
</body>';



?>
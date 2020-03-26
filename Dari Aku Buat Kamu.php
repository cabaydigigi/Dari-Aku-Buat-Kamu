<?php

date_default_timezone_set("Asia/Jakarta");

$b = time();
$hour = date("G",$b);

if ($hour>=0 && $hour<=11)
{
echo "Selamat Pagi Gemeysh :)";
}
elseif ($hour >=12 && $hour<=14)
{
echo "Selamat Siang Gemeysh :) ";
}
elseif ($hour >=15 && $hour<=17)
{
echo "Selamat Sore Gemeysh :) ";
}
elseif ($hour >=17 && $hour<=18)
{
echo "Selamat Petang Gemeysh :) ";
}
elseif ($hour >=19 && $hour<=23)
{
echo "Selamat Malam Gemeysh :) ";
}
elseif ($hour >=22 && $hour<=24)
{
echo "Jangan Bergadang Udah Malam";	
}

?>
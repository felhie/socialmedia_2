
<?php
function time_stamp($session_time) 
{ 
 
$time_difference = time() - $session_time ; 
$seconds = $time_difference ; 
$minutes = round($time_difference / 60 );
$hours = round($time_difference / 3600 ); 
$days = round($time_difference / 86400 ); 
$weeks = round($time_difference / 604800 ); 
$months = round($time_difference / 2419200 ); 
$years = round($time_difference / 29030400 ); 

if($seconds <= 60)
{
echo"$seconds detik yang lalu"; 
}
else if($minutes <=60)
{
   if($minutes==1)
   {
     echo"Satu menit yang lalu"; 
    }
   else
   {
   echo"$minutes menit yang lalu"; 
   }
}
else if($hours <=24)
{
   if($hours==1)
   {
   echo"Satu jam yang lalu";
   }
  else
  {
  echo"$hours jam yang lalu";
  }
}
else if($days <=7)
{
  if($days==1)
   {
   echo"Satu hari yang lalu";
   }
  else
  {
  echo"$days hari yang lalu";
  }


  
}
else if($weeks <=4)
{
  if($weeks==1)
   {
   echo"Satu minggu yang lalu";
   }
  else
  {
  echo"$weeks minggu yang lalu";
  }
 }
else if($months <=12)
{
   if($months==1)
   {
   echo"Satu bulan lalu";
   }
  else
  {
  echo"$months bulan lalu";
  }
 
   
}

else
{
if($years==1)
   {
   echo"Satu tahun lalu";
   }
  else
  {
  echo"$years tahun lalu";
  }


}
 


} 



?>
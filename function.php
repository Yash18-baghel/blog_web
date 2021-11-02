<?php
date_default_timezone_set('Asia/Kolkata'); 

    function ptime($time){
        $f_time=strtotime($time);
        $to_time = strtotime(date("Y-m-d H:i:s"));
            echo "<br>";    
        $t=ceil(round(abs($to_time - $f_time) / 60,2));
        if ($t>60)
        {
            $h=ceil($t/60);
            if($h>24){
                $d=ceil($h/24);
                if($d>7){
                    return (string)$time."";
                }
                else{
                    return (string)$d." days ago";
                }
            }
            else{
                return (string)$h." hours ago";
            }
        }
        else
        {
            return (string)$t." minutes ago";

        }
    }
?>
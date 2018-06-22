<?php
  $fromYear = 2018; 
  $thisYear = (int)date('Y'); 
  echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');
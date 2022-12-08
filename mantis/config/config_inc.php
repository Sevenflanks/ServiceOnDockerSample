<?php
$g_hostname               = 'mysql';
$g_db_type                = 'mysqli';
$g_database_name          = 'mantis';
$g_db_username            = 'user';
$g_db_password            = 'mysql_pass';

$g_default_timezone       = 'Asia/Taipei';

$g_crypto_master_salt     = 'IzO8mDDWGGls/uT/jOgXTd0rcD7t48i2Fibp71jr0xM=';

$g_status_enum_string = '10:new,20:feedback,30:acknowledged,40:confirmed,50:assigned,75:alpha,80:resolved,90:closed';
$g_status_colors = array(
    'new'           => '#fcbdbd', // red    (scarlet red #ef2929)
    'feedback'      => '#e3b7eb', // purple (plum        #75507b)
    'acknowledged'  => '#ffcd85', // orange (orango      #f57900)
    'confirmed'     => '#fff494', // yellow (butter      #fce94f)
    'assigned'      => '#c2dfff', // blue   (sky blue    #729fcf)
    'resolved'      => '#ceffce', // green  (chameleon   #8ae234)
    'alpha'         => '#ccff80', // green  (chameleon   #8ae234)
    'closed'        => '#c9ccc4'); // grey  (aluminum    #babdb6)
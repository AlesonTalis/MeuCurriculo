<?php

// tables:

// user_details
// id int 11 primary ai nn
// user_id int 11 unique nn
// key varchar 32 nn
// value text
// active int 1 
$sql_table_user_details = 'CREATE TABLE `user_details` (`id` int(11) NOT NULL, `user_id` int(11) NOT NULL, `name` varchar(32) NOT NULL, `value` text NOT NULL, `active` tinyint(1) NOT NULL DEFAULT 1) ENGINE=InnoDB DEFAULT CHARSET=utf8;';

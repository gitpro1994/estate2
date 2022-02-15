<?php 
   $generatedKey = hash("sha512",sha1(mt_rand(10000,99999).'-'.time().'-'.admin_info(has_userdata('loggedin_id'),'email')));
   echo strtoupper($generatedKey);
?>
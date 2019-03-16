<?php 

 SELECT b.id,
 b.name
 as category_name, GROUP_CONCAT(a.name) as categories
 from products a
 left join categories b on a.category_id = b.id
 group by b.id


 ?>
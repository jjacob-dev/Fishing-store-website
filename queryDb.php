<?php

   class MyDB extends SQLite3
   {
      function __construct()
      {
            $this->open('products.db');
      }
   }  
   
   function getProducts($searchTerm = null) {
      
      $db = new MyDB();
      if(!$db){
         echo '<script type="text/javascript">alert("'.$db->lastErrorMsg().'");</script>';
      } else {
         //echo "Opened database successfully\n";
      }

      if(!$searchTerm) {
         $sql ='SELECT * from products;';
      } else {
         $sql ='SELECT * FROM products WHERE product_id LIKE "'.$searchTerm.'" OR product_name LIKE "'.$searchTerm.'" OR product_desc LIKE "'.$searchTerm.'" OR product_rating LIKE "'.$searchTerm.'" OR product_price LIKE "'.$searchTerm.'"';
      }
      $ret = $db->query($sql);
      $array = [];
      if(!$ret){
        echo $db->lastErrorMsg();
        return [];
      } else {
         while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
            $array[] = $row;
         }
         $db->close();
         return $array;
      }
   }
   
   function addProduct($pname, $man, $desc, $price) {
      
      $db = new MyDB();
      if(!$db){
         echo '<script type="text/javascript">alert("'.$db->lastErrorMsg().'");</script>';
      } else {
         //echo "Opened database successfully\n";
      }

      $sql ='INSERT INTO products (product_id, product_name, product_desc, product_rating, product_price) VALUES ("'.$pid.'", "'.$pname.'", "'.$pdesc.'", "'.$prating.'", "'.$pprice.'");';
      $db->query($sql);
   }   
?>
<!DOCTYPE html>
<html>
<head>

<?php

include 'ind.php';
?>

<style>
    body {
    font-size: 16px;
    background: pink;
    font-family: "Segoe UI", "Helvetica Neue", Arial, sans-serif;
    background-image:url('co.jpg');
    background-repeat: no-repeat;
    background-size: cover;
}
h2 {
    text-align: center;
    color:mintcream;
    font-weight: "bold";
   }

h3 {
    text-align: center;
    color:navy;
    font-weight: "bold"; 
   }

div.gallery {
  margin: 10px;
  border: 1px solid #ccc;
  float: left;
  width: 300px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width:300px;
  height:350px;
}

div.desc {
  padding: 15px;
  text-align: center;
}


</style>
</head>
<body>


<h2>Welocme to E-Books website</h2>
<h3>Download Mtech branch books for free</h3>
<div class="gallery">
  
<a href="mtech/m1.pdf">
    <img alt="" src="mtech/m1.jpg">
  </a>
  
</div>

<div class="gallery">
   
<a href="mtech/m2.pdf">
    <img alt="" src="mtech/m2.jpg">
  </a>
  
</div>

<div class="gallery">
  <a href="mtech/m3.pdf">
    <img alt="" src="mtech/m3.jpg">
  </a>

</div>


<div class="gallery">
  <a href="mtech/m4.pdf">
    <img alt="" src="mtech/m4.jpg">
  </a>

</div>




</body>
</html>

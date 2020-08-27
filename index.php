<?php
  









//array
//  $superhero = array("iron man ","spiderman","thor");
//  //foreach ($superhero as $hero) {
//  	//echo "$hero <br>";

// //assosiate arrays
// $emdata = array("product"=>"shivam" , 2=>"abhi" );

// echo $emdata["product"];
 	
// //foreach ($emdata as $em =>$value) {
// 	echo " Key :".$em."-".$value."<br>";
// 	# code...
// }


//multidimensional

// $emdata = 
// array
// (

// 	array("shivam","iitg"),
// 	array(23,6,),
// 	array("000000000000","3465347462389")
// );



// $length = count($emdata);
// echo $length;
// for ($i=0; $i <$length ; $i++) {
// 	for ($j=0; $j <$length-1 ; $j++) { 
// 		echo $emdata[$i][$j]."<br>";
// 	}

	# code...



    // $id= array("shivam","abhi","vimal","datta");

    // foreach ($id as $fn ) {

    // 	echo "$fn<br>";
    // }  

session_start();
if ($_SESSION['user_email']=="abhi@gmail.com"&& $_SESSION['password']== "shivam98"   )
{
	echo "welcome".$_SESSION['user_email'];
}
else{
	echo " please log in ";
}


?>









 
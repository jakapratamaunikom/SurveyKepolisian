<?php
include("connection/connect.php");



$query_surveyor = mysqli_query($connect,"
 SELECT t_responden.`id_responden`,t_surveyor.`id_surveyor`, t_responden.`nama` from t_responden,t_surveyor 
 where t_responden.`id_surveyor` = t_surveyor.`id_surveyor`
                  ");


while($data=mysqli_fetch_array($query_surveyor)){
	echo $data['id_surveyor']."<br>";
	echo $data['nama']."<br>";
}

?>
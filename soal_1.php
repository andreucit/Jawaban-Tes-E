<?php 

		function Datadiri() {
	$school = ["highSchool" => "SMA Antartika Sidoarjo", "university" => "Universitas Muhammadiyah Sidoarjo"];

    $tes = ["nama" => "Andre Wahyu Dwi Darmawan",
	"address" => "Gelam gang kelurahan, Kec.Candi, Kab.Sidoarjo",
	"hobbies" => ["Futsal","Mendaki"],
	"is_married" => false,
	"school" => array_keys($school),
	"skills" => ["web1"=>"PHP","web2"=>"HTML"]];
	$response = json_encode($tes);
	return $response;
}

echo Datadiri();



 ?>


<?php
	# define Presizing arrays for site.
	$config['mode'] = array(1=>'Sale',2=>'Rent');
	$config['type'] = array(1=>'Individual House',2=>'Flat/Apartment',3=>'Office/Commercial',4=>'Duplex',5=>'Service Appartments');
	$config['lease_type'] = array(1=>'Company Lease',2=>'Personal Lease',3=>'Any');
	$config['hold'] = array(1=>'Free Hold',2=>'Lease Hold');
	$config['parking'] = array(1=>'Inside',2=>'Outside');
	$config['furnished'] = array(1=>'Fully Furnished',2=>'Semi Furnished',3=>'Not Furnished');
	$config['kitchen'] = array(1=>'Fully Equipped',2=>'Semi Equipped');
	$config['floor'] = array(1=>'Basement',2=>'Ground Floor',3=>'First Floor',4=>'Second Floor',5=>'Third Floor');
	$config['bedroom'] = array(1=>1,2=>2,3=>3,4=>4,5=>5,6=>'Above 5');
	$config['property_measurement'] = array(1=>'sq yard',2=>'sq feet',3=>'sq meter');
	for($i=30000;$i<250000;$i=$i+20000){
		$config['price_range'][$i."_".($i+20000)] = "Rs.".$i." - "."Rs.".($i+20000);
	}
	for($i=250000;$i<500000;$i=$i+50000){
		$config['price_range'][$i."_".($i+50000)] = "Rs.".$i." - "."Rs.".($i+50000);
	}
	$config['price_range']['500000'] = "Above "."Rs. 500000"
	
?>
<?php
    // $xml_str = file_get_contents('http://localhost/web-technologies/xml/index.php');
    $xml_str = file_get_contents('student.xml');
    $xml = new SimpleXMLElement($xml_str);
    $name = $xml->full_name;
    $age = $xml->age;
    $college = $xml->college;
    $contact_number = $xml->contact_number;
    $tole = $xml->address->tole;
    $ward = $xml->address->ward;
    $district = $xml->address->district;
    $province = $xml->address->province;
    $country = $xml->address->country;
    $occupation = $xml->occupation;

    echo "<h1>The name of the student is <i><u>$name</i></u>.
     His age is <i><u>$age</i></u>. Call me at $contact_number<br /> He studied at <i><u>$college</i></u>. <br>
    He lives at <i><u>$tole - $ward, $district, $province, $country</i></u> <br> His is a <i><u>$occupation</i></u>.</h1>";
?>
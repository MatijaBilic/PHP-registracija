<?php
	if(isset($_POST['ok'])){
		//$xml = new DOMDocument("1.0","UTF-8");
						
		$ImePrezime = $_POST['ime'];
		$Spol = $_POST['spol'];
		$Godina = $_POST['godina'];
		$Mobitel = $_POST['mobitel'];
		$Drzava = $_POST['drzava'];
		$Email = $_POST['email'];
		$FIDE = $_POST['fide'];
		$Titula = $_POST['titula'];
		$Napomena = $_POST['napomena'];
		
		$xml = simplexml_load_file('registracija.xml');
		//$rootTag = $xml->getElementsByTagName("Registracije")->item(0);
		
		$RegistracijaTag = $xml->addChild("Registracija");
			$ImePrezimeTag = $RegistracijaTag->addChild("ImePrezime", $ImePrezime);
			$SpolTag = $RegistracijaTag->addChild("Spol", $Spol);
			$GodinaRodenjaTag = $RegistracijaTag->addChild("GodinaRodenja", $Godina);
			$MobitelTag = $RegistracijaTag->addChild("Mobitel", $Mobitel);
			$DrzavaTag = $RegistracijaTag->addChild("Drzava", $Drzava);
			$EmailTag = $RegistracijaTag->addChild("Email", $Email);
			$FIDETag = $RegistracijaTag->addChild("FIDE", $FIDE);
			$TitulaTag = $RegistracijaTag->addChild("Titula", $Titula);
			$NapomenaTag = $RegistracijaTag->addChild("Napomena", $Napomena);
			
		$dom = new DOMDocument('1.0','utf-8');
		$dom->preserveWhiteSpace = false;
		$dom->formatOutput = true;
		$dom->loadXML($xml->asXML());
		$dom->saveXML();
		$dom->save('registracija.xml');
	}
	
  	?>
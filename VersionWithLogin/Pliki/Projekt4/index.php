<?php
        require("../../skrypt.php");
        require("../../guzik.php");
$xmlstr = <<<XML
<?xml version="1.0"?>
<?xml-stylesheet type="text/xsl" href="testowy.xslt"?>
<Dane xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
<Faktura>
	<Indeks>112</Indeks>
	<Numer>1410</Numer>
	<Miejscowosc>Warszawa</Miejscowosc>
	<DataWystawienia>2020-12-12</DataWystawienia>
	<DataSprzedazy>2020-11-19</DataSprzedazy>
	<Sprzedawca>
		<Nazwa>Sprzedawcy Sp. z o.o.</Nazwa>
		<Adres>ul. Sprzedażowa 74</Adres>
	</Sprzedawca>
	<Nabywca>
		<Nazwa>Piotr Nowak</Nazwa>
		<Adres>ul. Nowakowa 11</Adres>
	</Nabywca>
	<Uslugi>
		<Usluga>
			<Nazwa>Usługa 1</Nazwa>
			<Cena>100</Cena>
			<VAT>23%</VAT>
			<Podatek>23</Podatek>
		</Usluga>
		<Usluga>
			<Nazwa>Usługa 2</Nazwa>
			<Cena>200</Cena>
			<VAT>23%</VAT>
			<Podatek>46</Podatek>
		</Usluga>
		<Usluga>
			<Nazwa>Usługa 3</Nazwa>
			<Cena>300</Cena>
			<VAT>23%</VAT>
			<Podatek>69</Podatek>
		</Usluga>
		<Usluga>
			<Nazwa>Usługa 4</Nazwa>
			<Cena>400</Cena>
			<VAT>23%</VAT>
			<Podatek>92</Podatek>
		</Usluga>
	</Uslugi>
	
</Faktura>
  
</Dane>
XML;
?>
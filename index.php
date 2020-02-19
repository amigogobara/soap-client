$soapClient = new SoapClient('https://api.tbotechnology.in/HotelAPI_V7/HotelService.svc?wsdl',['trace'=>1]);
$header = new SoapHeader('http://www.w3.org/2005/08/addressing','Action','>http://TekTravel/HotelBookingApi/CountryList');
$soapClient->__setLocation('https://api.tbotechnology.in/HotelAPI_V7/HotelService.svc');
$soapClient->CountryList();

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Compare Dates</title>
</head>
<body>
</body>
</html>
JavaScript Code :

var compare_dates = function(date1,date2){
     if (date1>date2) return ("Date1 > Date2");
   else if (date1<date2) return ("Date2 > Date1");
   else return ("Date1 = Date2"); 
  }

console.log(compare_dates(new Date('11/14/2013 00:00'), new Date('11/14/2013 00:00')));
console.log(compare_dates(new Date('11/14/2013 00:01'), new Date('11/14/2013 00:00')));
console.log(compare_dates(new Date('11/14/2013 00:00'), new Date('11/14/2013 00:01')));
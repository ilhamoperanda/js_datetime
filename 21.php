<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JavaScript function to get a full textual representation of the day of the week (Sunday through Saturday).</title>
</head>
<body>

</body>
</html>
JavaScript Code :

Date.longDays = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

function long_Days(dt)
    { 
      return Date.longDays[dt.getDay()]; 
    }

dt = new Date();
console.log(long_Days(dt));

dt = new Date(2015, 10, 1);
console.log(long_Days(dt));
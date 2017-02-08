<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JavaScript function to get ISO-8601 numeric representation of the day of the week (1 (for Monday) to 7 (for Sunday))</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function ISO_numeric_date(dt)
{
  return (dt.getDay() === 0 ? 7 : dt.getDay()); 
}

dt = new Date();
console.log(ISO_numeric_date(dt));

dt = new Date(2015, 10, 1);
console.log(ISO_numeric_date(dt));
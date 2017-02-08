<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JavaScript function to swatch Internet time (000 through 999)</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function internet_time(dt) 
{ 
  return Math.floor((((dt.getUTCHours() + 1) % 24) + dt.getUTCMinutes() / 60 + dt.getUTCSeconds() / 3600) * 1000 / 24);
}

dt = new Date(); 
console.log(internet_time(dt)); 

dt = new Date(1989, 10, 1); 
console.log(internet_time(dt));
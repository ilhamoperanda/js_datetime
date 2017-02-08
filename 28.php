<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JavaScript function to get a full numeric representation of a year (4 digits)</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function full_year(dt) 
{ 
  return dt.getFullYear(); 
}
dt = new Date(); 
console.log(full_year(dt)); 

dt = new Date(2015, 10, 1); 
console.log(full_year(dt));
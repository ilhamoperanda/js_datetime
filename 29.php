<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JavaScript function to get a two digit representation of a year</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function sort_year(dt) 
{ 
  return ('' + dt.getFullYear()).substr(2);
}

dt = new Date(); 
console.log(sort_year(dt)); 

dt = new Date(1989, 10, 1); 
console.log(sort_year(dt));
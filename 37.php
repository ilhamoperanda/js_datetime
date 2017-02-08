<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JavaScript function to get Timezone.</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function seconds_with_leading_zeros(dt) 
{ 
  return /\((.*)\)/.exec(new Date().toString())[1];
}

dt = new Date(); 
console.log(seconds_with_leading_zeros(dt)); 

dt = new Date(1989, 10, 1); 
console.log(seconds_with_leading_zeros(dt));
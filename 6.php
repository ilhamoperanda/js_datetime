<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Add minutes to a date object.</title>
</head>
<body>
</body>
</html>
JavaScript Code :

var add_minutes =  function (dt, minutes) {
    return new Date(dt.getTime() + minutes*60000);
}
console.log(add_minutes(new Date(2014,10,2), 30).toString());
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Search results !</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

	<link rel="stylesheet" type="text/css" href="css/util.css">

  <link rel="stylesheet" type="text/css" href="css/main.css">
  <style>
      #donter {
          font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
      }
      
      #donter td, #donter th {
          border: 1px solid #ddd;
          padding: 8px;
      }
      
      #donter tr:nth-child(even){background-color: #ddd;}
      #donter tr:nth-child(odd){background-color: #ddd;}
      
      #donter tr:hover {background-color: #ddd;}
      
      #donter th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color:red;
          color: white;
      }
      </style>
</head>
<body style="background-color:#eab8b4;">
    
  <h1>Search results </h1>
  @if ($donors->isEmpty())
  <h2 id = "donter">{{"no results found!"}}</h2>
  
  @else 
  <table id="donter">
    <tr>
      <th>Phonenumber</th>
      <th>Name</th>
      <th>Age</th>
      <th>City</th>
      <th>Blood Type</th>
    </tr>
    
        @foreach ($donors as $donor)
        <tr>
      <td>{{$donor->phonenumber}}</td>
      <td>{{$donor->name}}</td>
      <td>{{$donor->age}}</td>
      <td>{{$donor->city}}</td>
      <td>{{$donor->bloodtype}}</td>
    </tr>   
 @endforeach
 @endif 
   

</table>
<button id = "donter" onclick="goBack()">Home</button>

<script>
function goBack() {
    window.history.back();
}
</script>
</body>
</html>
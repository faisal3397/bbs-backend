<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Search results</title>
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
	
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50" style="width: 60% !important">
					<span class="login100-form-title p-b-33">
						Search Results 
					</span>
                    @if ($donors->isEmpty())
                        <h2 id = "donter">{{"No Results found!"}}</h2>
                        
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
                                            

					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn" onclick="goBack()">
							Home
						</button>
					</div>
					<br>
					@include('partials.errors')
			</div>
		</div>
	</div>
	

	

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

	<script src="vendor/animsition/js/animsition.min.js"></script>

	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

	<script src="vendor/select2/select2.min.js"></script>

	<script src="vendor/daterangepicker/moment.min.js"></script>
	
	<script src="vendor/daterangepicker/daterangepicker.js"></script>

	<script src="vendor/countdowntime/countdowntime.js"></script>

	<script src="js/main.js"></script>
    <script>
function goBack() {
    window.history.back();
}
</script>

</body>
</html>
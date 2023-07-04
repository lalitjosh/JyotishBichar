<!DOCTYPE html>
<html>
<head>
	<title>JyotishBichar</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<style type="text/css">
	.scheduleDate{
		display: grid;
		grid-template-rows: (1,1fr);
		grid-template-columns:(1,1fr);
		background-color: #0083ff;
		margin-left: 232px;
		margin-right: 210px;
		color: white;
     }
      
      .information {
      	display: grid;
      	grid-template-rows: (1,1fr);
		grid-template-columns:(1,1fr);
		background-color: #3a00ff;
		margin-top: 14px;
		margin-left: 462px;
		margin-right: 340px;
		color: white;

      }    
 
</style>
</head>
<body>
<br>	
<div class="scheduleDate"><p style="text-align: center;"><b>Your Scheduled Date is {{$schedule->ScheduleTime}}, Don't close the window Please keep it safe</b></p></div>
<div class="information"><p style="text-align: center;"><b>You cannot generate twice</b></p></div>



@if(session()->has('message'))

 {{session()->get('message')}}

  @endif
  
</body>
</html>
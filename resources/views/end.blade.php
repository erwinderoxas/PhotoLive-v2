<?php
    if($type == "gif"){
        $img = "gif/".$image;
    }else{
        $img = "merge/".$image;
    }
?>
<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Photolive</title>
    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/stylesss.css')}}" rel="stylesheet">
    <script src = "{{URL::asset('js/jquery-3.1.1.min.js')}}"></script>    
    <script src = "{{URL::asset('js/photolive.js')}}"></script>  

    <style type="text/css">
        .flex-center {
                    align-items: center;
                    display: flex;
                    justify-content: center;
                }

    </style>

</head>
<body>
<div class = "container-fluid">
    <div class = "row" style="margin-top: 150px">
        <div class = "col-md-10 col-md-offset-1">
           
           <div class = "row">
                <div class = "col-sm-12" style="margin-top: 30px">
                    <div >

                        <img src="{{URL::asset($img)}}"  class = " img-responsive  center-block">
                    </div>
                </div>
            </div>
            <div class = "row">
                <div class = "col-sm-12" style="margin-top: 40px">
                    <div >
                        <img src="{{URL::asset('images/shared.png')}}"  class = " img-responsive  center-block">
                    </div>
                </div>
            </div>
            <div class = "row">
                <div class = "col-sm-12" style="margin-top: 20px">
                    <div >
                        <img src="{{URL::asset('images/thank.png')}}"  class = " img-responsive  center-block">
                    </div>
                </div>
            </div>


        </div>
    </div>
    <div id = "text-center">
    <h1 id = "count"></h1>
    </div>
    <div id = "text-top">
    </div>
<nav aria-label="...">
    <ul class="pager">
      <li class="previous"><a href="/"><span aria-hidden="true">&larr;</span>Home</a></li>
      
    </ul>
  </nav>
</div>
<script>
var idleTime = 20, flag = 0;
$(document).ready(function () {
    //Increment the idle time counter every minute.
    var idleInterval = setInterval(timerIncrement, 1000); // 1 minute
    flag = 0;
    //Zero the idle timer on mouse movement.
    $(this).mousemove(function (e) {
        document.getElementById("count").innerHTML ="";
        document.getElementById("text-top").innerHTML = "";
        idleTime = 20;
        flag = 0;
    });
    $(this).keypress(function (e) {
        document.getElementById("count").innerHTML = "";
        document.getElementById("text-top").innerHTML = "";
        idleTime = 20;
        flag = 0;
    });

});

function timerIncrement() {
    if(flag==0){
        idleTime = idleTime - 1;    
    }
    
    if (idleTime <= 0) { // 20 seconds
        flag = 1;
        window.location.href = "/"
    }
    if (idleTime <=5){
        document.getElementById("count").innerHTML = idleTime;
        enlarge();

    }
    if (idleTime <=10 && idleTime>=6){
        document.getElementById("text-top").innerHTML = "**RETURNING HOME**";
    }
}

function enlarge(){
    $("h1").animate({"font-size":"80px"});
    original();
}
function original(){
    $("h1").animate({"font-size":"30px"});
}
</script>
</body>
</html>
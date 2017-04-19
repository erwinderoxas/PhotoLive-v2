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

<nav aria-label="...">
    <ul class="pager">
      <li class="previous"><a href="/"><span aria-hidden="true">&larr;</span>Home</a></li>
      
    </ul>
  </nav>
</div>

</body>
</html>
<!--- STYLE --->
<style>

    /*CONTAINER*/
    body{
        margin: 0px;
        color: #1a202c;
        text-align: left;
        background-color: #e2e8f0;
    }

    .contain{
        padding-left: 50px;
    }
    .container1 {
        background-color: #f5f5f5;
        width: 380px;
        height: 240px;
        float: left;
        margin-right: 20px;
        margin-bottom: 10px;
        border-radius: 8px;
        padding: 10px;
    }


    /*BUTTONS*/
    .button {
        border-radius: 4px;
        background-color: black;
        border: none;
        color: #51b2bb;
        padding: 10px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 13px;
        margin: 4px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
    }

    .button1 {
        background-color: black;
        color: white;
        border: 2px solid #51b2bb;
    }
    .button2 {
        background-color: white;
        color: black;
        border: 2px solid #51b2bb;
    }
    .button2:hover{
        background-color: #51b2bb;
        color:white;
    }

    .button1:hover {
        background-color: #51b2bb;
    }

    button3{
        background-color: black;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 24px;
    }
    /*ICONS*/
    .icons .fab{
        color: #51b2bb;
        margin: 0 13px;
        cursor: pointer;
        padding: 13px 0;
    }





</style>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


    <title>Thomann_shop</title>
</head>

<body>
<?php
include("header.php");
?>
<!---  TEXT   -->

<div class="row" style="margin-top: 50px">
    <div class="col"></div>
    <div class="col">
        <h4>
            Thank you for visiting Thomann,<br>
            where the decisions are made by the customer<br>
            and we hope, that your musical adventure starts with us.
        </h4>
    </div>
    <div class="col"></div>
</div><br>

<!---  MADE BY   -->
<div class="row">
    <div class="col">

    </div>
    <div class="col">
        <p>This website was made by Vihren [20108]</p>

        </div>
    <div class="col"></div>
</div> <br><br><br><br>

<!--  CONTACTS -->

<div class="row" >
    <h4 style="text-align: center">Our Contacts</h4>
    <div class="col"></div>
    <div class="col"><div class="card mb-4"  id="info">
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap" name="info">
                    <h6 class="mb-0">
                        Contacts:
                    </h6>
                    <span class="text-secondary">020 7946 0894</span>
                </li>

                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">
                        Office London:
                    </h6>
                    <span class="text-secondary">73 North Street</span>
                </li>

                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">
                        Office Los Angelis:
                    </h6>
                    <span class="text-secondary">680 E 47th St</span>
                </li>

                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">
                        Office Sofia:
                    </h6>
                    <span class="text-secondary">Georgi Peiachevich - 69th</span>
                </li>

                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">
                        Email:
                    </h6>
                    <span class="text-secondary">Thomann@gmail.com</span>
                </li>
            </ul>
        </div>

    </div>
    <div class="col"></div>
</div>
<!---    FOOTER --->
<?php
include("footer.php");
?>

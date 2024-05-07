<style type="text/css">body{
        margin-top:20px;
        color: #1a202c;
        text-align: left;
        background-color: #e2e8f0;
    }
    .main-body {
        padding: 15px;
    }
    .card {

        box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
    }

    .card {

        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid rgba(0,0,0,.125);
        border-radius: .25rem;
    }

    .card-body {
        border: 2px solid rgb(229,18,18);
        flex: 1 1 auto;
        min-height: 1px;
        padding: 1rem;
    }

    .gutters-sm {

        margin-right: -8px;
        margin-left: -8px;
    }

    .gutters-sm>, .gutters-sm> {

        padding-right: 8px;
        padding-left: 8px;
    }
    .mb-3{
        margin-bottom: 1rem!important;

    }
    .mb-4{
        margin-bottom: 1rem!important;

    }


</style>
<script type="text/javascript"></script>



<?php

$con = new PDO('mysql:host=localhost;dbname=myPrj','root',"");
$id = $_GET['id'];
$obj = $con->prepare( 'SELECT * FROM inventory WHERE id = ?' );
$obj->execute([$id]);
$itm = $obj->fetch();

?>

<!DOCTYPE html>

<html lang="en">
<head itemscope="" itemtype="http://schema.org/WebSite">
    <title itemprop="name"><?= $itm['model']  ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>


<body>

   <div id="snippetContent">
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>

       <div class="container">
           <div class="main-body">
               <nav aria-label="breadcrumb" class="main-breadcrumb">
                   <ol class="breadcrumb">
                       <li class="breadcrumb-item">
                           <a href="index.php">Home</a>
                       </li>
                   </ol>
               </nav>

               <div class="row gutters-sm">
                   <div class="col-md-4 mb-3">
                       <div class="card">
                           <div class="card-body">
                               <div class="d-flex flex-column align-items-center text-center">
                                <img src="images/<?= $itm['id'] ?>.jpg" alt="Admin"  width="150">
                                <div class="mt-3">
                                    <h4><?= $itm['model'] ?></h4>
                                </div>
                               </div>
                           </div>
                       </div>

                    <div class="card mt-3" >
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"  fill="currentColor" stroke="currentColor" stroke-width="2" class="feather feather-twitter mr-2 icon-inline text-info">
                                        <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                                    </svg>Twitter
                                </h6>
                                <span class="text-secondary">@technoshop</span>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger">
                                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                    </svg>Instagram
                                </h6>
                                <span class="text-secondary">technoshop</span>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary">
                                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                    </svg>Facebook
                                </h6>
                                <span class="text-secondary">technoshopbg</span>
                            </li>
                        </ul>
                    </div>
                   </div>




                <div class="col-md-8" >

                    <div class="card mb-3" >
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Model</h6>
                                </div>

                                <div class="col-sm-9 text-secondary"> <?= $itm['model'] ?></div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Energy Efficiency</h6>
                                </div>
                                <div class="col-sm-9 text-secondary"> <?= $itm['energy_eff'] ?> </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Price</h6>
                                </div>
                                <div class="col-sm-9 text-secondary"> <?= $itm['price'] ?> лв.</div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Color</h6>
                                </div>
                                <div class="col-sm-9 text-secondary"><?= $itm['color']?></div>
                            </div>
                            <div class="row" name="button">
                                <button style="margin-top: 20px; margin-left: 15px" type="button" id="more" class="btn btn-info" >More info about us </button>
                            </div>
                        </div>
                    </div>
                    <script>
                            $("#more").click(function(){
                                if($("#info").is(':visible')){
                                    $("#info").fadeOut("fast");
                                }
                                else{
                                    $("#info").fadeIn("fast");
                                }

                            });
                    </script>




                        <div class="card mb-4" style="display: none" id="info">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap" name="info">
                                    <h6 class="mb-0">
                                        Contacts:
                                    </h6>
                                    <span class="text-secondary">+359 98 617 9242</span>
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0">
                                        Office Lulin, Sofia:
                                    </h6>
                                    <span class="text-secondary">310th street - 322-a</span>
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0">
                                        Office Studentski grad, Sofia:
                                    </h6>
                                    <span class="text-secondary">Professor Atanas Ishirkov - 9th</span>
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0">
                                        Office Reduta, Sofia:
                                    </h6>
                                    <span class="text-secondary">Georgi Peiachevich - 69th</span>
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0">
                                       Email:
                                    </h6>
                                    <span class="text-secondary">technoshop@techno.com</span>
                                </li>
                            </ul>
                        </div>
                    </div>
</body>
</html>


<style>
    body{
        margin: 0px;
        color: #1a202c;
        text-align: left;
        background-color: #e2e8f0;
    }
    .container {
        background-color: #ffffff;
        width: 800px;
        height: 440px;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 10px;
        border: 2px solid rgb(229,18,18);
        border-radius: 8px;
        padding: 25px;
    }
    h1 {
        font-family: "Times New Roman", Times, serif;
        font-size: 200%;
    }
    .jumbotron-fluid
    {
        color: rgb(255, 255, 255);
        background-color:rgb(229,18,18);
        text-shadow: black 0.12em 0.12em 0.12em;
        margin: 0;
        margin-bottom: 0px;
        padding: 5px;
    }
</style>
<script type="text/javascript"></script>


<body>


<div class = jumbotron-fluid>
    <h1>Technoshop</h1>
    <h4 style="font-size:16px">The best electronics shop you can find</h4>
</div>
<div>


</div>
    <nav style="background: #bbb8b8; padding: 10px; margin-bottom: 10px" aria-label="breadcrumb" class="main-breadcrumb">
        <ol style="list-style: none " class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php" style="text-decoration: none; color: #007bff; font-size: 20px" >Home</a>
            </li>
        </ol>
    </nav>

<div class="container">
    <form action="index.php">

        <h2>Wizard</h2>
        <h4>We will help you to find the perfect home appliance</h4>

        What kind of appliance would you like: <br><br>
        <input type="text" name = "product"  placeholder="" autocomplete="off">
        <br><br>

        Place the number of people in the household: <br><br>
        <input type="number" name = "people"  placeholder="" autocomplete="off">
        <br><br>

        The size of the room, where the item is going to be placed: <br><br>
        <input type="number" name = "room"  placeholder="" autocomplete="off">

        <br><br>
        Place the budget limit: <br><br>
        <input type="number" name = "price"  placeholder="" autocomplete="off" >
        <br><br>
        <input type="submit" name="advisor" value="Confirm" >
    </form>

</div>
</body>








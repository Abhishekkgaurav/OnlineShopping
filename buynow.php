<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
    <?php
    include 'header.php';
    ?>
        <div style="background-color:#d3e1ed" class="container-fluid">
            <div class="row">
                <div class="col-sm-12" style="height:150px">
                </div>
                </div>
            <div class="row">
                <div class="col-sm-4">
                </div>
                <div class="col-sm-4">
                    <form method="Post" style="background-color: #47d7e5;border-radius: 9px">
                        <div style="margin-left: 90px">
                Pay Using:
                    <select name="n1" style="margin-top:15px">
                        <option>Pay On Delivery</option>
                        <option>UPI</option>
                        <option>Credit/Debit Card</option>
                    </select>
                        </div>
                    <input type="submit" name="n2" style="margin-left: 150px;margin-top: 40px;margin-bottom: 10px" class="btn btn-primary" value="Place Order"/> 
                </form>   
                </div>
                <div class="col-sm-4">
                    
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                </div>
                <div class="col-sm-4" style="padding-left:120px;font-weight:bold;color:#6293f9;font-size: 20px">
                   <?php
                        if(isset($_POST['n2']))
                        {
                            echo 'Ordered Successfully!!';
                            
                        }
                   ?>
                </div>
                <div class="col-sm-4">
                </div>
            </div>
             <div class="row">
                <div class="col-sm-12" style="height:150px">
                </div>
        </div>
    <?php
    include 'footer.php';
    ?>
    </body>
</html>



<!DOCTYPE html>
<html>

    <head>
        <title> books</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1"
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootsrap/3.3.7/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

            <!-- Custom stylesheet -->
            <link rel="stylesheet" href="style.css">

        <link rel="stylesheet" a href="css/bootstrap.css">
        <script src="js/bootstrap.js"></script>
        <style type="text/css">
            .box
            {
                box-shadow: 0 2px 5px 0 rgb(0,0,0,0.16), 0 2px 10px 0 rgb(0,0,0,0.12);
                position: relative;
                border-radius: 3px;
                background: #ffffff;
                border-top: 3px solid #6b8bca;
                margin-bottom: 20px;
                width: 100%;
            }



        </style>

    </head>

    <body>
        <div class="container text-center">
               <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i> Book Store</h1>
                <p>Regiter</p>

        </div>

        <div class="d-flex justify-content-center">
            <form action="index.php" method="POST">
                <div class="pt-2">

                     <div class="form-group">
                        <label for="name">Name :</label>
                        <input name="name" type="name" class="form-control" id="name"/>
                    </div>
                    <div class="form-group" style="padding-top: 2%">
                        </strong><label for="email">Email address:</label>
                        <input name="username" type="email" class="form-control" id="email"/>
                    </div>

                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input name="password" type="password" class="form-control" id="password"/>
                    </div>
                    <div align="center" class="form-group">
                        <input type="submit" class="btm btn-default" style="width: 50%;" value="Login" />
                    </div>
                    <div align = "center" class="form-group"><dr>
                        ------------------------------------- OR -----------------------------------------------------
                    </dr>
                    </div>
                    <div align="center" class="form-group">
                        <dr>
                        <img src="img/ge.png" style="width: 25%;" />
                    </dr>
                    </div>
                </div>
            </form>
        </div>

    </body>

</html>

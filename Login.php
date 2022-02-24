<?php 
session_start();
if(isset($_SESSION['username'])){
 header("location:home.php");
}else{


?>

<html>
    <head>

        <!-- Style Links -->

        <link rel="stylesheet" href="../CSSfiles/LoginStyle.css">

        <title>
            Login
        </title>

        <!-- Font links -->

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible&display=swap" rel="stylesheet">

    </head>
    <body>

        <div class="containerOne">

            <div class="containerIn">
                <div>
                    <img src="./img1.jpg">
                </div>
                <form action="../buisnessLogic/loginVerify.php" method="post">
                    <b>
                        Login for Users
                    </b>
                    <label>
                        Username
                    </label>
                    <input required max="40" min="5" name="username">
                    <label>
                        Password
                    </label>
                    <input  max="400" min="16" type="password" name="password"> 

                    <input type="submit" value="Sign in" class="btn" name="login-btn">

                </form>
            </div>

        </div>

        <?php 
    require_once 'loginValidate.php';
    ?>
    </body>
</html>
<?php 
}
?>

<style>
    .containerOne{
  width: 70%;
  margin-left: 15%;
  margin-right: 15%;
  margin-top: 5%;
  margin-bottom: 1%;
  height: auto;
  padding: 15px;
}

.containerIn{
  width: 80%;
  margin-left: 10%;
  margin-right: 10%;
  padding: 15px;
  margin-top: 3%;
  margin-bottom: 1%;
  display: flex;
  flex-direction: row;
}


    .containerIn img{
        clip-path: polygon(20% 0%, 80% 0%, 100% 100%, 0% 100%);
      width:190%;
      height: 450px;
    }
    .containerIn form{
      width: 80%;
      margin-left: 25%;
      margin-right: 3%;
      padding: 15px;
      margin-top: 3%;
      margin-bottom: 2%;
      display: flex;
      flex-direction: column;
    }

    .containerIn label{
      margin:10px;
      font-size: 20px;
      font-family: Arial, Helvetica, sans-serif;
      color:rgb(255, 180, 17) ;
      text-align: center;
  }
    .containerIn a{
      text-decoration: none;
      color: black;
      font-size: 25px;
      text-align: center;
      margin-top: 3%;
      font-family: Arial, Helvetica, sans-serif;
    }

    .containerIn a:hover{
      color:rgb(255, 153, 0);
    }

    .containerIn b{
      text-align: center;
      font-size: 40px;
      font-family: 'Atkinson Hyperlegible', sans-serif;
  }
    .containerIn input{
      height: 40px;
    }

  .btn{
    background-color: rgb(255, 180, 17);
    border: none;
    color: white;
    padding: 15px 32px;
    margin-top: 20px;
    height: inherit;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
  }


  @media screen and (max-width: 700px) {
      
    .containerIn img{
      display: none;
    }

    .containerIn form{
      margin-left: 10%;
      width: 90%;
      margin-right: 10%;
      margin-top: 3%;
      margin-bottom: 2%;
      display: flex;
      flex-direction: column;
    }

    .containerIn b{
      font-size: 30px;
      font-family: 'Atkinson Hyperlegible', sans-serif;
  }


  }
</style>
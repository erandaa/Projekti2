<!DOCTYPE html>
<html>
    <head>

        <!-- Styles and links -->

        <link rel="stylesheet" href="../CSSfiles/Register.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible&display=swap" rel="stylesheet">

        <title>Register</title>
        <script src="../JSFiles/jsValidate.js"></script>
    </head>
    <body>


        <div class="regBox">
            <div class="colorBox">
                <!-- Empty Inside -->
            </div>

            <div class="formBox">
                <h3>
                    Register
                </h3>
                <form onsubmit="return validateArr(this)">
                    <b>
                        Fields marked with * are required
                    </b>
                    <label>
                        Username *
                    </label>
                    <input type="text" placeholder="Full name" name="username" id="username">
                    <label>
                        E-Mail *
                    </label>
                    <input type="text" placeholder="Email" name="email" id="email">
                    <label>
                        Password *
                    </label>
                    <input type="password" placeholder="Password" name="password" id="password">
                    <button type="submit" name="registerBtn" id="submitBtn"  id="submitBtn" onclick="myFunction()">
                        Submit
                    </button>
                    <br/>
                    <button name="redirected" class="loginBtn">
                        <a href="Login.php">Have an Acoount? Log in</a>
                    </button>
                </form>

            </div>
        </div>
    </body>
</html>

    <style>
        .regBox{
    width: 75%;
    margin-right: 12.5%;
    margin-left: 12.5%;
    margin-top: 8%;
    margin-bottom: 2%;
    height: auto;

    border-radius: 20px;

    display: flex;
    flex-direction: row;
}


    .colorBox{
        width: 50%;
        height: 100%;
        /* background-color: chocolate; */
        background-image: url('../Pics/newspaper.png');
        background-repeat: no-repeat;
        border-bottom-left-radius: 20px;
        border-top-left-radius: 20px;
        margin:0;
        padding: 0;
    }

    .formBox{
        width: 50%;
        padding: 20px;
        margin-top:5%;
        margin-bottom: 5%;
        margin-right: 1%;
        margin-left: 1%;
    }

        .formBox form{
            display: flex;
            flex-direction: column;
            padding: 5px;
            width: auto;
        }

        .formBox input{
            height:35px;
            border-radius: 10px;
        }

        .formBox input:focus{
            outline: none;
        }

        .formBox b{
            text-align: center;
            font-size: 30px;
            font-family: 'Atkinson Hyperlegible', sans-serif;
        }

        .formBox label{
            font-size: 20px;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
        }

        .formBox h3{
            margin-top: 0%;
            text-align: center;
            font-size: 50px;
            font-family: 'Atkinson Hyperlegible', sans-serif;
        }

#submitBtn{
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

.loginBtn{
    background-color: rgb(255, 180, 17);
    border: none;
    padding: 15px 32px;
    margin-top: 20px;
    height: inherit;
    text-align: center;
    display: inline-block;
    font-size: 16px;
}
    .loginBtn a{
        text-decoration: none;
        color: white;
    }


@media screen and (max-width: 1000px) {

    .regBox{
        margin-top: 15%;
    }

    .colorBox{
        display: none;
    }

    .formBox{
        width: 80%;
        padding: 20px;
        margin-top:5%;
        margin-bottom: 5%;
        margin-right: 10%;
        margin-left: 10%;
    }
}
    </style>


    <script>

        function validateArr(form){

            var username = document.getElementById("username").value;
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;


            if(username == ''){
                alert("Please enter your username");
            }

            if(email == ''){
                alert("Please enter an email");
            }
           
            if(password == ''){
                alert("Please enter a password");
            }

            if(password.length < 8){
                document.getElementById('password').innerHTML = alert("Please write 8 or more characters");
                return false;

            }if(password.length > 16){
                document.getElementById('password').innerHTML = alert("Please write 16 or less characters");
                return false;
            }

            else
                alert("Succesful register");
            }
             
           
         

       
    </script>
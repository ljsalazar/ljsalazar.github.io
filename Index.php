<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HI POTCHI</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <style>
        *{
  margin: 0;
  padding: 0;
  text-decoration: none;
  font-family: montserrat;
  box-sizing: border-box;
}

body{
  min-height: 100vh;
  background-image: linear-gradient(120deg,#3498db,#8e44ad);
}

.login-form{
  width: 360px;
  background: #f1f1f1;
  height: 580px;
  padding: 80px 40px;
  border-radius: 10px;
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%,-50%);
}

.login-form h1{
  text-align: center;
  margin-bottom: 60px;
}

.txtb{
  border-bottom: 2px solid #adadad;
  position: relative;
  margin: 30px 0;
}

.txtb input{
  font-size: 15px;
  color: #333;
  border: none;
  width: 100%;
  outline: none;
  background: none;
  padding: 0 5px;
  height: 40px;
}

.txtb span::before{
  content: attr(data-placeholder);
  position: absolute;
  top: 50%;
  left: 5px;
  color: #adadad;
  transform: translateY(-50%);
  z-index: -1;
  transition: .5s;
}

.txtb span::after{
  content: '';
  position: absolute;
  width: 0%;
  height: 2px;
  background: linear-gradient(120deg,#3498db,#8e44ad);
  transition: .5s;
}

.focus + span::before{
  top: -5px;
}
.focus + span::after{
  width: 100%;
}

.logbtn{
  display: block;
  width: 100%;
  height: 50px;
  border: none;
  background: linear-gradient(120deg,#3498db,#8e44ad,#3498db);
  background-size: 200%;
  color: #fff;
  outline: none;
  cursor: pointer;
  transition: .5s;
  text-align: center;
}

.logbtn:hover{
  background-position: right;
}

.bottom-text{
  margin-top: 60px;
  text-align: center;
  font-size: 13px;
}
    </style>
</head>
<body>
    <form action="handleForm.php" class="login-form" method="post" onsubmit="return validateForm()">
        <h1>^_^</h1>

        <div class="txtb">        
          <input type="text" id="preciousName" name="preciousName">
          <span data-placeholder="YOUR PRECIOUS NAME PLEASE..."></span>
        </div>
        <input type="submit" class="logbtn" value="ENTER">        
        <div class="bottom-text">
          The word 'I love you' begins by I, <a href="#">but it ends up by You.</a>
        </div>
      </form>

      <script type="text/javascript">

      $(".txtb input").on("focus",function(){
        $(this).addClass("focus");
      });

      $(".txtb input").on("blur",function(){
        if($(this).val() == "")
        $(this).removeClass("focus");
      });

      function validateForm() {
            var username = document.getElementById("preciousName").value;

            if (username.trim() === "Angelika" || username.trim() === "ANGELIKA" || username.trim() === "Angelika Evangelista" || username.trim() === "ANGELIKA EVANGELISTA" || username.trim() === "Angelika Boncacas Evangelista" || username.trim() === "ANGELIKA BONCACAS EVANGELISTA") {
                
                return true; // Prevent the form submission
            }
            else if(username.trim() === ""){
                alert("MAY I KNOW YOUR NAME PLEASE...");
                return false;
            }else{
                // Add more validation if needed
            alert("YOU ARE NOT MY POTCHI !");
            return false; // Allow the form submission
            }            
        }

      </script>   
</body>
</html>

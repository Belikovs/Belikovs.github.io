<!DOCTYPE html>
<html>

<head>
   <meta charset = 'UTF-8'/>
   <link rel = 'stylesheet' type = 'text/css' href = '/My Web/css/Main_border.css'/>
   <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Staatliches" rel="stylesheet">
</head>

<body>
    <div id = 'Main'>
    	<div class = 'r_fone'>
          <div class = 'Main_Text' 
          style = 
           "font-size: 80px;
            text-align: center;
            font-family: 'Staatliches', cursive;
           "
          >
          <div class = 'border_main'>
                  ACC.SHOP
               </div>
          </div>
          <div class = 'gl_t'>
                <div class = 'tovar'>
          <img src = '/My Web/header_logo.png'>

                </div>
                <div class = 'border_tovar'>
                         <div class = 'Description'>
                                Аккаунт STEAM, ИГРЫ ОТ 150 рублей до 1999 рублей
                         </div>
                         <div class = 'prices'>
                              
                               <button class = 'price' onclick = 'buyprice()'>Купить</button>
                              </div>
                         </div>
                </div>
            </div>
                   <div class = 'button_registration'>
                             <form method = 'GET' action = ''>
                                    <input type = 'sybmit' value = 'Регистрация' name = 'b_r'>
                             </form>
                   </div>
                         <div id = "upper_window">
                         	
                         </div>
                        <!-- <div class = 'registration'>
                              <form method = 'GET' action = '/My Web/registration.php'>
                                   <input class = 'b_registration' name = 'br' type = 'submit' value = 'Регистрация'>
                              </form>
                         </div> 
                               <div class = 'autoreg'>
                                       <form method = 'GET' action = ''>
                                            <input type = 'submit' class = 'b_autoreg' name = 'ba' value = 'Войти'> 
                                       </form>
                               </div>-->
        </div>
                    <style>
                         .tovar {
                         	border: 1px solid #181C1F;
                         	position: absolute;
                         	width: 744px;
                         	height: 171px;
                         	top: 200px;
                         	left: 590px;
                         	background-color: #181C1F;
                         }
                    </style> 
                    <style>
                         .border_tovar {
                         	position: absolute;
                         	border: 1px solid #181C1F;
                         	width: 744px;
                         	height: 121px;
                         	top: 381px;
                         	left: 590px;
                         	background-color: #181C1F;
                         }
                    </style> 
                    <style>
                        .Description {
                        	font-family: 'Staatliches', cursive;
                            font-family: 'Roboto Condensed', sans-serif;
                        	font-size: 26px;
                        	position: absolute;
                        	top: 25px;
                        	left: 85px;
                        }
                    </style> 
                    <style>
                        .price {
                        	position: absolute;
                        	border: 1px solid #181C1F;
                        	background-color: #95B71B;
                        	width: 100px;
                        	height: 30px;
                        	top: 90px;
                        	left: 643px;
                        	color: white;
                        }
                    </style>
                    <style>
                        .b_registration {
                        	position: absolute;
                        	top: 120px;
                        	border: 1px solid white;
                        	background-color: #222629;
                        	border-radius: 20px;
                        	font-size: 24px;
                        	color: white;
                        	left: 1450px;
                        	outline: none;
                        }

                        .b_registration:hover {
                        	border: 1px solid #181C1F;
                        }
                    </style>
                    <style>
                        .b_autoreg {
                        	position: absolute;
                        	top: 120px;
                        	border: 1px solid white;
                        	background-color: #222629;
                        	border-radius: 20px;
                        	font-size: 24px;
                        	color: white;
                        	left: 1620px;
                        	outline: none;
                        }

                        .b_autoreg:hover {
                        	border: 1px solid #181C1F;
                        }
                    </style>
                    <style>
                        #anim {
                        	border: 1px solid #181C1F;
                        	position: absolute;
                        	left: 650px;
                        	top: 550px;
                        	background-color: #181C1F;
                        	width: 600px;
                        	height: 200px;
                        }
                    </style>
                    <style>
                        #pole_email  {
                        	font-size: 18px;
                        	position: absolute;
                        	top: 100px;
                        	left: 200px;
                        }
                    </style>
                    <style>
                        .set {
                        	font-family: 'Staatliches', cursive;
                            font-family: 'Roboto Condensed', sans-serif;
                            position: absolute;
                            left: 235px;
                            font-size: 45px;
                            top: 15px;
                        }
                    </style>
                    <style>
                        #zm {
                        	font-size: 16px;
                        	background-color: #95B71B;
                        	border: 1px solid #181C1F;
                        	color: white;
                        	position: absolute;
                        	top: 170px;
                        	left: 500px;
                        }
                    </style>
                    <script type = 'text/javascript'>
                         function buyprice() {
                         	var e_div = document.createElement("div");
                         	var forms = document.createElement("form");
                         	var buyp = document.createElement("a");
                         	var texb = document.createTextNode("Покупка");
                         	var but = document.createElement("input");
                         	but.setAttribute("type", "submit");
                         	but.setAttribute("id", "zm");
                         	but.setAttribute("value", "Оформить");
                         	but.setAttribute("name", "zms");
                         	forms.appendChild(but);
                         	buyp.setAttribute("class", "set");
                         	buyp.appendChild(texb);
                         	e_div.appendChild(buyp);
                         	forms.setAttribute("method", "GET");
                         	forms.setAttribute("action", "payment.php");
                         	e_div.appendChild(forms);
                         	var text_email = document.createElement("input");
                         	forms.appendChild(text_email);
                         	text_email.setAttribute("placeholder", "Ваша Почта");
                         	text_email.setAttribute("id", "pole_email");
                         	text_email.setAttribute("name", "you_email");
                         	e_div.setAttribute("id", "anim");
                         	var bor_window = document.getElementById("upper_window");
                         	bor_window.appendChild(e_div);
                         }
                    </script>
</body>

</html>

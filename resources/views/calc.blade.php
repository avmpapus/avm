<!DOCTYPE html>
<html>
     <head>
          <meta charset="utf-8">
          <link rel="stylesheet" type="text/css" href="style.css" />
          <title>HTML калькулятор</title>
		  <style>
		 
.wrapper {

}
.main {
margin: 0 auto ;
margin-top: 0px;
width: 220px;
}
.display input {
background: #ccc;
margin: 0 auto;
overflow: hidden;
width: 214px;
height: 30px;
border-radius: 5px;
font-size: 24px;
}
.buttons input {

margin: 0 auto;
overflow: hidden;
width: 50px;
height: 50px;
border-radius: 5px;
font-size: 24px;
}
		  </style>
     </head>
     <body>
	 
                <table class="main">
          <form name="calc" class="wrapper">
                    <tr class="display">
                         <td colspan="4"><input type="text" name="input"><br><br></td>
                    </tr>
					
                    <tr class="buttons">
                         <td><input type="button" value="1" OnClick="calc.input.value += '1'"></td>
                         <td><input type="button" value="2" OnClick="calc.input.value += '2'"></td>
                         <td><input type="button" value="3" OnClick="calc.input.value += '3'"></td>
                         <td><input type="button" value="+" OnClick="calc.input.value += '+'"></td>
                    </tr>
                    <tr class="buttons">
                         <td><input type="button" value="4" OnClick="calc.input.value += '4'"></td>
                         <td><input type="button" value="5" OnClick="calc.input.value += '5'"></td>
                         <td><input type="button" value="6" OnClick="calc.input.value += '6'"></td>
                         <td><input type="button" value="-" OnClick="calc.input.value += '-'"></td>
                    </tr>
                    <tr class="buttons">
                         <td><input type="button" value="7" OnClick="calc.input.value += '7'"></td>
                         <td><input type="button" value="8" OnClick="calc.input.value += '8'"></td>
                         <td><input type="button" value="9" OnClick="calc.input.value += '9'"></td>
                         <td><input type="button" value="x" OnClick="calc.input.value += '*'"></td>
                    </tr>
                    <tr class="buttons">
                         <td><input type="reset" value="c" OnClick="calc.input.value = ''"></td>
                         <td><input type="button" value="0" OnClick="calc.input.value += '0'"></td>
                         <td><input type="button" value="=" OnClick="calc.input.value = eval(calc.input.value)"></td>
                         <td><input type="button" value="/" OnClick="calc.input.value += '/'"></td>
                     </tr>
               <table>		  
			   
          </form>

     </body>
</html>
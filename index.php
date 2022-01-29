<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Calculator</title>
  </head>
  <body>
    <div class="body">
    <div class="container">
      <div class="txt">
        PHP <br />
        CALCULATOR
      </div>
      <form method="POST">
        <div class="components">
          <div class="inputs">
            <input type="text" name="num1" placeholder="Enter Number" />
            <input type="text" name="num2" placeholder="Enter Number" />
          </div>
          <div class="select-style">
            <select name="operation">
              <option value="add">Add</option>
              <option value="sub">Sub</option>
              <option value="mul">Mul</option>
              <option value="div">Div</option>
            </select>
          </div>
          <div class="submit">
            <input type="submit" name="submit" value="calculate" name="submit" />
          </div>
        </form>
        <div class="show-data">
            <p>
                <?php
               if(isset($_POST['submit'])){
                   $num1 = $_POST['num1'];
                   $num2 = $_POST['num2'];
                  //  echo "{$num1} {$num2}";
                   $operation = $_POST['operation'];

                   switch($operation){
                     case "add" : $sum = $num1 + $num2; 
                          echo "The Addition of two number is {$sum}";
                          break;
                     case "sub" : $sub = $num1 - $num2; 
                          echo "The Subtraction of two number is {$sub}";
                          break;
                     case "mul" : $mul = $num1 * $num2; 
                          echo "The Multiplication of two number is {$mul}";
                          break;
                     case "div" : $div = $num1 / $num2; 
                          echo "The Division of two number is {$div}";
                          break;
                     default :
                          echo "Sorry it's not exist";
                   }
                }   
                ?>
        </p>
    </div>
      </div>
    </div>
    </div>
  </body>
</html>

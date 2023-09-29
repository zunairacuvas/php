<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <h1>Simple Calculator</h1>
      <form method="post">
       <input type="text" name="num1" placeholder="Enter first number"><br>
       <input type="text" name="operator" placeholder="Enter operator (+, -, *, /)"><br>
       <input type="text" name="num2" placeholder="Enter second number"><br>
       <input type="submit" name="calculate" value="Calculate"><br>
      </form>

    <?php

    if (isset($_POST['calculate'])) {
        $num1 = $_POST['num1'];
        $operator = $_POST['operator'];
        $num2 = $_POST['num2'];
        $result = 0;


      switch ($operator) {
            case '+':                            // for addition
              $result = $num1 + $num2;
              break;
            case '-':                           // for substraction
              $result = $num1 - $num2;
              break;
            case '*':                           //for multiplication
                $result = $num1 * $num2;
                break;
            case '/':                           // for division
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo "Cannot divide by zero.";
                }
                break;

            default:
                echo "Invalid operator. Please use +, -, *, or /";
                break;
        }


             echo "<h2>Result: $result</h2>";    //calculate

      }
        ?>
</body>
</html>


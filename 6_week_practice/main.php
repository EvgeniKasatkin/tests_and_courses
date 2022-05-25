<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
        <div class="about_me">
         
          <h1>  <?php  echo $p  ?> </h1>
          <h1>  <?php  echo $date  ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php  echo '<img src="/img/me.jpg", width="400" height="600">'; ?>
                </div>

                <div class="fullname">
                    <p> Меня зовут 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'Город:', ' ', $city . '<br>';
                          echo 'Мне ', $age, ' лет.' . '<br>'; ?> </p>
                </div>
                <div class='knowledge'>
                    <p> Логистический тест (knowledge):
                    <?php
                          echo '<br>', 'a = ', $a = 5, ';', '<br>';
                          echo 'b = ', $b = 10, ';', '<br>';
                          echo 'a + b = ', $c = $a + $b, ';', '<br>';
                          if ($c >= 20) {
                                $output = 'Cумма двух чисел больше 20';
                                }
                          else
                                {$output = 'Cумма двух чисел меньше 20';
                                }

                          echo 'Условие на <> 20: ', $output;
                           ?>
                    </p>
                </div>
            </div>
        </div>



    </div>


</body>
</html>

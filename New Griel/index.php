<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="main.js" defer></script>
    <link rel="stylesheet" href="style.css">
    <script src="js/jquery.min.js"></script>
    <title>Griel's Programmers</title>
    
</head>
<body>
<nav>
        <div class="title">Griel's Programmers</div>
        

        <ul class="items">
            <li><a href="#" onclick="changeDisplay()">Temperature</a></li>
            <li><a href="#" onclick="changeDisplay1()">Circle</a></li>
            <li><a href="#" onclick="changeDisplay2()">Triangle</a></li>
            <li><a href="#" onclick="changeDisplay3()">Rectangle</a></li>
        </ul>
        
        <div class="toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>

    <div class="side-nav">
        <ul class="items">
            <li><a href="" onclick="changeDisplay()">Temperature</a></li>
            <li><a href="" onclick="changeDisplay1()">Circle</a></li>
            <li><a href="" onclick="changeDisplay2()">Triangle</a></li>
            <li><a href="" onclick="changeDisplay3()">Rectangle</a></li>
        </ul>
    </div>

<!-------Temperature--------->
    <div class="content1" id= "content1">
        temperature

        <form action="" method="post">
            <input type="number" name = "num" placeholder= "Input Value">

                <select name="options1[]" id="temp">
                    <option value="ftoc" name="ftoc">Fahrenheit to Celsius</option>
                    <option value="ctof" name="ctof">Celsius to Fahrenheit</option>
                </select>

            <input type="submit" value="Calculate" name = "submit1">
        </form>
        <?php
  
        if(isset($_POST['submit1'])){
            $val1 = $_POST['num'];
            $result = 0;
            $result1 = 0;
            $answer = 0;
            foreach($_POST['options1'] as $selected){
                $selected = $selected;
            }
            
            if(!empty($val1)){
                if($selected == "ftoc"){
                $result = $val1 - 32;
                $result1 = 5 / 9;

                    $answer = $result * $result1;
                }

                if($selected == "ctof"){
                    $result = $val1 * 9 / 5;
                    
                    $answer = $result + 32;
                }
            }
            echo 'The answer is: ' .number_format($answer, 2 , '.' , ' ');
        }
    ?>
    </div>

    

<!-------Circle----------->
    <div class="content2" id= "content2">
        circle
        <form action="" method="post">
                <input type="number" placeholder ="radius" name = "radius">

                <select name = "options2[]" id="circle">
                    <option value="area">Area</option>
                    <option value="circum">Circumference</option>
                    <option value="dia">Diameter</option>
                </select>

                <input type="submit" value="Calculate" name ="submit2" href = "#box2">

        </form>
        <?php 
            if(isset($_POST['submit2'])){
                $val1 = $_POST['radius'];
                $result = 0;
                $answer = 0;
                foreach($_POST['options2'] as $selected){
                    $selected = $selected;
                }
                if(!empty($val1)){
                    if($selected == "area"){
                        $answer = 3.1416 * pow($val1, 2) ;
                    }

                    elseif($selected == "circum"){
                        $answer = 2 * $val1;
                    }

                    elseif($selected == "dia"){
                        $result = 2 * 3.1416;
                        $answer = $result * $val1;
                    }
                }
                echo ' ' .number_format($answer, '2', '.', ' ');
                
            }
        ?>
    </div>

<!--------triangle--------->
    <div class="" id= "content3">
        triangle
        <form action="#content3" method="post">
            <input type="number" placeholder = "Base" name ="base">
            <input type="number" placeholder = "Height" name ="height">
            <input type="submit" value="Calculate" name ="submit3">
        </form>
            
        <?php 
            if(isset($_POST['submit3'])){
                $answer = 0;
                $val1 = $_POST['base'];
                $val2 = $_POST['height'];

                if(!empty($val1) && !empty($val2) ){
                    $answer = ($val1 * $val2) / 2;
                }

                echo ' ' .number_format($answer,2,'.',' ');
            }
        ?>
    </div>
<!---------Rectangle--------->
    <div class="content4" id= "content4">
            rectangle
            <form action="" method="post">
                <input type="number" placeholder= "Length" name = "length">
                <input type="number" placeholder= "Width" name = "width">
                <select name="options3[]" id="" class="options3">
                    <option value="area">Area</option>
                    <option value="perimeter">Perimeter</option>
                </select>

                <input type="submit" value="Calculate" name = "submit4" >
            </form>
            
        <?php
         
            if(isset($_POST['submit4'])){
                $answer = 0;
                $val1 = $_POST['length'];
                $val2 = $_POST['width'];
                foreach($_POST['options3'] as $selected){
                    $selected = $selected;
                }
                if(!empty($val1) && !empty($val2)){
                    if($selected == "area"){
                        $answer = $val1 * $val2;

                    }elseif($selected == "perimeter"){
                        $answer = 2 * ($val1  + $val2);
                    }

                }
                echo '' .number_format($answer,2,'.',' ');
            }
        ?>
    </div>
</body>
</html>
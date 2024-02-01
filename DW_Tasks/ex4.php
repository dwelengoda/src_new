<?php 
    $title ="Exercise 4";
    include 'header.php'; 
?>
        <section id="plan">
            <div class="tourPlan">
                <div class="row">
                    <div class="col text-center">
                        <h1>Exercise 4</h1>
                    </div>
                </div>

                <h3>01. Create a file (ex4.php): Create a file named ex4.php in your exercise folder. Ensure that it uses the 
                    ame layout as your other pages and that your navigation bar includes a link to this exercise.</h3>

                <h3>02. If-Else: Write a PHP script to get inputs (age and name) from the user and based on their age, decide if he/she 
                    is eligible for voting. (18 or more than 18 years is eligible for voting, use form to get user input).</h3>
              
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <label for="name">Name:</label><br>
                        <input type="text" id="name" name="name" required><br><br>

                        <label for="age">Age:</label><br>
                        <input type="number" id="age" name="age" min="1" required><br><br>

                        <input type="submit" value="Check Vote Eligibility">
                    </form>

                    <?php

                    if (isset($_POST['name']) && isset($_POST['age'])) {
                    $name = $_POST['name'];
                    $age = $_POST['age'];
                    if ($age >= 18) {
                    echo "<h3>Congratulations, {$name}! You are eligible for voting.</h3>";
                    } else {
                    echo "<h3>Sorry, {$name}. You are not yet eligible for voting. You must be at least 18 years old to vote.</h3>";
                    }
                    }

                    ?>

                <h3>03. Switch Case: Write a PHP script that gets the current month and prints one of the following responses, 
                    depending on whether it's August or not: </h3>

                <p>
                    It's August, so it's still holiday, Not August, this is Month-name so I don't have any holidays
                    Hint: You can use date(F) function to get the current month name. Check Date function from the php manual page.
                </p>
                    
                <?php
                $currentMonth = date('F');
                switch ($currentMonth) {
                case 'August':
                echo "<h3>It's August, so it's still holiday.</h3>";
                break;
                default:
                echo "<h3>Not August, this is $currentMonth so I don't have any holidays</h3>";
                }
                    ?>
             

                <h3>04. For Loop: Write a PHP script that will print the multiplication table of a number (n, use form to get user input).</h3>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <label for="number">Enter a number:</label><br>
                    <input type="number" id="number" name="NumberMt" min="1" required><br><br>
                    <input type="submit" value="Generate table">
                </form>

                <?php

                    if (isset($_POST['NumberMt'])) {
                        $NumberMt = $_POST['NumberMt'];

                        for ($i = 1; $i <= 15; $i++) {
                            echo "$NumberMt x $i = " . $NumberMt * $i . "<br>";
                        }
                    }

                ?>
                <br>

                <h3>05. While Loop: Write a PHP script that will print all the numbers from 1 to n. (use form to get user input).</h3>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <label for="number">Enter a number:</label><br>
                    <input type="number" id="number" name="nNumbers" min="1" required><br><br>
                    <input type="submit" value="Generate numbers">
                </form>

                <?php

                if (isset($_POST['nNumbers'])) {
                $nNumbers = $_POST['nNumbers'];
                $i = 1;
                while ($i <= $nNumbers) {
                    echo $i ."<br>";
                        $i++;
                    }
                }
                ?>
                <h3>06. Foreach Loop: Write a PHP script that will print all the elements of an array. $myarray=("HTML", "CSS", "PHP", "JavaScript").</h3>
                <?php
                    
                    $myarray= array("HTML", "CSS", "PHP", "JavaScript");
                    foreach ($myarray as $value) {
                        echo $value . "<br>";
                    }
                ?>
               
<?php include 'footer.php'; ?>
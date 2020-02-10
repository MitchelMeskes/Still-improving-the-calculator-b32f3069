<!DOCTYPE html>
<html>
<head>
    <title>
        Sign Up
    </title>
</head>
    <body>
    <h1>Calculator</h1>
        <form method="POST">
            <label for="name">Cijfer 1</label><br>
            <input type="number" name="CijferEen"><br>
            <label for="name">Cijfer 2</label><br>
            <input type="number" name="CijferTwee"><br>
            <br>
            <input type="submit" name="Som" value="Plus" > </input>
            <input type="submit" name="Som" value="Min" > </input>
            <input type="submit" name="Som" value="Keer" > </input>
            <input type="submit" name="Som" value="Rest" > </input>
            <input type="submit" name="Som" value="Gedeelt" > </input>
                <?php
                    switch ($_POST["Som"]) {
                        case "Plus":
                            $antwoord = $_POST["CijferEen"] + $_POST["CijferTwee"];
                            echo "Je antwoord is $antwoord";
                            break;
                        case "Min":
                            $antwoord = $_POST["CijferEen"] - $_POST["CijferTwee"];
                            echo "Je antwoord is $antwoord";
                            Break;
                        case "Keer":
                            $antwoord = $_POST["CijferEen"] * $_POST["CijferTwee"];
                            echo "Je antwoord is $antwoord";
                            break;
                        case "Rest":
                            $antwoord = $_POST["CijferEen"] % $_POST["CijferTwee"];
                            echo "Je antwoord is $antwoord";
                            break;
                        case "Gedeelt":
                            $antwoord = $_POST["CijferEen"] / $_POST["CijferTwee"];
                            echo "Je antwoord is $antwoord";
                            break;
                    }
                ?>
        </form>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php 
        if(!$_POST)
        {
    ?>
        <section>
            <form action="form.php" method="Get">
                <input type="text" name="firstname">
                <!-- <label for="man">Man</label>
                <input type="radio" id="man" name="sex" value="man">
                <label for="woman">Woman</label>
                <input type="radio" id="woman" name="sex" value="woman"> -->
                <!-- <textarea name="subject" id="" cols="30" rows="10"></textarea>
                <input type="checkbox" value="1" name="checkbox"> -->
                <!-- <label for="city"></label>
                <select name="cities" id="city">
                    <option value="Baku">Baku</option>
                    <option value="Sumqayit">Sumqayit</option>
                    <option value="Balaken">Balaken</option>
                    <option value="Yevlax">Yevlax</option>
                    <option value="Kurdemir">Kurdemir</option>
                </select> -->
                <button type="submit">send</button>
            </form>
        </section>
    <?php
        }else{
            // $firstname = $_POST['firstname'];
            // $secondname = $_POST['secondname'];
            // $age = $_POST['age'];
            // $age = $_POST['age'];

            // if(!isset($_POST['checkbox']))
            // {
            //     echo 'Please accept rules';
            // }else{
            //     echo "thanks";
            // }

            echo $_POST['cities'];
        }
    ?>


    
</body>
</html>
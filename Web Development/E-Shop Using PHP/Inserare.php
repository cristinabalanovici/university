<?php 
    include ("Conectare.php");
    $error='';
    if (isset($_POST['submit']))
    {
        //preluam datele de pe formular
        $nume = htmlentities($_POST['nume'], ENT_QUOTES);
        $price = htmlentities($_POST['price'], ENT_QUOTES);
        $image = htmlentities($_POST['image'], ENT_QUOTES);
        $category = htmlentities($_POST['category_id'], ENT_QUOTES);
        $description = htmlentities($_POST['description'], ENT_QUOTES);
        $fulldesc = htmlentities($_POST['fulldesc'], ENT_QUOTES);
        $manufacturer = htmlentities($_POST['manufacturer'], ENT_QUOTES);
        $color = htmlentities($_POST['color'], ENT_QUOTES);
        $material = htmlentities($_POST['material'], ENT_QUOTES);
        $room = htmlentities($_POST['room'], ENT_QUOTES);
        $code = htmlentities($_POST['code'], ENT_QUOTES);
        $deal = htmlentities($_POST['deal'], ENT_QUOTES);
        $news = htmlentities($_POST['news'], ENT_QUOTES);
        //verificam daca sunt completate
        if ($nume == '' || $price == '' || $image == '' || $category == '' || $description == '' || $fulldesc == '' || $manufacturer =='' || $color =='' || $material =='' || $room = '' || $code == '' || $deal == '' || $news == '')
        {
            //daca sunt goale se afiseaza un mesaj
            $error = 'ERROR: Campuri goale!';
        }
        else {
            //insert
            if($stmt = $mysqli->prepare("INSERT into product(name, price, image, category, description, fulldesc, manufacturer, color, material, code, deal, news) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"))
            {
                $stmt->bind_param("sdssssssssiii", $nume, $price, $image, $category, $description, $fulldesc, $manufacturer, $color, $material, $room, $code, $deal, $news);
                $stmt->execute();
                $stmt->close();
            }
            //eroare la inserare
            else {
                echo "ERROR: Nu se poate executa insert.";
            }
        }
    }

    //se inchide conexiunea mysqli
    $mysqli->close();
    ?>
    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
    <html>
        <head>
            <title><?php echo "Inserare inregistrare";?></title>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        </head>
        <body>
            <h1><?php echo "Inserare inregistrare";?></h1>
            <?php if ($error != '') {
                echo "<div style='padding:4px; border: 1px solid red; color:red'>".$error."</div>";}?>
                <form action="" method="post">
                    <div>
                        <strong>Name: </strong><input type="text" name="nume" value=""/><br/>
                        <strong>Price: </strong><input type="text" name="price" value=""/><br/>
                        <strong>Image: </strong><input type="text" name="image" value=""/><br/>
                        <strong>Category ID: </strong><input type="text" name="category_id" value=""/><br/>
                        <strong>Description: </strong><input type="text" name="description" value=""/><br/>
                        <strong>Full Description: </strong><input type="text" name="fulldesc" value=""/><br/>
                        <strong>Manufacturer: </strong><input type="text" name="manufacturer" value=""/><br/>
                        <strong>Color: </strong><input type="text" name="color" value=""/><br/>
                        <strong>Material: </strong><input type="text" name="material" value=""/><br/>
                        <strong>Room: </strong><input type="text" name="room" value=""/><br/>
                        <strong>Code: </strong><input type="text" name="code" value=""/><br/>
                        <strong>Deal: </strong><input type="text" name="deal" value=""/><br/>
                        <strong>News: </strong><input type="text" name="news" value=""/><br/>
                        <br/>
                        <input type="submit" name="submit" value="Submit" />
                        <a href="Vizualizare.php">Index</a>
                    </div>
                </form>
            </body>
            </html>
            

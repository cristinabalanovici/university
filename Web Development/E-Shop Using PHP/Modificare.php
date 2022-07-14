<?php //conectare bazadedate
include("Conectare.php");
//Modificarea datelor
//se preia id din pagina vizualizare
$error='';
if(!empty($_POST['id']))
{
    if(isset($_POST['submit']))
    {
        //verificam daca id-ul din URL este unul valid
        if(is_numeric($_POST['id']))
        {
            //preluam variabilele din URL/form
            $id = $_POST['id'];
            $name = htmlentities($_POST['name'], ENT_QUOTES);
            $price = htmlentities($_POST['price'], ENT_QUOTES);
            $image = htmlentities($_POST['image'], ENT_QUOTES);
            $category = htmlentities($_POST['category'], ENT_QUOTES);
            $description = htmlentities($_POST['description'], ENT_QUOTES);
            $fulldesc = htmlentities($_POST['fulldesc'], ENT_QUOTES);
            $manufacturer = htmlentities($_POST['manufacturer'], ENT_QUOTES);
            $color = htmlentities($_POST['color'], ENT_QUOTES);
            $material = htmlentities($_POST['material'], ENT_QUOTES);
            $room = htmlentities($_POST['room'], ENT_QUOTES);
            $code = htmlentities($_POST['code'], ENT_QUOTES);
            $deal = htmlentities($_POST['deal'], ENT_QUOTES);
            $news = htmlentities($_POST['news'], ENT_QUOTES);
            
            if ($name == '' || $price == '' || $image == '' || $category == '' || $description == '' || $fulldesc == '' || $manufacturer == '' || $color == '' || $material == '' || $room == '' || $code == '' || $deal == '' || $news == '')
            {
                 //daca sunt goale afisam mesaj de eroare
                 echo "<div> ERROR: Completati campurile obligatorii!</div>";
            }
            else {
                //daca nu sunt erori se face update name, code, image, price, descriere, categorie 
                if($stmt = $mysqli->prepare("UPDATE product SET name=?, price=?, image=?, category=?, description=?, fulldesc=?, manufacturer=?, color=?, material=?, room=?, code=?, deal=?, news=? WHERE id='".$id."'"))
                {
                    $stmt->bind_param("sdssssssssiii", $name, $price, $image, $category_id, $description, $full_description, $manufacturer, $room, $color, $material, $code, $deal, $news);
                    $stmt->execute();
                    $stmt->close();
                }
                //mesaj de eroare in caz ca nu se poate face update
                else{
                    echo "ERROR: nu se poate executa update.";}
                }
            }
        }
        //daca variabila 'id' nu este valida, afisam mesaj de eroare
        else 
        {echo "id incorect!";}
    }
?>

<html>
    <head>
        <title><?php if ($_GET['id']!='') {echo "Modificare inregistrare";}?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf8"/>
    </head>
    <body>
        <h1><?php if($_GET['id'] != '') {echo "Modificare inregistrare"; }?></h1>
        <?php if($error !='') 
        {
            echo "<div style='padding:4px; border:1px solid red; color: red'>".$error."</div>";}?>
            <form action="" method="post">
                <div>
                    <?php if($_GET['id']!= '') {?>
                    <input type="hidden" name="id" value="<?php echo $_GET['id'];?>"/>
                    <p>ID: <?php echo $_GET['id'];
                    if ($result = $mysqli->query("SELECT * FROM product where id='".$_GET['id']."'"))
                    {
                        if($result->num_rows>0)
                        {
                            $row = $result->fetch_object();?></p>
                            <strong>Name: </strong><input type="text" name="name" value="<?php echo$row->name;?>"/><br/>
                            <strong>Price: </strong><input type="text" name="price" value="<?php echo$row->price;?>"/><br/>
                            <strong>Image: </strong> <input type="text" name="image" value="<?php echo$row->image;?>"/><br/>
                            <strong>Category ID: </strong> <input type="text" name="category" value="<?php echo$row->category; ?>"/><br/>
                            <strong>Description: </strong> <input type="text" name="description" value="<?php echo$row->description; ?>"/><br/>
                            <strong>Full description: </strong> <input type="text" name="fulldesc" value="<?php echo$row->fulldesc; ?>"/><br/>
                            <strong>Manufacturer: </strong> <input type="text" name="manufacturer" value="<?php echo$row->manufacturer; ?>"/><br/>
                            <strong>Color: </strong> <input type="text" name="color" value="<?php echo$row->color; ?>"/><br/>
                            <strong>Material: </strong> <input type="text" name="material" value="<?php echo$row->material; ?>"/><br/>
                            <strong>Room: </strong> <input type="text" name="room" value="<?php echo$row->room; ?>"/><br/>
                            <strong>Code: </strong> <input type="text" name="code" value="<?php echo$row->code; ?>"/><br/>
                            <strong>News: </strong> <input type="text" name="deal" value="<?php echo$row->news; ?>"/><br/>
                            <strong>News: </strong> <input type="text" name="news" value="<?php echo $row->news;}}}?>"/><br/>
                            <br/>
                            <input type="submit" name="submit" value="Submit" />
                            <a href="Vizualizare.php">Index</a>
                        </div>
                        </form>
                        </body>
                        </html>
                        
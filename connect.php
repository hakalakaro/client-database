
    <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) { 
    // check if the form has been submitted

    $conn= mysqli_connect('localhost', 'root', '', 'asiakastietokanta') or die("Connection Failed:" .mysqli_connect_error());
    //connect to the database I have created called "asiakastietokanta" or throw error if failed

    if (isset($_POST['etunimi']) && isset($_POST['sukunimi']) && isset($_POST['email']) && isset($_POST['osoite']) && isset($_POST['postinumero']) && isset($_POST['paikkakunta']))
    // check that all fields are filled

    {
        $etunimi= $_POST['etunimi'];
        $sukunimi= $_POST['sukunimi'];
        $email= $_POST['email'];
        $osoite= $_POST['osoite'];
        $postinumero= $_POST['postinumero'];
        $paikkakunta= $_POST['paikkakunta'];
        // set the received values to variables

        $sql = "INSERT INTO `asiakastaulu` (`etunimi`, `sukunimi`, `email`, `osoite`, `postinumero`, `paikkakunta`) VALUES ('$etunimi', '$sukunimi', '$email', '$osoite', '$postinumero', '$paikkakunta')";
        // insert the received values to the table called "asiakastaulu" in the database.

        $query = mysqli_query($conn,$sql);
        // execute the query and throw error if it isn't succesfull

        if ($query) {
            echo 'Entry succesfull';
        }
        else
        {
            echo 'Error occurred.';
        }
    }
}
?>


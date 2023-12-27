//Backend Code For Image Data Storing:

<?php
$server="localhost";
$username="root";
$password="root";
$dbname="cyber_db";

$conn=mysqli_connect($server, $username, $password, $dbname);

if(isset($_POST['submit']))
{
    if(!empty($_POST['text1']))
    {
        $text1 = $_POST['text1'];

        $query1 = "insert into enc(link) values('$text1')";

        $run1 = mysqli_query($conn,$query1) or die(mysqli_error($conn));

        if($run1)
        {
            echo "Entry Added";
        }
        else
        {
            echo "Entry Not Added";
        }

    }
    elseif(!empty($_POST['text2']))
    {
        $text2 = $_POST['text2'];

        $query2 = "insert into decr(link) values('$text2')";

        $run2 = mysqli_query($conn,$query2) or die(mysqli_error($conn));

        if($run2)
        {
            echo "Entry Added";
        }
        else
        {
            echo "Entry Not Added";
        }

    }
    else
    {
        echo "Input Required";

    }
}
?>

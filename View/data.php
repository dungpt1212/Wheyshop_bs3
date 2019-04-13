<?php
   include("../Lib/connection.php");
   if(isset($_POST["id"])){
   $id_tinhthanhpho = $_POST["id"];
   $sql="SELECT * FROM devvn_quanhuyen where matp='$id_tinhthanhpho' ORDER BY name ASC";
   $query= mysqli_query($conn1, $sql);
   while($row = mysqli_fetch_array($query)){
?>
    <option value="<?PHP echo($row["maqh"]) ?>"><?php echo($row["name"]) ?></option>
<?php
   }
}else if(isset($_POST["id_quanhuyen"])){
    $id_quanhuyen = $_POST["id_quanhuyen"];
    $sql="SELECT * FROM devvn_xaphuongthitran where maqh='$id_quanhuyen' ORDER BY name ASC";
    $query= mysqli_query($conn1, $sql);
    while($row = mysqli_fetch_array($query)){
?>
    <option value="<?PHP echo($row["xaid"]) ?>"><?php echo($row["name"]) ?></option>
<?php
        } } ?>
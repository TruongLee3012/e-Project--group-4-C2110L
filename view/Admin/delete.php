<?php
$conn = mysqli_connect("localhost", "root", "", "dentist");

if(isset($_POST["action"])){
  // Choose a function depends on value of $_POST["action"]
  if($_POST["action"] == "delete"){
    delete();
  }
}

function delete(){
  global $conn;

  $id = $_POST["id"];

  $rows = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM blog WHERE id = $id"));

  mysqli_query($conn, "DELETE FROM blog WHERE id = $id");

}
<?php
  session_start();
  unset($_SESSION["email"]);
  unset($_SESSION["train_no"]);
  unset($_SESSION["order_id"]);
  unset($_SESSION["payable_amount"]);
  unset($_SESSION["ticket_id"]);
  unset($_SESSION["src"]);
  unset($_SESSION["destn"]);
  unset($_SESSION["date"]);
  unset($_SESSION["num_of_trains"]);
  header("Location:login.php");
  session_unset();
?>
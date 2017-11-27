<?php
 //require $_SERVER["DOCUMENT_ROOT"] . "/seis751-webdevelopment/config.php";
 require $_SERVER["DOCUMENT_ROOT"] . "/assignments/config.php"; //only for UST SERVER

if(isset($_POST['first_name']) and isset($_POST['last_name']) and isset($_POST['number_of_tickets']) and isset($_POST['date'])){
  $firstName = $_POST['first_name'];
  $lastName = $_POST['last_name'];
  $numberOfTickets = $_POST['number_of_tickets'];
  $date = $_POST['date'];
  $ticketNumber = rand(1000, 9999);

  //$request = ROOT_PATH . '/seis751-webdevelopment/tickets/' . $ticketNumber . '_' . $firstName . '_' . $lastName . '_' . $date . '_' . 'request.txt';
  $request = ROOT_PATH . '/assignments/tickets/' . $ticketNumber . '_' . $firstName . '_' . $lastName . '_' . $date . '_' . 'request.txt'; //only for UST SERVER

  $fp = fopen($request, 'w') or die('Cannot open file:  '.$request);

  fwrite($fp, "Ticket #: " . $ticketNumber . "\n\r");
  fwrite($fp, "First Name: " . $firstName . "\n\r");
  fwrite($fp, "Last Name:" . $lastName . "\n\r");
  fwrite($fp, "Number of Tickets:" . $numberOfTickets . "\n\r");
  fwrite($fp, "Date:" . $date . "\n\r");
  fclose($fp);

  echo '<h1>Your ticket has been created successfully!</h1>';
}

?>

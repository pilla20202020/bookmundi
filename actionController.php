<?php


  
  if (!isset($_POST['id']) || !isset($_POST['value'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Missing required fields']);
    exit;
  }


  $id = $_POST['id'];
  $value = $_POST['value'];
  if (!is_numeric($id) ) {
    // If the input data of ID is invalid, return an error response
    http_response_code(400);
    echo json_encode(['error' => 'Invalid input data for ID']);
    exit;
  }

  if (!is_string($value) ) {
    // If the input data of value is invalid, return an error response
    http_response_code(400);
    echo json_encode(['error' => 'Invalid input data for value']);
    exit;
  }

  echo json_encode(['Id and Value input data is correct']);



?>
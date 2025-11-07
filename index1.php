<?php
$selected_time = $_POST['selected_time'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Booking Time</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f4;
      padding: 30px;
    }

    .step-header {
      display: flex;
      justify-content: center;
      gap: 20px;
      margin-bottom: 30px;
    }

    .step {
      padding: 10px 20px;
      border-radius: 25px;
      background-color: #eee;
    }

    .step.active {
      background-color: #00bcd4;
      color: white;
    }

    h2 {
      text-align: center;
    }

    form {
      max-width: 1000px;
      margin: auto;
    }

    .grid {
      display: grid;
      grid-template-columns: repeat(5, 1fr);
      gap: 10px;
    }

    .column {
      background: white;
      padding: 10px;
      border-radius: 8px;
      text-align: center;
    }

    .date-label {
      background-color: #00bcd4;
      color: white;
      padding: 10px 0;
      border-radius: 6px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .slot {
      display: block;
      width: 100%;
      padding: 10px 0;
      margin-bottom: 8px;
      border: 1px solid #ccc;
      border-radius: 6px;
      background-color: #f9f9f9;
      cursor: pointer;
      font-weight: 500;
    }

    .slot:hover {
      background-color: #e0e0e0;
    }

    .slot.selected {
      background-color: #f06292;
      color: white;
      border: 2px solid #c2185b;
    }

    .nav-buttons {
      display: flex;
      justify-content: space-between;
      margin-top: 30px;
    }

    .nav-buttons button {
      padding: 12px 30px;
      font-size: 16px;
      background-color: #00bcd4;
      color: white;
      border: none;
      border-radius: 6px;
      cursor: pointer;
    }

    .nav-buttons button:hover {
      background-color: #0097a7;
    }

    .confirmation {
      text-align: center;
      margin-top: 20px;
      font-weight: bold;
    }
  </style>

  <script>
    function selectTime(button) {
      document.querySelectorAll('.slot').forEach(btn => {
        btn.classList.remove('selected');
      });

      button.classList.add('selected');
      document.getElementById('selected_time').value = button.dataset.value;
    }
  </script>
</head>
<body>

  <h2>Step 2: Select Time for Service</h2>

  <div class="step-header">
    <div class="step">1. Time</div>
    <div class="step

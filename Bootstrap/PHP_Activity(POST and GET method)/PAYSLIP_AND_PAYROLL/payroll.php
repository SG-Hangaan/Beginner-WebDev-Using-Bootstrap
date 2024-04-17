<!DOCTYPE html>
<html>
  <head>
    <title>Payroll</title>
  </head>
  <body>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <style>
        body {
            background-image: url('Payroll_bg.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            overflow-x: hidden;
        }

        .page-header {
            margin-top: 60px;
            color: #337ab7;
            text-align: center;
        }

        h1 {
            color: #ffffff;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: center;
        }

        .control-label {
            font-weight: bold;
            display: block;
            width: 66%;
            color: #ffffff;
        }

        .btn-success {
            background-color: #5cb85c;
            border-color: #4cae4c;
            margin: 0 auto;
            display: block;
        }

        .btn-success:hover {
            background-color: #449d44;
            border-color: #398439;
        }

        .container {
            margin: 0 auto;
            width: 90%;
            bottom: 2%;
        }

        .col-md-offset-2,
        .col-md-4 {
            margin: 0 auto;
            float: none;
        }

        .col-md-5 {
            float: none;
        }

        .row {
            text-align: center;
        }

        .form-group {
            margin: 11px;
        }

        ::-webkit-scrollbar {
            width: 9px;
            height: 9px;
        }

        ::-webkit-scrollbar-track {
            background: #000000;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(#fbfbfb, #000000);
            border-radius: 26px;
            height: 12%;
        }
</style>


    <?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $empID = $_POST['empID'];
    $mi = $_POST['mi'];
    $basic = $_POST['basic'];
    $incPay = $_POST['incPay'];
    $hra = $_POST['hra'];
    $mealAllowance = $_POST['mealAllowance'];
    $provFund = $_POST['provFund'];
    $tax = $_POST['tax'];
    $loan = $_POST['loan'];
    $totalEarnings = $basic + $incPay + $hra + $mealAllowance;
    $totalDeductions = $provFund + $tax + $loan;
    $netPay = $totalEarnings - $totalDeductions;
    ?>

    <form class="form-horizontal" action="payslip.php">
      <div class="container">
        <div class="page-header">
          <h1 class="text-center">Employee's Payslip</h1>
        </div>
        <div class="row">
          <div class="form-group">
            <label for="empID" class="control-label col-md-2">Employee ID:</label>
            <div class="col-md-4">      
              <input type="number" class="form-control" id="empID" name="empID" value="<?php echo $empID; ?>" readonly>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="form-group">
            <label for="employee_name" class="control-label col-md-2">Employee Name:</label>
            <div class="col-md-4">      
              <input type="text" class="form-control" id="employee_name" name="employee_name" value="<?php echo $fname . ' ' . $mi . ' ' . $lname; ?>" readonly>
            </div>
          </div>
        </div>
        <div class="page-header">
          <h1 class="text-center">Earnings</h1>
        </div>
        <div class="row">
          <div class="form-group">
            <label for="basic" class="control-label col-md-2">Basic:</label>
            <div class="col-md-4">      
              <input type="number" class="form-control" id="basic" name="basic" value="<?php echo $basic; ?>" readonly>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="form-group">
            <label for="incPay" class="control-label col-md-2">Incentive Pay:</label>
            <div class="col-md-4">      
              <input type="text" class="form-control" id="incPay" name="incPay" value="<?php echo $incPay; ?>" readonly>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="form-group">
            <label for="hra" class="control-label col-md-2">House Rent Allowance:</label>
            <div class="col-md-4">      
              <input type="text" class="form-control" id="hra" name="hra" value="<?php echo $hra; ?>" readonly>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="form-group">
            <label for="hra" class="control-label col-md-2">Meal Allowance:</label>
            <div class="col-md-4">      
              <input type="text" class="form-control" id="mealAllowance" name="mealAllowance" value="<?php echo $mealAllowance; ?>" readonly>
            </div>
          </div>
        </div>
        <div class="page-header">
        <h1 class="text-center">Deductions</h1>
        </div>
        <div class="row">
          <div class="form-group">
            <label for="hra" class="control-label col-md-2">Provident Fund:</label>
            <div class="col-md-4">      
              <input type="text" class="form-control" id="provFund" name="provFund" value="<?php echo $provFund; ?>" readonly>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="form-group">
            <label for="hra" class="control-label col-md-2">Tax:</label>
            <div class="col-md-4">      
              <input type="text" class="form-control" id="tax" name="tax" value="<?php echo $tax; ?>" readonly>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="form-group">
            <label for="hra" class="control-label col-md-2">Loan:</label>
            <div class="col-md-4">      
              <input type="text" class="form-control" id="loan" name="loan" value="<?php echo $loan; ?>" readonly>
            </div>
          </div>
        </div>
        <div class="page-header">
        <h1 class="text-center">Computations</h1>
        </div>
        <div class="row">
          <div class="form-group">
            <label for="hra" class="control-label col-md-2">Total Earnings:</label>
            <div class="col-md-4">      
              <input type="text" class="form-control" id="totalEarnings" name="totalEarnings" value="<?php echo $totalEarnings; ?>" readonly>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="form-group">
            <label for="hra" class="control-label col-md-2">Total Deductions:</label>
            <div class="col-md-4">      
              <input type="text" class="form-control" id="totalDeductions" name="totalDeductions" value="<?php echo $totalDeductions; ?>" readonly>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="form-group">
            <label for="hra" class="control-label col-md-2">Net Pay:</label>
            <div class="col-md-4">      
              <input type="text" class="form-control" id="netPay" name="netPay" value="<?php echo $netPay; ?>" readonly>
            </div>
          </div>
        </div>

      </div>
      <div class="form-group">
                <div class="col-md-offset-2  col-md-4">
                    <button class="btn btn-success btn-block">Back</button>
                </div>
            </div>
    </form>
  </body>
</html>

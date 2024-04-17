<!DOCTYPE html>
<html>
  <head>
    <title>Payslip</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  
    <style>
        body {
            background-image: url('Payroll_bg.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .page-header {
            margin-top: 60px;
            color: #337ab7; 
        }

        h1 {
            color:  #ffffff;
        }

        .form-group {
            margin-bottom: 28px;
        }

        .control-label {
            font-weight: bold;
            margin-left: 215px;
            color:  #ffffff;
            
        }

        .btn-success {
            background-color: #5cb85c; 
            border-color: #4cae4c;
        }

        .btn-success:hover {
            background-color: #449d44; 
            border-color: #398439; 
        }

        .container {
            margin: 0 auto;
            text-align: center;
        }

        .col-md-offset-2,
        .col-md-4 {
            margin: 60px;
            margin-left: 399px;
            text-align: center;
        }

        .col-md-5 {
            margin: 0 auto;
            text-align: center;
            margin-left: 29px;
        }

        .row {
            margin: 5 px;
            text-align: center;
        }

        .form-group {
            margin: 9px;
            text-align: center;
        }

        ::-webkit-scrollbar{
            width: 9px;
        }
        ::-webkit-scrollbar-track{
            background:#000000;
        }
        ::-webkit-scrollbar-thumb{
            background: linear-gradient(#fbfbfb, #000000);
            border-radius: 26px;
            height: 12%;
        }
   </style>
  
  </head>
  <body>
    <div class="container">
      <div class="page-header">
        <h1 class="text-center">Employee's Payroll</h1>
      </div>
      <form class="form-horizontal" method="POST" action="payroll.php">
        <div class="row">
          <div class="form-group">
            <label for="name" class="control-label col-md-2">Employee ID:</label>
            <div class="col-md-5">      
              <input type="text" class="form-control" name="empID">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="form-group">
            <label for="name" class="control-label col-md-2">Last Name:</label>
            <div class="col-md-5">      
              <input type="text" class="form-control" name="lname">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="form-group">
            <label for="name" class="control-label col-md-2">First Name:</label>
            <div class="col-md-5">      
              <input type="text" class="form-control" name="fname">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="form-group">
            <label for="name" class="control-label col-md-2">MI:</label>
            <div class="col-md-5">      
              <input type="text" class="form-control" name="mi">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="form-group">
            <label for="name" class="control-label col-md-2">Basic:</label>
            <div class="col-md-5">      
              <input type="number" class="form-control" name="basic">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="form-group">
            <label for="name" class="control-label col-md-2">Incentive pay:</label>
            <div class="col-md-5">      
              <input type="number" class="form-control" name="incPay">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="form-group">
            <label for="name" class="control-label col-md-2">House Rent Allowance:</label>
            <div class="col-md-5">      
              <input type="number" class="form-control" name="hra">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="form-group">
            <label for="name" class="control-label col-md-2">Meal Allowance:</label>
            <div class="col-md-5">      
              <input type="number" class="form-control" name="mealAllowance">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="form-group">
            <label for="name" class="control-label col-md-2">Provident Fund:</label>
            <div class="col-md-5">      
              <input type="number" class="form-control" name="provFund">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="form-group">
            <label for="name" class="control-label col-md-2">Tax:</label>
            <div class="col-md-5">      
              <input type="number" class="form-control" name="tax">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="form-group">
            <label for="name" class="control-label col-md-2">Loan:</label>
            <div class="col-md-5">      
              <input type="number" class="form-control" name="loan">
            </div>
          </div>
        </div>


        <div class="form-group">
                <div class="col-md-offset-2  col-md-4">
                    <button class="btn btn-success btn-block">View Payslip</button>
                </div>
            </div>
      </form>
    </div>


  </body>
</html>

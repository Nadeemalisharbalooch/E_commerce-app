<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>User Payment Method</title>
  
  <style>
    .payment-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    
    .payment-form {
      max-width: 400px;
      width: 100%;
    }
    
    .payment-form input[type="text"],
    .payment-form input[type="password"] {
      border-radius: 5px;
      padding: 10px;
      margin-bottom: 15px;
      width: 100%;
    }
    
    .payment-form button[type="submit"] {
      width: 100%;
    }
  </style>
</head>
<body>
@if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  <div class="payment-container">
    <div class="payment-form">
      <h1 class="text-center mb-4">User Payment Method</h1>
      
      <form method="get" action="{{url('ordercontroller')}}">
        <div class="form-group">
          <label for="card-number">Card Number</label>
          <input type="text" class="form-control" name="card_number" id="card-number" placeholder="Enter card number">
          <small id="card-number-msg" class="form-text text-muted">Click to enter your card number.</small>
        </div>
        <div class="form-group"> 
          <label for="expiration-date">Expiration Date</label>
          <input type="text" class="form-control" name="Expiration_Date"  id="expiration-date" placeholder="MM/YY">
          <small id="expiration-date-msg" class="form-text text-muted">Click to enter the expiration date.</small>
        </div>
        <div class="form-group">
          <label for="cvv">CVV</label>
          <input type="password" class="form-control" name="cvv" id="cvv" placeholder="Enter CVV">
          <small id="cvv-msg" class="form-text text-muted">Click to enter the CVV.</small>
        </div>
        <div class="form-group">
          <label for="cardholder-name">Cardholder Name</label>
          <input type="text" class="form-control" name="Cardholder_name" id="cardholder-name" placeholder="Enter cardholder name">
          <small id="cardholder-name-msg" class="form-text text-muted">Click to enter the cardholder name.</small>
        </div>
        <button type="submit" class="btn btn-primary">Save Payment Method</button>
      </form>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var inputs = document.querySelectorAll('.payment-form input[type="text"], .payment-form input[type="password"]');
      
      inputs.forEach(function(input) {
        input.addEventListener('click', function() {
          var msgId = input.getAttribute('id') + '-msg';
          var message = document.getElementById(msgId);
          
          if (message) {
            message.style.display = 'block';
          }
        });
      });
    });
  </script>
</body>
</html>

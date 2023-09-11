<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocery Calculater</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        input {
            padding: 10px;
            width: 100%;
            margin-bottom: 15px;
            background-color: rgba(255, 255, 255, 0.5);
        }
        </style>
        <style>
        .long-button {
            display: inline-block;
            padding: 15px 30px;
            background-color: #4CAF50;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.9s;
        }
         .long-button:hover {
            background-color: black;
        }
         </style>
         <style>
         header {
            background-image: url('https://ecocart.io/wp-content/uploads/resized/2023/01/iStock-1371318211-1120x455-c-default.jpg');
            background-size: cover;
            background-position: center;
           color: #fff;
           padding: 10px;
           text-align: center;
                }
          h1 {
         margin: 0;
         color: black;
            }
        </style>
        </head>
        <body>
        <header><h1> Grocery Calculater</header>
        <form method="post" action="index3.php">
        <table class="table">
       <thead>
       <tr>
       <th scope="col">  Item Name</th>
       <th scope="col">Quanity</th>
       <th scope="col">Price Per Item</th>
       </tr>
       </thead>
       <tbody>
        <tr>
      <td>
      <input type="text" name="item[]" required>
      </td>
      <td>  
      <input type="number" name="quantity[]" required>
      </td>
      <td> <input type="number" name="price[]" step="0.01" required></td>
      </tr>
      </tbody>
      </table>
      </tbody>
      </table>
<script>
        // Function to add more item fields dynamically
        function addMoreItems() {
            var form = document.querySelector('form');
            var newItem = document.createElement('div');
            newItem.innerHTML = `
             <table class="table">
      <thead>
       <tr>
      <th scope="col">  Item Name</th>
      <th scope="col">Quanity</th>
      <th scope="col">Price Per Item</th>
      </tr>
     </thead>
    <tbody>
    <tr>
     <td>
      <input type="text" name="item[]" required>
      </td>
      <td>  
      <input type="number" name="quantity[]" required>
       </td>
      <td> <input type="number" name="price[]" step="0.01" required></td>
      </tbody>
     </table>      
            `;
            form.insertBefore(newItem, form.lastChild.previousSibling);
        }
   </script>
    <footer>
<button type="submit" class="btn btn-primary btn-lg" >Calculate Bill</button>
<button type="button" class="long-button"  onclick="addMoreItems()">Add Another item</button>
<br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">    
                <img src="https://ecocart.io/wp-content/uploads/resized/2023/01/iStock-1371318211-1120x455-c-default.jpg" class="card-img-top" alt="Card Image">
                     <div class="card-body">

                        <h3 class="card-title">Bill Details</h3>
                        <p class="card-text">
                          <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                          $items = $_POST["item"];
                         $quantities = $_POST["quantity"];
                         $prices = $_POST["price"];

                         $totalBill = 0;
    for ($i = 0; $i < count($items); $i++) {
        $subtotal = $quantities[$i] * $prices[$i];
        echo "Item Name : {$items[$i]}<br>
         Quantity: {$quantities[$i]}<br>
         Price per item: {$prices[$i]}<br>  
         Subtotal: {$subtotal}<br>";
         $totalBill += $subtotal;
    }
   
}
?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://ecocart.io/wp-content/uploads/resized/2023/01/iStock-1371318211-1120x455-c-default.jpg" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h1 class="card-title">Total Bill</h1>
                        <p class="card-text">   <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                          $items = $_POST["item"];
                         $quantities = $_POST["quantity"];
                         $prices = $_POST["price"];

                         $totalBill = 0;
                      for ($i = 0; $i < count($items); $i++) {
                      $subtotal = $quantities[$i] * $prices[$i];
                     echo "";
                     $totalBill += $subtotal;
    }
    echo "<h2>Total Bill: {$totalBill}</h2>";
}
?>   </p>      
</div>
</div>
</div>
                                      </footer>
   </body>
</html>
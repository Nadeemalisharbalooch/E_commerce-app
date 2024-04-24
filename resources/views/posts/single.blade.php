<!DOCTYPE html>
<html>

<head>
    <title>Product Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .product-container {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .product-image {
            width: 200px;
            height: auto;
        }

        .quantity {
            display: flex;
            align-items: center;
        }

        .quantity input {
            width: 50px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Product Name</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="product-container">
                    <img src="product-image.jpg" alt="Product Image" class="product-image">
                    <p>Product Description</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="quantity">
                    <button class="btn btn-primary decrease-btn">-</button>
                    <input type="number" class="form-control quantity-input" min="1" max="5" value="1">
                    <button class="btn btn-primary increase-btn">+</button>
                </div>
                <button class="btn btn-success btn-block add-to-cart-btn">Add to Cart</button>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $(".increase-btn").click(function () {
                var input = $(this).siblings(".quantity-input");
                var value = parseInt(input.val());
                if (value < 5) {
                    input.val(value + 1);
                }
            });

            $(".decrease-btn").click(function () {
                var input = $(this).siblings(".quantity-input");
                var value = parseInt(input.val());
                if (value > 1) {
                    input.val(value - 1);
                }
            });

            $(".add-to-cart-btn").click(function () {
                var quantity = parseInt($(".quantity-input").val());
                // Perform add to cart logic here
                alert("Added " + quantity + " items to the cart.");
            });
        });
    </script>
</body>

</html>

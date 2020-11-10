<html>
<head>
        <meta charset="UTF-8">
        <title> Home Page </title>
         <link rel="stylesheet" type="text/css" href="css/style.css"/>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
         <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
         <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
</head>

<body>
     <!-- Nav -->
<nav class="navbar navbar-light  fixed-top" style="background-color: #792c35;">
    <div class="row">
        <div class="col ">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cart">Cart (<span class="total-count"></span>)</button>

          </div>

    </div>
</nav>







<h1 class="h1">Rate System</h1><div class="container"><hr/>
						<form style="margin-top:30px" action="'.$_SERVER['PHP_SELF'].'" method="POST" >
							<div class="col-sm-12">
								<div class="row">
									<div class="col-sm-6">
										<div class="input-group">
											<input name="AnsID" type="hidden" value="'.$_GET['AnsID'].'" class="form-control" />
											<input name="AnsRate" type="number"   placeholder="Enter Your rate 1 to 5.."  min="1" max="5" class="form-control" />
											<div class="input-group-append">
												<button class="btn btn-danger" type="submit">Rate</button>
											</div>
										</div>
									</div>
									<div class="col-sm-6"></div>
								</div>
							</div>
						</form>


<!-- Main -->
<div class="container">


              <!-- Search Bar -->

    	<div class="col">
					<form style="margin-top:20px" action="home2.php" method="POST" >
						<div class="input-group">
						 <input name="search" placeholder="write search here.." class="form-control" />
							<div class="input-group-append">
								<button class="btn btn-outline-warning" type="submit">Search</button>
							</div>
						</div>
					</form>
				</div>



    <div class="row">
      <div class="col">
        <div class="card" style="width: 20rem;">
  <img class="card-img-top" src="img/coffee1.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">coffee beans(250g)</h4>
    <p class="card-text">Price: $15</p>
    <a href="#" data-name="coffee-beans" data-price="15" class="add-to-cart btn btn-primary">Add to cart</a>
  </div>
</div>
      </div>
      <div class="col">
        <div class="card" style="width: 20rem;">
 <img class="card-img-top" src="img/coffee3.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">coffee capsols</h4>
    <p class="card-text">Price: $13</p>
    <a href="#" data-name="coffee-capsols" data-price="13" class="add-to-cart btn btn-primary">Add to cart</a>
  </div>
</div>
      </div>
      <div class="col">
        <div class="card" style="width: 20rem;">
  <img class="card-img-top" src="img/machine1.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">coffee machine</h4>
    <p class="card-text">Price: $1099</p>
    <a href="#" data-name="coffee-machine" data-price="1099" class="add-to-cart btn btn-primary">Add to cart</a>
  </div>
</div>
      </div>
    </div>
</div>


 <!-- Modal -->
<div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cart</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="show-cart table">

        </table>
        <div>Total price: $<span class="total-cart"></span></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button class="clear-cart btn btn-danger">Clear Cart</button>
        <button type="button" class="btn btn-primary">Order now</button>
      </div>
    </div>
  </div>
</div>


</body>

</html>
<script type="text/javascript">
// ************************************************
// Shopping Cart API
// ************************************************

var shoppingCart = (function () {
    // =============================
    // Private methods and propeties
    // =============================
    cart = [];

    // Constructor
    function Item(name, price, count) {
        this.name = name;
        this.price = price;
        this.count = count;
    }

    // Save cart
    function saveCart() {
        sessionStorage.setItem("shoppingCart", JSON.stringify(cart));
    }

    // Load cart
    function loadCart() {
        cart = JSON.parse(sessionStorage.getItem("shoppingCart"));
    }
    if (sessionStorage.getItem("shoppingCart") != null) {
        loadCart();
    }

    // =============================
    // Public methods and propeties
    // =============================
    var obj = {};

    // Add to cart
    obj.addItemToCart = function (name, price, count) {
        for (var item in cart) {
            if (cart[item].name === name) {
                cart[item].count++;
                saveCart();
                return;
            }
        }
        var item = new Item(name, price, count);
        cart.push(item);
        saveCart();
    };
    // Set count from item
    obj.setCountForItem = function (name, count) {
        for (var i in cart) {
            if (cart[i].name === name) {
                cart[i].count = count;
                break;
            }
        }
    };
    // Remove item from cart
    obj.removeItemFromCart = function (name) {
        for (var item in cart) {
            if (cart[item].name === name) {
                cart[item].count--;
                if (cart[item].count === 0) {
                    cart.splice(item, 1);
                }
                break;
            }
        }
        saveCart();
    };

    // Remove all items from cart
    obj.removeItemFromCartAll = function (name) {
        for (var item in cart) {
            if (cart[item].name === name) {
                cart.splice(item, 1);
                break;
            }
        }
        saveCart();
    };

    // Clear cart
    obj.clearCart = function () {
        cart = [];
        saveCart();
    };

    // Count cart
    obj.totalCount = function () {
        var totalCount = 0;
        for (var item in cart) {
            totalCount += cart[item].count;
        }
        return totalCount;
    };

    // Total cart
    obj.totalCart = function () {
        var totalCart = 0;
        for (var item in cart) {
            totalCart += cart[item].price * cart[item].count;
        }
        return Number(totalCart.toFixed(2));
    };

    // List cart
    obj.listCart = function () {
        var cartCopy = [];
        for (i in cart) {
            item = cart[i];
            itemCopy = {};
            for (p in item) {
                itemCopy[p] = item[p];
            }
            itemCopy.total = Number(item.price * item.count).toFixed(2);
            cartCopy.push(itemCopy);
        }
        return cartCopy;
    };

    // cart : Array
    // Item : Object/Class
    // addItemToCart : Function
    // removeItemFromCart : Function
    // removeItemFromCartAll : Function
    // clearCart : Function
    // countCart : Function
    // totalCart : Function
    // listCart : Function
    // saveCart : Function
    // loadCart : Function
    return obj;
})();

// *****************************************
// Triggers / Events
// *****************************************
// Add item
$(".add-to-cart").click(function (event) {
    event.preventDefault();
    var name = $(this).data("name");
    var price = Number($(this).data("price"));
    shoppingCart.addItemToCart(name, price, 1);
    displayCart();
});

// Clear items
$(".clear-cart").click(function () {
    shoppingCart.clearCart();
    displayCart();
});

function displayCart() {
    var cartArray = shoppingCart.listCart();
    var output = "";
    for (var i in cartArray) {
        output +=
            "<tr>" +
            "<td>" +
            cartArray[i].name +
            "</td>" +
            "<td>(" +
            cartArray[i].price +
            ")</td>" +
            "<td><div class='input-group'><button class='minus-item input-group-addon btn btn-primary' data-name=" +
            cartArray[i].name +
            ">-</button>" +
            "<input type='number' class='item-count form-control' data-name='" +
            cartArray[i].name +
            "' value='" +
            cartArray[i].count +
            "'>" +
            "<button class='plus-item btn btn-primary input-group-addon' data-name=" +
            cartArray[i].name +
            ">+</button></div></td>" +
            "<td><button class='delete-item btn btn-danger' data-name=" +
            cartArray[i].name +
            ">X</button></td>" +
            " = " +
            "<td>" +
            cartArray[i].total +
            "</td>" +
            "</tr>";
    }
    $(".show-cart").html(output);
    $(".total-cart").html(shoppingCart.totalCart());
    $(".total-count").html(shoppingCart.totalCount());
}

// Delete item button

$(".show-cart").on("click", ".delete-item", function (event) {
    var name = $(this).data("name");
    shoppingCart.removeItemFromCartAll(name);
    displayCart();
});

// -1
$(".show-cart").on("click", ".minus-item", function (event) {
    var name = $(this).data("name");
    shoppingCart.removeItemFromCart(name);
    displayCart();
});
// +1
$(".show-cart").on("click", ".plus-item", function (event) {
    var name = $(this).data("name");
    shoppingCart.addItemToCart(name);
    displayCart();
});

// Item count input
$(".show-cart").on("change", ".item-count", function (event) {
    var name = $(this).data("name");
    var count = Number($(this).val());
    shoppingCart.setCountForItem(name, count);
    displayCart();
});

displayCart();

</script>
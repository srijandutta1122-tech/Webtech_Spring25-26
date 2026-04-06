console.log("connected");
window.onload = function () 
{ 
  var unitPrice = 1000;
  var quantityInput = document.getElementById("QuantityPerDay");
  var totalInput = document.getElementById("TotalPrice");

  quantityInput.addEventListener("input", function ()
  {
        var quantity = parseInt(quantityInput.value);

        if (isNaN(quantity)) 
        {
            quantity = 0;
        }
        if (quantity < 0)
          {
            alert("Quantity cannot be negative!");
            quantity = 0;
            quantityInput.value = 0;
          }
       
        var total = unitPrice * quantity * 30;

  }
 
}
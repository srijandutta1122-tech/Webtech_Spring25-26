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



  }
 
}
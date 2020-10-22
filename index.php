
<!-- Head -->

<?php include('inc/head.php'); ?>
<head>
    
<title>   Shopping Cart </title>    
</head>

<div class="cart-section" >
	
<div class="  mt-5 mb-5">
	</div>
<div class=" mt-2 ml-4  mb-2  d-flex justify-content-center">
	<h1 class="  mt-4 ">  OUR PRODUCTS</h1> </div>
<div class=" order-row  row m-0 ">
	<div class=" col-lg-9 col-md-12 shopping-cart-table ml-lg-4 ml-md-0">

	  <form action='handleshopping.php' method='post'>

		  <!-- Viewing OUR PRODUCTS -->		  

	  	<table class="table">
  
  <thead  class="table-head-titles ">
   	
    <tr>
      <th scope="col" class="ITEM-TITLE ">ITEM</th>

      <th scope="col">QTY</th>
      <th scope="col">Offers</th>
		
    </tr>
  </thead>
  <tbody>
	  
	  
	  

 <!-- T-SHIRTS -->
	  <tr> 
      <th scope='row'>
		<div class='row shopping-cart-product-info'>
		  <div class='col-lg-6 col-md-6 col-sm-6 order-table-img'>   <img src='product-img/download.jpg'> </div>
		  <div  class='col-lg-6 col-md-6 col-sm-6 mt-5  table-desc'> 
		 <a class=' order-table-item-desc'> T-shirt</a><br>
			  <p class=' order-item-price mt-1'> $10.99 </p> <p class='old-price '> </p>
			  <input type="hidden" value="10.99" name="price1">  
		  </div>
		  </div>
		</th> 
      <td class='shopping-cart-td' > <input type='number' id='quantity1' name='quantity1' class='form-control  table-quantity responsive-table-weight  mt-5' value="0" >
		</td> 
		<td class='shopping-cart-td' > <label class='summary-titles cleaning-title mt-4 '>  Available Offer </label>
		   <p  class='table-quantity  offer'>
       Buy two t-shirts and get a jacket half its price</p>
		  </td>
	</tr> 
	 
	  
	  
	  <!-- JACKETS --> 
	  <tr> 
	  	  <th scope='row'>
		<div class='row shopping-cart-product-info'>
			 <div class='col-lg-6 col-md-6 col-sm-6 order-table-img'>   <img src='product-img/download%20(8).jpg'> </div>
		  <div  class='col-lg-6 col-md-6 col-sm-6 mt-5  table-desc'> 
		 <a class=' order-table-item-desc'> Jacket</a><br>
			  <p class=' order-item-price mt-1'> $19.99 </p> <p class='old-price '> </p>
		<input type="hidden" value="19.99" name="price2">  
		  </div>
		  </div>
		</th> 
      <td class='shopping-cart-td' ><input type='number' id='quantity2' name='quantity2' class='form-control  table-quantity responsive-table-weight  mt-5' value="0" >
		</td> 
		<td class='shopping-cart-td' >
		</td>
	</tr>

	  
	  
	   <!-- Shoes -->
	  
	  <tr> 
      <th scope='row'>
		<div class='row shopping-cart-product-info'>
		  <div class='col-lg-6 col-md-6 col-sm-6 order-table-img'>   <img src='product-img/images.jpg'> </div>
		  <div  class='col-lg-6 col-md-6 col-sm-6 mt-5  table-desc'> 
		 <a class=' order-table-item-desc'> Shoes</a><br>
			  <p class=' order-item-price mt-1'> $24.99 </p> <p class='old-price '> </p>
		<input type="hidden" value="24.99" name="price3">  
		  </div>
		  </div>  
		</th> 
      <td class='shopping-cart-td' ><input type='number' id='quantity3' name='quantity3' class='form-control  table-quantity responsive-table-weight  mt-5' value="0"  >
		</td> 
		<td class='shopping-cart-td' > <label class='summary-titles cleaning-title mt-4 '>  Available Offer </label>
		   <p  class='table-quantity offer'>
    Shoes are on 10% off.</p>

		</td>
	</tr> 

	
	  
	  <!-- Pants --> 
	  <tr> 
      <th scope='row'>
		<div class='row shopping-cart-product-info'>
		  <div class='col-lg-6 col-md-6 col-sm-6 order-table-img'>   <img src='product-img/images%20(1).jpg'> </div>
		  <div  class='col-lg-6 col-md-6 col-sm-6 mt-5  table-desc'> 
		 <a class=' order-table-item-desc'> Pants</a><br>
			  <p class=' order-item-price mt-1'> $14.99 </p> <p class='old-price '> </p>
		<input type="hidden" value="14.99" name="price4">
		  </div>
		  </div>
		</th> 
      <td class='shopping-cart-td' ><input type='number' id='quantity4' name='quantity4' class='form-control  table-quantity responsive-table-weight  mt-5' value='0'  >
		</td> 
	</tr> 
	  
	 
	  
	  

  
	
	  

  </tbody>
</table>
		  
		 <!-- Currrencies -->
		    <div class="form-group">
    <label for="exampleFormControlSelect1" class='summary-titles  mt-4' >Select Currency</label>
    <select class="form-control" id="exampleFormControlSelect1" name="currency">
      <option value="$" >US dollar</option>
      <option value="¥" > Japanese Yen</option>
	<option value="E£"   >Egyptian Pound</option>
      <option value="SAR"  >British Pound</option>
    </select>
  </div>
		  
		  
		  <button  class="btn  mt-5 btn-danger" type="submit" name="checkout" href="payment.php">PROCEED TO CHECKOUT</button> 
	
		</form>	
	</div>
	</div>
</div>

<!-- Scripts-->
<?php include('inc/scripts.php'); ?>
	
	
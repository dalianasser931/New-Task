<?php include('inc/head.php'); ?>

<?php
$quantity1 = $_POST['quantity1'];
$quantity2 = $_POST['quantity2'];
$quantity3 = $_POST['quantity3'];
$quantity4 = $_POST['quantity4'];
$price1 = $_POST['price1'];
$price2 = $_POST['price2'];
$price3 = $_POST['price3'];
$price4 = $_POST['price4'];
$currency = $_POST['currency'];


if(isset($_POST['checkout']))
   {   // to Calc Taxes before any disc.
		$taxes =  .14 * (($price1 * $quantity1) + ($price2 * $quantity2)  + ($price3 * $quantity3) + ($price4 * $quantity4) );
$PricebeforeDisc = (($price1 * $quantity1) + ($price2 * $quantity2)  + ($price3 * $quantity3) + ($price4 * $quantity4) );
	
	//shoes offer 
		$shoesPrice = $quantity3 * (.90) * $price3; 
	$shoesDisc = ($quantity3 * $price3) - $shoesPrice;
	
		//pants Price
		$pantsPrice = $quantity4 * $price4;
	
		// T-shirts Price 
		$tshirtsPrice = $quantity1 * $price1;
	
		// cheack if t-shirts/jackets offer applied 
		if( $quantity1 >=2)
		      {// to determine number of jackets on which offer will be applied
	    if($quantity1%2 == 0)
			{
			  $number1 = $quantity1 / 2;
			    $number2=0;
		                     } 
		else 
		{  $number2 = ($quantity1 - 1)/2 ;
			 $number1=0;}
		
		//to determine if ordered jackets are more than those on which the offer will be apllied
			//In Case of being equal or smaller than apllied amount
	if( $quantity2 <= $number1 or $quantity2 <= $number2){
		$totalJacketsPrice= .5 * $price2 * $quantity2 ;
	$disc = ( $quantity2 * $price2) - $totalJacketsPrice;
	
	              }
      else
	     { //in case of being more than applied amount
if($number1 !== 0)
{
	$outOffer = ($quantity2-$number1) * $price2 ;
	$inOffer =  $number1 * $price2 * .5;
	$totalJacketsPrice = $inOffer + $outOffer;
	$disc = ( $quantity2 * $price2) - $totalJacketsPrice;
                         }
	else
	   { 
	$outOffer = ($quantity2-$number2) * $price2 ;
	$inOffer =  $number2 * $price2 * .5;
	$totalJacketsPrice = $inOffer + $outOffer;
	$disc = ( $quantity2 * $price2) - $totalJacketsPrice;
              }
}
			
	}
		//In case of No Offers Applied on Jackets
		else 
		{
			$disc = 0;
		$totalJacketsPrice  = $quantity2 * $price2;
		}
		
	// Final Calculated Price 
		$totalPrice = $totalJacketsPrice + $shoesPrice + $pantsPrice + $tshirtsPrice + $taxes ;

	// Convert from Dollar To The Other Currencies according to todays Prices  
	
		switch ($currency) 
	    	{
              case 'E£':
            $factor =15.7;
            break;
            case '¥':
            $factor = 104.66;
            break;  
			case 'SAR':
            $factor = 3.75;
            break;
            default:
            $factor = 1;
                          }
	
	
		?>
		<div class='summary-section  col-lg-3 col-md-12'>
		<div class='summary-section-layer'>		
	<div class='mt-3 container summary-content'>
		<div class='mt-3 d-flex justify-content-center'> 
		   <h3> Summary</h3>
		    </div>
	           <div class='row'>
	
	       
		<span class='col mt-3 summary-titles'> Subtotal: </span> <span class='col summary-prices ml-3 mt-3'>  <?php echo $PricebeforeDisc*$factor , $currency; ?> </span> 
		</div>
		<div class='row'>
			<span class='col mt-3 summary-titles'> Taxes: </span> <span class='col ml-3 mt-3 summary-prices'> <?php echo $taxes*$factor , $currency ?></span> </div>
	<?php
 //if there is a disc on shoes
	 if($shoesDisc > 0)
	{  echo "
		<div class='row'>
		<span class='col mt-3 summary-titles bold'>10% off shoes:  </span> <span class='col ml-3 mt-3 summary-prices'> -". $shoesDisc*$factor  ." $currency</span> </div>"; } 
	 //if there is a disc on Jackets
	 if($disc > 0)
	{ echo"
	   <div class='row'>
		<span class='col mt-3 summary-titles bold'> 50% off jacket:  </span> <span class='col ml-3 mt-3 summary-prices'> -" . $disc*$factor . " $currency</span> </div>"; } 
	?>
	<div class='row'>
		<span class='col mt-3 summary-titles bold'> Total : </span> <span class='col ml-3 mt-3 summary-prices'> <?php echo $totalPrice*$factor , $currency ; ?></span> </div>
		</div> 
			</div>	
	           <div>
				   <label for="exampleFormControlSelect1" class='summary-titles  mt-4' >*There is a 14% tax applied to all products.</label> </div></div> 
		<div class="d-flex justify-content-center mt-2 you-may-like-title"> 	<h5 class='mt-5 back-to-products shopping-cart-back-to-products mb-5'> <a href='index.php'> BACK TO SHOPPING PAGE  <i class='fas fa-arrow-right custom-fa-arrow-left '> </i> </a> </h5></div>
     <?php
          } ?>
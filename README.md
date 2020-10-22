#Full Stack Solution

The Problem Description is to Develop a program, that simulates E-COMMERCE Shopping-Cart :
   
   - Enables users to view , select products and determine quantites.
   - Enables users to select preferable Currency.
   - bill can be displayed in various currencies. 
   - Applies all available offers in apropriate way.
   - Displays an accurate detailed bill summary.
   - User-friendly interfece which provides perfect user shopping journey within the website.
   
   ** About The Solution **
  'Full Stack' solution which focuses on providing accurate results with a User-friendly interface :
 
   - Products selected by determining the desired quantity of each one (any product with no quantity entered it will be assumed as not selected and its quantity = 0 ).
   - Then various currencies are available to choose among them ( Dollar is selected by default).
   - By Pressing On "Proceed To Checkout" The system will dirclty check all available offers and apply suitable ones on your order, Calculate taxes and Net Price e.g 
                   1. The System will calculate the taxes (14% on all products) before applying any discounts or offers 
                   2. Then the system will check if you have ordered 2 items or more of t-shirts to apply the t-shirts/jackets offer, In Case of 'yes' it will calculates the 'number' of jackets on which the offer will be applied, e.g if you ordered 4 t-shirts so you will be able to enjoy the t-shirts/jacket offer on 2 jackets , and in case of ordereing 3 t-shirts you will get the offer on only one jacket etc.. Then the system will review the quantity of ordered jackets and if it exceeds the precalculated number of jackets enjoying discount , the exceeded amount will be added to your bill on Their original price  
                   3. If there are shoes ordered the system will apply the shoes (10% off) discount on each ordered shoes   
				   4. The Net Price will be caculated as Taxes plus all ordered items after applying all suitable offers and discounts 
				   5. The system will apply all 'currencies conversions' to provide accurate results according to predetermined exchange rate .
				   6.Finally, The 'Detailed Summary Bill' will be displayed in the selected currency with all paying information explained ( Price before discounts, taxes , discounts amount and The Net Price ) . 
 				 
**further development**
 -Database for storing products information, categories , clients information and orders details.
 -Login and Customer-Support Pages.
<html>
    <head>
        <title>buy page</title>
        <link href="css/checkout.css" rel="stylesheet"/>
    </head>
    <body>
        <h2><strong>CHECKOUT</strong></h2>
                <div class="one">
                <form method="post" action="checkout_submit.php">
                    <ol>
                        <li>
                            YOUR ADDRESS<br/>
                            <input type="text" name="address"/><br/>
                            <br/>
                        </li>
                        <li>
                            PAYMENT METHOD<br/>
                            <input type="radio" name="payment" value="UPI/Netbanking"/>UPI/Netbanking<br/>
                            <br/>
                            <input type="radio" name="payment" value="pay with Debit/Credit/ATM cards"/>pay with Debit/Credit/ATM cards<br/>
                            <br/>
                            <input type="radio" name="payment" value="Cash on Delivery"/>Cash on Delivery<br/>
                            <br/>
                        </li>
                        <li>
                            ITEMS AND DELIVERY<br/>
                            <br/>
                            <a href="painting_detail1.php">Go to item detail page -></a>
                            <br/>
                        </li>
                        <br/>
                        <button>PLACE ORDER</button>
                        <br/>
                    </ol>
                </form>
                </div>
    </body>

<form action="forms/orders.php" method="post">
    <label for="fname">Full name:</label><br>
    <input type="text" id="fname" name="fname" placeholder="full name"><br>
    <label for="mail">Email</label><br>
    <input type="text" id="mail" name="email" placeholder="example@domain.com"><br><br>
    <label for="phone">Phone</label><br>
    <input type="text" id="phone" name="phone" placeholder="07xxxxxxxx"><br>
    <label for="orderid">Product </label><br>
    <input type="text" id="orderid" name="order" placeholder="Your order"><br>
    <label for="address">Delivery Address</label><br>
    <input type="text" id="address" name="address" placeholder="24 Baringo road, Kahawa Sukari"><br>
    <label for="delivery">Delivery date</label><br>
    <input type="datetime-local" id="delivery" name="delivery" placeholder="dd/mm/yyyy  time"><br>
    <label for="other">Any special instructions?</label><br>
    <input type="text" id="other" name="other" placeholder="No fondant icing.."><br>
    <input type="submit" value="Submit">
</form>
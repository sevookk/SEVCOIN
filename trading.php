<!DOCTYPE html>
<html>
<head>
    <title>Crypto Trading</title>
</head>
<body>
    <h1>Welcome to Crypto Trading</h1>
    
    <!-- Display user's wallet balance and cryptocurrencies -->
    <h2>Wallet Balance</h2>
    <p>Balance: $1000</p>
    
    <h2>Available Cryptocurrencies</h2>
    <ul>
        <li>Bitcoin (BTC)</li>
        <li>Ethereum (ETH)</li>
        <li>Litecoin (LTC)</li>
    </ul>
    
    <!-- Buy Cryptocurrency Form -->
    <h2>Buy Cryptocurrency</h2>
    <form action="buy.php" method="post">
        <input type="text" name="amount" placeholder="Amount" required>
        <input type="submit" value="Buy">
    </form>
    
    <!-- Sell Cryptocurrency Form -->
    <h2>Sell Cryptocurrency</h2>
    <form action="sell.php" method="post">
        <input type="text" name="amount" placeholder="Amount" required>
        <input type="submit" value="Sell">
    </form>
</body>
</html>

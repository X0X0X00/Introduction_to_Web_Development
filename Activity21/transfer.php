
<?php
session_start();

$_SESSION['loggedin'] = true; // 模拟用户登录（演示用）

if (!isset($_SESSION['loggedin'])) {
    echo "You must be logged in to transfer money.";
    exit;
}

// Simulate transferring money
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $amount = $_POST['amount'];
    $recipient = $_POST['recipient'];

    // Simulate the money transfer
    file_put_contents('transactions.txt', "Transferred $amount to $recipient\n", FILE_APPEND);
    echo "Transferred $amount to $recipient.";
} else {
?>
    <h2>Bank Transfer</h2>
    <form method="POST" action="transfer.php">
        <input type="text" name="recipient" placeholder="Recipient Account" required>
        <input type="number" name="amount" placeholder="Amount" required>
        <button type="submit">Transfer</button>
    </form>
<?php
}
?>

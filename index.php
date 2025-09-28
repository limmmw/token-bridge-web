<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Token Bridge API</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }
        header {
            background-color: #007BFF;
            color: white;
            padding: 1rem 2rem;
            text-align: center;
        }
        main {
            padding: 2rem;
        }
        section {
            margin-bottom: 2rem;
        }
        h1, h2 {
            color: #007BFF;
        }
        code {
            background-color: #e9ecef;
            padding: 0.2rem 0.4rem;
            border-radius: 4px;
        }
        footer {
            text-align: center;
            padding: 1rem;
            background-color: #f1f1f1;
            margin-top: 2rem;
        }
    </style>
</head>
<body>
    <header>
        <h1>Token Bridge API</h1>
        <p>A simple bridge for IoT devices to interact with the server</p>
    </header>
    <main>
        <section>
            <h2>Available Endpoints</h2>
            <ul>
                <li>
                    <strong>GET /get_token</strong><br>
                    Retrieve data from the Blynk server using a token and pin.<br>
                    <code>?token=YOUR_TOKEN&V1</code>
                </li>
                <li>
                    <strong>POST /update_token</strong><br>
                    Update the token for a specific device.
                </li>
                <li>
                    <strong>POST /reset_token</strong><br>
                    Reset the token to its default value.
                </li>
            </ul>
        </section>
        <section>
            <h2>How to Use</h2>
            <p>To use this API, make sure to include the required parameters in your request. For example:</p>
            <pre>
GET /get_token?token=YOUR_TOKEN&V1
            </pre>
            <p>Replace <code>YOUR_TOKEN</code> with your actual token and <code>V1</code> with the desired pin.</p>
        </section>
        <section>
            <h2>Notes</h2>
            <ul>
                <li>Ensure your token is valid and active.</li>
                <li>Use a secure connection when sending sensitive data.</li>
                <li>Contact the administrator if you encounter issues.</li>
            </ul>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 Token Bridge API</p>
    </footer>
</body>
</html>
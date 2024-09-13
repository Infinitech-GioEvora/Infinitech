<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms and Conditions - Infinitech Advertising Corporation</title>

    @include('Layout/Header')

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #4077bb;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 40px auto;
            padding: 2rem 0;
        }

        h1, h2 {
            font-family: 'Playfair Display', serif;
            text-align: center;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: #1f62b3;
        }

        section {
            background-color:  #8ba3c7;
            padding: 3rem;
            border-radius: 10px;
            margin-bottom: 3rem;
            border: 2px solid #1f62b3;
        }

        p {
            line-height: 1.6;
            font-size: 1.1rem;
            color: #333;
        }

        ul {
            list-style-type: disc;
            margin-left: 20px;
        }
    </style>
</head>

<body>

    <!-- Navigation Bar -->
    @include('Layout/Navigation')

    <main>
        <section>
            <div class="container">
                <h1>Infinitech Advertising Corporation</h1>
                <h2>Terms & Conditions</h2>
                <p>Welcome to Infinitech Advertising Corporation! These terms and conditions outline the rules and regulations for the use of our website.</p>
                
                <p><strong>1. Acceptance of Terms:</strong> By accessing this website, you accept these terms and conditions in full. Do not continue to use the Infinitech Advertising Corporation website if you do not accept all of the terms and conditions stated on this page.</p>

                <p><strong>2. License to Use Website:</strong> Unless otherwise stated, Infinitech Advertising Corporation owns the intellectual property rights for all material on this website. You may view and/or print pages from https://infinitechphil.com for your personal use subject to the restrictions outlined below:</p>
                <ul>
                    <li>Do not republish material from this website.</li>
                    <li>Do not sell, rent, or sub-license material from the website.</li>
                    <li>Do not reproduce, duplicate, or copy material for commercial purposes.</li>
                </ul>

                <p><strong>3. User Information:</strong> We collect basic information such as your name, email, website, and mobile phone to ensure seamless communication and service delivery. This information will not be used for any purpose other than the intended services.</p>

                <p><strong>4. Limitation of Liability:</strong> Infinitech Advertising Corporation shall not be held liable for any damages arising from the use or inability to use the materials on this website, even if Infinitech or its authorized representative has been notified orally or in writing of the possibility of such damage.</p>

                <p><strong>5. Governing Law:</strong> These terms and conditions are governed by and construed in accordance with the laws of the Philippines, and you irrevocably submit to the exclusive jurisdiction of the courts in that location.</p>
            </div>
        </section>
    </main>
    @include('Layout/Script')
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy - Infinitech Advertising Corporation</title>
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
                <h2>Privacy Policy</h2>
                <p>At Infinitech Advertising Corporation, we respect and value your privacy. This privacy policy outlines how we collect, use, and protect your personal information.</p>

                <p><strong>1. Information We Collect (Email Inquiry):</strong></p>
                <ul>
                    <li>Your name, email address, website URL, and mobile phone number for the purpose of communication and service delivery.</li>
                </ul>

                <p><strong>2. Use of Collected Information:</strong> The information we collect is used solely to enhance your experience with Infinitech Advertising Corporation and provide you with the best possible services. This includes, but is not limited to:</p>
                <ul>
                    <li>Contacting you with updates or information relevant to your inquiries or orders.</li>
                    <li>Responding to your queries or providing you with requested services.</li>
                </ul>

                <p><strong>3. Data Security:</strong> We are committed to ensuring that your information is secure. In order to prevent unauthorized access or disclosure, we have put in place suitable physical, electronic, and managerial procedures to safeguard and secure the information we collect online.</p>

                <p><strong>4. Sharing Your Information:</strong> We do not share, sell, or distribute your personal information to third parties unless required by law.</p>

                <p><strong>5. Changes to the Privacy Policy:</strong> Infinitech Advertising Corporation may revise this Privacy Policy from time to time. Continued use of this website after any changes to the Privacy Policy implies your acceptance of those changes.</p>

                <p><strong>6. Contact Us:</strong> If you have any questions about this Privacy Policy, please contact us at infinitechcorp.ph@gmail.com.</p>
        </section>
    </main>
    @include('Layout/Script')
    @include('Layout/Footer')
</body>

</html>

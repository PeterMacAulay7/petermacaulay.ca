<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact ME?</title>
    <link rel="icon" type="" href="PMsignature.png">
    <link rel="stylesheet" href="style.css">
</head>

<style>
    .contact_box{
        border-radius: 15;
    }
</style>
<body>
    <?php include 'includes/header.php'; ?>
    <h1>
        Contact : &#41
    </h1>
    <main>
        <?php include 'includes/left-sidebar.php'; ?>
        <div class="main-content">
            <form id="contact_box" action="send_mail.php" method="POST">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name.." required><br><br>

                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name.." required><br><br>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Your email.." required><br><br>

                <label for="subject">Message</label><br>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px" required></textarea><br>

                <!-- Honeypot field (hidden from humans, bots often fill it) -->
                <input type="text" name="website" style="display:none">

                <input type="submit" value="Submit">
            </form>
        </div>
        <?php include 'includes/right-sidebar.php'; ?>
    </main>
    <?php include 'includes/footer.php'; ?>
</body>
</html>
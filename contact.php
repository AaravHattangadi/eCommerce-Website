<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Furnisure</title>
    <link rel="stylesheet" href="contact.css"> 
</head>
<body>
<header>
        <div class="container">
      
            <nav>
              <ul>
                <li><a href="./index.html">Home</a></li>
                <li><a href="./chairs.html">Chairs</a></li>
                <li><a href="./tables.html">Tables</a></li>
                <li><a href="./beds.html">Beds</a></li>
                <li><a href="./sofas.html">Sofas</a></li>
                <li><a href="./contact.php">Contact</a></li>
              </ul>
            </nav>
          </div>
    </header>   
    <main>
        <p>Can't the perfect piece for your house? Contact Us</p>
        <form action="contactform.php" class="contact-form" method="post">
            <input type="text" name="name" placeholder="Full Name">
            <input type="text" name="email" placeholder="Your Email">
            <input type="text" name="subject" placeholder="Reason">
            <textarea name="message" cols="10" rows="10"></textarea>
            <button type="submit" name="submit" class="subBtn">Submit</button>
        </form>
    </main>
</body>
</html>
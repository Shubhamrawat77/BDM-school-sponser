<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Donate.css">
    <title>Donate Form</title>
</head>
<body>
    <section>
    <h1 id="top_heading">Thank you for becoming a BDM School Sponsor!</h1>
        <div class="thanks">
            <p>Sponsorship is the start of a beautiful relationship. The Sponsor and Child correspond and communicate throughout the child's life. 100% of your Sponsorship Donation goes directly to funding the education, nutrition, and healthcare of your sponsored child. It is not just charity, it is an investment in a child's life. Thank you for joining our journey!</p>
        </div>
        <div class="section2">
        <div class="form_container">
            <header class="header">
            <h3>Donation Form</h3>
                    <p>Please fill this form in a decent manner. You may or may not identify yourself when making a donation. </p>
            </header>
                <form class="form" action="#">
                <h5>Donor Details</h5>
                <div class="column">
                    <div class="details">
                        <label for="name">First Name</label>
                        <input type="text" name="name" id="name" placeholder="first name">
                    </div>
                    <div class="details">
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" id="lname" placeholder="Last name">
                    </div>
                </div>
                <div class="details">
                    <label for="gmail">G-mail</label>
                    <input type="email" name="gmail" id="gmail" placeholder="Ex- myname@example">
                </div>
                <div class="details">
                    <label for="contact">Contact no.</label>
                    <input type="tel" name="contact" id="contact" placeholder="00000000">
                </div>
                <div class="details">
                    <label for="donation">Donation For</label>
                    <select name="donation" id="donation">
                        <option value="">Please Select</option>
                        <option value="BDM School">BDM School</option>
                        <option value="stu1">Student1</option>
                        <option value="stu2">Student2</option>
                        <option value="stu3">Student3</option>
                    </select>
                </div>
                <div class="details">
                    <label for="amount">Amount</label>
                    <input type="number" name="amount" id="amount" value="1000.00">
                </div>
                <div class="scan">
                    <img src="img\upi.jpg" alt="upi">
                </div>
                <div class="s_file">
                    <label for="SS">
                        Attach Payment Screenshot  <span>*</span>
                    </label>
                    <input type="file" name="SS" id="SS" accept="image/*,.pdf" required>
                </div>
                <div class="btn">
                    <button type="submit">Submit</button>
                </div>
                </form>
            </div>
            </div>
    </section>
</body>
</html>
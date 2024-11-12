<?php
include("header.html");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .btn-special-2 {
            padding: 12px 24px;
            background-color: white;
            color: hsl(243, 80%, 62%);
            border-radius: 6px;
            border: 2px hsl(243, 80%, 62%) solid;
            transition: transform 250ms ease-in-out;
        }

        .btn-special-2:hover {
            transform: scale(1.10);
        }

        .btn-special-2:active {
            transform: scale(.9);
        }

        #footersection {
            margin-top: 70px;
        }

        .h2_1 {
            text-align: center;
            margin-top: 30px;
        }
        
        /* Custom styles for dropdown */
        select {
            padding: 12px 24px;
            border-radius: 6px;
            border: 2px solid hsl(243, 80%, 62%);
            background-color: white;
            color: hsl(243, 80%, 62%);
            font-size: 16px;
        }

        select:focus {
            outline: none;
            border-color: hsl(243, 80%, 62%);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="h2_1">Select Constituency</h2>
                <!-- Dropdown for selecting constituency -->
                <form action="candidate.php" method="get" style="margin-top: 50px;">
                    <select name="constituency" required>
                        <option value="" disabled selected>Select your constituency</option>
                        <option value="Araku">Araku - ST</option>
                        <option value="Srikakulam">Srikakulam - None</option>
                        <option value="Vizianagaram">Vizianagaram - None</option>
                        <option value="Visakhapatnam">Visakhapatnam - None</option>
                        <option value="Anakapalli">Anakapalli - None</option>
                        <option value="Kakinada">Kakinada - None</option>
                        <option value="Amalapuram">Amalapuram - SC</option>
                        <option value="Rajahmundry">Rajahmundry - None</option>
                        <option value="Narasapuram">Narasapuram - None</option>
                        <option value="Eluru">Eluru - None</option>
                        <option value="Machilipatnam">Machilipatnam - None</option>
                        <option value="Vijayawada">Vijayawada - None</option>
                        <option value="Guntur">Guntur - None</option>
                        <option value="Narasaraopet">Narasaraopet - None</option>
                        <option value="Bapatla">Bapatla - SC</option>
                        <option value="Ongole">Ongole - None</option>
                        <option value="Nandyal">Nandyal - None</option>
                        <option value="Kurnool">Kurnool - None</option>
                        <option value="Anantapur">Anantapur - None</option>
                        <option value="Hindupur">Hindupur - None</option>
                        <option value="Kadapa">Kadapa - None</option>
                        <option value="Nellore">Nellore - None</option>
                        <option value="Tirupati">Tirupati - SC</option>
                        <option value="Rajampet">Rajampet - None</option>
                        <option value="Chittoor">Chittoor - None</option>
                    </select><br>  <br>
                    
                    <button type="submit" class="btn-special-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php
include("footer.html");
?>

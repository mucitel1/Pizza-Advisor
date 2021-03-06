<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Pizza Advisor | Maribor</title>
<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">
<script src="http://maps.googleapis.com/maps/api/js"></script>

<link rel="stylesheet" href="css/jquery.dataTables.css">
<!--<link rel="stylesheet" href="css/dataTables.bootstrap.css">
Not using bootstrap style because it looks weird.-->
<script src="js/jquery.dataTables.js"></script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<header>
		<img src="images/2000x200.png" width="100%" height="auto" alt="Replace with pizza"/>
    </header>
<div class="container" align="center">
	<nav>
    	<a href="index.php" class="btn btn-default" role="button">Domov</a>
      <a href="naj_pizze.php" class="btn btn-info" role="button">Naj Pizzarije</a>
      <a href="oceni.php" class="btn btn-default" role="button">Oceni</a>
      <a href="prijava.php" class="btn btn-default" role="button">Prijavi se</a>
    </nav>
    <div class="content">
    <div class="row">
      <div class="col-xs-10 col-lg-2 col-md-12">
        <h2 align="left">Naj pizzarije</h2>
        </div>
        <div class="col-xs-10 col-lg-10 col-md-10" align="right">
       <!-- Disabling search because we don't need it here
        <form>
          <input type="search" class="text" placeholder="Vnesite ime pizzarije...">
          <input align="right" class="btn btn-info" type="submit" value="Išči!">
        </form>-->
        </div>
     </div>

     <div class="row">
     <table id="table_id" class="display">
    <thead>
        <tr>
            <th>Restavracija</th>
            <th>Naslov</th>
            <th>Cena bona</th>
            <th>URL</th>
            <th>Dostava</th>
            <th>Ocena</th>
        </tr>
    </thead>
    <tbody>
        <tr> 
            <td>AL Pachino</td>
            <td>Gosposvetska cesta 87, Maribor</td>
            <td>2.79€</td>
            <td><a href="https://www.studentska-prehrana.si/Pages/RestaurantInfo.aspx?e_restaurant=ZU78WARFE8GYVDEPJ7AGMC5BQ2&feature=0" target="_blank">Povezava</a></td>
            <td>Ne</td>
            <td>1</td>
        </tr>
        <tr>
            <td>Astoria City Cusine</td>
            <td>Slovenska ulica 2, Maribor</td>
            <td>3.47€</td>
            <td><a href="https://www.studentska-prehrana.si/Pages/RestaurantInfo.aspx?e_restaurant=ERGPN9FPFUD29RFVQ2D4D7KQY2&feature=0" target="_blank">Povezava</a></td>
            <td>Ne</td>
            <td>1</td>
        </tr>
        <tr>
            <td>Bowling center Strike</td>
            <td>Špelina ulica 17a, Maribor</td>
            <td>2.87€</td>
            <td><a href="https://www.studentska-prehrana.si/Pages/RestaurantInfo.aspx?e_restaurant=RT48BS8UHK4S6PJS3STE2JK86A&feature=0" target="_blank">Povezava</a></td>
            <td>Ne</td>
            <td>1</td>
        </tr>
        <tr>
            <td>Bruc bar</td>
            <td>Razlagova 9, Maribor</td>
            <td>1.5€</td>
            <td><a href="https://www.studentska-prehrana.si/Pages/RestaurantInfo.aspx?e_restaurant=9U4R2KRM43R6XNHLH5KCFFHYHQ&feature=0" target="_blank">Povezava</a></td>
            <td>Ne</td>
            <td>1</td>
        </tr>
        <tr>
            <td>Da noi fast food</td>
            <td>Ulica Eve Lovše 1, Maribor</td>
            <td>0.5€</td>
            <td><a href="https://www.studentska-prehrana.si/Pages/RestaurantInfo.aspx?e_restaurant=KM8R8YBBFGETM4BUBBZ8JXCV7S&feature=0" target="_blank">Povezava</a></td>
            <td>Ne</td>
            <td>1</td>
        </tr>
        <tr>
            <td>Eat smart</td>
            <td>Strossmayerjeva 13, Maribor</td>
            <td>0€</td>
            <td><a href="https://www.studentska-prehrana.si/Pages/RestaurantInfo.aspx?e_restaurant=XL4HEEX4W4R8VPSGKDN6RSQVCA&feature=0" target="_blank">Povezava</a></td>
            <td>Ne</td>
            <td>1</td>
        </tr>
        <tr>
            <td>Fresh 4 life</td>
            <td>Trg Borisa Kidriča 2, Maribor</td>
            <td>0€</td>
            <td><a href="https://www.studentska-prehrana.si/Pages/RestaurantInfo.aspx?e_restaurant=J7356DE7XRWV4S3G2LB6AXNRS3&feature=0" target="_blank">Povezava</a></td>
            <td>Ne</td>
            <td>1</td>
        </tr>
        <tr>
            <td>Galerija, Urška Kocbek s.p.</td>
            <td>Gregorčičeva ulica 19, Maribor</td>
            <td>2.67€</td>
            <td><a href="https://www.studentska-prehrana.si/Pages/RestaurantInfo.aspx?e_restaurant=VVZ69BCNG448CDMLHESWHYLRJS&feature=0" target="_blank">Povezava</a></td>
            <td>Ne</td>
            <td>1</td>
        </tr>
        <tr>
            <td>Gurmanski hram</td>
            <td>Zagrebška cesta 92, Maribor</td>
            <td>2.07€</td>
            <td><a href="https://www.studentska-prehrana.si/Pages/RestaurantInfo.aspx?e_restaurant=6AKST9L2VQNLQR6UUBE53W5F8W&feature=0" target="_blank">Povezava</a></td>
            <td>Da</td>
            <td>1</td>
        </tr>
        <tr>
            <td>HITRI GONZALES</td>
            <td>Na Poljanah 18, Maribor</td>
            <td>3.9€</td>
            <td><a href="https://www.studentska-prehrana.si/Pages/RestaurantInfo.aspx?e_restaurant=V4WNAETFZP3XHCFUUFEVQZPQPS&feature=0" target="_blank">Povezava</a></td>
            <td>Ne</td>
            <td>1</td>
        </tr>
        <tr>
            <td>Kanape</td>
            <td>Gosposvetska cesta 15, Maribor</td>
            <td>0€</td>
            <td><a href="https://www.studentska-prehrana.si/Pages/RestaurantInfo.aspx?e_restaurant=A3GVLGELFCPTGY9UECMW94CA2W&feature=0" target="_blank">Povezava</a></td>
            <td>Ne</td>
            <td>1</td>
        </tr>
        <tr>
            <td>Kavarna MM Panda</td>
            <td>Partizanska cesta 3, Maribor</td>
            <td>2€</td>
            <td><a href="https://www.studentska-prehrana.si/Pages/RestaurantInfo.aspx?e_restaurant=2BNX7X526P26F6UKJ7L5VKSHUZ&feature=0" target="_blank">Povezava</a></td>
            <td>Ne</td>
            <td>1</td>
        </tr>
        <tr>
            <td>Kavarna Stil Burger</td>
            <td>Koroška cesta 59, Maribor</td>
            <td>1.17€</td>
            <td><a href="https://www.studentska-prehrana.si/Pages/RestaurantInfo.aspx?e_restaurant=3JS68SBS3TNNV5JYNMBLCG2JJX&feature=0" target="_blank">Povezava</a></td>
            <td>Ne</td>
            <td>1</td>
        </tr>
        <tr>
            <td>LEON GOOD FOOD & MOOD</td>
            <td>Ulica Vita Kraigherja 3, Maribor</td>
            <td>3.9€</td>
            <td><a href="https://www.studentska-prehrana.si/Pages/RestaurantInfo.aspx?e_restaurant=45XXXQURZ5WC3RBC4AYHRNSPU2&feature=0" target="_blank">Povezava</a></td>
            <td>Ne</td>
            <td>1</td>
        </tr>
        <tr>
            <td>Lunch box</td>
            <td>Gosposvetska cesta 19, Maribor</td>
            <td>0€</td>
            <td><a href="https://www.studentska-prehrana.si/Pages/RestaurantInfo.aspx?e_restaurant=HNC2PZ24NXNQLARMNH45L4RF5S&feature=0" target="_blank">Povezava</a></td>
            <td>Ne</td>
            <td>1</td>
        </tr>
        <tr>
            <td>Mango Snacks</td>
            <td>Turnerjeva ulica 17, Maribor</td>
            <td>0€</td>
            <td><a href="https://www.studentska-prehrana.si/Pages/RestaurantInfo.aspx?e_restaurant=UCQPFEGEJZEKS48LP2MYMT8BPA&feature=0" target="_blank">Povezava</a></td>
            <td>Ne</td>
            <td>1</td>
        </tr>
        <tr>
            <td>Okrepčevalnica MM PANDA</td>
            <td>Koroška cesta 9, Maribor</td>
            <td>2€</td>
            <td><a href="https://www.studentska-prehrana.si/Pages/RestaurantInfo.aspx?e_restaurant=VU22LCF8E55DQD3JNZKKXHX4GQ&feature=0" target="_blank">Povezava</a></td>
            <td>Ne</td>
            <td>1</td>
        </tr>
        <tr>
            <td>Okrepčevalnica Pikapolonica</td>
            <td>Gosposvetska cesta 15, Maribor</td>
            <td>2€</td>
            <td><a href="https://www.studentska-prehrana.si/Pages/RestaurantInfo.aspx?e_restaurant=F2RY3MAZQ5FLJEU4X2F6V2UGBQ&feature=0" target="_blank">Povezava</a></td>
            <td>Ne</td>
            <td>1</td>
        </tr>
        <tr>
            <td>Okrepčevalnica Pivnica Alf</td>
            <td>Koroška cesta 5, Maribor</td>
            <td>2.8€</td>
            <td><a href="https://www.studentska-prehrana.si/Pages/RestaurantInfo.aspx?e_restaurant=VBMFLYCJYAV7E4JXKJA38R3E3Z&feature=0" target="_blank">Povezava</a></td>
            <td>Da</td>
            <td>1</td>
        </tr>
        <tr>
            <td>Pek Matjaž Razlagova</td>
            <td>Razlagova 9, Maribor</td>
            <td>0€</td>
            <td><a href="https://www.studentska-prehrana.si/Pages/RestaurantInfo.aspx?e_restaurant=RS2ES2BQ84YS7EF6N6KYAAXDSX&feature=0" target="_blank">Povezava</a></td>
            <td>Ne</td>
            <td>1</td>
        </tr>
        <tr>
            <td>Pek Matjaž Trubarjeva</td>
            <td>Trubarjeva 9, Maribor</td>
            <td>0€</td>
            <td><a href="https://www.studentska-prehrana.si/Pages/RestaurantInfo.aspx?e_restaurant=VCNPJL7M8VNK59NCRXTWLQKEPW&feature=0" target="_blank">Povezava</a></td>
            <td>Ne</td>
            <td>1</td>
        </tr>
        <tr>
            <td>Pek Matjaž Tyrševa</td>
            <td>Tyrševa 12, Maribor</td>
            <td>0€</td>
            <td><a href="https://www.studentska-prehrana.si/Pages/RestaurantInfo.aspx?e_restaurant=4M9C9J453P3G4PNBEK7AKKSDSW&feature=0" target="_blank">Povezava</a></td>
            <td>Ne</td>
            <td>1</td>
        </tr>
        <tr>
            <td>Pizzeria in špagetarija Da noi</td>
            <td>Ulica Eve Lovše 1, Maribor</td>
            <td>2.99€</td>
            <td><a href="https://www.studentska-prehrana.si/Pages/RestaurantInfo.aspx?e_restaurant=4PHB4J2Z49J7WMBJ3DTNGQF6JQ&feature=0" target="_blank">Povezava</a></td>
            <td>Ne</td>
            <td>1</td>
        </tr>
        <tr>
            <td>Pizzeria in špageteria Al Capone</td>
            <td>Pobreška cesta 18, Maribor</td>
            <td>2.99€</td>
            <td><a href="https://www.studentska-prehrana.si/Pages/RestaurantInfo.aspx?e_restaurant=5SBTX8XJ9HYRTMRPTFT9NHEB6S&feature=0" target="_blank">Povezava</a></td>
            <td>Ne</td>
            <td>1</td>
        </tr>
        <tr>
            <td>Pronto</td>
            <td>Koroška cesta 60, Maribor</td>
            <td>2.2€</td>
            <td><a href="https://www.studentska-prehrana.si/Pages/RestaurantInfo.aspx?e_restaurant=PL5WYJ8H4DU7AHP6KB66ASXQTZ&feature=0" target="_blank">Povezava</a></td>
            <td>Da</td>
            <td>1</td>
        </tr>
        <tr>
            <td>Restavracija Ancora</td>
            <td>Jurčičeva ulica 7, Maribor</td>
            <td>3.47€</td>
            <td><a href="https://www.studentska-prehrana.si/Pages/RestaurantInfo.aspx?e_restaurant=XPH43P9S9CXZEV8U9VU2WA5EC3&feature=0" target="_blank">Povezava</a></td>
            <td>Ne</td>
            <td>1</td>
        </tr>
        <tr>
            <td>Restavracija S</td>
            <td>Smetanova ulica 20, Maribor</td>
            <td>2.5€</td>
            <td><a href="https://www.studentska-prehrana.si/Pages/RestaurantInfo.aspx?e_restaurant=TLWF7QK66XZ5WB2EH9BJZWY97W&feature=0" target="_blank">Povezava</a></td>
            <td>Ne</td>
            <td>1</td>
        </tr>
        <tr>
            <td>Romska restavracija - Romani kafenava</td>
            <td>Gorkega 34, Maribor</td>
            <td>3.27€</td>
            <td><a href="https://www.studentska-prehrana.si/Pages/RestaurantInfo.aspx?e_restaurant=VKQ968SPAX4SP43EKV9YLXM3MZ&feature=0" target="_blank">Povezava</a></td>
            <td>Ne</td>
            <td>1</td>
        </tr>
        <tr>
            <td>Tasty snacks</td>
            <td>Cafova ulica 4, Maribor</td>
            <td>0€</td>
            <td><a href="https://www.studentska-prehrana.si/Pages/RestaurantInfo.aspx?e_restaurant=H4WWHRAU8AZNB2XL8DULJ2PBRW&feature=0" target="_blank">Povezava</a></td>
            <td>Ne</td>
            <td>1</td>
        </tr>
        <tr>
            <td>Taverna Sicilia</td>
            <td>Ulica Heroja Nandeta 31, Maribor</td>
            <td>3.27€</td>
            <td><a href="https://www.studentska-prehrana.si/Pages/RestaurantInfo.aspx?e_restaurant=DVZNAFTH8GZ3S7NP7WQTRVYU6S&feature=0" target="_blank">Povezava</a></td>
            <td>Da</td>
            <td>1</td>
        </tr>
        <tr>
            <td>Tottapizza</td>
            <td>Puhova ulica 1, Maribor</td>
            <td>2.9€</td>
            <td><a href="https://www.studentska-prehrana.si/Pages/RestaurantInfo.aspx?e_restaurant=F6YXD8VEHCL3FHCQXQZS9XXX5W&feature=0" target="_blank">Povezava</a></td>
            <td>Ne</td>
            <td>1</td>
        </tr>
        <tr>
            <td>Trattoria Padrino</td>
            <td>Žitna ulica 12, Maribor</td>
            <td>3€</td>
            <td><a href="https://www.studentska-prehrana.si/Pages/RestaurantInfo.aspx?e_restaurant=EFNDFZHEWY59MBCURG7TA68NGZ&feature=0" target="_blank">Povezava</a></td>
            <td>Ne</td>
            <td>1</td>
        </tr>
        <tr>
            <td>Un momento-pizza time</td>
            <td>Pobreška cesta 18, Maribor</td>
            <td>0.5€</td>
            <td><a href="https://www.studentska-prehrana.si/Pages/RestaurantInfo.aspx?e_restaurant=WSZ4Z4KSQJ2S6ZAPE58Q4KKP23&feature=0" target="_blank">Povezava</a></td>
            <td>Ne</td>
            <td>1</td>
        </tr>
        <tr>
            <td>VERDI</td>
            <td>Dravska ulica 8, Maribor</td>
            <td>1.97€</td>
            <td><a href="https://www.studentska-prehrana.si/Pages/RestaurantInfo.aspx?e_restaurant=JP226KVASKGXC8P3N7DDUJWVWW&feature=0" target="_blank">Povezava</a></td>
            <td>Ne</td>
            <td>1</td>
        </tr>
        <tr>
            <td>Vivaldi</td>
            <td>Borštnikova ulica 33a, Maribor</td>
            <td>3€</td>
            <td><a href="https://www.studentska-prehrana.si/Pages/RestaurantInfo.aspx?e_restaurant=RGHJ8V7Y7Y46KQJV55ABZR4KBW&feature=0" target="_blank">Povezava</a></td>
            <td>Da</td>
            <td>1</td>
        </tr>
        <tr>
            <td>Žito Maribor Center</td>
            <td>Trg revolucije 2, Maribor</td>
            <td>1.6€</td>
            <td><a href="https://www.studentska-prehrana.si/Pages/RestaurantInfo.aspx?e_restaurant=B8TB2RRQCZLSU9VHLVQUDBH55Q&feature=0" target="_blank">Povezava</a></td>
            <td>Ne</td>
            <td>1</td>
        </tr>
    </tbody>
</table>
     </div>
  </div>
<div class="row">
<!-- Quick and dirty way to add maps-->
<iframe src="https://www.google.com/maps/d/u/0/embed?mid=zM-OEEZ-hZCk.kBqcu6_hs104" style="width: 90%; height: 320px;"></iframe></div>
<footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p>Copyright © Pizza Advisor | Maribor. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dataTables.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>

<script>
$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>
</div>
</body>
</html>

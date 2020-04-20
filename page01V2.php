<?php




?>
    <html>
<head>
    <title>Liste des produit</title>
    <style> @import url(assets/css/filecss.css)</style>
    <script> @import url(assets/js/filejs.js)</script>
    <link href="assets/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="assets/css/bootstrap.css" rel="stylesheet" media="screen">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/business-casual.min.css" rel="stylesheet">
    <script>
        function ajouter1() {
        f1.nomartecle.value+=f1.nom1.value;
        var pr=f1.prix1.value;
        var b=f1.prixartecle.value;
            c=parseFloat(pr);
            d=parseFloat(b);
             f1.prixartecle.value=c+d;
        }
        function ajouter2() {
            f1.nomartecle.value+=f1.nom2.value;
            var pr=f1.prix2.value;
            var b=f1.prixartecle.value;
            c=parseFloat(pr);
            d=parseFloat(b);
            f1.prixartecle.value=c+d;
        }
        function ajouter3() {
            f1.nomartecle.value+=f1.nom3.value;
            var pr=f1.prix3.value;
            var b=f1.prixartecle.value;
            c=parseFloat(pr);
            d=parseFloat(b);
            f1.prixartecle.value=c+d;
        }
        function ajouter4() {
            f1.nomartecle.value+=f1.nom4.value;
            var pr=f1.prix4.value;
            var b=f1.prixartecle.value;
            c=parseFloat(pr);
            d=parseFloat(b);
            f1.prixartecle.value=c+d;
        }
        function ajouter5() {
            f1.nomartecle.value+=f1.nom5.value;
            var pr=f1.prix5.value;
            var b=f1.prixartecle.value;
            c=parseFloat(pr);
            d=parseFloat(b);
            f1.prixartecle.value=c+d;
        }
    </script>
</head>
<body >
<form name="f1" id="haut" method="post" action="page2.php" >



<div class="thumbnail">
                  <img style="width: 300px; height: 200px;" alt="300x200" src="assets/img/image12.jpg" width="250">
                  <div class="caption">
                    <h3><input type="text" value="i12  " name="nom1" readonly></h3>
                    <p><input type="text" value="135" name="prix1" readonly>dh <br> G2020</p>
                      <p><input class="btn btn-primary"name="achete1" type="button" value="Achete" onclick="ajouter1()"> </p>
                  </div>
                </div>
    <div class="thumbnail">
                  <img style="width: 300px; height: 200px;" alt="300x200" src="assets/img/image13.jpg" width="250">
                  <div class="caption">
                    <h3><input type="text" value="NIA  " name="nom2" readonly></h3>
                    <p><input type="text" value="100" name="prix2" readonly>dh <br> G2020</p>
                    <p><input class="btn btn-primary"name="achete2" type="button" value="Achete" onclick="ajouter2()"> </p>
                  </div>
                </div>
    <div class="thumbnail">
        <img style="width: 300px; height: 200px;" alt="300x200" src="assets/img/image14.jpg" width="250">
        <div class="caption">
            <h3><input type="text" value="Kingston-16-GB  " name="nom3" readonly></h3>
            <p><input type="text" value="60" name="prix3" readonly>dh <br> </p>
            <p><input class="btn btn-primary"name="achete3" type="button" value="Achete" onclick="ajouter3()"> </p>
        </div>
    </div>
    <div class="thumbnail">
        <img style="width: 300px; height: 200px;" alt="300x200" src="assets/img/image20.jpg" width="250">
        <div class="caption">
            <h3><input type="text" value="i15  " name="nom4" readonly></h3>
            <p><input type="text" value="30" name="prix4" readonly >dh <br> </p>
            <p><input class="btn btn-primary"name="achete4" type="button" value="Achete" onclick="ajouter4()"> </p>
        </div>
    </div>
    <div class="thumbnail">
        <img style="width: 300px; height: 200px;" alt="300x200" src="assets/img/image24.jpg" width="250">
        <div class="caption">
            <h3><input type="text" value="USB-16-GB  " name="nom5" readonly> </h3>
            <p><input type="text" value="60" name="prix5" readonly>dh <br> 110 mb/s <br>SONY</p>
            <p><input class="btn btn-primary"name="achete5" type="button" value="Achete" onclick="ajouter5()"> </p>
        </div>
    </div>
    <a href="#haut"> <h6> click ici pour allez en haut </h6></a>
    Nom:<input readonly name="nomartecle"  value="">
<br>
Prix: <input type="text" readonly value="0" name="prixartecle">
    <br>
    <a href="page2.php"> <input class="btn btn-primary"name="valider" type="submit" value="Valider"> </a>
    <input class="btn btn-primary"name="Annuler" type="reset" value="Annuler">
</form>
</body>
</html>


<?php 
  require "header.php"
?>
<?php
  if($_SESSION['open'] == 1){
?>
  <h1 class="title">Infos générales de la campagne</h1><br>
  <hr>
  <div class="gridgarden">
    <div class="mlr-0">
        <div class="row">
          <div style="justify-content: center">
            <strong>Site de fabrication (déposant)</strong> <input type="text" name="deposant" placeholder="Entrez un site de fabrication" value=" <?php if (isset($_POST['deposant'])){ echo htmlentities(trim($_POST['deposant'])); } ?>">
            <br>
              <strong>Libellé campagne :</strong> <input type="text" name="libelle" placeholder="Entrez un libellé" value=" <?php if (isset($_POST['libelle'])){ echo htmlentities(trim($_POST['libelle']));} ?>">
            <br><br>
            Date de dépôt prévisionnelle :
            <input type="date" name="date" min="<?php $Date = date() ?>" placeholder="Année-mois-jour" value=" <?php if (isset($_POST['date'])){ echo htmlentities(trim($_POST['date']));} ?> ">
            <br><br>
            <strong>Produit :</strong>
            <select class="duration" name="produit" required><br><br>
              <?php
                $g2 = "G2 - G2 Premium";
                $g4 = "G4 - G4 Premium";
                $lrci = "LRCI - LR CI Premium";
                $option = "<option>";
                $noption = "</option>";
                echo $option . $g2 . $noption;
                echo $option . $g4 . $noption;
                echo $option . $lrci . $noption;   
              ?>
            </select><br><br>
            <strong>Format des plis :</strong>
            <select class="duration" name="lettre" required><br><br>
              <?php
                $pl = "PL - Petite Lettre";
                $gl = "GL - Grande Lettre";
                echo "<option value='pl'>" . $pl . $noption;
                echo "<option value='gl'>" . $gl . $noption;
              ?>
            </select><br><br>
            <strong>Contenant :</strong> <select class="duration" name="contenant">
            <?php
              $ke = "KE7 (jusqu'au format C5)";
              $bak = "BAK (format supérieur au C5)";
              //if pl selectionné $variable = "KE7" else $variable="BAK"
              if($_POST['lettre'] == "gl"){
                echo $option . $ke . $noption;
              }
            ?>
            </select>

            <p>Options pour le lotissement :
            Séparations autorisées</p>
            
            <script type="text/javascript">
              function detecter() {
                if (document.getElementById("check1").checked == true) {
                    document.getElementById("check2").style.display = "inline";
                    document.getElementById("pcheck2").style.display = "inline";
                    document.getElementById("attention").style.display = "block";
                }
                if (document.getElementById("check1").checked == false) {
                    document.getElementById("check2").style.display = "none";
                    document.getElementById("pcheck2").style.display = "none";
                    document.getElementById("attention").style.display = "none";
                }
              }
              function ChangeStatut() {
                if (document.getElementById("check2").checked == true) {
                    document.getElementById("attention").style.display = "block";
                }
                if (document.getElementById("check2").checked == false) {
                    document.getElementById("attention").style.display = "none";
                }
              }
            </script>
            
            <br><input type="checkbox" id="case1" name="groupe1" value="departement" checked />
            <label for="case1">Département</label>
            <input type="checkbox" id="case2" name="groupe2" value="france" checked />
            <label for="case2">Toute France</label><br>
            <input type="checkbox" id="check1" value="cpinconnu" name="cpinconnu" checked onClick="detecter()"/>
            <label for="check1">Conserver les CP inconnus</label><br>
            
                <input type="checkbox" id="check2" value="cperror" name="cperror" onClick="ChangeStatut()" checked/>
                <label for="check2" id="pcheck2">Accepter les CP erronées de moins de 5 caractères</label>
                <img for="check2" id="attention" style="width: 25px; height:25px; float: right;" src="../img/attention.png" alt="Attention.png">

            <br><br>
              
            <input type="checkbox" id="check3" value="poids">
            <label for="check3">Limiter le poids des contenants à </label><input type="number_format" placeholder="entre 5000 et 9000g"><br><br>
            <input type="checkbox" id="check4" value="nbr-de-plis">
            <label for="check4">Limiter le nombre de plis par contenant à </label><input type="number_format" min="0"><br><br>
            <input type="checkbox" id="check5" value="epaisseur">
            <label for="check5">Limiter le nombre de plis par leur épaisseur </label><br><br>
            <input type="checkbox" id="check6" value="-1000">
            <label for="check6">Accepter la campagne si moins de 1000 plis </label><br><br>
            <input type="file" name="fichier" value="ficher"> Charger un profil de tri
        <?php 
          if (isset($erreur))
          {
            echo '<br><br>', $erreur;
          } 
        ?>
        <?php
          // Vérifie qu'il provient d'un formulaire
          $_POST['login']= $_SESSION['login'];
          if ((isset($_POST['submit']) && $_POST['submit'] == 'Suivant') && (isset($_POST['login'])) && (isset($_POST['libelle'])) && (isset($_POST['date'])) && (isset($_POST['duration'])) && (isset($_POST['produit'])) && (isset($_POST['lettre']))) { 
            $login=$_POST['login'];
            $date=$_POST['date'];
            $select = $_POST['duration'];
            $link = mysqli_connect($HOST , $login, $pass, $database);
            header('location: membre2.php');
          }      
          $coucou = '<form action="membre2.php"><button type="submit" style="margin-top: 5px">Suivant</button></form>';
          echo $coucou;
        ?>
          </div>
        </div> 
    </div>
  </div>
<?php
  }else{
    header("location:connexion.php?notconnected");
  }
?>
<?php 
  require "footer.php"
?>
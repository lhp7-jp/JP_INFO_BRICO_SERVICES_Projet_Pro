<!-- bouton envoyer votre demande + bouton de retour si pas on n'est sur la page principale -->
<?php if (($_SERVER['PHP_SELF']) == '/app/views/installation.php' or ($_SERVER['PHP_SELF']) == '/app/views/maintenance.php'
or ($_SERVER['PHP_SELF']) == '/app/views/diy.php' or ($_SERVER['PHP_SELF']) == '/app/views/garden.php' 
or ($_SERVER['PHP_SELF']) == '/app/views/other_services.php') { ?>
    <button class="myButton" type="submit" name="btn_SendRequest" onclick="window.location.href='installation.php'">Envoyer votre demande</button>
    </div>
    <?php }; ?>
<?php if (($_SERVER['PHP_SELF']) != '/app/views/home.php'
    and ($_SERVER['PHP_SELF']) == '/app/views/installation.php' or ($_SERVER['PHP_SELF']) == '/app/views/maintenance.php'
) { ?>
    <div class="myReturn">
        <button class="btn_return" onclick="window.location.href='http://jpinfobricoservices/app/views/nos_services.php';">Retour</button>
    </div>
<?php } elseif (($_SERVER['PHP_SELF']) != '/app/views/home.php') { ?>
    <div class="myReturn">
        <button class="btn_return" onclick="window.location.href='http://jpinfobricoservices';">Retour</button>
    </div>
<?php }; ?>

<!-- Et voici notre pied de page utilisé sur toutes les pages du site -->
<footer class="myFooter" >
    </br>
    <p class="myFooterP">© 2022 JP INFO BRICO SERVICES - 8,rue de Pierrement - 76390 CRIQUIERS - 06.66.02.75.68 | <a class="myFooterP" href="http://jpinfobricoservices/app/views/mentions_legales.php;"> Mentions légales</a></p>
</footer>
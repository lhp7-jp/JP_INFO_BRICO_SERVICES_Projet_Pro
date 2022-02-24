<!-- Voici bouton de retour à la page principale sauf si on est sur 
la page principale  -->
<?php
if (($_SERVER['PHP_SELF']) != '/app/views/home.php' 
and ($_SERVER['PHP_SELF']) == '/app/views/installation.php' or ($_SERVER['PHP_SELF']) == '/app/views/service.php') { ?>
    <div class="myReturn">
        <button class="btn_return" onclick="window.location.href='http://jpinfobricoservices/app/views/nos_services.php';">Retour</button>
    </div>
<?php } else { ?>
      <div class="myReturn">
        <button class="btn_return" onclick="window.location.href='http://jpinfobricoservices';">Retour</button>
    </div>
<?php }; ?>

<!-- Et voici notre pied de page utilisé sur toutes les pages du site -->
<footer class="myFooter">
    </br>
    <p>© 2022 JP INFO BRICO SERVICES - 8, rue de Pierrement - Hameau de Pierrement - 76390 Criquiers.</p>
</footer>
<?php 
                
$array_langage=array(

    "langue_anglaise"=>"Anglais",
    "langue_française"=>"Français"

)

?>


<div class=" langue card">
    <h3>Langue</h3>
    <p class="header_subtitle"> Pratiquées en entreprise </p>
    <div class="langue_check">
        <input class="check" type="checkbox" checked style="color: #185383;">
        <label for=""><?=$array_langage['langue_française']?></label>
    </div>
    <div class="langue_check">
        <input class="check" type="checkbox" checked>
        <label for=""><?= $array_langage['langue_anglaise']?></label>
    </div>
</div>

           
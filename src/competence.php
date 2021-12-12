
<?php 

    Class Competence{

        public $nom_comp;
        public $lang_technologie;
        public $niveau;


        public function __construct($nom_comp, $lang_technologie, int $niveau)
        {
            $this->nom_comp = $nom_comp;
            $this->lang_technologie = $lang_technologie;
            $this->niveau = $niveau;
        }

        public function get_nom_comp(){
            return $this->nom_comp;
        }

        public function get_lang_technologie(){
            return $this->lang_technologie;
        }

        public function get_composant3(){
            $niveau2=100 - $this->niveau;
            echo '
            
            <div class="experience">
    <input checked type="checkbox" class="check">
    <div class="plus_info">
        <div class="skill">
            <h4>'.$this->nom_comp.'</h4>
            <i class="fas fa-star" style="color: rgb(201, 40, 40); margin-top: 5px;"></i>
        </div>
        <p class="competence">'.$this->lang_technologie.'</p>
        <div class="switcher">
            <div class="switcher_bar" style="width: '.$this->niveau.'%;"></div>
            <span class="switcher_circle" style="right: '.$niveau2.'%;"></span>
        </div>
        
    </div>
</div>
            
            ';
        }

    }

?>
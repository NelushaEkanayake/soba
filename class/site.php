<?php
    class site{
        function sectionheading($title, $op = false){

            echo '<section class="col-md-12 text-center pb-5  pt-5 section-heading">';
            
           
            
            echo '<h2 class="'.($op ? 'op' : '').'">'.$title.'</h2>
            </section>';
            
            }

       
    }
?>
<?php 

if(!$page->employees()->isEmpty()) :

echo '<div class="row ">';

    echo '<div class="columns ">';

        echo '<div class="content">';

            echo '<h4>LAMAS Present</h4>';

            echo '<div class="row">';

                foreach($page->employees()->toStructure() as $employee):

                    echo '<figure class="half">';

                        if($image = $employee->headshot()->toFile()):

                            echo '<div class="half__image press__image">';

                                echo '<img src="' . $image->crop(300,300)->url() . '" alt="' . $employee->name() . '" />';

                            echo '</div>';

                        endif;

                        echo '<div class="employee__content press__image">';

                            echo '<h4 class="">' . $employee->name()->html() . '</h4>';

                            echo '<p class="small press__description ">' . $employee->bio() . '</p>';

                        echo '</div>';

                    echo '</figure>';

                endforeach;

            echo '</div>';

        echo '</div>';

    echo '</div>';

echo '</div>';  

endif;
?>

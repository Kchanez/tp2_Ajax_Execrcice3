<?php
    if(isset($_POST['Licence']))
    {
        $licence = $_POST['Licence'];
        if($licence === "LP")
        {
            echo '<div>
                    <p>
                        Ceci est un diplôme Bac+3 C’est une licence professionnelle.
                    </p>
                </div>';
        }
       else if($licence === "LA")
        {
            echo '<div>
                    <p>
                        Ceci est un diplôme Bac+3 C’est une licence académique.
                    </p>
                </div>';
        }
    }
    
    
    

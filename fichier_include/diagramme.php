<?php
                    // Exemple de récupération des valeurs de la base de données
                    $labels = ['Caisse', 'Sanction Benef', 'Sanction Non Benef', 'Total membres'];
                    $data = [
                        $rowTontine["totalTontine"],
                        $rowSanctions["sommeSanctionBenef"],
                        $rowSanctions["sommeSanctionNonBenef"],
                        $rowMembres["totalMembres"]
                    ];
                    ?>
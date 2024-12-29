<?php
include 'fetch.php';

$fetchData = new FetchDataClente();
$data = $fetchData->index();
if ($data) {
    echo "<table border='1'>
            <thead>
                <tr>
                    <th>Utilisateur</th>
                    <th>Numéro Place</th>
                    <th>Date Projection</th>
                    <th>Salle</th>
                    <th>Film</th>
                    <th>Ventes Totales</th>
                </tr>
            </thead>
            <tbody>";

    while ($row = $data->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>
                <td>{$row['nom']}</td>
                <td>{$row['numero_place']}</td>
                <td>{$row['date_projection']}</td>
                <td>{$row['nom']}</td>  <!-- This refers to Salle.nom -->
                <td>{$row['titre']}</td>  <!-- This refers to Film.titre -->
                <td>{$row['ventes_totales']}</td>  <!-- This refers to Statistiques.ventes_totales -->
              </tr>";
    }

    echo "</tbody></table>";
} else {
    echo "No data found.";
}
?>





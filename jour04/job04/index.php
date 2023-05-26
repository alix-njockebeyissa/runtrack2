<?php
echo "<table>
        <thead>
            <tr>
                <th>Argument</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>";

foreach ($_POST as $argument => $valeur) {
    echo "<tr>
            <td>$argument</td>
            <td>$valeur</td>
        </tr>";
}

echo "</tbody>
    </table>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
<table border="1">
        <tr>
            <td>
                nama
            </td>
            <td>
                email
            </td>
        </tr>
        <?php
        foreach ($dt as $d) {
            echo "
                    <tr>
                        <td>
                            $d->nama
                        </td>
                        <td>
                        $d->email
                          </td>
                    </tr>
                ";
        }
        ?>
    </table>
</body>

</html>
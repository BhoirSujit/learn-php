<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?=$heading ?></h1>
    <table>
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
        </thead>
        <tbody>
            <?php foreach($data as $d) : ?>
            <tr>
                <td><?= $d['id'] ?></td>
                <td><?= $d['name'] ?></td>
                <td><?= $d['email'] ?></td>
                <td><?= $d['mobile'] ?></td>
            </tr>

        <?php endforeach;?>
        </tbody>
        
    </table>
</body>
</html>
<!DOCTYPE html>
<html lang="zh">
    <head>
        <title><?= esc($title)?></title>
    </head>
    <body>
        <h1><?= esc($heading)?></h1>
        <table>
            <thead>
                <tr>
                    <td align="center"><b>Time Used</b></td>
                    <td align="center"><b>Step</b></td>
                    <td align="center"><b>Description</b></td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($todo_list as $item_name => $item) : ?>
                    <tr>
                        <td><?= esc($item_name) ?></td>
                        <?php foreach ($item as $i): ?>
                        <td><?= esc($i)?></td>
                        <?php endforeach ?>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </body>
</html>
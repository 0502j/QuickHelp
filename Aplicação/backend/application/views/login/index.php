<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php $this->load->helper('form');?>

<body>
    <div>
        <?= validation_errors()?>
        <?= form_open('login/index') ?>
            <label for="">Email:</label>
            <?= form_input([
                'id' => 'email-input',
                'name' => 'email',
            ]) ?>
            </br>
            </br>
            <label for="">Password</label>
            <?= form_input([
                'id' => 'password-input',
                'name' => 'password',
            ]) ?>
            </br>
            </br>
            <button type="submit" class="button">Enviar</button>
            <?= form_close() ?>
    </div>
</body>
</html>
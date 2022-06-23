<!DOCTYPE html>
<html lang="pt-BR" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>

</head>

<body class="h-100" style="background-color: #ececec;">
    <div class="d-flex flex-column h-100">
        <nav class="navbar navbar-expand-lg bg-panel-navbar swatch-panel-navbar py-4">
            <div class="container-fluid">
                <a href="/" class="navbar-brand">
                    <img src="<?= base_url('assets/images/logo.png'); ?>" class="img-fluid" width="200" alt="Logotipo">
                </a>
            </div>
        </nav>
        <main class="">
            <?= $contents ?>
        </main>
        <footer class="bg-panel-navbar p-4">
            <div class="d-flex align-items-center">
                
            </div>
        </footer>
    </div>
</body>
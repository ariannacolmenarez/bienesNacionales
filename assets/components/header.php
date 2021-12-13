<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Unidad de Bienes Nacionales UPTAEB">
    <meta name="author" content="">

    <title><?= $data['page_tag']; ?></title>

    <!-- Custom fonts-->
    <link href="<?= media(); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" type="imagen/x-icon" href="<?= media(); ?>/img/bienes.png">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles-->
    <link href="<?= media(); ?>/css/sb-admin-2.css" rel="stylesheet">
    <link href="<?= media(); ?>/css/styles.css" rel="stylesheet">
    
    <link rel="stylesheet" href="<?= media(); ?>/sweetalert2/dist/sweetalert2.min.css">

    <!-- Custom styles table -->
    <link href="<?= media(); ?>/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- Scripts -->
    <script src="<?= media(); ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= media(); ?>/sweetalert2/dist/sweetalert2.all.min.js"></script>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php if(isset($_SESSION['mensaje'])){ ?>
            <script c_mensaje="<?= $_SESSION['mensaje'] ;?>" c_tipo_mensaje="<?= $_SESSION['tipo_mensaje'] ;?>"> 
                var mensaje = document.currentScript.getAttribute("c_mensaje");
                var tipo = document.currentScript.getAttribute("c_tipo_mensaje");
                // $(document).ready(function(){
                    const ToastAlert = Swal.mixin({
                        toast: true,
                        position: 'bottom-start',
                        timer: 3000,
                        showConfirmButton: false,
                    });
                    ToastAlert.fire({
                        title: mensaje,
                        icon: tipo
                    });
                // });
            </script>
        <?php 
            unset($_SESSION['mensaje']);
            unset($_SESSION['tipo_mensaje']);
        } ?>
        <?php require_once('sidebar.php'); ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
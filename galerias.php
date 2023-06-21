<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>

    <?php include_once './header.php';?>
</head>

<body>
    <?php include_once './navegacion.php' ?>

    <link href="./css/galerias.css" rel="stylesheet" />

    <div class="container">

        <div class="galeras-section-title">
            <h1 class="galeras-text HeadingH2">
                Celebremos las diferencias
            </h1>
            <h3 class="galeras-text TextMediumNormal">
                Masculinidad hay mas de una, la expresión libera tu ser
            </h3>
        </div>

        <div class="row-gallery">
            <div class="column-g">
                <img src="public/playground_assets/placeholderimage2803-j5qd-500w.png" alt="PlaceholderImage2803"
                    srcset="" data-bs-toggle="modal" data-bs-target="#exampleModal" onClick="clickImage(0,0)">
                <img src="public/playground_assets/placeholderimage2803-h8ce-500w.png" alt="" srcset="" data-bs-toggle="modal" data-bs-target="#exampleModal" onClick="clickImage(0,1)">
            </div>
            <div class="column-g">
                <img src="public/playground_assets/placeholderimage2803-a48-300h.png" alt="" srcset="" data-bs-toggle="modal" data-bs-target="#exampleModal" onClick="clickImage(1,0)">
                <img src="public/playground_assets/placeholderimage2803-6gmd-500h.png" alt="" srcset="" data-bs-toggle="modal" data-bs-target="#exampleModal" onClick="clickImage(1,1)">
                <img src="public/playground_assets/placeholderimage2803-5ge6-500w.png" alt="" srcset="" data-bs-toggle="modal" data-bs-target="#exampleModal" onClick="clickImage(1,2)">
            </div>
            <div class="column-g">

                <img src="public/playground_assets/placeholderimage2803-5kth-500w.png" alt="" srcset="" data-bs-toggle="modal" data-bs-target="#exampleModal" onClick="clickImage(2,0)">
                <img src="public/playground_assets/placeholderimage2803-137-500h.png" alt="" srcset="" data-bs-toggle="modal" data-bs-target="#exampleModal" onClick="clickImage(2,1)">
            </div>

        </div>
        <div class="modal fade" id="exampleModal"
            tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="" alt="" srcset="" id="modalImage" width="100%">
                    </div>
                    <div class="modal-footer">
                        <p id="description"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./js/gallery.js"></script>

    <?php include_once './footer.php'; ?>
</body>

</html>
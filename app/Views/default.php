<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">

    <title>Solidarity with Ukraine</title>
</head>
<body>

<?= $this->include('navbar') ?>

<div class="container">
    <!--Grid row-->
    <div class="row d-flex justify-content-center">
        <!--Grid column-->
        <div class="col-md-6">
            <?= $this->renderSection('content') ?>
        </div>
        <!--Grid column-->
    </div>
    <!--Grid row-->
</div>

<footer class="text-center text-white mt-3" style="background-color: #f1f1f1;">
    <!-- Copyright -->
    <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2022 Copyright:
        <a class="text-dark" href="https://solidaritywithukraine.eu/">solidaritywithukraine.eu</a><br/>
        <a class="text-dark" href="https://www.instagram.com/solidarity.with.ukraine/">Insta: @solidarity.with.ukraine</a>
    </div>
    <!-- Copyright -->
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.10/clipboard.min.js"></script>
<script type='text/javascript' src = 'javascript/accordion.js'></script>
<?= $this->renderSection('javascript') ?>
</body>
</html>
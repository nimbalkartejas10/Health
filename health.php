<?php include_once("lib/layout.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>MedAssist | Smart Health Prediction</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" type="image/x-icon" href="gallery/img/ic.png">
    <link rel="stylesheet" href="gallery/css/main.css" />
    <link rel="stylesheet" href="gallery/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="gallery/css/font-awesome-4.5.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="gallery/css/home.css" />
</head>

<body>
    <?php include_once("header.php");
    ?>
    <div class="display-4 d-flex justify-content-center	">Few Things more About You</div>
    <div class="jumbotron">
        <form method="post" action="result.php">
            <div class="form-group row">
                <label for="inputName" class="col-sm-2 col-form-label"><b> Height: </b></label>
                <div class="col-sm-9">
                    <input type="text" class="form-control w-50" placeholder="5.6" name="height" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputName" class="col-sm-2 col-form-label"><b> Weight: </b></label>
                <div class="col-sm-9">
                    <input type="text" class="form-control w-50" placeholder="in kg" name="weight" required>
                </div>
            </div>
            <div class="from-group row">
                <label for="inputName" class="col-sm-3 col-form-label"><b>Select Your Symptoms :</b></label><br>
                <div class="from-check ">
                    <input type="checkbox" name='symp[]' value="Urinate (pee) a lot, often at night"> Urinate (pee) a lot, often at night <br />
                    <input type="checkbox" name='symp[]' value="Lose weight without trying"> Lose weight without trying <br />
                    <input type="checkbox" name='symp[]' value="Are very hungry"> Are very hungry <br />
                    <input type="checkbox" name='symp[]' value="Have more infections than usual"> Have more infections than usual <br />
                    <input type="checkbox" name='symp[]' value="A Have very dry skin"> Have very dry skin <br />
                    <input type="checkbox" name='symp[]' value="Feel very tired"> Feel very tired <br />
                    <input type="checkbox" name='symp[]' value="Bleeding, pain, or numbness in the lip or mouth">Bleeding, pain, or numbness in the lip or mouth <br />
                    <input type="checkbox" name='symp[]' value="Blood in the urine">Blood in the urine <br />
                    <input type="checkbox" name='symp[]' value="Pain after eating (heartburn or indigestion that doesn’t go away)">Pain after eating (heartburn or indigestion that doesn’t go away) <br />
                    <input type="checkbox" name='symp[]' value="Neurological problems">Neurological problems <br />
                    <input type="checkbox" name='symp[]' value="A sore that does not heal"> A sore that does not heal<br />
                </div>
            </div>


            <div class="form-group row justify-content-center">
                <div class="col-sm-10 sndCont">
                    <button type="submit" class="btn btn-primary" name="submit" value="submit"><i aria-hidden="true"></i>Save & Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>
<?php require("footer.php");
?>

</html>
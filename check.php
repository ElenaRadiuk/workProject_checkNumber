<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <meta charset="utf-8">
    <title>Block</title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">

    <link rel="stylesheet" href="css_part.css">
</head>
<body>


<div class="wrapper-check">
    <h3 class="wrapper-check-title">Online kenteken check</h3>

    <div class="check-block">
        <div class="checkblock-input">
            <form>
                <fieldset>
                    <p>
                        <label for="number">Vul hier het kenteken in:</label>
                        <br>
                        <div class="input-wr">
                        <input type="text"  name="number" id="number" class="number" >
                        <div class="input-txt">
                            <span>NL</span>
                        </div>
                        </div>
                    </p>

                    <input type="submit" value="Controleer">
                </fieldset>
            </form>
        </div>


        <div class="checkblock-list">
            <form>
                <fieldset>
                    <legend> Wij checken:</legend>
                    <p>
                        <input type="checkbox" name="KMstanden" id="KMstanden" value="KM standen" disabled="disabled" checked>
                        <label for="size_1">KM standen</label>
                    </p>
                    <p>
                        <input type="checkbox" name="Gestolenautos" id="Gestolenautos" value="Gestolen auto's" disabled="disabled" checked>
                        <label for="size_2">Gestolen auto's</label>
                    </p>
                    <p>
                        <input type="checkbox" name="Schadebedragen" id="Schadebedragen" value="Schadebedragen" disabled="disabled" checked>
                        <label for="size_3">Schadebedragen</label>
                    </p>
                    <p>
                        <input type="checkbox" name="Eigenarenhistorie" id="Eigenarenhistorie" value="Eigenarenhistorie" disabled="disabled" checked>
                        <label for="size_3">Eigenarenhistorie</label>
                    </p>
                    <p>
                        <input type="checkbox" name="RDWkeuringen" id="RDWkeuringen" value="RDW keuringen" disabled="disabled" checked>
                        <label for="size_3">RDW keuringen</label>
                    </p>
                </fieldset>
            </form>
        </div>
    </div>
</div>
</body>
</html>



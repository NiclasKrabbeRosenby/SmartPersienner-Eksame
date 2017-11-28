<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="mystyle.css">
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body class="body">

<div class="automatiskdiv">
    <h2>Automatisk</h2>
    <h4>Tryk på knappen for at aktivere automatisk indstilling af persenner</h4>
    <label class="switch">
        <input type="checkbox">
        <span class="slider round"></span>
    </label>
</div>

<div class="manueldiv">
    <h2>Manuel</h2>
    <h4>Træk i knappen for at vælge hvor du vil have dine persienner</h4>
    <input type="range" min="400" max="1000" step="1" value="500" />

</div>

<div class="vejrprognosediv">
    <h2>Vejr prognose</h2>
    <input type="submit" value="Idag" style="margin-left: 50px;">
    <input type="submit" value="7 Dags prognose" style="margin-left: 300px;">
        <div class="vejrprognosebilled">
        <img src="vejrprognose-140214.png">
        </div>
</div>
</body>
</html>
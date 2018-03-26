<h1>Creer un script permettant de créer plusieurs rectangles de tailles différentes et placer y des ronds à l'interieur de couleur differentes.</h1>
<h2>Creer un formulaire demandant le nombre de carre ainsi que le nombre de rond par rectangle.</h2><br/>

<?PHP
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Des carrés</title>
<!-- script de style créer par Thomas Catinaud -->
    <style>
        .canvas {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: center;
            align-content: space-between;
            margin: 20px;
            min-height: 500px;
            padding: 10px;
            background: rgba(0,0,0,.1);
        }
        .square {
            position: relative;
            border: 1px solid pink;
        }
        .circle {
            position: absolute;
            border-radius: 50%;
        }
        .circle:nth-child(4n) {
            background: FireBrick;
        }
        .circle:nth-child(4n+1) {
            background: CornflowerBlue;
        }
        .circle:nth-child(4n+2) {
            background: DarkGray;
        }
        .circle:nth-child(4n+3) {
            background: DarkOrchid;
        }
    </style>
</head>

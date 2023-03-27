<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Keresztes Hunor</title>
</head>
    <body>
        <?php
            //1. feladat

            $elsoSzint = "Ökoszisztéma";
            $masodikSzint = "Társadalom";
            $harmadikSzint = "Gazdaság";
            $negyedikSzint = "Pénz";
            echo ujTagekKozeIr("div", "id='szintek'", (function() use(&$elsoSzint, &$masodikSzint, &$harmadikSzint, &$negyedikSzint)
            {
                $txt = "";
                $txt .= kepetIr("kepek/kep.png", "Kép");
                $txt .= ujTagekKozeIr("div", null, (function() use(&$elsoSzint, &$masodikSzint, &$harmadikSzint, &$negyedikSzint)
                {
                    $txt = "";
                    $txt .= ujTagekKozeIr("h1", null, "A fenntarthatóság szintjei");
                    $txt .= ujTagekKozeIr("ul", null, (function() use(&$elsoSzint, &$masodikSzint, &$harmadikSzint, &$negyedikSzint)
                    {
                        $txt = "";
                        $txt .= ujTagekKozeIr("li", null, $elsoSzint);
                        $txt .= ujTagekKozeIr("li", null, $masodikSzint);
                        $txt .= ujTagekKozeIr("li", null, $harmadikSzint);
                        $txt .= ujTagekKozeIr("li", null, $negyedikSzint);
                        return $txt;
                    })());
                    return $txt;
                })());
                return $txt;
            })());

            //2. feladat

            $megujuloEroforrasokFogyasztasa = [
                "több, mint amit a természet újratermelni képes",
                "a természet újratermelő kapacitásával azonos mértékű",
                "kevesebb, mint amit a természet újratermelni képes"];
            $kornyezetHelyzete = array(
                "a környezet pusztul",
                "környezeti egyensúly",
                "a környezet megújul"
            );
            $fenntarthatosag = array();
            $fenntarthatosag[0] = "nem fenntartható";
            $fenntarthatosag[1] = "fenntartható, nem változó állapot";
            $fenntarthatosag[2] = "fenntartható fejlődés";
            echo ujTagekKozeIr("h3", null, "Fogyasztás, környezet és fenntarthatóság kapcsolata");
            echo ujTagekKozeIr("table", null, (function() use(&$megujuloEroforrasokFogyasztasa, &$kornyezetHelyzete, &$fenntarthatosag)
            {
                $txt = "";
                $txt .= ujTagekKozeIr("thead", null, ujTagekKozeIr("tr", null, (function()
                {
                    $txt = "";
                    return $txt;
                })()));
                $txt .= ujTagekKozeIr("tbody", null, (function()
                {
                    
                })());
                return $txt;
            })());
            
            //Metódusok

            function ujTagekKozeIr($tag, $parameterek = null, $tartalom = "")
            {
                return "<$tag".($parameterek ? " $parameterek" : "").">$tartalom</$tag>";
            }

            function kepetIr($src, $alt, $parameterek = null)
            {
                return "<img src='$src' alt='$alt'".($parameterek ? " $parameterek" : "").">";
            }
        ?>
    </body>
</html>
</!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<?php

	$celulares = [
    ["Motorola Edge 30", 9000],
    ["Realme GT Master", 12000],
    ["Asus ROG Phone 5", 15000],
    ["Oppo Find X3", 7000],
    ["Vivo X60 Pro", 4000]
];

echo "Lista original de teléfonos y precios:\n";
foreach ($celulares as $celular) {
    echo "{$celular[0]}: \${$celular[1]}\n";
}

array_push($celulares, ["Nokia G50", 6500], ["Honor 50", 3299]);

usort($celulares, function($a, $b) {
    return strcmp($a[0], $b[0]);
});

echo "\nLista actualizada y ordenada de teléfonos y precios:\n";
foreach ($celulares as $celular) {
    echo "{$celular[0]}: \${$celular[1]}\n";
}

?>

</body>
</html>
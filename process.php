<?php namespace PHPASN1; ?>
<h3>Result:</h3>

<?php

require_once 'phpasn1/classes/PHPASN_Autoloader.php';
PHPASN_Autoloader::register();

$maxInputSize = 12540;

if(strlen($_POST['input']) > $maxInputSize) {
    echo "Sorry but an input size greater than {$maxInputSize} will not be processed. Input size was " . strlen($_POST['input']) . "<br>";
    echo "<b>Note</b>: You can contact me via <a href='mailto:friedrich.grosse@gmail.com'>email</a> if you have some good reasons why I should change the limit<br><br><br>";
}
else {
    $binaryData = base64_decode($_POST['input']);
    $asnObject = ASN_Object::fromBinary($binaryData);

    function printObject(ASN_Object $object, $depth=0) {
        $treeSymbol = '';
        $depthString = str_repeat('─', $depth);
        if($depth > 0) {
            $treeSymbol = '├';
        }
        
        $name = Identifier::getShortName($object->getType());
        echo "{$treeSymbol}{$depthString}<b>{$name}</b> : ";
        
        echo $object->__toString() . '<br/>';
    
        $content = $object->getContent();
        if(is_array($content)) {        
            foreach ($object as $child) {
                printObject($child, $depth+1);
            }
        }
    }    
}
?>

<p>Parsed <?= strlen($binaryData) ?> bytes of binary data: </p>
<pre><?php printObject($asnObject);?></pre>

<?php
function printHeader()
{
    echo "<h3>SID: C1234567</h3>";
    echo "<h3>Name: Smith</h3>";
    echo "PHP and MySQL PageDesign";
}

function printFooter()
{
    echo "<hr><BR>";
    echo "(c) C1234567-Smith. All rights reserved.";
}


printHeader(); // 调用函数打印标题

echo "<p>This is a simple PHP page.</p>";

printFooter()
    ?>
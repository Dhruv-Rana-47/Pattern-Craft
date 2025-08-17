<?php

$ch = $_REQUEST["ch"];
$n = 5;
$code = null;
switch ($ch) {
    case 1:
        ob_start();
        $code = "
for (i = 0; i < n; i++) <br> {<br> &nbsp;&nbsp;&nbsp;&nbsp;
            for (j = 0; j < n; j++) <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            {
               <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo \" * \";
               <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
               }<br>
           &nbsp;&nbsp;&nbsp;&nbsp; echo \" &lt; br &gt; \";<br>
        }";
        ob_clean();

        ob_start();

        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $n; $j++) {
                echo " * ";
            }
            echo "<br>";
        }
        break;

    case 2:
        ob_start();

        $code= "
        
        for (i = 0; i < n; i++)<br>
        &nbsp;{<br>
            &nbsp;&nbsp;&nbsp;for(j = 0; j < i + 1; j++) <br>
            &nbsp;&nbsp;&nbsp;&nbsp;{
            <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                echo \" * \";
            <br>
            &nbsp;&nbsp;&nbsp;
           <br>
            &nbsp;&nbsp;&nbsp;&nbsp; }
            <br>
            &nbsp; echo \"  &lt; br &gt; \";
        <br>}";
     ob_clean();

        ob_start();

        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $i + 1; $j++) {
                echo " * ";
            }
            echo "<br>";
        }


        break;

    case 3:
        ob_start();

        $code= "
        for (i = 0; i < n; i++) <br>
       &nbsp; {
        <br>
             &nbsp; &nbsp;for (j = 0; j < n - i; j++)<br>
            &nbsp; &nbsp; &nbsp;  {
            <br>
              &nbsp; &nbsp; &nbsp; &nbsp;   echo \" * \";<br>
            &nbsp; &nbsp; &nbsp; }
            <br>
             &nbsp; &nbsp; echo \"  &lt; br &gt; \";<br>
        &nbsp; }
            ";
     ob_clean();

        ob_start();

        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $n - $i; $j++) {
                echo " * ";
            }
            echo "<br>";
        }

        break;

    case 4:
        ob_start();
        $code="
        for (i = 0; i < n; i++)<br> 
        &nbsp;{<br>
            &nbsp; &nbsp;for (k = 0; k < (n - (i + 1)); k++) 
            <br>&nbsp;&nbsp; &nbsp;{<br>
               &nbsp;&nbsp;&nbsp; &nbsp; echo \" white_space  \";<br>
            &nbsp;&nbsp;&nbsp; }<br>

          &nbsp; &nbsp;  for (j = 0; j < i + 1; j++) 
            <br>
             &nbsp;&nbsp;&nbsp;&nbsp;{<br>
                &nbsp; &nbsp;&nbsp;&nbsp; echo \" * \";<br>
        &nbsp;&nbsp; &nbsp;}<br>
            echo \"  &lt; br &gt; \";<br>
       &nbsp; }

        ";
        ob_clean();
        ob_start();
        for ($i = 0; $i < $n; $i++) {
            for ($k = 0; $k < ($n - ($i + 1)); $k++) {
                echo "&nbsp;&nbsp;";
            }

            for ($j = 0; $j < $i + 1; $j++) {
                echo "*";
            }
            echo "<br>";
        }

        break;

    case 5:
ob_start();
$code="
for (i = 0; i < n; i++) <br>
&nbsp;{<br>
          &nbsp;&nbsp; for (k = 0; k < (n -(n - i)); k++) <br>
            &nbsp;&nbsp;{<br>
                &nbsp;&nbsp;&nbsp; echo \"White_space\";<br>
            &nbsp;&nbsp;}<br>

            &nbsp;&nbsp;for (j = 0; j < n - i; j++) <br>
            &nbsp;&nbsp;{<br>
             &nbsp;&nbsp;&nbsp; echo \" * \";<br>
            &nbsp;&nbsp;}<br>

          &nbsp;&nbsp;echo \"  &lt; br &gt; \";<br>
       &nbsp;}

";
ob_clean();
        ob_start();
        for ($i = 0; $i < $n; $i++) {
            for ($k = 0; $k < ($n - ($n - $i)); $k++) {
                echo "&nbsp;&nbsp;&nbsp;";
            }

            for ($j = 0; $j < $n - $i; $j++) {
                echo "&nbsp;*";
            }
            echo "<br>";
        }

        break;
    case 6:
        ob_start();
        $code="
       for (i = 0; i < n; i++) <br> {<br> &nbsp;&nbsp;&nbsp;&nbsp;
           for (j = 0; j < i + 1; j++)  <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            {
               <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo \" j + 1 \";
               <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
               }<br>
           &nbsp;&nbsp;&nbsp;&nbsp; echo \" &lt; br &gt; \";<br>
        }";

        ob_start();
        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $i + 1; $j++) {
                echo " " . ($j + 1) . " ";
            }
            echo "<br>";
        }

        break;
    case 7:
        ob_start();

        $code= "
        
        for (i = 0; i < n; i++)<br>
        &nbsp;{<br>
            &nbsp;&nbsp;&nbsp;for(j = 0; j <(n -i); j++) <br>
            &nbsp;&nbsp;&nbsp;&nbsp;{
            <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                echo \" j + 1 \";
            <br>
            &nbsp;&nbsp;&nbsp;
           <br>
            &nbsp;&nbsp;&nbsp;&nbsp; }
            <br>
            &nbsp; echo \"  &lt; br &gt; \";
        <br>}";
     ob_clean();

        ob_start();
        for ($i = 0; $i < $n; $i++) {


            for ($j = 0; $j < ($n - $i); $j++) {
                echo " " . ($j + 1) . " ";
            }
            echo "<br>";
        }

        break;
    case 8:
        ob_start();
        $code="
        for (i = 0; i < n; i++)<br> 
        &nbsp;{<br>
            &nbsp; &nbsp;for (k = 0; k < (n -i); k++) 
            <br>&nbsp;&nbsp; &nbsp;{<br>
               &nbsp;&nbsp;&nbsp; &nbsp; echo \" white_space  \";<br>
            &nbsp;&nbsp;&nbsp; }<br>

          &nbsp; &nbsp;  for (j = 0; j < i + 1; j++) 
            <br>
             &nbsp;&nbsp;&nbsp;&nbsp;{<br>
                &nbsp; &nbsp;&nbsp;&nbsp; echo \" j + 1 \";<br>
        &nbsp;&nbsp; &nbsp;}<br>
            echo \"  &lt; br &gt; \";<br>
       &nbsp; }

        ";
        ob_clean();

        ob_start();
        for ($i = 0; $i < $n; $i++) {
            for ($k = 0; $k < ($n - $i); $k++) {
                echo "&nbsp;&nbsp;&nbsp;";
            }

            for ($j = 0; $j < $i + 1; $j++) {
                echo "&nbsp;" . $j + 1;
            }
            echo "<br>";
        }
        break;
    case 9:
        ob_start();
        $code="
for (i = 0; i < n; i++)<br>
&nbsp;{<br>
            &nbsp;&nbsp;for (k = 0; k < (n - (i + 1)); k++) <br>&nbsp;&nbsp;{<br>
                &nbsp;&nbsp;&nbsp;echo \" White_space \";<br>
            &nbsp;&nbsp;}
<br>
            &nbsp;&nbsp;for (j = 0; j < ((2 * i) + 1); j++) <br>&nbsp;&nbsp;{<br>
            &nbsp;&nbsp;&nbsp;echo \" * \";<br>
            &nbsp;&nbsp;}<br>

            &nbsp;&nbsp;for (l = 0; l < (n - (i + 1)); l++)<br>&nbsp;&nbsp;{<br>
                &nbsp;&nbsp;echo \" White_space \";<br>
            &nbsp;&nbsp;}
        <br>
            &nbsp; echo \"  &lt; br &gt; \";<br>
       &nbsp;}

        ";
        ob_clean();

        ob_start();
        for ($i = 0; $i < $n; $i++) {
            for ($k = 0; $k < ($n - ($i + 1)); $k++) {
                echo " &nbsp; ";
            }

            for ($j = 0; $j < ((2 * $i) + 1); $j++) {
                echo "*";
            }

            for ($l = 0; $l < ($n - ($i + 1)); $l++) {
                echo "&nbsp;";
            }
            echo "<br>";
        }
        break;
    case 10:
        
        ob_start();
        $code="
for (i = 0; i < n; i++)<br>
&nbsp;{<br>
            &nbsp;&nbsp;for (k = 0; k < i; k++) <br>&nbsp;&nbsp;{<br>
                &nbsp;&nbsp;&nbsp;echo \" White_space \";<br>
            &nbsp;&nbsp;}
<br>
            &nbsp;&nbsp;for (j = 0; j <(2*n -(2*i+1));j++) <br>&nbsp;&nbsp;{<br>
            &nbsp;&nbsp;&nbsp;echo \" * \";<br>
            &nbsp;&nbsp;}<br>

            &nbsp;&nbsp;for (l = 0; l < i; l++)<br>&nbsp;&nbsp;{<br>
                &nbsp;&nbsp;echo \" White_space \";<br>
            &nbsp;&nbsp;}
        <br>
            &nbsp; echo \"  &lt; br &gt; \";<br>
       &nbsp;}

        ";
        ob_clean();
        ob_start();
        for ($i = 0; $i < $n; $i++) {

            for ($k = 0; $k < $i; $k++) {
                echo " &nbsp; ";
            }

            for ($j = 0; $j < (2 * $n - (2 * $i + 1)); $j++) {
                echo "*";
            }

            for ($l = 0; $l < $i; $l++) {
                echo "&nbsp;";
            }
            echo "<br>";
        }
        break;
    case 11:
        ob_start();
        $code="
        \" upper part
for (i = 0; i < n; i++)<br>
&nbsp;{<br>
            &nbsp;&nbsp;for (k = 0; k < (n - (i + 1)); k++) <br>&nbsp;&nbsp;{<br>
                &nbsp;&nbsp;&nbsp;echo \" White_space \";<br>
            &nbsp;&nbsp;}
<br>
            &nbsp;&nbsp;for (j = 0; j < ((2 * i) + 1); j++) <br>&nbsp;&nbsp;{<br>
            &nbsp;&nbsp;&nbsp;echo \" * \";<br>
            &nbsp;&nbsp;}<br>

            &nbsp;&nbsp;for (l = 0; l < (n - (i + 1)); l++)<br>&nbsp;&nbsp;{<br>
                &nbsp;&nbsp;echo \" White_space \";<br>
            &nbsp;&nbsp;}
        <br>
            &nbsp; echo \"  &lt; br &gt; \";<br>
       &nbsp;}<br><br>
\"lower part
<br>
for (i = 0; i < n; i++)<br>
&nbsp;{<br>
            &nbsp;&nbsp;for (k = 0; k < i; k++) <br>&nbsp;&nbsp;{<br>
                &nbsp;&nbsp;&nbsp;echo \" White_space \";<br>
            &nbsp;&nbsp;}
<br>
            &nbsp;&nbsp;for (j = 0; j <(2*n -(2*i+1));j++) <br>&nbsp;&nbsp;{<br>
            &nbsp;&nbsp;&nbsp;echo \" * \";<br>
            &nbsp;&nbsp;}<br>

            &nbsp;&nbsp;for (l = 0; l < i; l++)<br>&nbsp;&nbsp;{<br>
                &nbsp;&nbsp;echo \" White_space \";<br>
            &nbsp;&nbsp;}
        <br>
            &nbsp; echo \"  &lt; br &gt; \";<br>
       &nbsp;}

        ";

        ob_clean();

        ob_start();
        for ($i = 0; $i < $n; $i++) {
            for ($k = 0; $k < ($n - ($i + 1)); $k++) {
                echo " &nbsp; ";
            }

            for ($j = 0; $j < ((2 * $i) + 1); $j++) {
                echo "*";
            }

            for ($l = 0; $l < ($n - ($i + 1)); $l++) {
                echo "&nbsp;";
            }
            echo "<br>";
        }
        for ($i = 0; $i < $n; $i++) {

            for ($k = 0; $k < $i; $k++) {
                echo " &nbsp; ";
            }

            for ($j = 0; $j < (2 * $n - (2 * $i + 1)); $j++) {
                echo "*";
            }

            for ($l = 0; $l < $i; $l++) {
                echo "&nbsp;";
            }
            echo "<br>";
        }
        break;
    case 12:
        ob_start();

        $code= "
        for (i = 0; i < (2 * n); i++) <br>
       &nbsp; {
        <br>
        &nbsp; &nbsp;if (i <= n) <br>
        &nbsp; &nbsp;&nbsp; {<br>
                &nbsp; &nbsp;&nbsp; &nbsp;star = i;<br>
            &nbsp; &nbsp;&nbsp; }<br>
            &nbsp; &nbsp; else <br>
            &nbsp; &nbsp;&nbsp; {<br>
                &nbsp; &nbsp;&nbsp;&nbsp; star = 2 * n - i; <br>
            &nbsp; &nbsp;&nbsp; }<br>

             &nbsp; &nbsp; for (j = 0; j < star; j++)<br>
            &nbsp; &nbsp; &nbsp;  {
            <br>
              &nbsp; &nbsp; &nbsp; &nbsp;   echo \" * \";<br>
            &nbsp; &nbsp; &nbsp; }
            <br>
             &nbsp; &nbsp; echo \"  &lt; br &gt; \";<br>
        &nbsp; }
            ";
     ob_clean();

        ob_start();
        for ($i = 0; $i < (2 * $n); $i++) {
            if ($i <= $n) {
                $star = $i;
            } else {
                $star = 2 * $n - $i;
            }
            for ($j = 0; $j < $star; $j++) {
                echo " * ";
            }
            echo "<br>";
        }
        break;
}

$ans = ob_get_clean();

$response = array(
    'output' => $ans,
    'code' => $code
);

echo json_encode($response);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>star pattern</title>
    <link rel="stylesheet" href="style.css">
    <section id="head">
        <header>
            <h2 class="htext">Patterns using Loops</h2>
            <nav class="nicon">
                <a href="#">Home</a>

            </nav>
            <hr>
        </header>
    </section>
    <script>
    function sendmsg(ch) {
        const xhtp = new XMLHttpRequest();
        xhtp.open("GET", "patterns.php?ch=" + ch, true);

        xhtp.onreadystatechange = function () {
            if (xhtp.readyState === 4) { // Request completed
                if (xhtp.status === 200) { // HTTP OK
                    try {
                        var response = JSON.parse(xhtp.responseText);
                        document.getElementById("pat_cont").innerHTML = response.output;
                        document.getElementById("pat_code").innerHTML = response.code;
                    } catch (e) {
                        
                        console.error('Error parsing JSON response: ', e);
                        document.getElementById("pat_cont").innerHTML = 'An error occurred while processing the response.';
                        document.getElementById("pat_code").innerHTML = '';
                    }
                } else {
                    console.error('Error: ' + xhtp.status);
                    document.getElementById("pat_cont").innerHTML = 'An error occurred during the request. HTTP status: ' + xhtp.status;
                    document.getElementById("pat_code").innerHTML = '';
                }
            }
        };

        xhtp.send();
        return false;
    }
</script>

</head>
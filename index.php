<?php include 'header.php' ?>
<style>
    #pat_cont,#pat_code{
      height:80%;
      margin:20px 10px 15px 40px;  
      font-size:350%;
      padding: 30px;
      width: 80%;
      text-align: justify;
      border: 3px dotted darkgray;
    }
    #pat_code{
      height:80%;
      margin:20px 10px 15px 40px;  
      font-size:150%;
      padding: 30px;
      width: 80%;
      text-align: justify;
      border: 3px dotted darkgray;
    font-family: monospace;

    }
   
    </style>
<body>

    <div class="container">
        <aside class="side">
            <div class="box1" onclick="sendmsg(1)">
                <figure class="image"><img src="images\pat-1.png"></figure>
                <figcaption>Matrix/square</figcaption>
            </div>
            <div class="box2" onclick="sendmsg(2)">
                <figure class="image"><img src="images\pat-2.png"></figure>
                <figcaption>Left-angled</figcaption>
            </div>
            <div class="box3" onclick="sendmsg(3)">
                <figure class="image"><img src="images\pat-3.png"></figure>
                <figcaption>Reverse left-angled</figcaption>
            </div>
            <div class="box4" onclick="sendmsg(4)">
                <figure class="image"><img src="images/pat-4.png"></figure>
                <figcaption>Right-angled</figcaption>
            </div>
            <div class="box5" onclick="sendmsg(5)">
                <figure class="image"><img src="images/pat-5.png"></figure>
                <figcaption>Reverse right-angled</figcaption>
            </div>
            <div class="box6" onclick="sendmsg(6)">
                <figure class="image"><img src="images/pat-6.png"></figure>
                <figcaption>number left-angle</figcaption>
            </div>
            <div class="box7" onclick="sendmsg(7)">
                <figure class="image"><img src="images/pat-7.png"></figure>
                <figcaption>number left-angle(reverse)</figcaption>
            </div>
            <div class="box8" onclick="sendmsg(8)">
                <figure class="image"><img src="images/pat-8.png"></figure>
                <figcaption>number right-angled</figcaption>
            </div>
            <div class="box9" onclick="sendmsg(9)">
                <figure class="image"><img src="images/pat-9.png"></figure>
                <figcaption>Triangle</figcaption>
            </div>
            <div class="box10" onclick="sendmsg(10)">
                <figure class="image"><img src="images/pat-10.png"></figure>
                <figcaption>Reverse-triangle</figcaption>
            </div>
            <div class="box11" onclick="sendmsg(11)">
                <figure class="image"><img src="images/pat-11.png"></figure>
                <figcaption>Diamond</figcaption>
            </div>
            <div class="box12" onclick="sendmsg(12)">
                <figure class="image"><img src="images/pat-12.png"></figure>
                <figcaption>Triangle-2</figcaption>
            </div>
        </aside>
        <section class="main">
            <div class="pattern" >pattern
               <div id="pat_cont"></div>
            </div>
            <div class="code">code
                <br><br>
                 <div id="pat_code"></div>
            </div>
        </section>
    </div>

</body>
<hr>
<?php include 'footer.php' ?>

</html>
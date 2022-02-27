<?php include '../components/header.php' ?>
    <main id="main">
        <div class="mbajtsi-box">
            <div id="box-left">
                <iframe
                    src="https://goo.gl/maps/GEVa9E3VA18XELfy9"
                    frameborder="0" style="border:0;" allowfullscreen=""
                ></iframe>           
            </div>

            <div>
                <div id="log-error" class="llogaria-error hidden">
                    <p id='msg'></p>
                </div>
                <form id="box-right" method="POST" action="../businessLogic/upload.php">
                    <h2>Na kontaktoni</h2>
                    <hr class="divider">
                    <label for="name">Emri</label>
                    <input id="emriPlote" type="text" name="name">
                    <label for="name">Mbiemri</label>
                    <input id="mbiemri" type="text" name="lastname">
                    <label for="email">Email</label>
                    <input id="emaili" type="email" name="email">
                    <label for="mesazhi">Mesazhi</label>
                    <textarea id="mesazhi" type="text" name="msg"></textarea>
                    <input id="dergo" type="submit" class="button" name="send-msg" value="Dergo">
                </form>
            </div>
        </div>
    </main>

    <?php if(isset($_GET['messagesend']) && $_GET['messagesend'] == 'success'){
        echo '<script>alert("Mesazhi juaj u dergua me sukses")</script>';
    } ?>

<?php include '../components/footer.php'?>
<?php 
include '../components/header.php';
?>

<section class="contact" id="contact">

    <h1 class="heading"> <span> Contact </span> Us </h1>

    <div class="row">

        <form action="">
            <h2>Contact Us Now!</h2>
            <label for="name">Emri</label>
            <input id="emriPlote" type="text" name="name">
            <label for="name">Mbiemri</label>
            <input id="mbiemri" type="text" name="lastname">
            <label for="email">Email</label>
            <input id="email" type="email" name="email">
            <label for="mesazhi">Message</label>
            <textarea id="mesazhi" type="text" name="msg"></textarea>
            <input id="dergo" type="submit" class="button" name="send-msg" value="dergo"> 
        </form>
        <div class="image">
            <img src="images/contact-img.svg" alt="">
        </div
    </div>
</section>
<?php if(isset($_GET['messagesend'])&&$_GET['messagesend']=='success'){
    echo'<script>alert("Mesazhi i juaj eshte derguar me sukses!") </script>';
}?>

<?php 
include '../componets/footer.php';
?>
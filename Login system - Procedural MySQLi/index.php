
<?php
include_once 'header.php';

?>
    <section class="index-intro">

    <?php
                if (isset($_SESSION["useruid"])) {
                    echo "<p>Hello there " . $_SESSION["useruid"] . "</p>";
                    
                }

                ?>

        <h1>This is an introduction</h1>
        <p>Here is an important paragraph that explains the purpose of the website and why you are here!</p>
    </section>

    <section class="index categories">
        <h2>Some Basic Categories</h2>
    <div class="grid-container">
        <div class = grid-item>
            <h3>Fun Stuff</h3>
        </div>
        <div class = grid-item>
            <h3>Serious Stuff</h3>
        </div>
        <div class = grid-item>
            <h3> Exciting Stuff</h3>
        </div>
        <div class = grid-item>
            <h3>Boring Stuff</h3>
        </div>
    </div>


</section>


<?php
include_once 'footer.php';

?>
    
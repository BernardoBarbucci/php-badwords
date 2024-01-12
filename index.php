<?php
$my_var = 'PHP Badwords';
$my_text = 'Ciao, oggi ho cominciato ad usare PHP, per ora sembra figo e divertente ma anche complicato. Speriamo bene.';
?>

<div>
    <h1>
        <?php echo $my_var ?>
    </h1>
    <p>
        <?php echo $my_text ?>
    </p>
</div>
<div>
    <form action="index.php" method="get">
        <label for="word">Inserisci la parola da censurare:</label>
        <input type="text" id="word" name="word">
        <button type="submit">Censura</button>
    </form>
</div>
<?php include 'includes/header.php' ?>

<h2>Esta es la página de contacto</h2>
<form action="">
    <div> <label for="email">Email</label>
        <input type="email" id="email" name="email">
    </div>
    <br>
    <div>
        <label for="content">Consulta</label>
        <textarea name="content" id="content"></textarea>
    </div>
    <br>
    <button type="submit">Enviar</button>
</form>

<?php include 'includes/footer.php' ?>
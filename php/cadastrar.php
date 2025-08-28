<?php
include "header.php";
?>

<section>
    <div class="cadastro">
        <form action="processar.php" method="POST">
            <label for="name">Nome</label><br>
            <input type="text" name="name" required><br><br>

            <label for="cpf">CPF</label><br>
            <input type="text" name="cpf" required><br><br>

            <label for="address">Endereço</label><br>
            <input type="text" name="address" required><br><br>

            <label for="age">Idade</label><br>
            <input type="number" name="age" required><br><br>

            <label for="email">Email</label><br>
            <input type="email" name="email" required><br><br>

            <label for="password">Senha</label><br>
            <input type="password" name="password" required><br><br>

            <label for="confirmPassword">Confirmar Senha</label><br>
            <input type="password"><br><br>

            <input type="submit" value="Enviar">
        </form>
    </div>
</section>

<?php
include "footer.php";
?>
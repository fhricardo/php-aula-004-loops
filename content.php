<section>
    <h3>FOR</h3>
    <p>O loop <code>for</code> é usado quando você sabe quantas vezes deseja executar um bloco de código. Ele é composto por três partes: inicialização, condição e incremento.:</p>
    <form action="for.php" method="post">
        <label for="numero">Digite um número para fazer a contagem</label>
        <input type="text" name="numero" id="numero" placeholder="Digite um número" required>
        <input type="submit" value="OK">
    </form>
</section>
<section>
    <h3>WHILE</h3>
    <p>O loop <code>while</code> executa um bloco de código enquanto uma condição especificada for verdadeira. A condição é verificada antes de cada iteração.</p>
    <form action="while.php" method="post">
        <label for="pizza">Vamos usar o loop WHILE para comer uma pizza!</label>
        <input type="submit" value="OK">
    </form>
</section>
<section>
    <h3>DO...WHILE</h3>
    <p>O loop <code>do...while</code> é semelhante ao while, mas a condição é verificada após a execução do bloco de código. Isso garante que o bloco de código seja executado pelo menos uma vez.</p>
    <form action="dowhile.php" method="post">
        <label for="fatias">Vamos usar o loop DO...WHILE para comer pizza!<br>Quantas fatias você quer comer?</label>
        <input type="text" name="fatias" id="fatias" placeholder="Digite quantas fatias...">
        <input type="submit" value="OK">
    </form>
</section>
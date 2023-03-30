<label for="title">Titulo:</label>
<input type="text" name="title" id="title" placeholder="Título" value="<?= $pelicula['title']?>">
<label for="description">Descripción:</label>
<input type="text" name="description" value="<?= $pelicula['description']?>">
<button type="submit"><?= $op ?></button>
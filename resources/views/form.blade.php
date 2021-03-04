@csrf
    <p><label for="name">Nombre
        <input type="text" name="name" required
            @isset($product)
            value="{{$product->name}}"    
            @endisset
       ></label>
    </p>
    <p><label for="description">Descripción
        <textarea rows="4" cols="50" name="description" 
            @isset($product)
            value="{{$product->description}}"
            @endisset
            ></textarea></label>
    </p>
    <p><label for="price">Precio
        <input type="number" name="price" step="any" required
            @isset($product)
            value="{{$product->price}}"
            @endisset></label>
    </p>
    <p><label for="bbdate">Fecha de Caducidad
        <input type="date" name="bbdate" min="<?php echo date('Y-m-d'); ?>" required
            @isset($product)
            value="{{$product->bbdate}}"
            @endisset></label>
    </p>
    <p>
        <label for="photo">Imagen<input type="file" name="photo">
    </p>
        <input type="submit" value="Enviar">
</form>
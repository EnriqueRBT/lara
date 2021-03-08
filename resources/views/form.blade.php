@csrf
    <p><label for="name_es">Nombre
        <input type="text" name="name_es" required
            @isset($product)
            value="{{$product->name}}"    
            @endisset
       ></label>
    </p>
    <p><label for="name_es">Name
        <input type="text" name="name_en" required
            @isset($product)
            value="{{$product->name}}"    
            @endisset
       ></label>
    </p>
    <p><label for="description_es">Descripción
        <textarea rows="4" cols="50" name="description_es" 
            @isset($product)
            placeholder="{{$product->description}}"
            @endisset
            ></textarea></label>
    </p>
    <p><label for="description_en">Description
        <textarea rows="4" cols="50" name="description_en" 
            @isset($product)
            placeholder="{{$product->description}}"
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
        <label for="photo">Imagen<input type="file" name="photo"></label>
    </p>
        <input type="submit" class="btn btn-primary" value="Enviar">
</form>
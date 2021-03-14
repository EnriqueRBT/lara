@csrf
<div class="form-group p-4 m-3">
    <p><label for="name_es">{{__('Custom.Nombre')}}-ES
        <input type="text" class="form-control " name="name_es" required
            @isset($product)
            value="{{$product_es->name}}"    
            @endisset
       ></label>
    </p>
    <p><label for="name_en">{{__('Custom.Nombre')}}-EN
        <input type="text" class="form-control" name="name_en" required
            @isset($product)
            value="{{$product_en->name}}"    
            @endisset
       ></label>
    </p>
    <p><label for="description_es">{{__('Custom.Descripcion')}}-ES
        <textarea rows="4"  class="form-control" cols="50" name="description_es" 
            @isset($product)
            placeholder="{{$product_es->description}}"
            @endisset
            ></textarea></label>
    </p>
    <p><label for="description_en">{{__('Custom.Descripcion')}}-EN
        <textarea rows="4" class="form-control" cols="50" name="description_en" 
            @isset($product)
            placeholder="{{$product_en->description}}"
            @endisset
            ></textarea></label>
    </p>



    <p><label for="price">{{__('Custom.Precio')}}
        <input type="number" class="form-control" name="price" step="any" required
            @isset($product)
            value="{{$product->price}}"
            @endisset></label>
    </p>
    <p><label for="bbdate">{{__('Custom.FechaCad')}}
        <input type="date" class="form-control" name="bbdate" min="<?php echo date('Y-m-d'); ?>" required
            @isset($product)
            value="{{$product->bbdate}}"
            @endisset></label>
    </p>
    <p>
        <label for="photo">{{__('Custom.Imagen')}}<input type="file" class="form-control" name="photo"></label>
    </p>
        <input type="submit" class="btn btn-primary" value="Enviar">
</div>
</form>
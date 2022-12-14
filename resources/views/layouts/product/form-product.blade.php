    <div class="mb-3">
        <label for="">Categoria</label>
        <select name="category_id" class="form-control">
            @foreach ($categories as $category)
                <option value="{{ $category->id }} ">{{ $category->nombre }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ isset($product) ? $product->nombre : '' }}">
    </div>
    <div class="mb-3">
        <label for="precio" class="form-label">Precio</label>
        <input type="number" class="form-control" id="precio" name="precio" value="{{ isset($product) ? $product->precio : '' }}">
    </div>
    <div class="mb-3">
        <label for="stock" class="form-label">Stock</label>
        <input type="text" class="form-control" id="stock" name="stock" value="{{ isset($product) ? $product->stock : '' }}">
    </div>
    <div class="mb-3">
        <label for="descripcion" class="form-label">Descipción</label>
        <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ isset($product) ? $product->descripcion : '' }}">
    </div>
    <div class="mb-3">
        <input type="submit" value="Enviar" class="btn btn-success">
    </div>

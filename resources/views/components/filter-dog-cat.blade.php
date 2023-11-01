<div>
    <div style="-webkit-transform:translate3d(0, 4EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 4EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 4EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 4EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
        class="section">
        <div class="container-1440">
            <div class="accordion-wrapper">
                <div class="accordion-item">
                    <div data-w-id="828cfaa3-090e-e241-cc03-3ea597911d62" class="accordion-item-trigger">
                        <div class="flex-horizontal justify-space-between">
                            <h4 class="accordion-headline">Filtrar por ...</h4>
                            <div class="arrow-icon small"><img
                                    src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a42154384b8_Icons_Adoptable_Purple_Arrow Down.svg"
                                    width="75" alt="" /></div>
                        </div>
                    </div>

                    <div style="height: 0px; opacity: 0" class="accordion-item-content">
                        <div class="collection-list-wrapper w-dyn-list">
                            <div role="list" class="center-tags-horizontal w-dyn-items">

                                <form action="" method="GET">

                                    <!-- Filtros -->
                                    <div class="grid grid-cols-3 gap-4 p-4">
                                        <!-- Columna 1 -->
                                        <div class="col-span-1">
                                            <!-- Filtro por Tamaño -->
                                            <div class="mb-4">
                                                <label for="size">Tamaño</label>
                                                <select name="size">
                                                    <option value="" selected>Todos los tamaños</option>
                                                    @foreach ($sizeOptions as $option)
                                                        <option value="{{ $option->size }}" {{Request::get('size') == $option->size ? 'selected' : ''}}>
                                                            {{ $option->size }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <!-- Filtro por Sexo -->
                                            <div class="mb-4">
                                                <label for="sex">Sexo</label>
                                                <select name="sex">
                                                    <option value="" selected>Ambos sexos</option>
                                                    @foreach ($sexOptions as $option)
                                                        <option value="{{ $option->sex }}" {{Request::get('sex') == $option->sex ? 'selected' : ''}}>
                                                            {{ $option->sex }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Columna 2 -->
                                        <div class="col-span-1">
                                            <!-- Filtro por Edad -->
                                            <div class="mb-4">
                                                <label for="age">Edad</label>
                                                <select name="age">
                                                    <option value="" selected>Todas las edades</option>
                                                    @foreach ($ageOptions as $option)
                                                        <option value="{{ $option->age }}" {{Request::get('age') == $option->age ? 'selected' : ''}}>
                                                            {{ $option->age }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <!-- Filtro por Ubicación -->
                                            <div class="mb-4">
                                                <label for="state">Ubicación</label>
                                                <select name="state">
                                                    <option value="" selected>Todas las ubicaciones
                                                    </option>
                                                    @foreach ($stateOptions as $option)
                                                        <option value="{{ $option->name }}" {{Request::get('state') == $option->name ? 'selected' : ''}}>
                                                            {{ $option->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Columna 3 -->
                                        <div class="col-span-1">
                                            <!-- Filtro por Etiqueta (Tag) -->
                                            <div class="mb-4">
                                                <label for="tag">Etiqueta</label>
                                                <select name="tag">
                                                    <option value="" selected>Todas las etiquetas
                                                    </option>
                                                    @foreach ($tagOptions as $option)
                                                        <option value="{{ $option->name }}" {{Request::get('tag') == $option->name ? 'selected' : ''}}>
                                                            {{ $option->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <!-- Filtro por Color -->
                                            <div class="mb-4">
                                                <label for="color">Color</label>
                                                <select id="color" name="color">
                                                    <option value="" selected>Todos los colores</option>
                                                    @foreach ($colorOptions as $option)
                                                        <option value="{{ $option->name }}" {{Request::get('color') == $option->name ? 'selected' : ''}}>
                                                            {{ $option->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Botón de Filtrar -->
                                        <div class="col-span-3 text-center">
                                            <button type="submit"
                                                class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">
                                                Filtrar
                                            </button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
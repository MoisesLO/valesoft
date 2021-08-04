<!-- altura maxima del view port y centrado  -->
<div class="flex item-start align-center justify-center
  bg-gray-100">
  <!-- Marco 768 -->
  <div class="flex flex-col flex-grow
    md:mt-20 m-3
    lg:max-w-screen-md">
    <!-- Boton Boleta Factura -->
    <div class="flex flex-col mt-3 md:flex-row justify-between items-start">
      <h3 class="text-2xl text-gray-700">Boleta Electronica
        <span class="text-gray-700 font-semibold text-sm">( B001-23456 )</span></h3>
      <div class="md:w-1/4 mt-3 md:mt-0 flex items-start">
        <button class="px-2 py-1 rounded mr-2 bg-gray-200"><i class="fas fa-cog"></i></button>
        <div class="mr-2 mb-3">
          <select name="" id="" class="p-1 border rounded-md w-full
            text-gray-600 font-semibold text-sm
            bg-gray-200">
            <option value="">Boleta Electronica</option>
            <option value="">Factura Electronica</option>
          </select>
        </div>
      </div>
    </div>

    <!--
      w-1/4	width: 25%;
      w-2/4	width: 50%;
      w-3/4	width: 75%;
      w-1/5	width: 20%;
      w-2/5	width: 40%;
      w-3/5	width: 60%;
      w-1/6	width: 16.666667%;
      w-2/6	width: 33.333333%;
      w-3/6	width: 50%;
      w-4/6	width: 66.666667%;
      w-1/12	width: 8.333333%;
      w-2/12	width: 16.666667%;
      w-3/12	width: 25%;
      w-4/12	width: 33.333333%;
    -->

    <!-- Border  -->
    <div class=" overflow-hidden shadow-lg rounded-md
      mt-3 p-5 bg-white">

      <!-- Primera Fila -->
      <div class="flex flex-col md:flex-row flex-grow">

        <!-- w-1/5	width: 20%; -->
        <div class="md:w-1/5">
          <div class="mr-2 mb-3">
            <input type="text" class="w-full p-1 border rounded text-gray-700 text-sm" placeholder="DNI: 42516253">
          </div>
        </div>

        <!-- w-2/5	width: 40%; -->
        <div class="md:w-2/5">
          <div class="mr-2 mb-3">
            <input type="text" class="w-full p-1 border rounded text-gray-700 text-sm"
                   placeholder="Razon o Nombre: Abraham Moises Linares">
          </div>
        </div>

        <!-- w-2/5	width: 40%; -->
        <div class="md:w-2/5">
          <div class="mb-3">
            <input type="text" class="w-full p-1 border rounded text-gray-700 text-sm"
                   placeholder="Direccion: Cm 40 Lt 15 Mz 213 Ciudad Nueva">
          </div>
        </div>
      </div>

      <!-- Segunda Fila -->
      <div class="flex flex-col md:flex-row flex-grow justify-end">

        <!-- w-1/6	width: 16.666667%; -->
        <div class="md:w-1/6">
          <div class="mb-3">
            <button class="text-sm font-semibold bg-gray-200 px-2 py-1 w-full rounded">
              <i class="fas fa-plus"></i> Items
            </button>
          </div>
        </div>

      </div>

      <!-- Tercera Fila -->
      <!--
        Producto
        unidad
        cantidad
        precio sin igv
        igv
        precio con igv
      -->



    </div>
  </div>
</div>
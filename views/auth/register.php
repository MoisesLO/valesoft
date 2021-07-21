<div id="app">
  <div class="flex items-center justify-center p-4 bg-gray-100 md:min-h-screen">
    <!-- maximo ancho 768 y ancho total con flex-grow -->
    <div
      class="flex flex-col flex-grow overflow-hidden bg-gray-300 rounded-md shadow-lg md:flex-row md:m-3 lg:max-w-screen-md">

      <!-- Lado Izquierdo -->
      <div class="flex flex-col px-4 py-6 text-white bg-blue-500 md:justify-between md:w-64 md:flex-shrink-0">
        <div class="my-3 text-4xl font-bold tracking-wider text-center">
          <a href="#">LINEYSOFT</a>
        </div>
        <p class="mt-6 font-normal text-center text-gray-300 md:mt-0">
          Somos una empresa especializada en facturacion electronica y dar
          soluciones de software para tu negocio o pequenia empresa.
        </p>
        <p class="flex flex-col items-center justify-center mt-10 text-center">
          <span>Ya tienes una cuenta?</span>
          <a href="/login" class="underline">Entrar ..!</a>
        </p>
        <p class="mt-6 text-sm text-center text-gray-300">
          Acepto los <a href="#" class="underline">terminos</a> y
          <a href="#" class="underline">condiciones</a>
        </p>
      </div>

      <!-- Lado derecho con ancho total, previo flex padre -->
      <div class="flex-col flex-grow p-5 bg-white md:flex-row" x-data="data()">

        <!-- 1 Nombre y Apellidos -->
        <div class="flex flex-col md:flex-row">
          <div class="flex-grow md:mr-2">
            <label class="text-sm font-semibold text-gray-500">Nombres</label>
            <input
              type="text"
              x-model="registro.nombres"
              class="
              mt-0.5 px-4 py-2
              w-full
              transition duration-300
              border border-gray-300 rounded
              focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200
              "/>
          </div>
          <div class="flex-grow mt-3 md:mt-0 md:ml-2">
            <label class="text-sm font-semibold text-gray-500">Apellidos</label>
            <input
              type="text"
              x-model="registro.apellidos"
              class="
                mt-0.5 px-4 py-2
                w-full
                transition duration-300
                border border-gray-300 rounded
                focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200
                "/>
          </div>
        </div>

        <!-- 2 Correo -->
        <div class="flex flex-col flex-grow mt-3">
          <label class="text-sm font-semibold text-gray-500">Correo</label>
          <input
            type="email"
            x-model="registro.correo"
            class="
              mt-0.5 px-4 py-2
              text-gray-600
              w-full
              border border-gray-300
              rounded
              focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200"/>
        </div>


        <!-- 3 Password -->
        <div class="flex flex-col mt-3 md:flex-row">
          <div class="flex-grow md:mr-2">
            <label class="text-sm font-semibold text-gray-500">Contrasena</label>
            <input
              type="password"
              x-model="registro.password"
              class="
              mt-0.5 px-4 py-2
              w-full
              transition duration-300
              border border-gray-300
              rounded
              focus:border-transparent
              focus:outline-none
              focus:ring-4 focus:ring-blue-200
             "/>
          </div>
          <div class="flex-grow mt-3 md:mt-0 md:ml-2">
            <label class="text-sm font-semibold text-gray-500">Re Contrasena</label>
            <input
              type="password"
              x-model="registro.repassword"
              class="
              mt-0.5 px-4 py-2
              w-full
              border border-gray-300
              rounded
              focus:border-transparent
              focus:outline-none
              focus:ring-4 focus:ring-blue-200
              "/>
          </div>
        </div>

        <!-- 4 Ruc Empresa -->
        <div class="flex flex-col mt-3 md:flex-row">
          <div class="md:w-44 md:mr-2">
            <label class="text-sm font-semibold text-gray-500">Ruc Empresa</label>
            <input
              type="text"
              x-model="registro.empresa_ruc"
              class="
              mt-0.5 px-4 py-2
              w-full
              transition duration-300
              border border-gray-300
              rounded
              focus:border-transparent
              focus:outline-none
              focus:ring-4 focus:ring-blue-200
              "/>
          </div>
          <div class="flex-grow mt-3 md:mt-0 md:ml-2">
            <label class="text-sm font-semibold text-gray-500">Razon Empresa</label>
            <input
              type="text"
              x-model="registro.empresa_razon"
              class="
              mt-0.5 px-4 py-2
              w-full
              border border-gray-300
              rounded
              focus:border-transparent
              focus:outline-none
              focus:ring-4 focus:ring-blue-200
              "/>
          </div>
        </div>


        <!-- 5 Razon Social -->
        <div class="flex flex-col mt-3">
          <label class="pb-1 text-sm font-semibold text-gray-500">Direccion Empresa</label>
          <input type="text"
                 x-model="registro.empresa_direccion"
                 class="w-full px-4 py-2 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200">
        </div>

        <!-- 6 Button Registrar -->
        <div class="mt-5">
          <button
            type="submit"
            @click="envio()"
            class="w-full px-4 py-2 text-lg font-semibold text-white bg-blue-500 rounded-md ">
            Registrarse
          </button>
        </div>


      </div>

    </div>
  </div>
</div>

<script type="application/javascript">
  function data() {
    return {
      registro: {
        nombres: "Abraham Moises",
        apellidos: "Linares Oscco",
        correo: "elnaufrago2009@gmail.com",
        password: "moiseslinar3s",
        repassword: "moiseslinar3s",
        empresa_ruc: "10425162531",
        empresa_razon: "SURMOTRIZ S.R.L.",
        empresa_direccion: "CM 40 LT 15 MZ 213 Ciudad Nueva"
      },
      envio () {
        axios.post('/api_registro', { registro: this.registro }).then(res => {
          console.log(res.data);
        });
      }
    }
  }
</script>

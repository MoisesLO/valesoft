<div id="app">
    nombres: {{nombres}} </br>
    apellidos: {{apellidos}} </br>
    correo: {{ $store.state.user.correo }}</br>
    <a href="#" class="p-2" @click="setName">Cambiar Nombre</a>
    <a href="#" class="p-2" @click="restName">Restablecer Nombre</a>
</div>
<script>
  const store = new Vuex.Store({
    state: {
      user: {
        nombres: "Abraham Moises",
        apellidos: "Linares Oscco",
        correo: "elnaufrago2009@gmail.com",
        status: "no conectado"
      },
      empresa: {
        ruc: "",
        razon: "",
        direccion: ""
      },
      nombres: "Abraham Moises cambiando",
      apellidos: "",
      count: 1
    },
    mutations: {
      increment(state) {
        state.count++;
      },
      setName(state) {
        state.user.nombres = "Abraham Moises Cambiado";
      },
      restName(state) {
        state.user.nombres = "Abraham Moises";
      }
    },
    plugins: [createPersistedState()]
  });

  const {ref,onMounted} = Vue;
  const app = Vue.createApp({
    setup(){
      const nombres = store.state.user.nombres;
      const apellidos = store.state.user.apellidos;
      function setName() {
        store.commit("setName");
      }
      function restName() {
        store.commit("restName")
      }
      return { nombres, apellidos, setName, restName };
    }
    // methods: {
    //   increment() {
    //     this.$store.commit("increment");
    //   },
    //   setNombre() {
    //     this.$store.commit("setName");
    //   }
    // },
    // computed: {
    //   count() {
    //     return this.$store.state.count;
    //   }
    // }
  });

  app.use(store);
  app.mount("#app");
</script>



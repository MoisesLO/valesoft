<div id="app">
  {{$store.state.nombres}} </br>
  <button @click="setNombre">Cambiar nombre</button>
</div>
<script>
    const store = new Vuex.Store({
        state: {
          user: {
            nombres: "",
            apellidos: "",
            correo: "",            
          }
          empresa: {
            ruc: "",
            razon: "",
            
          },
          nombres: "Abraham Moises",
          apellidos: "",
          count: 1
        },
        mutations: {
          increment(state) {
            state.count++;
          },
          setName(state){
            state.nombres = "Apellido inicial jiji";
          }
        },
        plugins: [createPersistedState()]
    });

    const app = Vue.createApp({
        methods: {
          increment() {
            this.$store.commit("increment");
          },
          setNombre(){
            this.$store.commit("setName");
          }          
        },
        computed: {
          count() {
            return this.$store.state.count;
          }
        }
      });
      app.use(store);
      app.mount("#app");
</script>



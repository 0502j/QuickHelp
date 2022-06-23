<template>
  <div class="navbar-desk">
    <v-app-bar color="#283852">
      <div class="itens-geral">
        <div>
          <v-btn outlined class="btn-itens">
          <router-link class="itens" to="/">Home</router-link>
          </v-btn>

           <v-btn outlined class="btn-itens">
          <router-link class="itens" to="/diagnosticos"
            >Diagnósticos</router-link
          >
          </v-btn>
           <v-btn outlined class="btn-itens">
          <router-link class="itens" to="/news">Notícias</router-link>
          </v-btn>
          <v-btn outlined class="btn-itens">
          <router-link class="itens" to="/historico">Histórico</router-link>
          </v-btn>
        </div>
      </div>
      <v-spacer></v-spacer>
      <div class="btn-login">
        <v-btn outlined class="login-button" width="100px" to="/login"
          >Login</v-btn
        >
      </div>
    </v-app-bar>
  </div>
</template>

<script>
export default {
  data() {
    return {
      drawer: false,
      group: null,
      itemsNavbar: ["Home", "Diagnósticos", "Notícias", "Histórico"],
    };
  },
  watch: {
      group () {
        this.drawer = false
      },
    },
};
</script>

<style>
.navbar-desk {
  background-color: #283852;
  font-family: "Roboto";
  font-style: normal;
}
.itens-geral {
  display: flex;
  justify-content: flex-start;
}
.itens {
  color: white;
  text-decoration: none;
}

.login-button {
  background-color: none !important;
  border: 1px solid white;
  border-radius: 30px;
  color: white !important;
}
.navbar-mobile{
  background-color: #283852 !important;
}
.btn-itens{
  background-color: none !important;
  border: 0px;
  color: white !important;
  text-transform: capitalize !important;
  font-weight: 500;
}
.btn-itens:hover{
  border: 1px solid white;
  border-radius: 30px;
}
</style>
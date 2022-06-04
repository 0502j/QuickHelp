<template>
  <div class="navbar">
    <v-app-bar color="#283852">
      <div class="itens-geral">
        <div>
          <router-link class="itens" to="/home">Home</router-link>
          <router-link class="itens" to="/diagnosticos"
            >Diagnósticos</router-link
          >
          <router-link class="itens" to="/news">Notícias</router-link>
          <router-link class="itens" to="/historico">Histórico</router-link>
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
      itemsNavbar: ["Home", "Diagnósticos", "Notícias", "Histórico"],
    };
  },
};
</script>

<style>
.navbar {
  background-color: #283852;
  font-family: "Roboto";
  font-style: normal;
}
.itens-geral {
  display: flex;
  justify-content: flex-start;
}
.itens {
  margin: 15px;
  color: white;
  text-decoration: none;
}

.login-button {
  background-color: none !important;
  border: 1px solid white;
  border-radius: 30px;
  color: white !important;
}
</style>
<template>
  <div class="navbar-desk"  v-if="this.$vuetify.breakpoint.name !== 'xs'">
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

  <div v-else>
     <v-card
    class="mx-auto overflow-hidden"
    height="400"
  >

    <v-app-bar
      color="#283852"
      dark
      prominent
    >
      <v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>

      <v-toolbar-title>My files</v-toolbar-title>

      <v-spacer></v-spacer>

      <v-btn icon>
        <v-icon>mdi-magnify</v-icon>
      </v-btn>

      <v-btn icon>
        <v-icon>mdi-filter</v-icon>
      </v-btn>

      <v-btn icon>
        <v-icon>mdi-dots-vertical</v-icon>
      </v-btn>
    </v-app-bar>

    <v-navigation-drawer
      v-model="drawer"
      absolute
      bottom
      temporary
    >
      <v-list
        nav
        dense
      >
        <v-list-item-group
          v-model="group"
          active-class="deep-purple--text text--accent-4"
        >
          <v-list-item>
            <v-list-item-title>Foo</v-list-item-title>
          </v-list-item>

          <v-list-item>
            <v-list-item-title>Bar</v-list-item-title>
          </v-list-item>

          <v-list-item>
            <v-list-item-title>Fizz</v-list-item-title>
          </v-list-item>

          <v-list-item>
            <v-list-item-title>Buzz</v-list-item-title>
          </v-list-item>
        </v-list-item-group>
      </v-list>
    </v-navigation-drawer>

    <v-card-text>
      The navigation drawer will appear from the bottom on smaller size screens.
    </v-card-text>
  </v-card>
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
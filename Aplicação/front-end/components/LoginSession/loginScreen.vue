<template id="app">
  <div class="login">
    <v-row>
      <v-col cols="4" class="bg" >
        <div >
          <v-row>
            <v-col class="text-login">
              <h2 style="color: white">Login</h2>
            </v-col>
          </v-row>

          <v-row>
            <v-col class="inputs-login-1">
              <v-text-field
                v-model="login.email"
                solo
                :rules="[rules.required, rules.email]"
                label="Email"
                clearable
              ></v-text-field>
            </v-col>
          </v-row>
          <v-row>
            <v-col class="inputs-login-2" cols="12">
              <v-text-field
                v-model="login.password"
                solo
                :append-icon="show1 ? 'mdi-eye' : 'mdi-eye-off'"
                :rules="[rules.required, rules.min]"
                :type="show1 ? 'text' : 'password'"
                label="Senha"
                counter
                @click:append="show1 = !show1"
              ></v-text-field>
            </v-col>
          </v-row>
          <v-row>
            <v-col cols="12">
              <router-link class="forgot-password" to="/recuperar-senha">Esqueci minha Senha</router-link>
            </v-col>
          </v-row>
          <v-row>
            <v-col class="col-btn-login">
              <v-btn class="btn-login" width="200px" @click="submit(login)">Login</v-btn>
            </v-col>
          </v-row>

         <v-row>
            <v-col cols="12" align="center">
              <router-link class="create-account" to="/cadastro">Criar conta</router-link>
            </v-col>
          </v-row>
        </div>
      </v-col>
    </v-row>
    <footer-site></footer-site>
  </div>
</template>

<script>
import footer from '../../layouts/Footer/footer.vue';
import footerSite from "@/layouts/Footer/footer.vue";
import { mapActions } from 'vuex';
export default {
  methods: {
    ...mapActions("Login", ["submit"])
  },
  components: { 
    footer,
   footerSite },
  data() {
    return {
      disabledButton: true,
      login:{
        email: "",
        password: ""
      },

      rules: {
        required: (value) => !!value || "Required.",
        counter: (value) => value.length <= 20 || "Max 20 characters",
        min: (v) => v.length >= 8 || "Min 8 characters",
        email: (value) => {
          const pattern =
            /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
          return pattern.test(value) || "Invalid e-mail.";
        },
      },
    };
  },

};
</script>

<style scoped>
.login {
  font-family: "Roboto";
  font-style: normal;
  height: 90vh !important;
  margin-bottom: -30px !important;
}
.bg {
  width: 400px !important;
  height: 94vh !important;
  background-color: #0f3375;
}
.text-login {
  text-align: center;
  margin-top: 50%;
}
.inputs-login-1 {
  align-items: center;
  margin: 0 auto !important;
  max-width: 350px;
}
.inputs-login-2 {
  align-items: center;
  margin: 0 auto !important;
  max-width: 350px;
  margin-top: -30px !important;
}
.col-btn-login {
  margin: 0 auto !important;
  text-align: center;
}
.btn-login {
  background-color: #cce4fd;
  color: #283852 !important;
  border-radius: 20px;
}

.btn-login:hover {
  background-color: #0f3375;
  color: #ffffff !important;
  border: 1px solid white;
  transition: 0.5s;
}
.forgot-password {
  color: white;
  margin-left: 200px;
}
.create-account {
  color: white;
  text-align: center !important;
  margin: 0 auto !important;
}

</style>
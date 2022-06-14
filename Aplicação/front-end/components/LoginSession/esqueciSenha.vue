<template id="app">
  <div class="forgot-pass">
    <v-row>
      <v-col cols="4">
        <div class="bg-forgot">
          <v-row>
            <v-col class="text-forgot-pass">
              <h2 style="color: white">Recuperar Senha</h2> <br>
              <p style="color:white; font-size: 12px">Insira o e-mail utilizado em sua conta no campo abaixo para receber um código de alteração de senha de acesso</p>
            </v-col>
          </v-row>

          <v-row>
            <v-col class="inputs-forgot-pass-1">
              <v-text-field
                v-model="email"
                solo
                :rules="[rules.required, rules.email]"
                label="Email"
                clearable
              ></v-text-field>
            </v-col>
          </v-row>
          <v-row>
            <v-col class="col-btn-forgot-pass">
              <v-btn :disabled="disabledButton" class="btn-forgot-pass" width="200px"> Enviar Link</v-btn>
            </v-col>
          </v-row>
        </div>
      </v-col>
    </v-row>
    <v-row style="background-color: #0f3375; margin-top: -35px;   width: 412px !important;">
    <router-link to="/login">
 <v-btn depressed style="  background-color: #0f3375; color: white"><v-icon left>
        mdi-arrow-left
      </v-icon> Voltar para o Login</v-btn>
    </router-link>
     
    </v-row>
  </div>
</template>

<script scoped>
export default {
  data() {
    return {
      disabledButton: true,
      email: "",

      password: "",
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
#app{
  background-color: black !important;
}
.forgot-pass {
  font-family: "Roboto";
  font-style: normal;
}
.bg-forgot {
  width: 400px !important;
  height: 100vh !important;
  background-color: #0f3375;
}
.text-forgot-pass {
  text-align: center;
  margin-top: 50%;
}
.inputs-forgot-pass-1 {
  align-items: center;
  margin: 0 auto !important;
  max-width: 350px;
}
.inputs-forgot-pass-2 {
  align-items: center;
  margin: 0 auto !important;
  max-width: 350px;
  margin-top: -30px !important;
}
.col-btn-forgot-pass {
  margin: 0 auto !important;
  text-align: center;
}
.btn-forgot-pass {
  background-color: #cce4fd;
  color: #283852 !important;
  border-radius: 20px;
}

.btn-forgot-pass:hover {
  background-color: #0f3375;
  color: #ffffff !important;
  border: 1px solid white;
  transition: 0.5s;
}
.forgot-password {
  color: white;
  margin-left: 200px;
}
</style>
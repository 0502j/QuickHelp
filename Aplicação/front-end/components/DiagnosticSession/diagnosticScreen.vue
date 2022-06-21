<template>
  <span class="app">
    <navbar></navbar>

    <div class="diagnostico-bg">
      <div class="container">
        <v-row>
          <v-col cols="6" sm="8" align-self="center">
            <div class="textos">
              <div class="text-diagnostico">
                <h3>Está se sentindo mal?</h3>
                <h3>Obtenha um diagnóstico prévio de seus sintomas</h3>
                <br />
                <p style="font-size: 16px; letter-spacing: normal">
                  Insira os sintomas no campo abaixo para que possamos te
                  auxiliar da melhor maneira
                </p>
              </div>
            </div>
          </v-col>

          <v-col cols="6" sm="4">
            <div
              style="
                position: absolute;
                top: 100px;
                right: 100px;
                display: block;
              "
            >
              <v-img
                height="300"
                width="300"
                contain
                src="/hospital.png"
                style="z-index: 1"
                class="medica-img"
              ></v-img>
            </div>
            <div style="position: absolute; top: 250px; right: 200px">
              <v-img
                height="250"
                width="250"
                contain
                src="/medica.png"
                style="z-index: 3"
                class="medica-img"
              ></v-img>
            </div>
          </v-col>
        </v-row>
        <div class="simtomas">
          <v-row class="input-sintomas">
            <v-col cols="12">
              <v-text-field
                style="width: 530px; border-radius: 50px"
                v-model="message2"
                solo
                label="Digite seus sintomas"
                clearable
              ></v-text-field>
            </v-col>
          </v-row>
        </div>
       <div class="btn" style="width: 200px; margin-left: 180px">
            <v-btn  width="250px" rounded style="background-color: #CCE4FD">Ver Diagnóstico</v-btn>
       </div>

      </div>
    </div>
    <v-container>
      <div class="page-itens">
        <v-row align="center">
          <v-col cols="6">
            <v-img contain width="400px" src="indio.png"></v-img>
          </v-col>

          <v-col cols="6" align-self="center" style="margin-top: 50px">
            <span class="text-importancia-diagnostico"
              >Realizar um pré diagnóstico previne que você faça uso de
              medicamentos errados e te auxilia a passar com um médico
              especialista. <br />

              Vale lembrar que nossos diagnósticos são fornecidas por uma I.A
              (inteligência artificial), portanto, salientamos a necessidade de
              buscar ajuda médica após esse resultado, para que de fato receba
              as melhores instruções. <br />

              Logo após seu diagnóstico, iremos te mostrar hospitais e farmácias
              na sua região, assim facilitando essa busca</span
            >
          </v-col>
        </v-row>
      </div>
    </v-container>
    <footer-site></footer-site>
  </span>
</template>

<script>
import navbar from "@/layouts/Navbar/navbar.vue";
import footerSite from "@/layouts/Footer/footer.vue";
import { mapState } from "vuex";
export default {
  components: {
    navbar,
    footerSite,
  },
  computed: {
    ...mapState("Diagnostico", ["symtomps"]),
  },
};
</script>

<style>
.app {
  font-family: "Roboto";
  font-style: normal;
}
.container {
  max-width: 1900px !important;
}
.diagnostico-bg {
  background-color: #0f3375;
  height: 500px;
  width: 100%;
  text-align: center;
}
.text-diagnostico {
  font-size: 30px;
  text-align: left;
  letter-spacing: 1px;
  color: white;
}
.medica-img {
  border-radius: 30px !important;
}
.textos {
  margin: 100px 50px !important;
}
.input-sintomas {
  margin-top: -100px !important;
  margin-left: 30px;
}
.text-importancia-diagnostico {
  font-family: "Roboto";
  font-style: normal;
  font-size: 16px;
  line-height: 30px;
}
.page-itens {
  padding: 50px;
}
.btn-diagnostic {
  text-align: center !important;
  margin-left: 20px !important;
}

@media screen and (max-width: 1112px) {
  .medica-img {
    width: 300px !important;
    height: 300px !important;
    margin-right: -150px;
  }
}
</style>
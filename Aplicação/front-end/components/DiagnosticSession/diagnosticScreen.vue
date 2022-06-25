<template>
  <span class="app" data-app>
    <navbar></navbar>

    <div class="diagnostico-bg">
      <div class="container">
        <v-row>
          <v-col cols="6" sm="8" align-self="center">
            <div class="textos">
              <div class="text-diagnostico">
                <h3>Está se sentindo mal?</h3>
                <h3>
                  Obtenha um diagnóstico <br />
                  prévio de seus sintomas
                </h3>
                <br />
                <p
                  style="
                    font-size: 20px;
                    letter-spacing: normal;
                    font-weight: 600;
                  "
                >
                  Selecione abaixo os seus sintomas para que possamos <br />
                  te auxiliar da melhor maneira
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
        <v-col>
          <div class="simtomas">
            <v-row class="input-sintomas">
              <v-col cols="12">
                <v-select
                  solo
                  style="
                    width: 530px;
                    border-radius: 50px;
                    color: white !important;
                  "
                  v-model="formData.symtomps"
                  :items="symtomps"
                  item-text="name"
                  item-value="id"
                  attach
                  chips
                  label="Selecione seus Sintomas"
                  multiple
                ></v-select>
              </v-col>
            </v-row>
          </div>
          <br />
          <div
            class="btn"
            style="width: 200px; margin-left: 180px; margin-top: 10px"
          >
            <v-btn
              @click="sendSymtomps(formData)"
              width="250px"
              rounded
              style="background-color: #cce4fd"
              >Enviar Sintomas</v-btn
            >
          </div>
          <v-dialog
            v-model="modal"
            transition="dialog-bottom-transition"
            max-width="600"
            persistent
          >
            <v-card v-model="list">
              <v-toolbar color="primary">Selecione outros Sintomas</v-toolbar>
              <v-card-text v-bind="list">
               <p>{{list.text}}</p>
</v-card-text>
    <v-radio-group v-model="formData.choices">
      <v-radio
        v-for="itens in choices"
        :key="itens.name"
        :label="itens.name"
        :value="itens.value"
      ></v-radio>
    </v-radio-group>
                <!-- {{list.items}} -->

              
              <!-- <v-card-actions class="justify-end">
                <v-btn text @click="closeModal()">Close</v-btn>
              </v-card-actions> -->
              <v-card-actions>

                <v-spacer></v-spacer>
                <v-btn text @click="closeModal()">Fechar</v-btn>
                <v-btn text @click="checkItensSintomas(formData.choices, list.items), counterBtn(), counter += 1" :disabled="desabilitar">Próximo</v-btn>
              </v-card-actions>
            </v-card>
          </v-dialog>
        </v-col>
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

              <br />

              Vale lembrar que nossos diagnósticos são fornecidas por uma I.A
              (inteligência artificial), portanto, salientamos a necessidade de
              buscar ajuda médica após esse resultado, para que de fato receba
              as melhores instruções. <br />

              <br />
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
import { mapState, mapActions, mapGetters } from "vuex";
import router from "../../src/router";
export default {
  components: {
    navbar,
    footerSite,
  },
  computed: {
    ...mapState("Diagnostico", ["symtomps", "modal", "list", "choices"]),
      ...mapGetters("Diagnostico", ["getChoicesList"]),
  },

  methods: {
    ...mapActions("Diagnostico", ["sendSymtomps", "closeModal", "sendSymtomps2", "sendSymtomps3", "sendSymtomps4", "disableAPI"]),

    checkItensSintomas(escolha, item){

      if(escolha){
        this.sendSymtomps2({item});
      }
      // console.log(escolha);
    },

    counterBtn(){
      console.log(this.counter);
      if(this.counter == 10){
        this.desabilitar = true;
        this.disableAPI();
      }
    }

  },

  mounted(){
    this.counterBtn();
  },

  data: function () {
    return {
      formData: {
        symtomps: "",
        choices:"",
      },
    desabilitar: false,
      counter: 0
    };
  },
};
</script>

<style scoped>
.text {
  font-size: 9px !important;
}
.app {
  font-family: "Roboto";
  font-style: normal;
}
.container {
  max-width: 1900px !important;
}
.diagnostico-bg {
  background-color: #0f3375;
  height: 600px;
  width: 100%;
  text-align: center;
}
.text-diagnostico {
  font-size: 32px;
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
  font-size: 18px;
  line-height: 28px;
  font-weight: 500;
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
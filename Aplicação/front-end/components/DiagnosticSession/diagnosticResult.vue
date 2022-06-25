<template>
  <span class="app" data-app>
    <navbar></navbar>

    <div class="diagnostico-resultado-bg">
      <v-container>
      <div style="padding: 20px" >
        <v-row style="margin-top: 30px">
          <v-col cols="12">
    <div style="max-width: 665px; margin-left: 3px">
    <v-stepper alt-labels>
      <v-stepper-header>
        <v-stepper-step step="1">
         Verificação
        </v-stepper-step>

        <v-divider></v-divider>

        <v-stepper-step step="2">
          Sintomas
        </v-stepper-step>

        <v-divider></v-divider>

        <v-stepper-step step="3">
         Resultados
        </v-stepper-step>
      </v-stepper-header>
    </v-stepper>

  </div>
          </v-col>
        </v-row>

        <div class="possible">
          <v-row align="center">
            <v-col cols="6">
                <v-card class="card">
                    <br>
                   <h3 class="text-results">Segue abaixo uma lista com possíveis 
                       diagnósticos sobre seus sintomas:</h3> 
                       <br>
                       <h3 class="text-results"> Diagnósticos:</h3>
                       <br>
                       <template v-for="item in diagnostic">
                       {{item.name}}
                       </template>
                    
                       <!-- <ul>
                           <li class="text-results">Gripe</li>
                           <br>
                           <li class="text-results">Dengue</li>
                           <br>
                           <li class="text-results">Covid-19</li>
                           <br>
                           <li class="text-results">Ressaca</li>
                           <br>
                           <li class="text-results">Insolação</li>
                       </ul> -->
                </v-card>
            </v-col>

            <v-col cols="6">
              <v-img style="margin-top: -50px" src="/pasta.png">
              </v-img>
            </v-col>
           </v-row>

        </div>
      
        
      </div>
        </v-container>
    </div>
     <div class="diagnostic-bg">
      <div class="container">
        <v-row>
          <v-col cols="12" sm="12" align-self="center">
            <div class="textos">
              <div class="text-diagnostico" style="color: black">
                <h3>Gripe                
                  </h3>
                <br />
                <p style="font-size: 20px; letter-spacing: normal; font-weight: 400; text-align: justify; color: black">
                A gripe é uma doença causada por um vírus do tipo influenza, que faz com que o sistema respiratório fique infeccionado e cause
                uma série de sintomas no paciente. <br>
                <br>
                  Todo ano, esse vírus influenza passa por transformações e mutações, que fazem com que uma
                  pessoa que teve a doença uma vez volte a apresentar os sintomas e os efeitos causados pela ação
                  do vírus dentro do organismo.
                  <br>
                  <br>
                  A gripe é transmitida por meio do contato com as secreções, os espirros e a tosse de um paciente que esteja
                  infectado pela doença. Como o vírus pode sobreviver em suspensão no ar, nos meses de inverno e outono, quando a gripe é mais comum, é importante manter os ambientes
                  sempre arejados e com circulação de ar, para que possa haver uma troca. Isso é válido para locais com muita circulação de pessoas,
                  como o transporte público, por exemplo.
                  <br>
                  <br>
                  É recomendável que seu tratamento seja realizado em Farmácias.
                  <br>
                  <br>
                  Sintomas comuns:
                  <br>
                  <ul>
                    <li>Nariz entupido</li>
                    <li>Dor de garganta</li>
                    <li>Febre</li>
                  </ul>
                </p>        
              </div>
            </div>
          </v-col>
        </v-row>        
      </div>
    </div>
    <div class="diagnostico-resultado-bg">
      <div class="container">
        <v-row>
          <v-col cols="12" sm="12" align-self="center">
            <div class="textos">
              <div class="text-diagnostico">
                <h6>Hospitais, clínicas e farmácias próximas a você:</h6>

                <br />
              
              </div>
            </div>
          </v-col>
        </v-row>        
      </div>
    </div>
      <div class="diagnostic-bg">
      <div class="container">
        <v-row>
          <v-col cols="12" sm="12" align-self="center">
            <div class="textos">
              <div class="text-diagnostico" style="color: black">
                <h3>Principais notícias                
                  </h3>
                <br />
              
              </div>
            </div>
          </v-col>
        </v-row>        
      </div>
    </div>
    
 
 
    <footer-site></footer-site>
  </span>
</template>

<script scoped>
import navbar from "@/layouts/Navbar/navbar.vue";
import footerSite from "@/layouts/Footer/footer.vue";
import { mapState, mapActions, mapGetters } from "vuex";
export default {
  components: {
    navbar,
    footerSite,
  },
  computed: {
    ...mapState("Diagnostico", ["diagnostic"]),
      ...mapGetters("Diagnostico", ["getChoicesList"]),
  },
  methods: {},
  data: function () {
    return {};
  },
};
</script>

<style>
.possible{
  margin: 0 auto !important;
}
.diagnostic-bg {
  background-color: #cacaca;
  height: 85vh;
  width: 100%;
  text-align: center;
}
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
.diagnostico-resultado-bg {
  background-color: #0f3375;
  height: 115vh;
  max-height: 90%;
  width: 100%;
  text-align: center;
}
.text-diagnostico {
  font-size: 32px;
  text-align: left;
  letter-spacing: 1px;
  color: rgb(2, 2, 2);
}
.medica-img {
  border-radius: 30px !important;
}
.textos {
  margin: 100px 50px !important;
}

.text-results {
  font-family: "Roboto";
  font-style: normal;
  font-size: 18px;
  text-align: left;
  font-weight: 500;
  margin-left: 35px;
}
.page-itens {
  padding: 50px;
}
.btn-diagnostic {
  text-align: center !important;
  margin-left: 20px !important;
}
.card {
  height: 350px;
  border-radius: 15px !important;
}
@media screen and (max-width: 1112px) {
  .medica-img {
    width: 300px !important;
    height: 300px !important;
    margin-right: -150px;
  }
}
</style>
<template>
  <span class="app" data-app>
    <navbar></navbar>

    <div class="diagnostico-resultado-bg">
      <div class="container">
        <v-row>
          <v-col cols="6" sm="8" align-self="center">
            <div class="textos">
              <div class="text-diagnostico">
                <h3>Está se sentindo mal?</h3>
                <h3>Obtenha um diagnóstico
                  <br> prévio de seus sintomas</h3>
                <br />
                <p style="font-size: 20px; letter-spacing: normal; font-weight: 600">
                  Insira os sintomas no campo abaixo para que <br>
                   possamos te auxiliar da melhor maneira
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
       
        <div class="possible">
            <v-col cols="6">
                <v-card class="card">
                    <br>
                   <h3 class="text-results">Segue abaixo uma lista com possíveis 
                       diagnósticos sobre seus sintomas:</h3> 
                       <br>
                       <h3 class="text-results"> Diagnósticos:</h3>
                       <br>
                       <ul>
                           <li class="text-results">Gripe</li>
                           <br>
                           <li class="text-results">Dengue</li>
                           <br>
                           <li class="text-results">Covid-19</li>
                           <br>
                           <li class="text-results">Ressaca</li>
                           <br>
                           <li class="text-results">Insolação</li>
                       </ul>
                </v-card>
            </v-col>
           

        </div>
      
        
      </div>
    </div>
   
    <footer-site></footer-site>
  </span>
</template>

<script>
import navbar from "@/layouts/Navbar/navbar.vue";
import footerSite from "@/layouts/Footer/footer.vue";
export default {
  components: {
    navbar,
    footerSite,
  },
  computed: {
  },
  methods: {
  },
  data: function () {
        return {
        }
    }
}

</script>

<style>
.text{
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
  height: 85vh;
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
.card{
    height: 350px;
}
@media screen and (max-width: 1112px) {
  .medica-img {
    width: 300px !important;
    height: 300px !important;
    margin-right: -150px;
  }
}
</style>
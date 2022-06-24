<template>
  <span class="app" data-app>
    <navbar></navbar>

    <div class="sobre-nos-bg">
      <div class="container">
        <v-row>
          <v-col cols="12" sm="12" align-self="center">
            <div class="textos">
              <div class="text-diagnostico">
                <h3>Conheça um pouco mais
                
                  <br> sobre nós!</h3>
                <br />          
              </div>
            </div>
          </v-col>
        </v-row>        
      </div>
    </div>
    <div class="sobre-nos-bg1">
      <div class="container">
        <v-row>
            <v-col cols="6" sm="4"></v-col>
          <v-col cols="6" sm="8" align-self="center">
            <div class="textos">
              <div class="text-diagnostico">
                <h3>Quem somos?</h3>

                <br />
                <p style="font-size: 20px; letter-spacing: normal; font-weight: 400; text-align: justify">
                  Acreditamos que você e todos em sua volta 
                  merecem ter acesso a informações confiáveis sobre
                  saúde, e nosso projeto proporciona isso, contamos 
                  com uma Inteligência Artificial para analisar,
                  comparar e trazer os melhores resultados para 
                  você. <br>
                  Com esse projeto, estamos sempre prontos para 
                  apoiá-lo com a recomendação de saúde certa.
                </p>
              </div>
            </div>
          </v-col>
        </v-row>        
      </div>
    </div>
    <div class="sobre-nos-bg2">
      <div class="container">
        <v-row>
          <v-col cols="6" sm="8" align-self="center">
            <div class="textos">
              <div class="text-diagnostico">
                <h3>Trazemos tecnologia à medicina!</h3>
                <br />
                <p style="font-size: 20px; letter-spacing: normal; font-weight: 400; text-align: justify">
                 A tecnologia hoje está presente em todas as áreas, e a da saúde não poderia ser diferente,
                 com os avanços das máquinas e uma grande expansão da inteligência artificial, hoje pode-se resolver muitos problemas
                 na medicina apenas usando a tecnologia.<br>
                 É claro que desde o seu surgimento a medicina conta com ferramentas e dispositivos que facilitam a rotina dos profissionais
                 e contribuem para a saúde dos pacientes. A diferença é que nos últimos anos essas inovações têm surgido com mais rapidez,
                 promovendo verdadeiras transformações no setor.
                </p>
              </div>
            </div>
          </v-col>
            <v-col cols="6" sm="4"></v-col>

        </v-row>        
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
.sobre-nos-bg {
  background-color: #cacaca;
  height: 85vh;
  width: 100%;
  text-align: center;
}
.sobre-nos-bg1 {
  background-color: #cacaca;
  height: 85vh;
  width: 100%;
  text-align: center;
}
.sobre-nos-bg2 {
  background-color: #ffffff;
  height: 85vh;
  width: 100%;
  text-align: center;
}
.text-diagnostico {
  font-size: 32px;
  text-align: center;
  letter-spacing: 1px;
  color: rgb(0, 0, 0);
}
.textos {
  margin: 100px 50px !important;
}

.text-results {
  font-family: "Roboto";
  font-style: normal;
  font-size: 18px;
  
  font-weight: 500;
 
}
.page-itens {
  padding: 50px;
}
.btn-diagnostic {
  text-align: center !important;
 
}


</style>
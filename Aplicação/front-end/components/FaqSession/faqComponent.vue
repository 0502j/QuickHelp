<template>
  <div style="font-family: Roboto; font-style: normal">
    <navbar></navbar>
    <div class="question">
        <v-row>
            <v-col>
                <h2>Perguntas Frequentes</h2>
            </v-col>
        </v-row>
        <v-row>
            <v-col>
                <v-expansion-panels>
    <v-expansion-panel>
      <v-expansion-panel-header>
        O diagnóstico fornecido é feito por médicos? 
      </v-expansion-panel-header>
      <v-expansion-panel-content>
       -Não, nossos diagnósticos sâo fornecidos por um sistema de Inteligência Artificial(I.A), portanto não é feito por um médico especifico. 
A inteligência artificial utilizada une o conhecimento de médicos, a literatura científica e os dados estatísticos selecionados de milhares de casos de pacientes.


      </v-expansion-panel-content>
    </v-expansion-panel>
  </v-expansion-panels>
            </v-col>
        </v-row>
    </div>
  </div>
</template>

<script>
import navbar from '../../layouts/Navbar/navbar.vue'
export default {
  components: { navbar },
    data() {
        return {
            questions:[
                "O diagnóstico fornecido é feito por médicos? "
            ]
        }
    },
}
</script>

<style>
.question{
    padding: 50px;
}
</style>
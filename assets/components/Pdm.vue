<template>
  <div style="height:100%;">
    <div class="container" style="height:100%;">
      <div class="row">
        <div class=" col d-flex justify-content-center pt-2">
        <h1>PDM</h1>
        </div>
      </div>
      <div class="row">
        <div class=" col d-flex justify-content-center pt-2">
        <p> Ihr&nbsp;</p>
        <p id="typewriter"></p><vue-typer :text=this.text ></vue-typer>
        <p>&nbsp;Partner in folgenden Bereichen</p>
        </div>
      </div>
      <div class="row">
        <router-link  to="/Umzug"  class="pdm_link col d-flex justify-content-center pt-2" >
          <Card 
            title="Umzug"
            text="Umzug"
            icon="truck-loading" />
        </router-link>
        <router-link  to="/Transport" class="pdm_link col d-flex justify-content-center pt-2">
          <Card 
            title="Transport"
            text="Transport"
            icon="shipping-fast"/>
        </router-link>
        <router-link  to="/Entsorgung" class="pdm_link col d-flex justify-content-center pt-2">
          <Card 
            title="Entsorgung"
            text="Entsorgung"
            icon="dumpster" />
          </router-link>
      </div>
  </div>
  </div>
</template>
<script>
// CommonJS
var VueTyper = require('vue-typer').VueTyper
// Global
var VueTyper = window.VueTyper.VueTyper
import Card from './Card.vue';
import Footer from './Footer.vue';
  export default {
  components: {
     Card,Footer,VueTyper
  },
  data () { 
    return {
      text: [
        'kompetenter','erfahrener','preiswerter','zuverlässiger','schneller','unkomplizierter'
      ]
    }
  },
  name: "Pdm",
  };
</script>

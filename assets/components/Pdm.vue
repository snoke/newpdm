<template>
  <div style="height:100%;">
    <div class="container" style="height:100%;">
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
import Card from './Card.vue';
import Footer from './Footer.vue';
  export default {
  components: {
     Card,Footer
  },
  name: "Pdm",
  };
</script>

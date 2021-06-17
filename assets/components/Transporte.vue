<template>
  <div class="container">
    <div class="row">
      <div class="card col-lg  pt-2  shadow">
        <div class="card-body text-secondary">
                  <router-link  class="nav-link" to="/">
                  <i style="float:left;" :class='"mt-2 fas fa-arrow-left  text-primary"'></i></router-link>
          <i style="float:right;" :class='"fas fa-shipping-fast  text-primary"'></i>
            <h2 class="card-title text-center w-100 pr-5 text-shadow-sm" style="font-size:1.8rem;">Transport</h2>
            
          <p class="row card-text p-3 text-dark">Transport</p>
        </div>
      </div>
    </div>
    <div class="row">
    </div>
  </div>
</template>
<script>
import Footer from './Footer.vue';
  export default {
  name: "Transport",
  components: {
    Footer
  }
  };
</script>
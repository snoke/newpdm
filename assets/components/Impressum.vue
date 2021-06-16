<template>
  <div class="container"  id="Impressum">
    <div class="row">
      <div class="card col-lg  pt-2  shadow">
        <div class="card-body text-primary">
          <i style="float:right;" :class='"fas fa-balance-scale"'></i>
            <h2 class="card-title text-center w-100" style="font-size:1.8rem;">Impressum</h2>
            
        <div class="row d-flex justify-content-center">
            <div class="col-md d-flex justify-content-center" >
                <div class=" pt-2 w-50" style="border-bottom:1px solid #CCC;">
                </div>
            </div>
        </div>
          <p class="row card-text p-3 text-dark">Impressum</p>
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
  name: "Impressum",
  components: {
    Footer
  }
  };
</script>
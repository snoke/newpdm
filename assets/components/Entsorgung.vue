<template>
  <div class="container" id="Entsorgung">
    <div class="row">
      <div class="card col-lg  pt-2  shadow">
        <div class="card-body text-primary" >
          <i style="float:right;" :class='"fas fa-dumpster"'></i>
            <h2 class="card-title text-center w-100" style="font-size:1.8rem;">Entsorgung</h2>
            
        <div class="row d-flex justify-content-center">
            <div class="col-md d-flex justify-content-center" >
                <div class=" pt-2 w-50" style="border-bottom:1px solid #CCC;">
                </div>
            </div>
        </div>
          <p class="row card-text p-3">Entsorgung</p>
        </div>
      </div>
    </div>
    <div class="row">
    </div>
  </div>
</template>
<script>
import ContactTeaser from './ContactTeaser.vue';
  export default {
  name: "Entsorgung",
  components: {
    ContactTeaser
  }
  };
</script>

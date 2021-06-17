<template>
    <div class="container  w-100 pt-5">
        <div class="row d-flex justify-content-center ">
            
      <div class="card  pt-0  shadow ">
        <div class="card-body text-primary ">
          <i style="float:right;" :class='"fas fa-balance-scale"'></i>
            <h2 class="card-title text-center " style="font-size:1.8rem;"></h2>
          <p class="row card-text p-3 text-dark"><ContactForm /></p>
        </div>
      </div>
            <div class="col-md d-flex justify-content-center">
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md d-flex justify-content-center" >
                <div class=" pt-3 w-25" >
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md d-flex justify-content-center">
            </div>
            <div class="col-md d-flex justify-content-center">
                <div class="card-body text-center" ><i style=";" class="fas fa-balance-scale"></i>
                    <p class="row card-text text-center"  style="font-size:0.9rem;"><router-link  to="/Impressum"> Impressum</router-link></p>
                </div>
            </div>
            <div class="col-md d-flex justify-content-center">
                <div class="card-body text-center justify-content-center text-primary fw-bold fst-italic">
                     <i style=";" class="fas fa-address-card text-dark"></i> PDM GmbH
                    <div class="row text-center justify-content-center text-dark fw-normal" style="font-size:0.9rem;">
                    Pdmstraße 123<br />
                    12345 Pdmstadt</div>
                </div>
            </div>
            <div class="col-md d-flex justify-content-center">
                <div class="card-body text-center" ><i style=";" class="fas fa-copyright"></i> <nobr>code & design</nobr>
                    <p class="row card-text text-center"  style="font-size:0.9rem;"><a href="https://www.stefan-sander.online" target="_blank"><nobr>Stefan Sander</nobr></a></p>
                </div>
            </div>
            <div class="col-md d-flex justify-content-center">
            </div>
        </div>
    </div>
</template>
<script>
import ContactForm from './ContactForm.vue';
  export default {
  name: "Footer",
  components: {
      ContactForm
  }
  };
</script>

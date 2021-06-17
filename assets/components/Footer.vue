<template>
    <div class="container  w-100">
        <div class="row d-flex justify-content-center ">
            <div class="col-md d-flex justify-content-center pb-4 pt-4"><a class="link text-primary " @click="scrollToElement"><i class="fas fa-arrow-up"></i></a>
            </div>
      </div>
        <div class="row d-flex justify-content-center pt-0">
            
      <div class="card  pt-0  shadow ">
        <div class="card-body text-primary ">
          <i style="float:right;" :class='"fas fa-envelope"'></i>
            <h2 class="card-title text-center " style="font-size:1.8rem;"></h2>
          <p class="row card-text p-0 text-dark"><ContactForm /></p>
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
            <div class="col-md d-flex justify-content-center text-nowrap">
                <div class="card-body text-center text-nowrap" ><i style=";" class="fas fa-copyright"></i> <nobr>code & design</nobr>
                    <p class="row card-text text-center text-nowrap"  style="font-size:0.9rem;"><a href="https://www.stefan-sander.online" target="_blank" class="text-nowrap"><nobr>Stefan Sander</nobr></a></p>
                </div>
            </div>
            <div class="col-md d-flex justify-content-center">
            </div>
        </div>
        <div class="row d-flex justify-content-center ">
            <div class="col-md d-flex justify-content-center"><a class="text-primary link" @click="scrollToElement"><i class="fas fa-arrow-up"></i></a>
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
  },
    methods: {
        scrollToElement() {
            // Use el.scrollIntoView() to instantly scroll to the element
            document.getElementById('top').scrollIntoView({
                behavior: "smooth"
            });
        }
    },
};
</script>

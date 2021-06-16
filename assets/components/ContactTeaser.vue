<template>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md d-flex justify-content-center">
                <ContactForm />
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md d-flex justify-content-center" >
                <div class=" pt-3 w-50" style="border-bottom:1px solid #CCC;">
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md d-flex justify-content-center">
                <div class="card-body text-center"><i style=";" class="fas fa-copyright"></i> code & design
                    <p class="row card-text text-center"><a href="https://www.stefan-sander.online" target="_blank">stefan-sander</a></p>

                </div>
            </div>
        </div>
    </div>
</template>
<script>
import ContactForm from './ContactForm.vue';
  export default {
  name: "ContactTeaser",
  components: {
      ContactForm
  }
  };
</script>
